<form action="" method="post">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo Tr::t('admin', 'Update Language')?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="submit" name="Language[apply]" class="btn btn-sm btn-outline-secondary"><?php echo Tr::t('admin', 'Apply')?></button>
                <button type="submit" name="Language[save]" class="btn btn-sm btn-outline-secondary"><?php echo Tr::t('admin', 'Save')?></button>
            </div>

        </div>
    </div>
    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Code')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Language[code]" id="code"
                   value="<?php echo $language['code'] ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Name')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Language[name]" id="name"
                   value="<?php echo $language['name'] ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Title')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Language[title]" id="title"
                   value="<?php echo $language['title'] ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="locale" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Locale')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Language[locale]" id="locale"
                   value="<?php echo $language['locale'] ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Status')?></label>
        <div class="col-sm-10">
            <select name="Language[status]" id="status" class="form-control" required>
                <option value="1" <?php if($language['locale']==='1') echo 'selected';?>><?php echo Tr::t('admin', 'Yes')?></option>
                <option value="0" <?php if($language['locale']==='0') echo 'selected';?>><?php echo Tr::t('admin', 'No')?></option>
            </select>
        </div>
    </div>
</form>
