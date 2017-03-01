<h1>Приветствуем Вас в интернет магазине "Мир цветов"</h1><hr>
<h2 class="popular_title">Самые популярные букеты</h2>

<?php foreach ($model as $item): ?>
<div class="product_block">
    <a href="?c=product&a=view&id=<?= $item['id']; ?>">
        <img src="/image/<?= $item['image']; ?>" alt="<?= $item['name']; ?>">
        <h3><?= $item{'name'}; ?></h3></a>
</div>
<?php endforeach; ?>