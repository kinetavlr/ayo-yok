<!DOCTYPE html>
<html>
<head>
    <title>Home - Events</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }
        .container {
            width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        .event {
            padding: 10px;
            margin: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        button {
            padding: 8px 15px;
            background: red;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo e(auth()->user()->name); ?></h2>
    <h3>Upcoming Events</h3>

    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="event">
            <strong><?php echo e($event['title']); ?></strong><br>
            <small><?php echo e($event['date']); ?></small>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form method="POST" action="/logout">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html><?php /**PATH D:\Download\ayoyok\ayoyok-app\resources\views/home.blade.php ENDPATH**/ ?>