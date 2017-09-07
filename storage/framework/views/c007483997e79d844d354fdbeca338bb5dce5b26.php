<?php $__env->startSection('title'); ?>
    Chương - Sửa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <script src="<?php echo e(url('public/ckeditor/')); ?>/ckeditor.js"></script>
    <script src="<?php echo e(url('public/ckeditor/')); ?>/samples/js/sample.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sửa</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="<?php echo e(url('admin/chuong/sua/' . $chapter->id)); ?>" method="post" enctype="multipart/form-data">

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ten" value="<?php echo e($chapter->ten); ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Truyện <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="truyen_id">
                                        <?php $__currentLoopData = DB::table('truyen')->where('status','!=', -1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php echo e($chapter->truyen_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->ten); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nội Dung<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor" name="noi_dung"><?php echo e($chapter->noi_dung); ?></textarea>
                                </div>
                            </div>




                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" class="btn btn-success">Sửa</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

    <script>
        var editor = CKEDITOR.replace( 'editor' );

        // The "change" event is fired whenever a change is made in the editor.
        editor.on( 'change', function( evt ) {
            // getData() returns CKEditor's HTML content.
            var data = CKEDITOR.instances.editor.getData();

            console.log( 'Total bytes: ' + data );
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>