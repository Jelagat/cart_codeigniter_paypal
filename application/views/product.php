<?php foreach($products as $product): ?>
    <div class="col-md-4 game">
        <div class="game-price"><?= $product->price; ?></div>
        <a href="<?= base_url(); ?>product/details/<?= $product->id; ?>"><img src="<?= base_url(); ?>assets/images/<?= $product->image; ?>" /></a>
        <div class="game-title"><?= $product->title; ?></div>
        <div class="game-add">
            <form method="post" action="<?= base_url(); ?>cart/add/<?= $product->id; ?>">
                Quantity:  <input type="text" class="qty" name="qty" value="1">
                <input type="hidden" name="item_number" value="<?= $product->id; ?>" />
                <input type="hidden" name="price" value="<?= $product->price; ?>" />
                <input type="hidden" name="title" value="<?= $product->title; ?>" />
                <button class="btn btn-primary" type="submit">Add to Cart</button>
            </form>
        </div>
    </div>

<?php endforeach;