
<?php $__env->startSection('content'); ?>
    <main class="container">
        <section>
            <form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="titlebar">
                    <h1>Add Product</h1>
                    <button>save</button>
                </div>
                <?php if($errors->any()): ?>
                    <div>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="card">
                <div>
                        <label>Name</label>
                        <input type="text" name="name">
                        <label>Description (optional)</label>
                        <textarea cols="10" rows="5" name="description"></textarea>
                        <label>Add Image</label>
                        <img src="" alt="" class="img-product" id="file-preview"/>
                        <input type="file" name="image" accept="image/*" onchange="showFile(event)">
                </div>
                <div>
                        <label>Category</label>
                        <select  name="category">
                            <?php $__currentLoopData = json_decode('{"Smartphone":"Smartphone", "Smart TV":"Smart TV" ,"Computer":"Computer", "Leptop":"Leptop"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" ><?php echo e($optionValue); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </select>
                        <hr>
                        <label>Inventory</label>
                        <input type="text" name="quantity">
                        <hr>
                        <label>Price</label>
                        <input type="text" name="price">
                </div>
                </div>
               
            </form>
        </section>
    </main>

    <script>
        function showFile(event) 
        {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function()
            {
                var dataUrl = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]); 
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL 10 PROJECT TEST\myapp\resources\views/products/create.blade.php ENDPATH**/ ?>