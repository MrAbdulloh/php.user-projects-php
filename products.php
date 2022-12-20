<? require 'header.php';
require 'categories-model.php';
$categories = getAllCategory();

?>

<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">PRODUCT NAME</th>
                            <th scope="col">UNIT SOLD</th>
                            <th scope="col">IN STOCK</th>
                            <th scope="col">EXPIRE DATE</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tbody>

                        <tr>
                            <th scope="row"><input type="checkbox"/></th>
                            <td class="tm-product-name">Lorem Ipsum Product 1</td>
                            <td>1,450</td>
                            <td>550</td>
                            <td>28 March 2019</td>
                            <td>
                                <a href="#" class="tm-product-delete-link">
                                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                </a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <a
                        href="add-product.php"
                        class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                <button class="btn btn-primary btn-block text-uppercase">
                    Delete selected products
                </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Product Categories</h2>
                <div class="tm-product-table-container">
                    <table class="table tm-table-small tm-product-table">
                        <tbody>
                        <? foreach ($categories as $category): ?>
                            <tr>
                                <td class="tm-product-name"><?= $category['name'] ?></td>
                                <td class="text-center">

                                    <a href="edit-category.php?id=<?=$category['id']?>" class="tm-product-delete-link">
                                        <i class="far fa-edit tm-product-delete-icon"></i>
                                    </a>
                                    <a href="delete.php?id=<?=$category['id']?>" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                            </tr>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <a href="add-category.php" class="btn btn-primary btn-block text-uppercase mb-3">
                    Add new category
                </a>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>

