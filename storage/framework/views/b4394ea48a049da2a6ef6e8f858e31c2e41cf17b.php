<?php $__env->startSection('content'); ?>
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo e($produk->name); ?></strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="<?php echo e(asset('storage/'.$produk->image)); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
        <h2 class="text-black"><?php echo e($produk->name); ?></h2>
        <p>
            <?php echo e($produk->description); ?>

        </p>
        <p><strong class="text-primary h4">Rp <?php echo e($produk->price); ?> </strong></p>
        <div class="mb-5">
            <form action="<?php echo e(route('user.keranjang.simpan')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                    <?php endif; ?>
                <?php endif; ?>
            <input type="hidden" name="products_id" value="<?php echo e($produk->id); ?>">
            <small>Sisa Stok <?php echo e($produk->stok); ?></small>
            <input type="hidden" value="<?php echo e($produk->stok); ?>" id="sisastok">
            <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
        </div>

        </div>
        <p><button type="submit" class="buy-now btn btn-sm btn-primary">Add To Cart</button></p>
        <!-- <p><button type="button" class="btn btn-sm btn-success">try me!</button></p> -->
        <p><a href="<?php echo e(route('ar')); ?>" type="button" class="btn btn-sm btn-success" >try me!</a></p>
        </form>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoOnline\resources\views/user/produkdetail.blade.php ENDPATH**/ ?>