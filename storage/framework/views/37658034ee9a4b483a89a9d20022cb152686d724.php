<?php $__env->startSection('top-hot'); ?>
    <div class="top-hot">
        <div id="owl-top-hot" class="owl-carousel">
            <?php $__currentLoopData = \App\Slide::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($item->truyen_id)->slug . '.html')); ?>" title="<?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?>">
                        <img class="img-thumbnail" src="<?php echo e(url('public/image/' . \App\Story::findOrFail($item->truyen_id)->image_link)); ?>" alt="<?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?>">
                        <h3><?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?></h3>
                    </a>

                    <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($item->truyen_id)->slug . '/' . $item->slug . '.html' )); ?>">
                        <p class="chap"> <?php echo e(\App\Chapter::findOrFail($item->chuong_id)->ten); ?></p>

                        <?php

                        $dt = new \Carbon\Carbon( \App\Chapter::findOrFail($item->chuong_id)->ngay_them);
                        $now = \Carbon\Carbon::now();

                        $diffForHuman = '';


                        $diffInMinutes = $now->diffInMinutes($dt);
                        $diffInHours = $now->diffInHours($dt);
                        $diffInDays = $now->diffInDays($dt);

                        if ($diffInMinutes >= 0 && $diffInMinutes< 60){
                            $diffForHuman = $diffInMinutes .' phút trước';
                        }elseif ($diffInHours >= 0 && $diffInHours < 24){
                            $diffForHuman = $diffInHours .' giờ trước';
                        }elseif ($diffInDays >=0 && $diffInDays<= 7){
                            $diffForHuman = $diffInDays .' ngày trước';
                        }else{
                            $diffForHuman = $dt->format('d-m-Y');
                        }

                        ?>
                        <p class="chap-date"><i class="glyphicon glyphicon-time"></i> <?php echo $diffForHuman ?></p>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Trang Chủ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

    @parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    @parent
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>