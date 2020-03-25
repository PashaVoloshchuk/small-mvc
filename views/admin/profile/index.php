<form action="" method="post">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo Tr::t('admin', 'User Setting')?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="submit" name="UserSetting[save]" class="btn btn-sm btn-outline-secondary"><?php echo Tr::t('admin', 'Save')?></button>
            </div>

        </div>
    </div>
    <div class="form-group row">
        <label for="language" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'language')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="UserSetting[language]" id="language"
                   value="<?php echo $setting->getValue(1, 'language');?>" required>
        </div>

    </div>
    <div class="form-group row">
        <label for="language" class="col-sm-2 col-form-label"><?php echo Tr::t('admin', 'Email')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="UserSetting[email]" id="language"
                   value="<?php echo $setting->getValue(1, 'email');?>" required>
        </div>

    </div>
</form>