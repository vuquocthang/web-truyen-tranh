<?php $__env->startSection('title'); ?>
    Danh Sách Thể Loại
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('top-hot'); ?>


    <?php $__env->stopSection(); ?>

<?php $__env->startSection('left'); ?>
    <div class="col-md-8">
        <h2 class="org-title">Danh Sách Thể loại</h2>
        <div class="comic-list-page">
            <table class="comic-list-table table table-striped">
                <thead>
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 45%;">Tên thể loại</th>

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = \App\Category::where('status' , 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><a href="<?php echo e(url('the-loai/' . $value->slug . '.html' )); ?>"> <?php echo e($value->ten); ?> </a></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('right'); ?>
    @parent
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>