<?php $__env->startSection('content'); ?>

<style>
    .mw-60{
        width: 60%;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Quote Details')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Quote Details')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('Quote Details:')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary btn-sm">
                          <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>
                                    <?php echo e(__('First Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->country); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Last Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->budget); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Phone')); ?>

                                </th>
                                <td class="mw-60">
                                    <a href="tel:<?php echo e($quote->contact_number); ?>" class="btn btn-primary btn-sm">  <?php echo e(__("Call to : ")); ?> <?php echo e($quote->contact_number); ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Course Applied For')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Title')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->skypenumber); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Middle Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->phone); ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <?php echo e(__('Status')); ?>

                                </th>
                                <td class="mw-60">
                                    <span class="
                                    btn
                                    <?php if($quote->status == 0): ?>
                                    bg-warning
                                    <?php elseif($quote->status == 1): ?>
                                    bg-primary
                                    <?php elseif($quote->status == 2): ?>
                                    bg-success
                                    <?php elseif($quote->status == 3): ?>
                                    bg-danger
                                    <?php endif; ?>

                                    btn-sm
                                    "> 
                                        <?php if($quote->status == 0): ?>
                                        Pending
                                        <?php elseif($quote->status == 1): ?>
                                        Processing
                                        <?php elseif($quote->status == 2): ?>
                                        Completed
                                        <?php elseif($quote->status == 3): ?>
                                        Rejected
                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Date of Birth')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->file); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Nationality')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->subject); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Send Mail')); ?>

                                </th>
                                <td class="mw-60">
                                    <a href="mailto:<?php echo e($quote->email); ?>" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> <?php echo e(__('Send Mail')); ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Sex')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->description); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Address')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->parsonel_address); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('City')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->city); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Country')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->contact_country); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Postcode')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->postcode); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Contact number')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->contact_number); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Passport Number')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->passport_number); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Passport Issue Date')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->passport_issue_date); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Passport Expiry Date')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->passport_expiry_date); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Place Of Issue')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->place_of_issue); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Course Title')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->course_title); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Institute Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->institute_name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Passing Year')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->passing_year); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Grade')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->grade); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->emergency_contact_name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Relationship of above to you')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->relationship_name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Address')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->emergency_address); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Postcode')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->emergency_postcode); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Contact Number')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->emergency_number); ?>

                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Client Project\Educaretc UK\core\core\resources\views/admin/quote/details.blade.php ENDPATH**/ ?>