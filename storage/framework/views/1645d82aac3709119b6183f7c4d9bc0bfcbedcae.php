
    
    <?php $__env->startSection('title', 'Catalog'); ?>
    
    <?php $__env->startSection('content'); ?>

    
    <div class="container" style="margin-top: 40px;">
            <?php if($books->count() > 0): ?>
                <h3 style="text-align: center;">List of Books</h3>
                <a href="/addBooks" style="margin-top: 20px;" type="submit" class="btn btn-dark">Add Books</a>
                <div class="card-deck">
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="vlib.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo e($book->title); ?></h4>
                                <p class="card-text"><?php echo e($book->year); ?></p>
                                <p class="card-text"><?php echo e($book->author); ?></p>
                                <p class="card-text"><?php echo e($book->description); ?></p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <center>
                    <h3 style="text-align: center;">List of Books</h3>
                    <p style="margin-top: 20px;">There is no Data ...</p>
                    <a href="/addBooks" style="margin-top: 10px;" type="submit" class="btn btn-dark">Add Books</a>
                </center>
            <?php endif; ?>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RPL\resources\views/catalog.blade.php ENDPATH**/ ?>