<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Интернет-магазин "Мир цветов"</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="header">
    <a href="index.html"><img src="image/logo.png" alt="Мир цветов" title="Интернет магазин 'Мир цветов'"></a>
    <img class="cart" src="image/cart.png" alt="Корзина" title="Корзина">
    <nav>
        <ul id="menu">
            <li><a href="?c=product">Каталог</a></li>
            <li class="login"><a href="?c=login"">Войти</a></li>
        </ul>
    </nav>
</div>
<div class="content">
    <?=$content?>
</div>
<div class="footer">
    <p>Copyright &#169; 2016-<?=date('Y');?>  Интернет-магазин "Мир цветов"</p>
</div>
</body>
</html>
