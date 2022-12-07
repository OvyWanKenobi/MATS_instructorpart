
<?php $__env->startSection('content'); ?>

<center>
<h3>Edit Topic</h3>

<form class="form-floating " style="width:800px;  border:0px solid rgb(156, 155, 155); text-align:left; padding:40px 40px 40px 40px; background-color:rgb(240, 240, 240)" action="<?php echo e(route('instructor.edittopicsubmit')); ?>" method="post" enctype="multipart/form-data">
     <?php echo e(@csrf_field()); ?>

     <div class="form-floating">
        
        <input  class="form-control" type="text" name="t_number" value="<?php echo e($topic->t_number); ?>" readonly >
        <label for = "t_number">Topic Number: </label> 
        <br>
    </div>
        <div class="form-floating">
        
         <input class="form-control"  type="text" name="t_title" value="<?php echo e((old('t_title')!==null) ? old('t_title') : $topic->t_title); ?>" placeholder="Enter a title">
         <label for = "t_title">Topic Title: </label>
         <?php $__errorArgs = ['t_title'];
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
            <label style="float: left" for = "t_video">Lecture video: </label>
         <input  class="form-control" type="file" name="t_video" value="<?php echo e((old('t_video')!==null) ? old('t_video') : $topic->t_video); ?>">
      
         <?php $__errorArgs = ['t_video'];
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
        <div class="form-floating">
       
        <textarea class="form-control"  style="height: 300px;"  name="t_material" placeholder="Provide Study Material" rows="10" cols="50"><?php echo e((old('t_material')!==null) ? old('t_material') : $topic->t_material); ?></textarea>
        <label  for = "t_material"> Lecture material: </label> 
        <?php $__errorArgs = ['t_material'];
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
    

        <input class="btn btn-secondary" type="submit" value="Update">
    </form>

</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/EditTopic.blade.php ENDPATH**/ ?>