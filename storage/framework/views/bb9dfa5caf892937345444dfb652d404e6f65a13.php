
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Edit Product</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="<?php echo e(route('employees.index')); ?>">Back</a>
    </div>
</div>  

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with youor input.<br>
    <ul>    
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('employees.update',$employee->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="employee_name" class="form-control" value="<?php echo e($employee->employee_name); ?>" placeholder="product name"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" class="form-control" value="<?php echo e($employee->employee_address); ?>" name="employee_address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" value="<?php echo e($employee->employee_phone); ?>" class="form-control" name="employee_phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text"  value="<?php echo e($employee->employee_email); ?>" class="form-control" name="employee_email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salary:</strong>
                <input type="number" value="<?php echo e($employee->employee_salary); ?>" class="form-control" name="employee_salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employees.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Xampp\htdocs\product_manager\resources\views/employees/edit.blade.php ENDPATH**/ ?>