<?php if(isset($banner)): ?>
	<?php $__env->startSection('title', 'Admin Banner Page - Update'); ?>

	<?php $__env->startSection('main-content'); ?>
	    <?php echo $__env->make('back_end.home.edit.edit_banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('right-menu'); ?>
		<?php echo $__env->make('back_end.home.layout.right_banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php elseif(isset($menu)): ?>
	<?php $__env->startSection('title', 'Admin Menu Page - Update'); ?>

	<?php $__env->startSection('main-content'); ?>
	    <?php echo $__env->make('back_end.home.edit.edit_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('right-menu'); ?>
		<?php echo $__env->make('back_end.home.layout.right_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('back_end.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>