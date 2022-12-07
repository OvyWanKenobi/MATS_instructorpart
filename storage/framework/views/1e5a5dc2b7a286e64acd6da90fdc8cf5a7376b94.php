<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/style.css">
    
    </head>
    <body>
        
         <?php echo $__env->make('includes.publicheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->yieldContent('content'); ?>
     

        <div>Copy Right @copy  MATS 2022</div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\MATS\resources\views/Layouts/publiclayout.blade.php ENDPATH**/ ?>