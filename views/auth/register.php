<h1>REGISTER</h1>
<?php if (is_array($errors)): ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <li><?php echo $error;?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_repeat">Password repeat</label>
        <input type="password" name="password_repeat" id="password_repeat">
    </div>
    <div>
        <input type="submit" value="Register" name="btn_register">
    </div>

</form>

