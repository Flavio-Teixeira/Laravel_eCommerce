<table border=1>
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($store->id); ?></td>
                <td><?php echo e($store->name); ?></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($stores->links()); ?>


<?php /**PATH /media/flavio/3437-6262/Projetos/laravel_ecommerce/resources/views/admin/stores/index.blade.php ENDPATH**/ ?>