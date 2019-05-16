<html>
    <center>
        <head>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <h1>Search Engine</h1>
        <a href="index.php">Return to main page</a>
        <br>
        <br>
        <h1>Results:</h1>
        <?php
$search = $_GET['q'];
include "meekrodb.2.3.class.php";
require_once 'meekrodb.2.3.class.php';
DB::$user = '';
DB::$password = '';
DB::$dbName = '';
$query = DB::queryFirstRow("SELECT `TITLE`, `URL` from `sites` where `TITLE` = %s", $search);
$endURL = $query['URL'];
$resultTitle = $query['TITLE'];

echo "<a href='$endURL'>$endURL</a>";
if(is_null($query)) {
    # we did not find any results at all.
    if(!$search == ""){
    die("No Search Results. Try typing the site name, not domain. <strong>Example: Google</strong>");
}else{
}
}
?>
    </center>
</html>
