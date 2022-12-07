

<nav class="navbar navbar-expand-sm bg-black bg-opacity-75 navbar-dark fixed-top" style=" height: 70px;">
    <div class="container-fluid">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('instructor.home')); ?>">Home</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('instructor.createcourse')); ?>">Create Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('instructor.forum')); ?>">Forum</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('instructor.financial')); ?>">Financial</a></li>
        
        </ul>
    
    <div class="nav navbar-right ">
  
    
        <ul class="navbar-nav ">
          <li class="nav-item" >
            <a class="nav-link" href="<?php echo e(route('instructor.profile')); ?>">
                <?php if((Session::get('userdp'))==Null): ?>
                <img  src="<?php echo e(asset('storage/nodpimage.png')); ?>"  style=" object-fit:cover; width:50px; height:50px; border-radius:50%;"  alt="Image">
                 <?php else: ?>
                 <img  src="<?php echo e(asset('storage/dp/instructors/'.Session::get('userdp'))); ?>"  style="width:50px; height:50px; border-radius:50%; "  alt="Image">
                 <?php endif; ?>
                 <?php echo e(Session::get('nameuser')); ?>

                 </a> 
          </li>


          <li class="nav-item">
            <a class=" btn btn-danger" style="margin-top:10px;" href="<?php echo e(route('Logout')); ?>">Logout</a>
          </li>
          
        </ul>
    </div>
</div>

</nav>


<br><br>
<br><br>

<?php /**PATH C:\xampp\htdocs\MATS\resources\views/includes/instructorheader.blade.php ENDPATH**/ ?>