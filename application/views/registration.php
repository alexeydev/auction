<div class="row-fluid">
    <div class="span4"></div>
    <div class="span8">

        <form action="" method="post" class="form-horizontal">
            <div class="control-group">
                <b>Регистрация</b>
            </div>
            <div class="control-group <?php if(isset($errors['username'])) echo 'error'; ?>">
                <input type="text" id="inputLogin" name="username" placeholder="Логин" data-cip-id="inputLogin"
                       autocomplete="off" value="<?php echo HTML::chars(Arr::get($_POST, 'username')); ?>">
                <span class="help-inline"><?php if(isset($errors['username'])) echo $errors['username']; ?></span>
            </div>
            <div class="control-group <?php if(isset($errors['password'])) echo 'error'; ?>">
                <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                       data-cip-id="inputPassword">
                <span class="help-inline"><?php if(isset($errors['password'])) echo $errors['password']; ?></span>
            </div>
            <div class="control-group <?php if(isset($errors['confirm'])) echo 'error'; ?>">
                <input type="password" id="inputPassword2" name="confirm" placeholder="Повторите пароль"
                       data-cip-id="inputPassword2">
                <span class="help-inline"><?php if(isset($errors['confirm'])) echo $errors['confirm']; ?></span>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</div>