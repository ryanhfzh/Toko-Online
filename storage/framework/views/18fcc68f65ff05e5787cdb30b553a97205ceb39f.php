<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Pelanggan </h3>
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
                      <h4 class="card-title">Data Pelanggan</h4>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hovered" id="table">
                        <thead>
                          <tr>
                            <th width="5%">No</th>
                            <th>Nama Pelanggan</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td align="center"></td>
                                <td><?php echo e($pel->name); ?></td>
                                <td><?php echo e($pel->email); ?></td>
                                <td><?php echo e($pel->detail); ?>, <?php echo e($pel->kota); ?>, <?php echo e($pel->prov); ?></td>
                                <td align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-tooltip-edit"></i>
                                  </a>
                                  <a href="#" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-delete-forever"></i>
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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoOnline\resources\views/admin/pelanggan/index.blade.php ENDPATH**/ ?>