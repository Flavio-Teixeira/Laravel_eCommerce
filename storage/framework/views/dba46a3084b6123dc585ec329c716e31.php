<h1>Criar loja</h1>
<form action="/admin/stores/store" method="POST">
    <div>
        <label for="name">Nome loja</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="phone">Telefone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="mobile_phone">Celular</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="user">Usuário</label>
        <select name="user">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div>
        <button type="submit">Criar loja</button>
    </div>
</form>
<?php /**PATH /media/flavio/3437-6262/Projetos/laravel_ecommerce/resources/views/admin/stores/create.blade.php ENDPATH**/ ?>