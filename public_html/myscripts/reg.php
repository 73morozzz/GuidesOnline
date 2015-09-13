<html>
    <head>
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="saveuser.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="31" maxlength="31">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Пароль:<br></label>
    <input name="password" type="password" size="31" maxlength="31">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <label>Имя:<br></label>
    <input name="name" type="text" size="31" maxlength="31">
</p>
	
<p>
    <label>Фамилия:<br></label>
    <input name="family" type="text" size="31" maxlength="31">
</p>

<p>
    <label>Email:<br></label>
    <input name="email" type="text" size="31" maxlength="31">
</p>

<p>
    <label>Город:<br></label>
    <input name="city" type="text" size="31" maxlength="31">
</p>

<p>
    <input type="submit" name="submit" value="Зарегистрироваться" class="button brown solid">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>