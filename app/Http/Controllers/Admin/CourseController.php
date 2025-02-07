<?php

namespace App\Http\Controllers\Admin;


use App\Helpers\Helper;
use App\Models\Course;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\Coursetitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function course(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;
     
        $courses = Course::where('language_id', $lang)->orderBy('id', 'DESC')->get();
        
        $saectiontitle = Coursetitle::where('language_id', $lang)->first();
        return view('admin.course.index', compact('courses', 'saectiontitle'));
    }

    // Add Course
    public function add(){
        return view('admin.course.add');
    }

    // Store Course
    public function store(Request $request){

      
       
        $slug = Helper::make_slug($request->title);
        $courses = Course::select('slug')->get();
      
        $request->validate([
            'title' => [
              'required',
              'unique:courses,title',
              'max:150',
              function($attribute, $value, $fail) use ($slug, $courses) {
                  foreach($courses as $course) {
                    if ($course->slug == $slug) {
                      return $fail('Title already taken!');
                    }
                  }
                }
            ],
            'image' => 'required|mimes:jpeg,jpg,png',
            'content' => 'required',
            'icon' => 'required',
            'language_id' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
        ]);

        $course = new Course();


        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/course/', $image);

            $course->image = $image;
        }
        

        $course->title = $request->title;
        $course->icon = $request->icon;
        $course->serial_number = $request->serial_number;
        $course->slug = $slug;
        $course->content = $request->content;
        $course->language_id = $request->language_id;
        $course->status = $request->status;
        $course->save();

        $notification = array(
            'messege' => 'Course Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Course Delete
    public function delete($id){

        $course = Course::find($id);

        $portfolio = Portfolio::where('course_id', $id)->get();
        if($portfolio->count() >= 1){
            $notification = array(
                'messege' => 'First delete portfolio under this course !',
                'alert' => 'success'
            );
            return redirect()->back()->with('notification', $notification);
        }
        @unlink('assets/front/img/course/'. $course->image);
        $course->delete();

                
        $notification = array(
            'messege' => 'Course  Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Course Edit
    public function edit($id){

        $course = Course::find($id);
        return view('admin.course.edit', compact('course'));

    }

    // Update Course
    public function update(Request $request, $id){

        $slug = Helper::make_slug($request->title);
        $courses = Course::select('slug')->get();
        $course = Course::findOrFail($id);

         $request->validate([
            'title' => [
              'required',
              'max:150',
              function($attribute, $value, $fail) use ($slug, $courses, $course) {
                  foreach($courses as $serv) {
                    if ($course->slug != $slug) {
                      if ($serv->slug == $slug) {
                        return $fail('Title already taken!');
                      }
                    }
                  }
                },
                'unique:courses,title,'.$id
            ],
            'image' => 'mimes:jpeg,jpg,png',
            'content' => 'required',
            'icon' => 'required',
            'language_id' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
        ]);



        if($request->hasFile('image')){
            @unlink('assets/front/img/course/'. $course->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/course/', $image);

            $course->image = $image;
        }

        $course->title = $request->title;
        $course->icon = $request->icon;
        $course->serial_number = $request->serial_number;
        $course->slug = $slug;
        $course->content = $request->content;
        $course->language_id = $request->language_id;
        $course->status = $request->status;
        $course->save();

        $notification = array(
            'messege' => 'Course Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.course').'?language='.$this->lang->code)->with('notification', $notification);
    }

}
