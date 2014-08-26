<?php
    $categoriesStr = '';
    $tagsStr = '';
    $monthsStr = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $categoriesStr = $_POST['categories'];
        $tagsStr = $_POST['tags'];
        $monthsStr = $_POST['months'];
    endif;
    $categories = array();
    $tags = array();
    $months = array();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Problem 03 - Sidebar Builder</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/03_SidebarBuilder.css" />
    </head>
    <body>
        <form method="post" action="">
            <label for="categories">Categories</label>
            <input type="text" name="categories" /><br />
            <label for="tags">Tags</label>
            <input type="text" name="tags" /><br />
            <label for="months">Monhts</label>
            <input type="text" name="months" /><br />
            <input type="submit" value="Generate" />
        </form>
        <br>
        <div id="container">
        <?php if (isset($categoriesStr) && strlen($categoriesStr) > 0): ?>
        <?php
        // declaring the needed arrays
        $categories = explode(', ', $categoriesStr);
        $tags = explode(', ', $tagsStr);
        $months = explode(', ', $monthsStr);
        ?>
            <!--Categories menu-->
            <aside>
                <header><h3>Categories</h3></header><hr>
                <ul>
                <?php foreach ($categories as $category): ?>
                    <li><a href="$"><?=$category?></a></li>
                <?php endforeach; ?>
                </ul>
            </aside><br />
            <!--Tags menu-->
            <aside>
                <header><h3>Tags</h3></header><hr>
                <ul>
                <?php foreach ($tags as $tag): ?>
                    <li><a href="$"><?=$tag?></a></li>
                <?php endforeach; ?>
                </ul>
            </aside><br />
            <!--Months menu-->
            <aside>
                <header><h3>Months</h3></header><hr>
                <ul>
                <?php foreach ($months as $month): ?>
                    <li><a href="$"><?=$month?></a></li>
                <?php endforeach; ?>
                </ul>
            </aside><br />
            <?php endif; ?>
        </div>
    </body>
</html>