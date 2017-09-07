<form method="post" action="<?php echo e(url('testUpload')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="file" name="file">

    <button type="submit">Upload</button>
</form>