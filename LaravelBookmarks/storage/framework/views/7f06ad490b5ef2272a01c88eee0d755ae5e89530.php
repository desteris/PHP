<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" name="button" data-target="#addModal" type="button">Add BookMark</button>

                    <h3>My Bookmarks!</h3>
                    <ul class="list-group">
                        <?php $__currentLoopData = $bookmarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookmark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item clearfix">
                                <a href="<?php echo e($bookmark->link); ?>" target="_blank" style="position:absolute;top:30%;">
                                    <?php echo e($bookmark->name); ?>

                                </a>
                                <span class="float-right button-group">
                                    <button class="btn btn-danger delete-bookmark" data-id="<?php echo e($bookmark->id); ?>"><span><i class="glyphicon glyphicon-remove"></i></span> Delete</button>
                                </span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Bookmark</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('bookmarks.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="">Bookmark name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="url">Bookmark url</label>
                            <input type="text" class="form-control" name="url">
                        </div>
                        <div class="form-group">
                            <label for="description">Bookmark description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>