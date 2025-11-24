<?php
session_start();
$jivate_assets = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
if(isset($_SESSION["login"])){

    if($_SESSION["login"] != "true"){ 
        header("Location: $jivate_assets/admin/lock.php");
        die();
    }   
    
}else{
    
    header("Location: $jivate_assets/admin/lock.php");
    die(); 
    
}

$con = mysqli_connect("","","","");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
include "parts/header.php"
?>


                <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                       
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 style="display: inline-block;" class="panel-title">Lista joburi</h4>
                                    <a href="addjob.php" style="display: inline-block; float: right;" type="button" class="btn btn-warning btn-addon m-b-xxs"><i class="fa fa-spin fa-refresh"></i>Adauga job</a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>#</th>
                                                    <th>OFFER ID</th>
                                                    <th>Titlu</th>
                                                    <th>Locatie</th>
                                                    <th>Salariu</th>
                                                    <th>Tip</th>
                                                    <th>Actiune</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                        
                                                    $sql = "SELECT * FROM web_et_jobs ORDER BY type ASC";
                                                    $result = $con->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {
                                                         
                                                echo'
                                                
                                                    <th scope="row">
                                                    ';
                                                    
                                                    if($row["type"]==0){
                                                                $type = "Activ";
                                                                echo '<i class="fa fa-check"></i>';
                                                            }else{
                                                                $type = "Inactiv";
                                                                echo '<i style="color:red" class="fa fa-warning"></i>';
                                                            }
                                                    
                                                  echo'</th>
                                                    <td>'. $row["real_id"].'</td>
                                                    <td>'. $row["title"].'</td>
                                                    <td>'. $row["location"].'</td>
                                                    <td>'. $row["salary"].'</td>
                                                    <td>'. $type.'</td>
                                                ';
                                                echo '<td><a href="editjob.php?id='. $row["id"].'" type="button" class="btn btn-default btn-addon m-b-xxs"><i class="fa fa-edit"></i>Editeaza</a>
                                                <a href="deletejob.php?id='. $row["id"].'" type="button" class="btn btn-default btn-addon m-b-xxs"><i class="fa fa-trash"></i>Sterge</a></td>';
                                            echo '</tr>';

                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }

                                                ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                
                                
                        </div><!-- Row -->
                      
                    </div><!-- Main Wrapper -->

                    
                <div class="page-footer">
                    <p>Made with <i class="fa fa-heart"></i> by Jivate Network Group</p>
                </div>
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
      
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/plugins/pace/pace.min.js"></script>
        <script src="assets/js/flatifytheme.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
         
    </body>
</html>
