<?php
/**
 * Created by PhpStorm.
 * User: adityagupta
 * Date: 19/03/16
 * Time: 11:58 PM
 */
?>

<div class="cart-block">
    <form action="cart/update" method="post">
        <table cellpadding="6" cellspacing="1" width="100%" border="0">
            <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align: right">Item Price</th>
            </tr>
            <tr>
                <td></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right" style="text-align: right">$</td>
            </tr>
        </table>
        <br>
        <p><button class="btn btn-default" value="submit">Update Cart</button>
            <a class="btn btn-default" href="cart">Go to cart</a></p>
    </form>
</div>
<div class="panel panel-default panel-list">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">Categories</h3>
    </div>
    <ul class="list-group">
        <?php foreach(get_categories_h() as $category): ?>
        <li class="list-group-item"><a href="product/category/<?php echo $category->id; ?>"><?php echo $category->name; ?></a></li>

        <?php endforeach; ?>
    </ul>
</div>
<div class="panel panel-default panel-list">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">Most Popular</h3>
    </div>
    <ul class="list-group">
        <?php foreach(get_popular_h() as $popular): ?>

            <li class="list-group-item"><a href="product/details/<?php echo $popular->id; ?>"><?php echo $popular->title; ?></a></li>

        <?php endforeach; ?>

    </ul>
