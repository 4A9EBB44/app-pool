<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://cdn.macdrop.net/wp-content/uploads/fbrfg/favicon.ico?v=eEvmMYJoQK">
    <title>Wishlist</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--------------------------------------------logo-------------------------------------->
<div class="logo"><a href="../index.html"><img src="../img/logo.png" alt="logo"></a></div>

<!--------------------------------------------Top Nav Bar-------------------------------------->
<nav>
    <ul>
        <li><a href="home.php" class="btn">Home</a></li>
        <li><a href="editor.php" class="btn">Editor's Choices</a></li>
        <li><a href="games.php" class="btn">Games</a></li>
        <li><a href="productivity.php" class="btn">Productivity</a></li>
        <li><a href="wishlist.php" class="selected">Wishlist</a></li>
    </ul>
</nav>
<!-------------------------------------------- Add to Wishlist ----------------------------------------->
<div class="wish">
    <form action="add.php" method="post">
        <input type="text" placeholder="Submit app name here..." name="wish">
        <button type="submit"><i class="fa fa-upload"></i></button>
    </form>
</div>

<!-------------------------------------------- Wishlist PHP ----------------------------------------->
<?php
$mysqli = new mysqli('localhost','root','','app-pool');
$table = 'wishlist';
    echo "<div>
            <table class='wishlist'>
                    <tr><td colspan='2'><b>Apps Already in the Wishlist</b></td></tr>
                    <tr><td><b><i>App Name</i></b></td><td><b><i>Data Added to Wishlist</i></b></td></tr>
    ";
$result = $mysqli->query("SELECT * FROM $table ORDER BY date DESC") or die($mysqli->error);
while($data = $result->fetch_assoc()){
    echo "
            <tr><td>{$data['app']}</td><td>{$data['date']}</td></tr>
    ";
}
    echo "
            </table>
         </div>
    ";
?>

<!--------------------------------------------footer---------------------------------------------->
<footer>
    <a href="https://twitter.com/4A9EBB44"><i class="fa fa-twitter"></i></a>&copy;Ender Wang. All Rights Reserved.
</footer>
</body>
</html>