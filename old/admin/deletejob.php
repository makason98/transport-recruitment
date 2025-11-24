<?php
    
    $con = mysqli_connect("","","","");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM web_et_jobs WHERE id='$id'";
        $result = $con->query($sql);
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
?>
