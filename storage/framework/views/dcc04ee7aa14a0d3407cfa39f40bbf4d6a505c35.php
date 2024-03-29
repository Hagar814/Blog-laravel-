

<?php $__env->startSection('body'); ?>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo e(__('words.dashboard')); ?></li>
        <li class="breadcrumb-item"><a href="#"><?php echo e(__('words.dashboard')); ?></a>
        </li>
        <li class="breadcrumb-item active">داشبرد</li>

       
    </ol>


    

    <div class="container-fluid">

        <div class="animated fadeIn">
            <form action="<?php echo e(Route('dashboard.settings.update' , $setting)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <strong><?php echo e(__('words.settings')); ?></strong>
                        </div>
                        <div class="card-block">

                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.logo')); ?></label>
                                <img src="<?php echo e(asset($setting->logo)); ?>" alt="" style="height: 50px">
                            </div>  
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.favicon')); ?></label>
                                <img src="<?php echo e(asset($setting->favicon)); ?>" alt="" style="height: 50px">
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.logo')); ?></label>
                                <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.favicon')); ?></label>
                                <input type="file" name="favicon" class="form-control"
                                    placeholder="<?php echo e(__('words.favicon')); ?>" >
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.facebook')); ?></label>
                                <input  type="text" name="facebook" class="form-control"
                                    placeholder="<?php echo e(__('words.facebook')); ?>" value="<?php echo e($setting->facebook); ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.instagram')); ?></label>
                                <input  type="text" name="instagram" class="form-control"
                                    placeholder="<?php echo e(__('words.instagram')); ?>" value="<?php echo e($setting->instagram); ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.phone')); ?></label>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="<?php echo e(__('words.phone')); ?>" value="<?php echo e($setting->phone); ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo e(__('words.email')); ?></label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="<?php echo e(__('words.email')); ?>" value="<?php echo e($setting->email); ?>">
                            </div>

                        </div>




                        <div class="card">
                            <div class="card-header">
                                <strong><?php echo e(__('words.translations')); ?></strong>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <?php $__currentLoopData = config('app.languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($loop->index == 0): ?> active <?php endif; ?>"
                                                id="home-tab" data-toggle="tab" href="#<?php echo e($key); ?>" role="tab"
                                                aria-controls="home" aria-selected="true"><?php echo e($lang); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <?php $__currentLoopData = config('app.languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane mt-3 fade <?php if($loop->index == 0): ?> show active in <?php endif; ?>"
                                            id="<?php echo e($key); ?>" role="tabpanel" aria-labelledby="home-tab">
                                            <br>
                                            <div class="form-group mt-3 col-md-12">
                                                <label><?php echo e(__('words.email')); ?> - <?php echo e($lang); ?></label>
                                                <input type="text" name="<?php echo e($key); ?>[title]" class="form-control"
                                                    placeholder="<?php echo e(__('words.email')); ?>"   value="<?php echo e($setting->translate($key)->title); ?>">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label><?php echo e(__('words.content')); ?></label>
                                                <textarea name="<?php echo e($key); ?>[content]" class="form-control" cols="30" rows="10"><?php echo e($setting->translate($key)->content); ?></textarea>
                                            </div>


                                            <div class="form-group col-md-12">
                                                <label><?php echo e(__('words.address')); ?></label>
                                                <input type="text"name="<?php echo e($key); ?>[address]" class="form-control"   value="<?php echo e($setting->translate($key)->address); ?>">
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>



                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    Submit</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                                    Reset</button>
                            </div>

                        </div>

                    </div>
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\youtubeAPP\resources\views/dashboard/settings.blade.php ENDPATH**/ ?>