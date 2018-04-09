<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Twitter</title>
</head>
<body>
    <nav class="navbar bg-primary navbar-dark navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">Brand</a>
            </div>
         </div>
    </nav>

    <div class="container mt-5">
        <form action="<?php echo e(route('post.tweet')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php if(count($errors) > 0): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert-alert-danger">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <fieldset>
            <div class="form-group">
            <label for="exampleInputEmail1">Tweet Text</label>
            <input type="text" class="form-control" placeholder="Enter Tweet" name="tweet">
            </div>
            <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create Tweet</button>
        </fieldset>
        </form>
        <?php if(!empty($data)): ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card my-2">
                    <div class="card-header">
                        <h3>
                          <?php echo e($tweet['text']); ?> 
                          <i class="glyphicon glyphicon-heart"></i> <?php echo e($tweet['favorite_count']); ?>

                          <i class="glyphicon glyphicon-repeat"></i> <?php echo e($tweet['retweet_count']); ?>

                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if(!empty($tweet['extended_entities']['media'])): ?>
                            <?php $__currentLoopData = $tweet['extended_entities']['media']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($i['media_url_https']); ?> " style="width:100px;">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>No Tweets Found!</p>
        <?php endif; ?>
    </div>

</body>
</html>