
<h2>DELETE LANGUAGE</h2>
<?php if (isset($language['code'])): ?>
<form action="" method="post">

    <div>
        <label for="code">Code</label>
        <input type="text" name="code" id="code"  value="<?php echo $language['code']?>" readonly>
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $language['name']?>" readonly>
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title"value="<?php echo $language['title']?>" readonly>
    </div>
    <div>
        <label for="locale">Locale</label>
        <input type="text" name="locale" id="locale"value="<?php echo $language['locale']?>" readonly>
    </div>
    <div>
        <label for="status">Status</label>
        <select name="status" id="status" disabled>
            <option value="1"<?php if ($language ===1){echo 'selected';} ?>>Active</option>
            <option value="0"<?php if ($language ===0){echo 'selected';} ?>>Draft</option>
        </select>
    </div>
    <div>
        <input type="submit" id="submit" value="Delete" name="delete">
    </div>
</form>
<?php else: ?>
<h3>DELETE</h3>
<?php endif; ?>