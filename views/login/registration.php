<h1>Регистрация</h1>

<form action="" method="post">
    <input type="text" name="first_name" placeholder="Имя" required><br>
    <input type="text" name="last_name" placeholder="Фамилия" required><br>
    <input type="text" name="login" placeholder="Логин" required><br>
    <input type="text" name="email" placeholder="e-mail" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <input type="password" name="password_repeat" placeholder="Повторите пароль" required><br>
    <input type="submit" value="Зарегистрироваться"> или <a href="?c=login">Войти</a><br>
    <?= $different_password ?>
</form>