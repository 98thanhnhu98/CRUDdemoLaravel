
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Employee Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px; margin-bottom: 10px;">
            <a class="btn btn-success" href="<?php echo e(route('employees.create')); ?>">
                Add product
            </a>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <?php if(sizeof($employees) > 0): ?>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Product name</th>
                <th>Product desc</th>
                <th>Product qty</th>
                <th>Product qty</th>
                <th>Product qty</th>
                <th width="280px">More</th>
            </tr>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($employee->employee_name); ?></td>
                    <td><?php echo e($employee->employee_address); ?></td>
                    <td><?php echo e($employee->employee_phone); ?></td>
                    <td><?php echo e($employee->employee_email); ?></td>
                    <td><?php echo e($employee->employee_salary); ?></td>
                    <td>
                        <form action="<?php echo e(route('employees.destroy',$employee->id)); ?>"
                              method="POST">
                            <a class="btn btn-info"
                               href="<?php echo e(route('employees.show',$employee->id)); ?>">Show</a>
                            <a class="btn btn-primary"
                               href="<?php echo e(route('employees.edit',$employee->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <div class="alert alert-alert">Start Adding to the Database.</div>
    <?php endif; ?>
    <?php echo $employees->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('employees.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Xampp\htdocs\product_manager\resources\views/employees/index.blade.php ENDPATH**/ ?>