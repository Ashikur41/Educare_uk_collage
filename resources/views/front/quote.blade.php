@extends('front.layout')
@section('meta-keywords', "$seo->quot_meta_key")
@section('meta-description', "$seo->quot_meta_desc")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ __('Application Form') }}</h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="active" aria-current="page">{{ __('Application Form') }}</li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
<!-- Quot Area Start -->
<section class="quote-page pt-120 pb-120"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('front.quote_submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 style="font-size: 30px;">Personal Information</h1><br/>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Course Applied For') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="course_applied_for" aria-label="Default select example">
                                    <option value="" selected>{{ __('Course Applied For') }}</option>
                                    <option value="B2 Level General English" {{ old('course_applied_for') == '1' ? 'selected' : '' }}>{{ __('B2 Level General English') }}</option>
                                </select>
                                @if ($errors->has('course_applied_for'))
                                    <p class="text-danger">{{ $errors->first('course_applied_for') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="gender_title">{{ __('Title') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="gender_title" aria-label="Default select example">
                                    <option value="" selected>{{ __('Title') }}</option>
                                    <option value="Mr" {{ old('gender_title') == '1' ? 'selected' : '' }}>{{ __('Mr') }}</option>
                                    <option value="Ms" {{ old('gender_title') == '1' ? 'selected' : '' }}>{{ __('Ms') }}</option>
                                    <option value="Mrs" {{ old('gender_title') == '1' ? 'selected' : '' }}>{{ __('Mrs') }}</option>
                                    <option value="Miss" {{ old('gender_title') == '1' ? 'selected' : '' }}>{{ __('Miss') }}</option>
                                    <option value="Dr" {{ old('gender_title') == '1' ? 'selected' : '' }}>{{ __('Dr') }}</option>
                                </select>
                                @if ($errors->has('gender_title'))
                                    <p class="text-danger">{{ $errors->first('gender_title') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('First Name') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('First Name ') }} *" name="first_name" value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                    <p class="text-danger"> {{ $errors->first('first_name') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Last Name') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Last Name') }} *" name="last_name" value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <p class="text-danger"> {{ $errors->first('last_name') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20"> 
                                <label for="date_of_birth">{{ __('Middle Name') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Middle Name') }} *" name="middle_name" value="{{ old('middle_name') }}">
                            </div> <!-- input box -->
                            @if ($errors->has('middle_name'))
                                <p class="text-danger"> {{ $errors->first('middle_name') }} </p>
                            @endif
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Email') }} <span class="text-danger">*</span></label>
                                <input type="email"  placeholder="{{ __('Email Here') }} *" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger"> {{ $errors->first('email') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Date of Birth') }} <span class="text-danger">*</span></label>
                                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control">
                                @if ($errors->has('date_of_birth'))
                                    <p class="text-danger"> {{ $errors->first('date_of_birth') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="nationality">{{ __('Select Nationality') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="nationality" aria-label="Default select example">
                                    <option value="" selected>{{ __('Select Nationality') }}</option>
                                    <option value="Afghan" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Afghan') }}</option>
                                    <option value="Albanian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Albanian') }}</option>
                                    <option value="Algerian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Algerian') }}</option>
                                    <option value="American" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('American') }}</option>
                                    <option value="Andorran" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Andorran') }}</option>
                                    <option value="Angolan" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Angolan') }}</option>
                                    <option value="Antiguans" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Antiguans') }}</option>
                                    <option value="Argentinean" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Argentinean') }}</option>
                                    <option value="Armenian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Armenian') }}</option>
                                    <option value="Australian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Australian') }}</option>
                                    <option value="Austrian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Austrian') }}</option>
                                    <option value="Azerbaijani" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Azerbaijani') }}</option>
                                    <option value="Bahamian" {{ old('nationality') == '1' ? 'selected' : '' }}>{{ __('Bahamian') }}</option>
                                </select>
                                @if ($errors->has('nationality'))
                                    <p class="text-danger">{{ $errors->first('nationality') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Sex') }} <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio1" value="Male" 
                                    {{ old('inlineRadioOptions') == 'option1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio2" value="Female" 
                                    {{ old('inlineRadioOptions') == 'option2' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio2" value="Other" 
                                    {{ old('inlineRadioOptions') == 'option2' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Other</label>
                            </div>
                        </div>
                                              
                    </div>

                    <h1 style="font-size: 30px;">Contact Information</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Address') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Address') }} *" name="parsonel_address" value="{{ old('parsonel_address') }}">
                                @if ($errors->has('parsonel_address'))
                                    <p class="text-danger"> {{ $errors->first('parsonel_address') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('City') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('City') }} *" name="city" value="{{ old('city') }}">
                                @if ($errors->has('city'))
                                    <p class="text-danger"> {{ $errors->first('city') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20"> 
                                <label for="Country">{{ __('Country') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Country') }} *" name="country" value="{{ old('country') }}">
                            </div> <!-- input box -->
                            @if ($errors->has('country'))
                                <p class="text-danger"> {{ $errors->first('country') }} </p>
                            @endif
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Postcode') }} <span class="text-danger">*</span></label>
                                <input type="email"  placeholder="{{ __('Postcode') }} *" name="postcode" value="{{ old('postcode') }}">
                                @if ($errors->has('Postcode'))
                                    <p class="text-danger"> {{ $errors->first('postcode') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label for="Contact number">{{ __('Contact number') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Contact number') }}" name="contact_number" value="{{ old('contact_number') }}">
                                @if ($errors->has('contact_number'))
                                <p class="text-danger"> {{ $errors->first('contact_number') }} </p>
                            @endif
                            </div> <!-- input box -->
                        </div>

                    </div>
                    <h1 style="font-size: 30px;">Passport Information</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Passport Number') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Passport Number') }} *" name="passport_number" value="{{ old('passport_number') }}">
                                @if ($errors->has('Passport Number'))
                                    <p class="text-danger"> {{ $errors->first('passport_number') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passport_issue_date">{{ __('Passport Issue Date') }} <span class="text-danger">*</span></label>
                                <input type="date" id="passport_issue_date" name="passport_issue_date" value="{{ old('passport_issue_date') }}" class="form-control">
                                @if ($errors->has('passport_issue_date'))
                                    <p class="text-danger"> {{ $errors->first('passport_issue_date') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passport_expiry_date">{{ __('Passport Expiry Date') }} <span class="text-danger">*</span></label>
                                <input type="date" id="passport_expiry_date" name="passport_expiry_date" value="{{ old('passport_expiry_date') }}" class="form-control">
                                @if ($errors->has('passport_expiry_date'))
                                    <p class="text-danger"> {{ $errors->first('passport_expiry_date') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="place_of_issue">{{ __('Place Of Issue') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="place_of_issue" aria-label="Default select example">
                                    <option value="" selected>{{ __('Place Of Issue') }}</option>
                                    <option value="Afghanistan" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Afghanistan') }}</option>
                                    <option value="Albania" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Albania') }}</option>
                                    <option value="Algeria" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Algeria') }}</option>
                                    <option value="Andorra" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Andorra') }}</option>
                                    <option value="Angola" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Angola') }}</option>
                                    <option value="Antigua and Barbuda" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Antigua and Barbuda') }}</option>
                                    <option value="Argentina" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Argentina') }}</option>
                                    <option value="Armenia" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Armenia') }}</option>
                                    <option value="Australia" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Australia') }}</option>
                                    <option value="Austria" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Austria') }}</option>
                                    <option value="Azerbaijan" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Azerbaijan') }}</option>
                                    <option value="Bahamas" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Bahamas') }}</option>
                                    <option value="Bahrain" {{ old('place_of_issue') == '1' ? 'selected' : '' }}>{{ __('Bahrain') }}</option>
                                </select>
                                @if ($errors->has('place_of_issue'))
                                    <p class="text-danger">{{ $errors->first('place_of_issue') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 30px;">Education History</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="course_title">{{ __('Course Title') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Course Title') }} *" name="course_title" value="{{ old('course_title') }}">
                                @if ($errors->has('course_title'))
                                    <p class="text-danger"> {{ $errors->first('course_title') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="institute_name">{{ __('Institute Name') }} <span class="text-danger">*</span></label>
                                <input type="text" id="institute_name" name="institute_name" placeholder="Institute Name" value="{{ old('institute_name') }}" class="form-control">
                                @if ($errors->has('institute_name'))
                                    <p class="text-danger"> {{ $errors->first('institute_name') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passing_year">{{ __('Passing Year') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="passing_year" aria-label="Default select example">
                                    <option value="" selected>{{ __('Passing Year') }}</option>
                                    <option value="2001" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2001') }}</option>
                                    <option value="2000" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2000') }}</option>
                                    <option value="2002" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2002') }}</option>
                                    <option value="2003" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2003') }}</option>
                                    <option value="2004" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2004') }}</option>
                                    <option value="2005" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2005') }}</option>
                                    <option value="2006" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2006') }}</option>
                                    <option value="2007" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2007') }}</option>
                                    <option value="2008" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2008') }}</option>
                                    <option value="2009" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2009') }}</option>
                                    <option value="2010" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2010') }}</option>
                                    <option value="2011" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2011') }}</option>
                                    <option value="2012" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2012') }}</option>
                                    <option value="2013" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2013') }}</option>
                                    <option value="2014" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2014') }}</option>
                                    <option value="2015" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2015') }}</option>
                                    <option value="2016" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2016') }}</option>
                                    <option value="2017" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2017') }}</option>
                                    <option value="2018" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2018') }}</option>
                                    <option value="2019" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2019') }}</option>
                                    <option value="2020" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2020') }}</option>
                                    <option value="2021" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2021') }}</option>
                                    <option value="2022" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2022') }}</option>
                                    <option value="2023" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2023') }}</option>
                                    <option value="2024" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2024') }}</option>
                                    <option value="2025" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2025') }}</option>
                                    <option value="2026" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2026') }}</option>
                                    <option value="2027" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2027') }}</option>
                                    <option value="2028" {{ old('passing_year') == '1' ? 'selected' : '' }}>{{ __('2028') }}</option>
                                </select>
                                @if ($errors->has('passing_year'))
                                    <p class="text-danger">{{ $errors->first('passing_year') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Grade') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="grade" aria-label="Default select example">
                                    <option value="" selected>{{ __('Select') }}</option>
                                    <option value="A+" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('A+') }}</option>
                                    <option value="A" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('A') }}</option>
                                    <option value="B+" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('B+') }}</option>
                                    <option value="B" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('B') }}</option>
                                    <option value="C+" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('C+') }}</option>
                                    <option value="C" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('C') }}</option>
                                    <option value="D+" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('D+') }}</option>
                                    <option value="D" {{ old('grade') == '1' ? 'selected' : '' }}>{{ __('D') }}</option>
                                </select>
                                @if ($errors->has('grade'))
                                    <p class="text-danger">{{ $errors->first('grade') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 30px;">Emergency Contact</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Name') }} <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="{{ __('Name') }} *" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
                                @if ($errors->has('emergency_contact_name'))
                                    <p class="text-danger"> {{ $errors->first('emergency_contact_name') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth">{{ __('Relationship of above to you') }} <span class="text-danger">*</span></label>
                                <select class="form-select" name="relationship_name" aria-label="Default select example">
                                    <option value="" selected>{{ __('Relationship of above to you') }}</option>
                                    <option value="Brother" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Brother') }}</option>
                                    <option value="Child" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Child') }}</option>
                                    <option value="Daughter" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Daughter') }}</option>
                                    <option value="Father" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Father') }}</option>
                                    <option value="Friend" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Friend') }}</option>
                                    <option value="Mother" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Mother') }}</option>
                                    <option value="Parent" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Parent') }}</option>
                                    <option value="Partner" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Partner') }}</option>
                                    <option value="Son" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Son') }}</option>
                                    <option value="Other" {{ old('relationship_name') == '1' ? 'selected' : '' }}>{{ __('Other') }}</option>
                                </select>
                                @if ($errors->has('relationship_name'))
                                    <p class="text-danger">{{ $errors->first('relationship_name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="emergency_address">{{ __('Address') }} <span class="text-danger">*</span></label>
                                <input type="date" id="emergency_address" name="emergency_address" value="{{ old('emergency_address') }}" class="form-control">
                                @if ($errors->has('emergency_address'))
                                    <p class="text-danger"> {{ $errors->first('emergency_address') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="postcode">{{ __('Postcode') }} <span class="text-danger">*</span></label>
                                <input type="date" id="postcode" name="emergency_postcode" value="{{ old('emergency_postcode') }}" class="form-control">
                                @if ($errors->has('emergency_postcode'))
                                    <p class="text-danger"> {{ $errors->first('emergency_postcode') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="emergency_number">{{ __('Contact Number') }} <span class="text-danger">*</span></label>
                                <input type="date" id="emergency_number" name="emergency_number" value="{{ old('emergency_number') }}" class="form-control">
                                @if ($errors->has('emergency_number'))
                                    <p class="text-danger"> {{ $errors->first('emergency_number') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-box mb-20">
                            <button class="main-btn wow fadeInUp mt-20" data-wow-duration="1s" data-wow-delay=".3s" type="submit">{{ __('Submit') }}</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Quot Area End -->

@endsection
