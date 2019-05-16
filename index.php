<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <center>
    <h1>Search Engine</h1>
    <title>Search Engine</title>    
    <form action="index.php" method="POST">
  Search: <input type="text" name="Search"><br>
  <input type="submit" name="search" value="Submit">
</form>
<?php
    if(isset($_POST['search'])){
        $query = $_POST['Search'];
     header("location: search.php?q=$query");
    }
?>

</center>
</html>
