<?php $__env->startSection('meta-keywords', "$seo->quot_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->quot_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Application Form')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Application Form')); ?></li>
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
                <form action="<?php echo e(route('front.quote_submit')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <h1 style="font-size: 30px;">Personal Information</h1><br/>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Course Applied For')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="course_applied_for" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Course Applied For')); ?></option>
                                    <option value="B2 Level General English" <?php echo e(old('course_applied_for') == '1' ? 'selected' : ''); ?>><?php echo e(__('B2 Level General English')); ?></option>
                                </select>
                                <?php if($errors->has('course_applied_for')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('course_applied_for')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="gender_title"><?php echo e(__('Title')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="gender_title" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Title')); ?></option>
                                    <option value="Mr" <?php echo e(old('gender_title') == '1' ? 'selected' : ''); ?>><?php echo e(__('Mr')); ?></option>
                                    <option value="Ms" <?php echo e(old('gender_title') == '1' ? 'selected' : ''); ?>><?php echo e(__('Ms')); ?></option>
                                    <option value="Mrs" <?php echo e(old('gender_title') == '1' ? 'selected' : ''); ?>><?php echo e(__('Mrs')); ?></option>
                                    <option value="Miss" <?php echo e(old('gender_title') == '1' ? 'selected' : ''); ?>><?php echo e(__('Miss')); ?></option>
                                    <option value="Dr" <?php echo e(old('gender_title') == '1' ? 'selected' : ''); ?>><?php echo e(__('Dr')); ?></option>
                                </select>
                                <?php if($errors->has('gender_title')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('gender_title')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('First Name')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('First Name ')); ?> *" name="first_name" value="<?php echo e(old('first_name')); ?>">
                                <?php if($errors->has('first_name')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('first_name')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Last Name')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Last Name')); ?> *" name="last_name" value="<?php echo e(old('last_name')); ?>">
                                <?php if($errors->has('last_name')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('last_name')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20"> 
                                <label for="date_of_birth"><?php echo e(__('Middle Name')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Middle Name')); ?> *" name="middle_name" value="<?php echo e(old('middle_name')); ?>">
                            </div> <!-- input box -->
                            <?php if($errors->has('middle_name')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('middle_name')); ?> </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Email')); ?> <span class="text-danger">*</span></label>
                                <input type="email"  placeholder="<?php echo e(__('Email Here')); ?> *" name="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Date of Birth')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>" class="form-control">
                                <?php if($errors->has('date_of_birth')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('date_of_birth')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="nationality"><?php echo e(__('Select Nationality')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="nationality" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Select Nationality')); ?></option>
                                    <option value="Afghan" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Afghan')); ?></option>
                                    <option value="Albanian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Albanian')); ?></option>
                                    <option value="Algerian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Algerian')); ?></option>
                                    <option value="American" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('American')); ?></option>
                                    <option value="Andorran" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Andorran')); ?></option>
                                    <option value="Angolan" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Angolan')); ?></option>
                                    <option value="Antiguans" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Antiguans')); ?></option>
                                    <option value="Argentinean" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Argentinean')); ?></option>
                                    <option value="Armenian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Armenian')); ?></option>
                                    <option value="Australian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Australian')); ?></option>
                                    <option value="Austrian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Austrian')); ?></option>
                                    <option value="Azerbaijani" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Azerbaijani')); ?></option>
                                    <option value="Bahamian" <?php echo e(old('nationality') == '1' ? 'selected' : ''); ?>><?php echo e(__('Bahamian')); ?></option>
                                </select>
                                <?php if($errors->has('nationality')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('nationality')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Sex')); ?> <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio1" value="Male" 
                                    <?php echo e(old('inlineRadioOptions') == 'option1' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio2" value="Female" 
                                    <?php echo e(old('inlineRadioOptions') == 'option2' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Sex" id="inlineRadio2" value="Other" 
                                    <?php echo e(old('inlineRadioOptions') == 'option2' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="inlineRadio2">Other</label>
                            </div>
                        </div>
                                              
                    </div>

                    <h1 style="font-size: 30px;">Contact Information</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Address')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Address')); ?> *" name="parsonel_address" value="<?php echo e(old('parsonel_address')); ?>">
                                <?php if($errors->has('parsonel_address')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('parsonel_address')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('City')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('City')); ?> *" name="city" value="<?php echo e(old('city')); ?>">
                                <?php if($errors->has('city')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('city')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20"> 
                                <label for="Country"><?php echo e(__('Country')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Country')); ?> *" name="country" value="<?php echo e(old('country')); ?>">
                            </div> <!-- input box -->
                            <?php if($errors->has('country')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('country')); ?> </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Postcode')); ?> <span class="text-danger">*</span></label>
                                <input type="email"  placeholder="<?php echo e(__('Postcode')); ?> *" name="postcode" value="<?php echo e(old('postcode')); ?>">
                                <?php if($errors->has('Postcode')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('postcode')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label for="Contact number"><?php echo e(__('Contact number')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Contact number')); ?>" name="contact_number" value="<?php echo e(old('contact_number')); ?>">
                                <?php if($errors->has('contact_number')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('contact_number')); ?> </p>
                            <?php endif; ?>
                            </div> <!-- input box -->
                        </div>

                    </div>
                    <h1 style="font-size: 30px;">Passport Information</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Passport Number')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Passport Number')); ?> *" name="passport_number" value="<?php echo e(old('passport_number')); ?>">
                                <?php if($errors->has('Passport Number')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('passport_number')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passport_issue_date"><?php echo e(__('Passport Issue Date')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="passport_issue_date" name="passport_issue_date" value="<?php echo e(old('passport_issue_date')); ?>" class="form-control">
                                <?php if($errors->has('passport_issue_date')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('passport_issue_date')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passport_expiry_date"><?php echo e(__('Passport Expiry Date')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="passport_expiry_date" name="passport_expiry_date" value="<?php echo e(old('passport_expiry_date')); ?>" class="form-control">
                                <?php if($errors->has('passport_expiry_date')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('passport_expiry_date')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="place_of_issue"><?php echo e(__('Place Of Issue')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="place_of_issue" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Place Of Issue')); ?></option>
                                    <option value="Afghanistan" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Afghanistan')); ?></option>
                                    <option value="Albania" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Albania')); ?></option>
                                    <option value="Algeria" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Algeria')); ?></option>
                                    <option value="Andorra" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Andorra')); ?></option>
                                    <option value="Angola" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Angola')); ?></option>
                                    <option value="Antigua and Barbuda" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Antigua and Barbuda')); ?></option>
                                    <option value="Argentina" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Argentina')); ?></option>
                                    <option value="Armenia" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Armenia')); ?></option>
                                    <option value="Australia" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Australia')); ?></option>
                                    <option value="Austria" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Austria')); ?></option>
                                    <option value="Azerbaijan" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Azerbaijan')); ?></option>
                                    <option value="Bahamas" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Bahamas')); ?></option>
                                    <option value="Bahrain" <?php echo e(old('place_of_issue') == '1' ? 'selected' : ''); ?>><?php echo e(__('Bahrain')); ?></option>
                                </select>
                                <?php if($errors->has('place_of_issue')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('place_of_issue')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 30px;">Education History</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="course_title"><?php echo e(__('Course Title')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Course Title')); ?> *" name="course_title" value="<?php echo e(old('course_title')); ?>">
                                <?php if($errors->has('course_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('course_title')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="institute_name"><?php echo e(__('Institute Name')); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="institute_name" name="institute_name" placeholder="Institute Name" value="<?php echo e(old('institute_name')); ?>" class="form-control">
                                <?php if($errors->has('institute_name')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('institute_name')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="passing_year"><?php echo e(__('Passing Year')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="passing_year" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Passing Year')); ?></option>
                                    <option value="2001" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2001')); ?></option>
                                    <option value="2000" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2000')); ?></option>
                                    <option value="2002" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2002')); ?></option>
                                    <option value="2003" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2003')); ?></option>
                                    <option value="2004" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2004')); ?></option>
                                    <option value="2005" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2005')); ?></option>
                                    <option value="2006" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2006')); ?></option>
                                    <option value="2007" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2007')); ?></option>
                                    <option value="2008" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2008')); ?></option>
                                    <option value="2009" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2009')); ?></option>
                                    <option value="2010" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2010')); ?></option>
                                    <option value="2011" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2011')); ?></option>
                                    <option value="2012" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2012')); ?></option>
                                    <option value="2013" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2013')); ?></option>
                                    <option value="2014" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2014')); ?></option>
                                    <option value="2015" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2015')); ?></option>
                                    <option value="2016" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2016')); ?></option>
                                    <option value="2017" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2017')); ?></option>
                                    <option value="2018" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2018')); ?></option>
                                    <option value="2019" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2019')); ?></option>
                                    <option value="2020" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2020')); ?></option>
                                    <option value="2021" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2021')); ?></option>
                                    <option value="2022" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2022')); ?></option>
                                    <option value="2023" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2023')); ?></option>
                                    <option value="2024" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2024')); ?></option>
                                    <option value="2025" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2025')); ?></option>
                                    <option value="2026" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2026')); ?></option>
                                    <option value="2027" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2027')); ?></option>
                                    <option value="2028" <?php echo e(old('passing_year') == '1' ? 'selected' : ''); ?>><?php echo e(__('2028')); ?></option>
                                </select>
                                <?php if($errors->has('passing_year')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('passing_year')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Grade')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="grade" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Select')); ?></option>
                                    <option value="A+" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('A+')); ?></option>
                                    <option value="A" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('A')); ?></option>
                                    <option value="B+" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('B+')); ?></option>
                                    <option value="B" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('B')); ?></option>
                                    <option value="C+" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('C+')); ?></option>
                                    <option value="C" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('C')); ?></option>
                                    <option value="D+" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('D+')); ?></option>
                                    <option value="D" <?php echo e(old('grade') == '1' ? 'selected' : ''); ?>><?php echo e(__('D')); ?></option>
                                </select>
                                <?php if($errors->has('grade')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('grade')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 30px;">Emergency Contact</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Name')); ?> <span class="text-danger">*</span></label>
                                <input type="text"  placeholder="<?php echo e(__('Name')); ?> *" name="emergency_contact_name" value="<?php echo e(old('emergency_contact_name')); ?>">
                                <?php if($errors->has('emergency_contact_name')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('emergency_contact_name')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="date_of_birth"><?php echo e(__('Relationship of above to you')); ?> <span class="text-danger">*</span></label>
                                <select class="form-select" name="relationship_name" aria-label="Default select example">
                                    <option value="" selected><?php echo e(__('Relationship of above to you')); ?></option>
                                    <option value="Brother" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Brother')); ?></option>
                                    <option value="Child" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Child')); ?></option>
                                    <option value="Daughter" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Daughter')); ?></option>
                                    <option value="Father" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Father')); ?></option>
                                    <option value="Friend" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Friend')); ?></option>
                                    <option value="Mother" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Mother')); ?></option>
                                    <option value="Parent" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Parent')); ?></option>
                                    <option value="Partner" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Partner')); ?></option>
                                    <option value="Son" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Son')); ?></option>
                                    <option value="Other" <?php echo e(old('relationship_name') == '1' ? 'selected' : ''); ?>><?php echo e(__('Other')); ?></option>
                                </select>
                                <?php if($errors->has('relationship_name')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('relationship_name')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="emergency_address"><?php echo e(__('Address')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="emergency_address" name="emergency_address" value="<?php echo e(old('emergency_address')); ?>" class="form-control">
                                <?php if($errors->has('emergency_address')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('emergency_address')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="postcode"><?php echo e(__('Postcode')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="postcode" name="emergency_postcode" value="<?php echo e(old('emergency_postcode')); ?>" class="form-control">
                                <?php if($errors->has('emergency_postcode')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('emergency_postcode')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-box mb-20">
                                <label for="emergency_number"><?php echo e(__('Contact Number')); ?> <span class="text-danger">*</span></label>
                                <input type="date" id="emergency_number" name="emergency_number" value="<?php echo e(old('emergency_number')); ?>" class="form-control">
                                <?php if($errors->has('emergency_number')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('emergency_number')); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-box mb-20">
                            <button class="main-btn wow fadeInUp mt-20" data-wow-duration="1s" data-wow-delay=".3s" type="submit"><?php echo e(__('Submit')); ?></button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Quot Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Client Project\Educaretc UK\core\core\resources\views/front/quote.blade.php ENDPATH**/ ?>