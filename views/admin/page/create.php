<form action="" method="post">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo Tr::t('admin','Page Create')?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="submit" name="Page[apply]" class="btn btn-sm btn-outline-secondary"><?php echo Tr::t('admin','Apply')?></button>
            <button type="submit" name="Page[save]" class="btn btn-sm btn-outline-secondary"><?php echo Tr::t('admin','Save')?></button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Status')?></label>
        <div class="col-sm-10">
            <select name="Page[status]" class="form-control" >
                <option value="1"><?php echo Tr::t('admin','Active')?></option>
                <option value="0"><?php echo Tr::t('admin','Draft')?></option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Is index')?></label>
        <div class="col-sm-10">
            <select name="Page[is_index]" class="form-control" >
                <option value="1"><?php echo Tr::t('admin','Yes')?></option>
                <option value="0"><?php echo Tr::t('admin','No')?></option>
            </select>
        </div>
    </div>
    <?php
    $tab = new LanguageTab();
    $tab->begin();
    ?>



    <div class="tab-content" id="myTabContent">
        <?php $languages = Language::getActive();
        if (is_array($languages)): ?>
            <?php
            $count = 0;
            foreach ($languages as $language): ?>
                <div class="tab-pane fade show <?php if ($count === 0) echo 'active'; ?>"
                     data-tab="tab-<?php echo $language['code'] ?>">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Meta title')?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][meta_title]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Meta Description')?></label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][meta_description]"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Header')?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][header]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Header2')?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][header2]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Content')?></label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][content]"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo Tr::t('admin','Short Content')?></label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="PageTranslate[<?php echo $language['code'] ?>][short_content]"></textarea>
                        </div>
                    </div>

                </div>
                <?php
                $count++;
            endforeach; ?>
        <?php endif; ?>
    </div>
</form>
