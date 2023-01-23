

<?php $__env->startSection('document_title', 'Edit Cart'); ?>

<?php $__env->startSection('body'); ?>

    <div class="p-5 m-5">
        <div class="border pb-5 pt-5 col-8 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row mx-auto">
                <p id="title" class="fs-1 fw-bold">Edit Cart</p>
                <div class="col align-items-center m-3 mx-auto">
                    <img src="<?php echo e(asset('storage/images/clothes/'.$currProduct->image)); ?>" class="img-fluid img-thumbnail" alt="Image Not Found">
                </div>
                <form enctype="multipart/form-data" <?php echo $__env->yieldContent('method'); ?> <?php echo $__env->yieldContent('action'); ?> class="col m-5 mx-auto pt-5">
                    
                    <?php echo csrf_field(); ?>

                    <div class="border-bottom">
                        <div class="">
                            <h1 for="ProductName"><?php echo $__env->yieldContent('productName'); ?></h1>
                        </div>
                        <div class="">
                            <h3 for="ProductPrice"><?php echo $__env->yieldContent('productPrice'); ?></h2>
                        </div>
                    </div>
                    <div class="mt-3 border-bottom border-secondary">
                        <div class="">
                            <h4>Product Detail</h4>
                        </div>
                        <div class="">
                            <p for="ProductDescription"><?php echo $__env->yieldContent('productDescription'); ?></p>
                        </div>
                        <div class="">
                            <p for="ProductStock">Stock : <?php echo $__env->yieldContent('productStock'); ?></p>
                        </div>
                    </div>
                    <div class="border-top border-secondary">
                    </div>
                </form>
                <form enctype="multipart/form-data" action="/updateCart/<?php echo e($curr_cart_items->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-2 mt-2">
                                <h5>Quantity :</h5>
                            </div>
                            <div class="col">
                                <input name="quantity" type="number" class="form-control text-center" id="exampleInputQuantity1" aria-describedby="emailHelp" min="1" placeholder="0">
                            </div>
                            <div class="col d-flex flex-column">
                                <button id="quantity" type="submit" class="btn btn-success">Update Cart</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col d-flex flex-column">
                                <a href="/m-cart" type="button" class="btn btn-danger">Back</a>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbarmember', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/showEditCartPage.blade.php ENDPATH**/ ?>