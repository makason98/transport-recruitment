<?php
session_start();
$error = '';
$_SESSION["error"] ='';
$_SESSION["greeting"] ='';
if(!empty($_POST)){
    $con = mysqli_connect("","","","");
    if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

    if(empty($_POST["country"])){
        $_SESSION["error"] = "Trebuie sa selectezi tara de provenienta a numarului de telefon"; 
    }
    if(empty($_POST["phone"])){
        $_SESSION["error"] = "Trebuie sa introduci numarul de telefon";
       
    }

    if(empty($_SESSION["error"])){
    $phone = '00'.$_POST["country"].'-'.$_POST["phone"];

    $result = $con->query("SELECT * FROM candidates WHERE phone='$phone' LIMIT 1");
    $row2 = mysqli_fetch_assoc($result);

    if($result->num_rows == 0) {
        $_SESSION["error"] = "Ne pare rau dar nu am putut sa te gasim in baza de date cu numarul: <b>+".$_POST["country"].$_POST["phone"].'</b>';
    } else {
    
    $id = $row2["candidates_id"];
    $surname = $row2["Surname"];

    $result = $con->query("SELECT * FROM cnd_app_users WHERE candidates_id='$id' LIMIT 1");
    $row3 = mysqli_fetch_assoc($result);

    $token = $row3["token"];
    $phone2 = $_POST["country"].'-'.$_POST["phone"];
    $message1 = "Bine te-am regăsit $surname,%0aAm actualizat oferta locurilor de muncă pentru soferi cat.C+E%0aIntră pe linkul de mai jos sa vezi ultimele job-uri adăugate, care se potrivesc cerințelor tale.%0aCu stima, echipa Eu-Truckers";
    $message2 = "https://mcgp.europeanworkpower.com/token/$token";
    $con->query("INSERT INTO app_notifications (phone, message) VALUES ('$phone2', '$message1')");
    $con->query("INSERT INTO app_notifications (phone, message) VALUES ('$phone2', '$message2');");
    //$con->query("CALL write_app_nofifications('$id')");
    //$con->query("INSERT INTO app_notifications (phone, message) VALUES (value1, value2);");
    /*Bine te-am regăsit [NAME],Am actualizat oferta locurilor de muncă. Intră sa vezi ultimele job-uri adăugate care se potrivesc cerințelor tale.*/
    $_SESSION["greeting"] = "Am trimis un SMS pe numarul: <b>+".$_POST["country"].$_POST["phone"].'</b><br> Prin acel SMS vei putea vedea ofertele valabile';
    //echo '<style>.hide{display:none !important}</style>';
    header('Location: '.$_SERVER['REQUEST_URI'].'?sended=true');
    }
    }
}

include "includes/parts/header.php";

if($_GET["sended"]=="true"){
    echo '<style>.hide{display:none !important}</style>';
}
?>
<style>.search {
    text-align: right;
    margin-top: 0px;
}</style>

    <div style="height: 30vh; min-height:100px" class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2 style="font-size: 2em;">Oferte personalizate</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<ul class="job-list">

                            <form id="phonenoti" method="post">
                            <h3 class="hide">Pentru a primi o ofertă personalizată în funcție de experiența ta, te rugăm să introduci mai jos numărul tău de telefon</h3>
                            <?php 
                            if(!empty($_SESSION["error"])){
                                echo' <div class="ui negative message">
                                <i class="close icon"></i>
                                <div class="header">
                                   Ne pare rau dar a aparut o problema
                                </div>
                                <p>'.$_SESSION["error"].'</p>
                                </div>';
                            }
                            if(($_GET["sended"]=="true")){
                                echo' <div class="ui positive message">
                                <i class="close icon"></i>
                                <div class="header">
                                   Felicitari
                                </div>
                                <p>Am trimis un SMS!<br>Prin acel SMS vei putea vedea ofertele valabile</p>
                                </div>';
                            }
                            $_SESSION["error"] ="";
                            $_SESSION["greeting"] = "";
                           ?>

                            <div class="ui action input hide">
                            <select name="country" class="ui compact selection dropdown">
                                <option value="" selected disabled>Tara</option>
                                <option value="40">Romania +40</option>
                                <option value="49">Germania +49</option>
                                <option value="39">Italia +39</option>
                                <option value="34">Spania +34</option>
                                <option value="44">Marea Britanie +44</option>
                            </select>
                            <input type="text" name="phone" placeholder="Introdu numarul de telefon">
                            <button type="submit" form="phonenoti" class="ui button">Trimite</button>
                            
                            </div>
                            
                            </form>

					</ul>
				</div>
			</div>
		</div>
	</section>



<?php

include "includes/parts/footer.php";

?>
