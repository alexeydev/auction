<div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">

        <?php if(Auth::instance()->logged_in()): ?>
        <form action="" method="post" class="form-horizontal" style="margin-bottom: 50px;">
            <?php if(isset($errors['empty_message'])): ?>
            <div class="alert alert-error">
                <?php echo $errors['empty_message']; ?>
            </div>
            <?php endif;?>
            <div class="control-group">
                <textarea style="width: 100%; height: 50px;" name="body" id="inputText" placeholder="Ваше сообщение..."
                       data-cip-id="inputText"></textarea>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
        <?php endif; ?>

        <?php foreach($messages as $message):?>
        <div class="well">
            <h5><?php echo $message->user->username;?>:</h5>
            <?php echo $message->body;?>
        </div>
        <?php endforeach;?>        
    </div>
</div>