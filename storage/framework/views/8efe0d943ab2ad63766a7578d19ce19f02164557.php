<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Pesanan </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Data Pesanan Perlu Di Cek</h4>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hovered" id="table">
                        <thead>
                          <tr>
                            <th width="5%">No</th>
                            <th>No Invoice</th>
                            <th>Pemesan</th>
                            <th>Subtotal</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pesanan</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $orderbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td align="center"></td>
                                <td><?php echo e($order->invoice); ?></td>
                                <td><?php echo e($order->nama_pemesan); ?></td>
                                <td><?php echo e($order->subtotal + $order->biaya_cod); ?></td>
                                <td><?php echo e($order->metode_pembayaran); ?></td>
                                <td><?php echo e($order->name); ?></td>
                                <td align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="<?php echo e(route('admin.transaksi.detail',['id'=>$order->id])); ?>" class="btn btn-warning btn-sm">
                                    Cek Pembayaran
                                  </a>
                                </div>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoOnline\resources\views/admin/transaksi/perludicek.blade.php ENDPATH**/ ?>