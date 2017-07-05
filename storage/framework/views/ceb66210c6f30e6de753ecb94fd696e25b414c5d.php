<?php $__env->startSection('title', 'Akhirudin | Project'); ?>

<?php $__env->startSection('content'); ?>

	<div class="col-md-12 work-agile-right" style="padding: 0em;">
		<!-- Projects -->
		<div class="Projects">
				<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<div class="col-md-3 col-sm-3 col-xs-3 agileits-img">
				<a href="../<?php echo e($project->image); ?>" class="swipebox" title="<?php echo e($project->name); ?>">
					<img class="img-responsive " src="../<?php echo e($project->image); ?>" alt="<?php echo e($project->name); ?>"  />
					<div class="wthree-pcatn">
						<h4><?php echo e($project->name); ?></h4>
					</div>
				</a>
			</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>	<!-- //Projects -->
	</div> <!-- End 2 Left Coloms -->

	<!-- pagination -->
		<div class="center-halaman">
			<?php echo e($result->links()); ?>

		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>