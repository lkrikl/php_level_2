<?php if (isset($model['name'])): ?>
<div class="product_view">
    <div class="img_product_view">
        <p><a href="image/17988.jpg" target="_blank"><img class="product_img_border" src="image/<?= $model['image']; ?>" alt="<?= $model['name']; ?>"></a><p>
        <p><button>Купить</button>  <span><b><?= $model['price']; ?></b> р.</span></p>

    </div>
    <div class="product_info">
        <h1><?= $model['name']; ?></h1>
        <h3 class="poduct_title_desc">Описание товара</h3>
        <p class="grey"><?= $model['description']; ?></p>
    </div>
</div>
<?php endif; ?>