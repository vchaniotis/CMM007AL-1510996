<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
<div id="wrap">
    <header>
        <div id="section">
            <h1>myBlog</h1>
            <p id="subtitle">because the internet needs to know what I think</p>
        </div>
    </header>
    <div id="mainbody">
        <div id="navigation">
            <ul>
                <li><a href="blog.php">All Blog Items</a></li>
                <li><a href="blog.php">Work Items</a></li>
                <li><a href="blog.php">University Items</a></li>
                <li><a href="blog.php">Family Items</a></li>
                <li><a href="add.php">Insert a Blog Item</a></li>
            </ul>
        </div>
        <div id="maincontent">
            <article>
                <div>
                    <?php
                    include("connection.php");
                    $sql = "SELECT * FROM blogview";
                    if(!empty($_GET["id"])){
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM blogview WHERE blogitemID = '$id'";
                    }
                    elseif(!empty($_GET["category"])) {
                        $category = $_GET["category"];
                        $sql = "SELECT * FROM blogview WHERE category = '$category'";
                    }

                    $result = mysqli_query($db, $sql);

                    while($row = $result -> fetch_array()) {
                        $entryTitle = $row['entryTitle'];
                        echo "<p>" . $entryTitle . "</p>";
                        $entrySummary = $row['entrySummary'];
                        echo "<p>" . $entrySummary . "</p>";
                        $category = $row['category'];
                        echo "<p>" . $category . "</p>";
                        $submitter = $row['submitter'];
                        echo "<p>" . $submitter . "</p>";
                    }
                    ?>
                </div>
            </article>
        </div>
    </div>
    <footer>Designed by Chaniotis Vasileios-Efthymios, 2016</footer>
</div>
</body>
</html>






<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 04/05/2016
 * Time: 11:07
 */