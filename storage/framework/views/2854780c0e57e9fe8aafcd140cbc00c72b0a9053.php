<?php $__env->startSection('content'); ?>
<div class="site-blocks-cover" style="background-image: url(<?php echo e(asset('shopper')); ?>/images/ridelabel.jpg);" data-aos="fade">
    <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
        <h1 class="mb-2">Cari Fashion TerUPDATE Kamu Di Sini</h1>
        <div class="intro-text text-center text-md-left">
            <p class="mb-4">Pakaian disini terjamin kualitasnya dan tentunya tidak ketinggalan jaman. </p>
            <p>
            <a href="<?php echo e(route('user.produk')); ?>" class="btn btn-sm btn-primary">Belanja Sekarang</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
            
<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Pengiriman</h2>
            <p>Pengiriman bisa ke seluruh wilayah indonesia dengan kurir JNE.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
            <span class="icon-star"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Kualitas Oke</h2>
            <p>Kualitas barangnya terjamin karena kain yang dipilih dari bahan pilihan dan dijahit oleh penjahit profesional.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
            <span class="icon-security"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Keamanan</h2>
            <p>Kami menjamin keamanan dalam pengiriman barang sampai diterima oleh anda.</p>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
             <iframe src="https://momento360.com/e/u/4dc8799243b140f7bd88d39a70aad50d?utm_campaign=embed&utm_source=other&heading=11&pitch=1.7&field-of-view=75&size=medium"
                    width="1500" height="500" frameborder="0" allowfullscreen="true">
            </iframe>
            </div>
            </div>

<!-- <div class="site-section block-3 site-blocks-2 bg-light"  data-aos="fade-up">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Produk Terlaris</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel" >
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
            <div class="block-4 text-center">
                <a href="<?php echo e(route('user.produk.detail',['id' =>  $produk->id])); ?>">
                <figure class="block-4-image">
                <img src="<?php echo e(asset('storage/'.$produk->image)); ?>" alt="Image placeholder" class="img-fluid" width="100%" style="height:300px">
                </figure>
                </a>
                <div class="block-4-text p-4">
                <h3><a href="<?php echo e(route('user.produk.detail',['id' =>  $produk->id])); ?>"><?php echo e($produk->name); ?></a></h3>
                <p class="mb-0"><?php echo e($produk->price); ?></p>
                <a href="<?php echo e(route('user.produk.detail',['id' =>  $produk->id])); ?>" class="btn btn-primary mt-2">Detail</a>
                </div>
            </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div> -->
    </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoOnline\resources\views/user/welcome.blade.php ENDPATH**/ ?>