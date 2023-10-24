<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Create New Task </h1>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <form method="post" action="<?php echo e(route('task.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
        <label>Task</label>
            <input type="text" name="task" placeholder="Task"/>
        </div>
        <div>
        <label>Author</label>
            <input type="text" name="author" placeholder="Author"/>
        </div>
        <div>
            <input type="submit" value="Save Task" />
        </div>

    </form>
</body>
</html><?php /**PATH D:\xampp\htdocs\MyWebApp\resources\views/task/newtask.blade.php ENDPATH**/ ?>