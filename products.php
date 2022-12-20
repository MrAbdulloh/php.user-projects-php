<? require 'header.php';
require 'categories-model.php';
require "products-model.php";
$categories = getAllCategory();
$products = getAllProduct();
?>

<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                        <tr>
                            <th scope="col">&nbsp;ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">Pice</th>
                            <th scope="col">Category_id</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        <? foreach ($products as $product) : ?>
                            <tr>
                                <td>  <?= $product['id'] ?></td>
                                <td class="tm-product-name"><?= $product['name'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['category_id'] ?></td>

                                <td>
                                    <a href="edit-product.php?id=<?=$product['id']?>" class="tm-product-delete-link">
                                        <i class="far fa-edit tm-product-delete-icon"></i>
                                    </a>
                                    <a href="deleteProduct.php?id=<?= $product['id'] ?>" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                            </tr>
                        <? endforeach; ?>


                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <a href="add-product.php" class="btn btn-primary btn-block text-uppercase mb-3">
                    Add new product
                </a>
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

                                    <a href="edit-category.php?id=<?= $category['id'] ?>"
                                       class="tm-product-delete-link">
                                        <i class="far fa-edit tm-product-delete-icon"></i>
                                    </a>
                                    <a href="delete.php?id=<?= $category['id'] ?>" class="tm-product-delete-link">
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

