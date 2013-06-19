<div class="row-fluid">
    <div class="span4"></div>
    <div class="span3">
        <?php if(isset($errors['login_error'])): ?>
        <div class="alert alert-error">
            <?php echo $errors['login_error']; ?>
        </div>
        <?php endif;?>
        <form action="" method="post" class="form-horizontal">
            <div class="control-group">
                <b>Авторизация</b>
            </div>
            <div class="control-group">
                <input type="text" id="inputLogin" name="username" placeholder="Логин" data-cip-id="inputLogin"
                       autocomplete="off">
            </div>
            <div class="control-group">
                <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                       data-cip-id="inputPassword">
            </div>
            <div class="control-group">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"> Запомнить меня
                </label>
                <button type="submit" class="btn btn-primary">Вход</button>
            </div>
        </form>
    </div>
</div>