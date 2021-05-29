<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://cdn.macdrop.net/wp-content/uploads/fbrfg/favicon.ico?v=eEvmMYJoQK">
    <title>Home</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/clickToTop.js"></script>
</head>
<body>
<!--------------------------------------------logo-------------------------------------->
<div class="logo"><a href="../index.html"><img src="../img/logo.png" alt="logo"></a></div>

<!--------------------------------------------Top Nav Bar-------------------------------------->
<nav>
    <ul>
        <li><a href="home.php" class="selected">Home</a></li>
        <li><a href="editor.php" class="btn">Editor's Choices</a></li>
        <li><a href="games.php" class="btn">Games</a></li>
        <li><a href="productivity.php" class="btn">Productivity</a></li>
        <li><a href="wishlist.php" class="btn">Wishlist</a></li>
    </ul>
</nav>

<!-------------------------------------------- Search Box----------------------------------------->
<div class="search">
    <form method="post" action="search.php">
        <input type="text" placeholder="Search App Name..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<center><span>**Search Apple Name <i style="color: black">Correctly</i> to get its Apple ID and Password!!!**</span><br></center>

<!-------------------------------------------- One click to top ----------------------------------------->
<div>
    <a href=""><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button></a>
</div>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<!-------------------------------------------- Home PHP ----------------------------------------->
    <?php
    $mysqli = new mysqli('localhost','root','','app-pool');
    $table = 'home';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);
    while($data = $result->fetch_assoc()){
        echo "
        <div class='app-grid'>
            <table>
                <tr>
                <td><h2>App</h2></td><td><h2>Account/Password</h2></td></tr>
                <tr><td><img src='../{$data['path']}' width='70px' height='70px'></td>
                <td><button style='width: 100%; height: 100%; border: none; background-color: transparent' onclick='{$data['icon']}()'>
                    <h2><input class='myInputStyle' style='border: none; background: none; font-size: 24px; font-family: Chalkboard; text-align: center; font-weight: bold' type='text' value='{$data['id']}' id='{$data['icon']}'></h2>
                    </button>
                </td>
                </tr>
                
                <tr>
                <td><h2>{$data['icon']}</h2></td>
                <td><button style='width: 100%; height: 100%; border: none; background-color: transparent' onclick='{$data['password']}()'>
                    <h2><input class='myInputStyle' style='border: none; background: none; font-size: 24px; font-family: Chalkboard; text-align: center; font-weight: bold' type='text' value='{$data['password']}' id='{$data['password']}'></h2>
                    </button>
                </td>
                </tr>
            </table>
        </div>
        
        <!--Click to copy ID-->
        <script>
        function {$data['icon']}() {
          var copyText = document.getElementById('{$data['icon']}');
          copyText.select();
          copyText.setSelectionRange(0, 99999)
          document.execCommand('copy');
          alert('Apple ID copied: ' + copyText.value);
        }
        </script>
        <!--Click to copy pwd-->
        <script>
        function {$data['password']}() {
          var copyText = document.getElementById('{$data['password']}');
          copyText.select();
          copyText.setSelectionRange(0, 99999)
          document.execCommand('copy');
          alert('Password copied: ' + copyText.value);
        }
        </script>
        
        ";
    }
    ?>

<!--------------------------------------------footer---------------------------------------------->
<footer>
    <a href="https://twitter.com/4A9EBB44"><i class="fa fa-twitter"></i></a>&copy;Ender Wang. All Rights Reserved.
</footer>
</body>
</html>