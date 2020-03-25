<?php if (is_array($languages)): ?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<?php
$count = 0;
foreach ($languages as $language):
?>
    <li class="nav-item">
        <a class="nav-link <?php if ($count===0) echo "active";?>" id="tab-<?php echo $language['code']?>" data-toggle="tab" href="#tab_<?php echo $language['code']?>" role="tab" aria-controls="home" aria-selected="true"><?php echo $language['title']?></a>
    </li>
    <?php
    $count++
    ?>
<?php endforeach; ?>
</ul>
<?php endif; ?>
