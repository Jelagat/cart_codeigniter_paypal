<?php
/**
 * Created by PhpStorm.
 * User: adityagupta
 * Date: 20/03/16
 * Time: 1:26 AM
 */
?>


<div class="row details">
    <div class="col-md-4">
        <img src="<?= base_url();?>assets/images/<?= $product->image;?>" />
    </div>
    <div class="col-md-8">
        <h3><?= $product->title;?></h3>
        <div class="details-price">Price <?= $product->price;?></div>
        <div class="details-description">
            <p><?= $product->description;?></p>

        </div>
        <div class="details-buy">
            <form method="post" action="<?= base_url(); ?>cart/add/<?= $product->id; ?>">
                Quantity:  <input type="text" class="qty" name="qty" value="1">
                <input type="hidden" name="item_number" value="<?= $product->id; ?>" />
                <input type="hidden" name="price" value="<?= $product->price; ?>" />
                <input type="hidden" name="title" value="<?= $product->title; ?>" />
                <button class="btn btn-primary" type="submit">Add to Cart</button>
            </form>
        </div>
    </div>
</div>



