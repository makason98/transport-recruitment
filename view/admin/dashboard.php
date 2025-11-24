<?php
$host = "";
$username = "";
$password = "";
$database = "";


// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Set character set
mysqli_set_charset($con, 'utf8');
include("includes/header.php");
// dashboard.php

session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}

// Retrieve the username from the session
$loggedInUser = $_SESSION["username"];

$query = "SELECT * FROM job_offers";
        $result = mysqli_query($con, $query);

        if (isset($_POST['delete_id'])) {
            $id = $_POST['delete_id'];
            $query = "DELETE FROM job_offers WHERE job_offers_id = $id";
            mysqli_query($con, $query);
            echo '<script>window.location.href="dashboard.php";</script>';
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<div class="content-main">
    <div class="container-fluid">
        <div class="row">
        <h1>Bun venit, <?php echo $loggedInUser; ?>!</h1>
            <div class="col-sm-12 col-md-12">
                <h3>Oferte de munca eu-trackers</h3>
                <hr/>
                <p>Aici avem lista de Oferte pentru munca.</p>
                <p>1. Pentru a adauga o oferta apasa pe 'Adauga oferta'</p>
                <p>2. Pentru a modifica o oferta apasati pe titlul ofertei(albastru)</p>
                <p>3. Pentru a sterge o oferta apasati pe butonul 'Sterge'</p>
                <div class="row q-data">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="new-link">
                                        <a class="btn btn-success" href="new_offer.php">
                                            <i class="fa fa-plus add" data-toggle="tooltip"></i>Adauga oferta</a>
                                    </div>
                                    <ul class="pagination"></ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                            <table class="table table-hover sortable">
    <thead>
        <tr>
            <th>NR</th>
            <th>Titlu</th>
            <th>Actiune</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $order = 1; // Initialize the loop order variable

        while ($row = mysqli_fetch_array($result)) {

            echo "<tr>
                    <td>" . $order . "</td>
                    <td>
                        <a href='preview_offer.php?s=" . $row['job_offers_id'] . "'>". $row['title'] . "</a>
                    </td>
                    <td>
                        <form action='dashboard.php' method='post'>
                            <button name='delete_id' value=" . $row['job_offers_id'] . " type='submit' class='btn btn-danger' type='button'>Sterge</button>
                        </form>
                    </td>
                </tr>";
            
            $order++; // Increment the loop order variable
        }
        ?>
    </tbody>
</table>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

</body>
</html>
<script>
        function logout() {
            // Redirect to logout.php when the logout button is clicked
            window.location.href = 'logout.php';
        }
    </script>
    