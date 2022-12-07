
<?php $__env->startSection('content'); ?>


<center>
<h2>Forum</h2>
<br>
    <div style="width:800px;  text-align:left; padding:20; background-color:rgb(189, 189, 189)">
    <h4>New Post</h4>
        <form class="form-floating" action="<?php echo e(route('instructor.forumsubmit')); ?>" method="post">
        <?php echo e(@csrf_field()); ?>

    
            <input type="hidden" name="u_id" value="<?php echo e(Session::get('userid')); ?>" >
            
            <input type="text" name="ins_name" style=" border:0px; color: rgb(199, 0, 0); font-size: 25px; " value="<?php echo e($instructor->ins_name); ?>"  disabled>
            <br>

            
                <select name="c_id" id="c_id">
                    <option value="none" selected disabled hidden>Select a course</option>
                    <?php $__currentLoopData = $instructor->coursesbyinstructor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($c->c_status != "Inactive"): ?>
                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->c_title); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </select>
                <br>


            <textarea name="f_question" placeholder="Write something.." rows="3" cols="50"><?php echo e(old('f_question')); ?></textarea>
            <?php $__errorArgs = ['f_question'];
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
    
        
    
            <input class="btn btn-secondary" type="submit" value="Post">
        </form>


</div>

<br><br>

<div style="width:800px;  text-align:left; padding:20; background-color:rgb(131, 131, 131)">
    <h4>Posts:</h4>
 <?php $__currentLoopData = $forum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <br><br>
        <?php if(($f->course->c_instructor_fk) == $instructor->id): ?>
        <div style="width:750px; border-radius:15px;  text-align:left; padding:20; background-color:rgb(209, 209, 209)">
            <h5 style="font-size: 9"><?php echo e(date('F j,Y g:ia',strtotime($f->f_datetime))); ?></h5>
            <h4 style="font-size: 16"><?php echo e($f->users->u_username."/".$f->users->u_name); ?></h4>
            <h5 style="font-size: 12"> <?php echo e($f->course->c_title); ?></h5>
            <p style="margin-left:10px; font-size: 15; font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:italic"><?php echo e($f->f_question); ?></p>
     

            
                               
                    <div>
                        <form class="form-floating" action="<?php echo e(route('instructor.forumcommentsubmit')); ?>" method="post">
                            <?php echo e(@csrf_field()); ?>


                                <input type="hidden" name="u_id" value="<?php echo e(Session::get('userid')); ?>" >
                               
                                <input type="hidden" name="fc_forum_fk" value="<?php echo e($f->id); ?>" >
                              
                    
                                <textarea name="fc_comment" placeholder="Leave a comment.." rows="2" cols="60"><?php echo e(old('fc_comment')); ?></textarea>
                                <?php $__errorArgs = ['fc_comment'];
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
                        
                            
                        
                                <input class="btn btn-secondary" type="submit" value="Comment">
                            </form>
                    
                    
                    </div>
                    
                
                         <?php $__currentLoopData = $forumcomments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                            <?php if(($fc->fc_forum_fk) == $f->id): ?>
                            
                            <div style="width:400px; border-radius:15px; border:0.3px solid rgb(247, 247, 247); text-align:left; padding:20; background-color:rgb(230, 230, 230)">
                                <h5 style="font-size: 9"><?php echo e(date('F j,Y g:ia',strtotime($fc->fc_datetime))); ?></h5>
                                <h4 style="font-size: 16"><?php echo e($fc->users->u_username."/".$fc->users->u_name); ?></h4>
                                <h5 style="font-size: 12"><?php echo e($fc->forum->course->c_title); ?></h5>
                                <p style="margin-left:10px; font-size: 15; font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:italic"><?php echo e($fc->fc_comment); ?></p>
                            
                            </div>
                            <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    
                
                </div>
        <?php endif; ?>
    
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</center>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/forum.blade.php ENDPATH**/ ?>