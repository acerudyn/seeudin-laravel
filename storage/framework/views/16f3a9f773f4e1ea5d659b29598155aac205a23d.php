<?php if(Session::has('flash_message')): ?>
    <script>
        swal({
            title: "<?php echo e(Session::get('flash_message.title')); ?>",
            text: "<?php echo e(Session::get('flash_message.message')); ?>",
            type: "<?php echo e(Session::get('flash_message.level')); ?>",
            timer: 2200,
            showConfirmButton: false
        });
    </script>
<?php endif; ?>

<?php if(Session::has('flash_message_overlay')): ?>
    <script>
        swal({
            title: "<?php echo e(Session::get('flash_message_overlay.title')); ?>",
            text: "<?php echo e(Session::get('flash_message_overlay.message')); ?>",
            type: "<?php echo e(Session::get('flash_message_overlay.level')); ?>",
            confirmButtonText: "Okay",
            html: true
        });
    </script>
<?php endif; ?>