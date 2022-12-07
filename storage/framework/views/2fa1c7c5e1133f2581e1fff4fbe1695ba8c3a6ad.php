
<?php $__env->startSection('content'); ?>

<h3>Delete Course</h3>

<br><br>

<?php if(($course->c_thumbnail)==Null): ?>
<img  src="<?php echo e(asset('storage/noimage.png')); ?>"  style="width:100px; height:100px;"  alt="Image">
<?php else: ?>
<img  src="<?php echo e(asset('storage/coursethumbnail/'.$course->c_thumbnail)); ?>"  style="width:100px; height:100px; "  alt="Image">
<?php endif; ?>
<h4> Title: <?php echo e($course->c_title); ?></h4>
<h4> Description: <?php echo e($course->c_description); ?></h4> 
<h4> Price: <?php echo e($course->c_price); ?></h4> 
<h4> Rating: 
    <?php
    $rat=0;
    $totrat=count($course->studentsincourse);
    ?>
    <?php $__currentLoopData = $course->ratingsofcourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $rat=$rat + ($cr->r_rating)  ;
    ?>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($totrat == 0): ?>
    Not Rated
    <?php else: ?>
    <?php echo e($rat/$totrat); ?> /5  (<?php echo e($totrat); ?>)</h4>
    <?php endif; ?>
    
<h4> Status: <?php echo e($course->c_status); ?></h4> 

<h2>Are you sure you want to delete this course </h2>

<a class="btn btn-warning" href="<?php echo e(route('instructor.viewcourse',['id'=>encrypt($course->id)])); ?>">No</a>
<a class="btn btn-danger" href="<?php echo e(route('instructor.deletecoursesubmit',['id'=>encrypt($course->id)])); ?>">Yes</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/DeleteCourse.blade.php ENDPATH**/ ?>