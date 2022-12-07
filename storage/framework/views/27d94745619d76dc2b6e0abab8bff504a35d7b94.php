
<?php $__env->startSection('content'); ?>
  
      <h3>Login</h3>
         
    <form action="<?php echo e(route('Loginsubmit')); ?>" method="post">
        <?php echo e(@csrf_field()); ?>

        
            username: <input type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username">
            <?php $__errorArgs = ['userid'];
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
            Password: <input type="password" name="userpass"  placeholder="Password"><br>
            <?php $__errorArgs = ['userpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <input type="submit" value="Login" class ="btn btn-dark"><br>
        
        </form>
    
  
     
      
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.publiclayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Public/Login.blade.php ENDPATH**/ ?>