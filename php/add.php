<?php
    $mysqli = mysqli_connect('localhost','root','','app-pool');
    if($mysqli == false){
        die("Error connecting Wishlist DB".mysqli_connect_error());
    }else echo "Connected to Wishlist DB";

    $findDup = mysqli_query($mysqli,"DELETE FROM wishlist WHERE UPPER(app) LIKE UPPER('$_POST[wish]')");
    if($findDup){
        $addSQL = mysqli_query($mysqli,"INSERT INTO wishlist(app, date) VALUES ('$_POST[wish]',null)");
        echo "<br>
                <script>
                    alert('Requested app submitted successfully!');
                </script>
        ";
    }else{
        echo "Error";
    }
    header('Location: wishlist.php');//with this line executing, the echo alert won't be seen
?>