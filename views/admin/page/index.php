<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>

<h2>Section title</h2>
<div class="table-responsive">
    <?php if (is_array($pageList)): ?>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <?php foreach ($pageList as $page): ?>
                <tr>
                    <td><?php echo $page['id']?></td>
                    <td><?php echo $page['header']?></td>
                    <td><?php echo $page['date_update']?></td>
                    <td><?php echo $page['status']?></td>
                    <td><a href="/admin/language/update?id=<?php echo $language['id'] ?>">
                            Edit
                        </a>
                    </td>
                    <td><a href="/admin/language/delete?id=<?php echo $language['id'] ?>">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    <?php endif;?>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
