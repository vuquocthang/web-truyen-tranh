<?php $__env->startSection('top-hot'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('left'); ?>
    <div class="col-md-8">
        <?php if($kq != null): ?>
        <h2 class="org-title">Kết Quả Tìm Kiếm: "<?php echo e($s); ?>"</h2>
        <div class="comic-list-page">
            <table class="comic-list-table table table-striped">
                <thead>
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 45%;">Tên truyện</th>
                    <th style="width: 25%;">Mới nhất</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $kq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td>
                            <img width="30%" src="<?php echo e(url('public/image/' . $value->image_link)); ?>" />
                            <a href="<?php echo e(url('truyen/' . $value->slug . '.html' )); ?>"> <?php echo e($value->ten); ?> </a>
                        </td>
                        <td><a href="<?php echo e(url('truyen/' . $value->slug . '/' . \App\Chapter::where('truyen_id', $value->id)->orderBy('ngay_them', "DESC")->first()->slug . '.html' )); ?>">
                                <?php echo e(\App\Chapter::where('truyen_id', $value->id)->orderBy('ngay_them', "DESC")->first()->ten); ?>

                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </tbody>
            </table>

        </div>
        <?php else: ?>
            <h2 class="org-title">Không Có Kết Quả Tìm Kiếm: "<?php echo e($s); ?>"</h2>
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('right'); ?>
    @parent
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>