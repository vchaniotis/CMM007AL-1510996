<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 04/05/2016
 * Time: 11:08
 */

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Add</title>
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
                <li><a href="blog.html">All Blog Items</a></li>
                <li><a href="blog.html?category=work">Work Items</a></li>
                <li><a href="blog.html?category=university">University Items</a></li>
                <li><a href="blog.html?category=family">Family Items</a></li>
                <li><a href="add.html">Insert a Blog Item</a></li>
            </ul>
        </div>
        <div id="maincontent">
            <div id="content">
                <div id="form">
                    <form method="POST">
                        <div id="title">Entry Title: <input type="text" name="title" id="boxtitle" required></div><br>
                        <div id="summary">Entry Summary: </div><textarea rows="4" cols="50" name="summary" id="boxsummary" required></textarea><br>
                        <div id="category">Category: <select name="category" id="boxcategory" required>
                            <option value="work" selected>Work</option>
                            <option value="university">University</option>
                            <option value="family">Family</option>
                        </select><br></div>
                        <div id="name">Submitted By: <input type="text" name="name" id="boxname"><br></div>
                        <input type="submit" value="Submit" id="button">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>Designed by Chaniotis Vasileios-Efthymios, 2016</footer>
</div>
</body>
</html>

<?php

}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entryTitle = $_POST["entryTitle"];
    $entrySummary = $_POST["entrySummary"];
    $category = $_POST["category"];
    $submitter = $_POST["submitter"];
    include("connection.php");
    $sql = "INSERT INTO blogview(entryTitle, entrySummary, category, submitter) VALUES ('$entryTitle', '$entrySummary', '$category', '$submitter')";
    $result = mysqli_query($db, $sql);


    header("location: blog.php?id=" . mysqli_insert_id($db));
}
else {
    header("location: index.php");
}

?>