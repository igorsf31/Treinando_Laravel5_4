<?php $__env->startSection('content'); ?>
	<div class="container">
	<h1>Edit the Task</h1>

<form method="POST" action="/task/<?php echo e($task->id); ?>">

	<div class="form-group">
		<textarea name="description" class="form-control"><?php echo e($task->description); ?></textarea>	
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>
<?php echo e(csrf_field()); ?>

</form>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>