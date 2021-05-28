

<?php $__env->startSection('content'); ?>

    <?php if(auth()->guard()->guest()): ?>
    <?php if(Route::has('login')): ?>
        
        <center>
            <div class="container">
                <p>Please login first</p>
                <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </div>
        </center>
        
    <?php endif; ?>
    
    <?php else: ?>
        <?php if(session('status')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <div class="container" style="margin-top: 40px;">
            <h3 style="text-align: center;">Input Books</h3>
            <form action="/addBooks" method="POST">
                <?php echo csrf_field(); ?>  
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Ex: Modul Praktikum WAD 2021">
                </div>
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Ex: Lab EAD">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="price" id="price"  placeholder="500000, if free empty the price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="number" class="form-control" name="year" id="year" placeholder="Ex: 2021">
                </div>
                <div class="form-group">
                    <label for="">Borrow Time</label>
                    <input type="number" class="form-control" name="borrowTime" id="borrowTime" placeholder="Ex: 2, in weeks">
                </div>
                <div class="form-group">
                    <label for="image">Image File Input</label>
                    <input type="file" class="form-control-file" id="img_path" name="img_path">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>

        </div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RPL\resources\views/addBooks.blade.php ENDPATH**/ ?>