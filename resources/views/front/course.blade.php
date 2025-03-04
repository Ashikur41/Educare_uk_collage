@extends('front.layout')
@section('meta-keywords', "$seo->course_meta_key")
@section('meta-description', "$seo->course_meta_desc")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ __('Course') }}</h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="active" aria-current="page">{{ __('Course') }}</li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
<!-- Course Area Start -->
<section class="service-section-two section-gap-top pb-90">
	<div class="container">
		<div class="row service-items justify-content-center">
			@foreach ($courses as $item)
			<div class="col-lg-4 col-md-6 col-sm-8">
				<a href="{{ route('front.course.details', $item->slug) }}" class="service-item-eight mb-30 d-block">
					<div class="service-img" style="background-image: url({{ asset('assets/front/img/course/'.$item->image) }})"></div>
					<div class="services-overlay">
						<div class="icon"><i class="{{ $item->icon }}"></i></div>
						<h4 class="title">{{ $item->title }}</h4>
						<p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 100) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 100) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
					</div>
				</a> <!-- single courses -->
			</div>
			@endforeach
		</div> <!-- row -->
	</div> <!-- container -->
</section>
<!-- Course Area End -->

@endsection
