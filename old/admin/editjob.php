<?php
session_start();
if(isset($_SESSION["login"])){

    if($_SESSION["login"] != "true"){ 
        header("Location: https://eu-truckers.com/admin/lock.php");
        die();
    }   
    
}else{
    
    header("Location: https://eu-truckers.com/admin/lock.php");
    die(); 
    
}




if(empty($_GET["id"]))
{
   return; 
}
$id = $_GET["id"];
$con = mysqli_connect("","","","");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (!empty($_POST)){
    
if (empty($_POST["title"]) && empty($_POST["type"]) && empty($_POST["salary"]) && empty($_POST["location"]) && empty($_POST["description"])){
    
}else{
$title = $_POST["title"];
$type = $_POST["type"];
$real_id = $_POST["real_id"];
$salary = $_POST["salary"];
$location = $_POST["location"];
$description = $_POST['content'];
 
// Attempt insert query execution
$sql = "UPDATE web_et_jobs SET title='$title', real_id='$real_id', description='$description', salary='$salary', location='$location', type='$type' WHERE id=$id";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
}else{
    
}
// Close connection



include "parts/header.php";


    $query = "SELECT * FROM web_et_jobs WHERE id='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

mysqli_close($con); 
?>

<div class="page-inner no-page-title">
<div id="main-wrapper">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-darkblue">
                <div class="panel-heading clearfix">
                    <h4 style="display: inline-block;" class="panel-title">Adauga un job nou</h4>
                </div>
                <div class="panel-body">


                    <form method="post" action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="input-Default" class="col-sm-2 control-label">Titlu</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="<?=$row['title']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-Default" class="col-sm-2 control-label">ID Real</label>
                            <div class="col-sm-10">
                                <input type="text" name="real_id" class="form-control" value="<?=$row['real_id']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-Default" class="col-sm-2 control-label">Locatie</label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" value="<?=$row['location']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-Default" class="col-sm-2 control-label">Salariu</label>
                            <div class="col-sm-10">
                                <input type="text" name="salary" class="form-control" value="<?=$row['salary']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Stare</label>
                            <div class="col-sm-10" data-children-count="2">
                                <select name="type" class="form-control form-select-options">
                                    <option value="0">Activ</option>
                                    <option value="1">Inactiv</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-Default" class="col-sm-2 control-label">Descriere</label>
                            <div class="col-sm-10">
                                <textarea class="summernote" id="summernote" name="content">
                                <?=$row['description']?>
                                </textarea>


                                <div class="sssummernote"></div>
                            </div>
                        </div>

                        
                        <button style="display: inline-block; float: right;" type="submit" class="btn btn-warning btn-addon m-b-xxs"><i class="fa fa-spin fa-refresh"></i>Editeaza job</button>


                    </form>



                </div>
            </div>


        </div><!-- Row -->
    </div>
</div><!-- Main Wrapper -->



<?php
include "parts/footer.php";
?>
