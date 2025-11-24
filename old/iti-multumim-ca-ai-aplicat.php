<?php
session_start();
if(isset($_SERVER['HTTP_REFERER'])) {

if(!isset($_SESSION['org_referer']))
{
    $_SESSION['org_referer'] = $_SERVER['HTTP_REFERER'];
}
}

    
    

global $ax;
global $ax_id;
global $id_inserted;
    
    
  

  function mysql_insert_array($table, $data, $exclude = array()) {
    global $ax;
    global $ax_id;
    global $id_inserted;
    $con = mysqli_connect("","","","");

      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


      $fields = $values = array();
      if( !is_array($exclude) ) $exclude = array($exclude);
      foreach( array_keys($data) as $key ) {
          if( !in_array($key, $exclude) ) {
              $fields[] = "`$key`";
              $values[] = "'".$data[$key]."'";
          }
      }
      $fields = implode(",", $fields);
      $values = implode(",", $values);
      $con->query("INSERT INTO `$table` ($fields) VALUES ($values)");
      
      $file= 'logme.txt';
      
      $data_n = "INSERT INTO `$table` ($fields) VALUES ($values)"."\n";
      fwrite($handle_1, $data_n);
      
      fclose($handle_1);
      

      $id_inserted = $con->insert_id;
      $con->query("CALL check_existence($id_inserted)");

      $result2 = mysqli_query($con, "select * from web_et_entries where id='$id_inserted'");
      while ($row = mysqli_fetch_assoc($result2))
         {
            if(!empty($row['candidates_id']))$ax="1";
            $ax_id = $row['candidates_id'];
         }
      mysqli_close($con);
      
      
  }


  $result = mysql_insert_array("web_et_entries", $_POST, "submit");

ob_end_clean();
include "includes/parts/header.php";
?>

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Iti multumim ca ai aplicat!</h2>
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
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                          <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                          <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                        </svg>
                        <p style="margin-top: 30px;
    font-size: 1.4rem;"class="success">In perioada 22 decembrie - 3 ianuarie suntem in concediu.<br>
Colegele noastre vă vor contacta pentru a va prezenta o ofertă începând cu 6 ianuarie.<br>
Sarbatori fericite tuturor!</p>


					</ul>
				</div>
			</div>
		</div>
	</section>



<?php

include "includes/parts/footer.php";

?>
