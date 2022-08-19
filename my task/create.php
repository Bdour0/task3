<?php

include 'config.php';
include 'header.php';

?>

<div class="container">

<?php
if (isset($_GET['submit'])) {
    if (empty($_GET['title'])  OR empty($_GET['content'])){
        echo '<p class="alert-warning">
        The field cannot be left blank
        </p>';
    } else{
        $date = date('Y-m-d');
        mysqli_query($db_connect, "insert into posts(title, content, created_at) values('$_GET[title]', '$_GET[content]', '$date')");

        echo '<p class=""alert alert-success">
        Added
        </p>';
    }
}
?>

<h1>ADD NOTE</h1>
<form action="create.php" method="GET">
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Enter title"/>
    </div>
    <div class="form-group">
        <textarea name="content" rows="10" class="form-control" placeholder="Enter about"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-lg btn-primary" value="ADD note">
</form>

</div>
<?php
include 'footer.php';
?>


