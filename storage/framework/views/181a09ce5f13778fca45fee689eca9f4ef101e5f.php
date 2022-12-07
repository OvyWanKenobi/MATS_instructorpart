
<?php $__env->startSection('content'); ?>
<center>
<h2>Financial</h2>

<?php
    $totearn = 0; 
?>

<?php $__currentLoopData = $instructor->coursesbyinstructor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $totearn = $totearn + (($c->c_price)*(count($c->studentsincourse)))
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<h4>Current Earning : <?php echo e($totearn); ?> BDT</h4>
<div style="width: 900px; margin-top:20px  " >
<?php if(count($instructor->coursesbyinstructor)>0): ?>
<table class="table  table-hover" >
    <tr>
        <th>Image </th>
  
        <th>Course Title</th>
        <th>Course Price</th>
        <th>Enrollments count</th>
        <th>Earning</th>
  
    </tr>
  
    <?php $__currentLoopData = $instructor->coursesbyinstructor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(($c->c_status=="Active") && (count($c->studentsincourse)>0)): ?>
        <tr class="clickable  " style="cursor:pointer; "  onclick="window.location='<?php echo e(route('instructor.viewcourse',['id'=>encrypt($c->id)])); ?>'">
  
          <td >
              <?php if(($c->c_thumbnail)==Null): ?>
              <img  src="<?php echo e(asset('storage/noimage.png')); ?>"  style="width:100px; height:100px;"  alt="Image">
              <?php else: ?>
              <img  src="<?php echo e(asset('storage/coursethumbnail/'.$c->c_thumbnail)); ?>"  style="width:100px; height:100px; "  alt="Image">
              <?php endif; ?>
          </td>
  
            <td> <?php echo e($c->c_title); ?></td>
            <td> <?php echo e($c->c_price); ?></td>
            <td>
              <?php echo e(count($c->studentsincourse)); ?>

           </td>
           <td> 
               <?php echo e(($c->c_price)*(count($c->studentsincourse))); ?>

           </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  
  <?php else: ?>
  <h5><span class="label label-warning" >No data found</span></h5>
  <?php endif; ?>
</div>
  <center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/Financial.blade.php ENDPATH**/ ?>