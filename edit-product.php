<? require 'header.php';
require "categories-model.php";
require "products-model.php";
$category = getCategory($_REQUEST['id']);
$product = getProduct($_REQUEST['id']);

?>

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Category</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <form action="update-product.php" method="post" class="tm-edit-product-form">
                                <input type="text" name="id" value="<?= $product['id'] ?>" hidden>
                                <div class="form-group mb-3">
                                    <label for="name">Edit Name </label>
                                    <input id="name" value="<?= $product['name'] ?>" name="name" type="text" class="form-control validate" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Price">Edit Price </label>
                                    <input id="Price" value="<?= $product['price'] ?>" name="name" type="number"
                                           class="form-control validate" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Category_id">Edit Category_id </label>
                                    <input id="Category_id" value="<?= $product['category_id'] ?>" name="category_id" type="number"
                                           class="form-control validate" required/>
                                </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Category Now
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>