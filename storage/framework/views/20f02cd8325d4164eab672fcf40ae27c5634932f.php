
<?php $__env->startSection('content'); ?>

<center>
<h3 style="color: rgb(26, 24, 24)">Create Course</h3>



<form class="form-floating " style="width:800px;  border:0px solid rgb(156, 155, 155); text-align:left; padding:40px 40px 40px 40px;  background-color:rgb(240, 240, 240)" action="<?php echo e(route('instructor.createcoursesubmit')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(@csrf_field()); ?>

    <div class="form-floating">
        <input type="text"  class="form-control" name="c_title" id="c_title" value="<?php echo e(old('c_title')); ?>" placeholder="Give your course a title">
        <label for="c_title">Course Title </label> 
        <?php $__errorArgs = ['c_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
    </div>

    <div class="form-floating">
        <textarea name="c_description" style="height: 100px;" class="form-control" id="c_description" placeholder="What is this course about?" rows="3" cols="30"><?php echo e(old('c_description')); ?></textarea>
        <label for = "c_description">Course description </label> 
        <?php $__errorArgs = ['c_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
    </div>

    <div class="form-floating">
         <input type="text" name="c_price" class="form-control" id="c_price" value="<?php echo e(old('c_price')); ?>" placeholder="Price">
         <label for = "c_price">Course Price </label>
        <?php $__errorArgs = ['c_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
    </div>

    <div class="form-floating">
        <fieldset>
        <label style="float: left" for = "c_thumbnail">Course thumbnail: </label>
         <input type="file" class="form-control"  name="c_thumbnail" id="c_thumbnail">
        
        <?php $__errorArgs = ['c_thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
        <span><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </fieldset>
        <br>
        </div>
        <input class="btn btn-secondary" type="submit" value="Create">
    </form>
</div>
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/CreateCourse.blade.php ENDPATH**/ ?>