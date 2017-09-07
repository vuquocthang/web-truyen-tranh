<?php $__env->startSection('title'); ?>
    Slide - Danh Sách
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh Sách Slide</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Tên Truyện</th>
                                <th>Tên Chương</th>

                                <th>Hành Động</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = \App\Slide::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                                <tr>
                                    <td><?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?></td>
                                    <td><?php echo e(\App\Chapter::findOrFail($item->chuong_id)->ten); ?></td>

                                    <td>
                                        <a class="btn btn-danger" href="<?php echo e(url('admin/slide/xoa/' . $item->id )); ?>" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>