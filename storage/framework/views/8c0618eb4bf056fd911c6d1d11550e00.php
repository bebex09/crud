<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Product</h1>
	<div>
	<?php if(session()->has('success')): ?>
		<div>
			<?php echo e(session('success')); ?>

		</div>
	<?php endif; ?>
	</div>
	<div>
		<div>
			<a href="<?php echo e(route('product.create')); ?>">Create Product</a>
		</div>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>QTY</th>
				<th>PRICE</th>
				<th>DESCRIPTION</th>
				<th>EDIT</th>
				<th>DELETE</th>
			</tr>
			<?php if($products->isEmpty()): ?>
			    <tr>
			        <td colspan="7">no data</td>
			    </tr>
			<?php endif; ?>
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($product->id); ?></td>
				<td><?php echo e($product->name); ?></td>
				<td><?php echo e($product->qty); ?></td>
				<td><?php echo e($product->price); ?></td>
				<td><?php echo e($product->description); ?></td>
				<td>
					<a href="<?php echo e(route('product.edit', ['product' => $product])); ?>">Edit</a>
				</td>
				<td>
					<form method="post" action="<?php echo e(route('product.delete', ['product' => $product])); ?>">	
						<?php echo csrf_field(); ?>
						<?php echo method_field('delete'); ?>
						<input type="submit" name="" value="delete">
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
</body>
</html><?php /**PATH C:\xampp2\htdocs\crud\resources\views//products/index.blade.php ENDPATH**/ ?>