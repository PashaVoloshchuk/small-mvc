<h1>login</h1>
<?php if (is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error;?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form action="" method="post">
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="submit" value="login" name="btn_login">
    </div>

</form>



