<?php
session_start();
$jivate_assets = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
if(!isset($_SESSION['org_referer']))
{
    $_SESSION['org_referer'] = $_SERVER['HTTPS_REFERER'];
}
$con = mysqli_connect("","","","");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

include "includes/parts/header.php";?>

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Joburi disponibile</h2>
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
                        <?php

                            $sql = "SELECT * FROM web_et_jobs";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo '
                                    <li class="job-preview">
							<div class="content float-left">
								<h4 class="job-title">
									'. $row["title"].'
								</h4>
								<h5 class="company">
									'. $row["location"].'
								</h5>
							</div>
							<a href="'.$jivate_assets.'job.php?id='. $row["id"].'" class="btn btn-apply float-sm-right float-xs-left">
								Detalii
							</a>
						</li>
                        ';

                                }
                            } else {
                                echo "0 results";
                            }

                        ?>
					</ul>
				</div>
			</div>
		</div>
	</section>






<?php include "includes/parts/footer.php";
?>
