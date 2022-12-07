
<?php $__env->startSection('content'); ?>
<center>
<div style="width:1000px;  border:0px solid rgb(180, 180, 180); text-align:left; padding:0px 40px 15px 40px; background-color:rgb(240, 240, 240)">
        <br>
        <h2 style="text-align:center;" >Course Title: <?php echo e($topic->topicofcourse->c_title); ?></h2>

        <h4>Topic Number: <?php echo e($topic->t_number); ?></h4>
        <h4>Topic Title: <?php echo e($topic->t_title); ?></h4>



        <?php if($topic->t_video): ?>
        <h4>Video Lecture :</h4>
        <center>
            <video width="600" height="450" controls>
                <source src="<?php echo e(URL::asset("/storage/lecturevideo/$topic->t_video")); ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </center>
        <?php endif; ?>
        <br>

        <?php if(($topic->t_material)!==Null): ?>
        <h4>Material : <?php echo e($topic->t_material); ?></h4>
        <?php endif; ?>

        <a style="text-align:center;" class="btn btn-primary" href="<?php echo e(route('instructor.edittopic',['topicid'=>encrypt($topic->id)])); ?>">Edit Topic</a> 

</div>
<br><br>
<div style="width:1000px;  border:0px solid rgb(180, 180, 180); text-align:left; padding:15px 40px 15px 40px; background-color:rgb(240, 240, 240)">
        
    <h2 style="text-align:center;"> Quiz </h2>
        

        <?php $__currentLoopData = $topic->quizintopic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Ques#<?php echo e($q->q_quesnumber); ?>  <?php echo e($q->q_ques); ?> <br>
            <input class="form-check-input" type="radio" <?php if(($q->q_ans)==($q->q_option1)): ?>checked  <?php endif; ?> disabled> a. <?php echo e(($q->q_option1)); ?> <br>
            <input class="form-check-input" type="radio" <?php if(($q->q_ans)==($q->q_option2)): ?>checked  <?php endif; ?> disabled> b. <?php echo e(($q->q_option2)); ?> <br>
            <input class="form-check-input" type="radio" <?php if(($q->q_ans)==($q->q_option3)): ?>checked  <?php endif; ?> disabled> c. <?php echo e(($q->q_option3)); ?> <br>
            <input class="form-check-input" type="radio" <?php if(($q->q_ans)==($q->q_option4)): ?>checked  <?php endif; ?> disabled> d. <?php echo e(($q->q_option4)); ?> <br>
            <br>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <a class="btn btn-primary" href="<?php echo e(route('instructor.addquiz',['topicid'=>encrypt($topic->id)])); ?>">Add question</a>

        </div>

</center>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Instructor/ViewTopic.blade.php ENDPATH**/ ?>