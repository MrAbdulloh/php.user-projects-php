<? require 'header.php';
require "categories-model.php";

$category = getCategory($_REQUEST['id']);

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
                            <form action="update-category.php" method="post" class="tm-edit-product-form">
                                <input type="text" name="id" value="<?=$category['id']?>" hidden>
                                <div class="form-group mb-3">
                                    <label for="name">Edit Category </label>
                                    <input id="name" value="<?=$category['name']?>" name="name" type="text" class="form-control validate" required/>
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