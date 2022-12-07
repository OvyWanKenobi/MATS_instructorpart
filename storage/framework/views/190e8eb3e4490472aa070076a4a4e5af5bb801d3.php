
<?php $__env->startSection('content'); ?>
<center>

    <h3>Profile Information</h3>
    <br>
    <div style="width:700px;  border:0px solid rgb(156, 155, 155); padding:15px 40px 15px 40px; background-color:rgb(240, 240, 240)">


<?php if(($instructor->ins_dp)==Null): ?>
<img  src="<?php echo e(asset('storage/nodpimage.png')); ?>"  style="width:175px; height:175px; object-fit:cover;"  alt="Image">
<?php else: ?>
<img  src="<?php echo e(asset('storage/dp/instructors/'.$instructor->ins_dp)); ?>"  style="width:175px; height:175px; object-fit:cover; "  alt="Image">
<?php endif; ?>
<h4> Name: <?php echo e($instructor->ins_name); ?></h4>
<h4> Degree: <?php echo e($instructor->ins_degree); ?></h4> 
<h4> Bio: <?php echo e($instructor->ins_bio); ?></h4> 
<h4> Category: <?php echo e($instructor->instructorcategory->cat_name); ?></h4> 
<h4> Phone: <?php echo e($instructor->ins_phone); ?></h4> 
<h4> Email: <?php echo e($instructor->ins_email); ?></h4> 
<h4> Experience: <?php echo e($instructor->ins_exp); ?></h4> 
<h4> Joining Date: <?php echo e(date('F j, Y', strtotime($instructor->ins_joindate))); ?></h4> 

<a class="btn btn-info" href="<?php echo e(route('instructor.editprofile',['id'=>encrypt($instructor->id)])); ?>"> Edit Profile</a>
<a class="btn btn-primary" href=""> Change Password</a>
    </div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/MyProfile.blade.php ENDPATH**/ ?>