
<?php $__env->startSection('content'); ?>
    <main class="container">
        <section>
            <div class="titlebar">
                <h1>Add Product</h1>
                <button>Save</button>
            </div>
            <div class="card">
               <div>
                    <label>Name</label>
                    <input type="text" >
                    <label>Description (optional)</label>
                    <textarea cols="10" rows="5" ></textarea>
                    <label>Add Image</label>
                    <img src="" alt="" class="img-product" />
                    <input type="file" >
                </div>
               <div>
                    <label>Category</label>
                    <select  name="" id="" >
                        <option value="" >Email Subscription</option>
                    </select>
                    <hr>
                    <label>Inventory</label>
                    <input type="text" class="input" >
                    <hr>
                    <label>Price</label>
                    <input type="text" class="input" >
               </div>
            </div>
            <div class="titlebar">
                <h1></h1>
                <button>Save</button>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL 10 PROJECT TEST\myapp\resources\views/products/cerate.blade.php ENDPATH**/ ?>