<?php if(isset($this->error)): ?>
    <div class="error">
        <?php echo $this->error ?>
    </div>
<?php endif ?>

<form action="" method="POST">
    <label>Login:</label> <input type="text" name="login" value="<?php echo $this->login ?>" /> <br />
    <label>Password:</label> <input type="password" name="password" /> <br />
    <label></label> <input type="submit" value="Submit" />
</form>