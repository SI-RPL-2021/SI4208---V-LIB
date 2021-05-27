    
    <?php $__env->startSection('title', 'Catalog'); ?>
    
    <?php $__env->startSection('content'); ?>

    
    <div class="container" style="margin-top: 40px;">
            <?php if($books->count() > 0): ?>
                <h3 style="text-align: center;">List of Books</h3>
                <a href="/" style="margin-top: 20px;" type="submit" class="btn btn-dark">Add Books</a>
                <table class="table" style="margin-top: 10px;">
                    <thead class="bg-dark text-light">
                        <th>#</th>
                        <th style="width: 600px">Title</th>
                        <th>Year</th>
                        <th>Author</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($book->name); ?></td>
                            <td><?php echo e($book->year); ?></td>
                            <td><?php echo e($book->author); ?></td>
                            <td><?php echo e($book->description); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <center>
                    <h3 style="text-align: center;">List of Books</h3>
                    <p style="margin-top: 20px;">There is no Data ...</p>
                    <a href="/" style="margin-top: 10px;" type="submit" class="btn btn-dark">Add Books</a>
                </center>
            <?php endif; ?>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SBAdmin2VLib\resources\views/catalog.blade.php ENDPATH**/ ?>