<?php $__env->startSection('con'); ?>
<div class="flex flex-1 flex-col mt-5">
    <div>
        <h1 class="text-white text-center text-3xl">Create</h1>
    </div>
    <div class="flex flex-1 justify-center">
        <form action="<?php echo e(url('create')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input class="border-2 border-black rounded-lg" type="text" name="kategori" value="<?php echo e(old('kategori')); ?>">
            <button class="bg-white rounded-lg text-black px-3" type="submit">Save</button>
        </form>
    </div>
    <div class="mt-3 flex flex-1 justify-center">
        <table class="border-separate border border-slate-800 border-white">
            <thead>
                <tr>
                    <th class="border border-slate-600 border-white text-white">No</th>
                    <th class="border border-slate-600 border-white text-white">Name</th>
                    <th class="border border-slate-600 border-white text-white">Action</th>
                    <th class="border border-slate-600 border-white text-white">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border border-slate-700 border-white text-white"> <?php echo e($loop->iteration); ?></td>
                    <td class="border border-slate-700 border-white text-white"><?php echo e($item->kategori); ?></td>
                    <td class="border border-slate-700 border-white text-white">
                        <form action="<?php echo e(url('delete', $item->id)); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="bg-red-600 rounded-lg text-white px-3" onclick="return confirm('Delete this name? ( <?php echo e($item->kategori); ?> )')">Del</button>
                        </form>
                    </td>
                    <td class="border border-slate-700 border-white text-white">
                        <form action="<?php echo e(url('edit',$item->id)); ?>" method="POST">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <input class="border-2 border-black rounded-lg text-black" type="text" name="kategori" value="<?php echo e(old('kategori',$item->kategori)); ?>">
                            <button class="bg-white rounded-lg text-black px-3" type="submit">Save</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\tugas\laravel-resto\resources\views/home.blade.php ENDPATH**/ ?>