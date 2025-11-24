<?php
include("includes/header.php");
include("includes/sidebar.php");
include("../conn.php");


// Execute the SELECT statements
$ids=$_GET["s"];

$querysql = "SELECT * FROM questions_ru WHERE id ='$ids'";
$result1 = mysqli_query($conn, $querysql);
$rew = mysqli_fetch_row($result1);
$ques = $rew[3];
// Prepare the INSERT statement
$sql = "UPDATE questions_ru
SET question = ?, opt1 = ?, opt2 = ?, opt3 = ?, opt4 = ?, opt5 = ?, ans = ?
WHERE id = '$ids'
";

if (isset($_POST['SubmitButton'])) {
  // Get the form field values
 

  $question = $_POST['question'];
  $opt1 = $_POST['opt1'];
  $opt2 = $_POST['opt2'];
  $opt3 = $_POST['opt3'];
  $opt4 = $_POST['opt4'];
  $opt5 = $_POST['opt5'];
  $ans = $_POST['ans'];
 

  // Create a prepared statement
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the parameters with the form field values
  mysqli_stmt_bind_param($stmt, "sssssss", $question, $opt1, $opt2, $opt3, $opt4, $opt5, $ans);

  // Execute the statement
  mysqli_stmt_execute($stmt);

  // Redirect to the desired page
  echo '<script>window.location.href="questions.php";</script>';

  // Clean up
  mysqli_stmt_close($stmt);
}

?>

<div class="content-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <label
                    class="name-tag"
                    for="question_question_languages_attributes_0_description">
                    <h1>Редактируйте вопрос</h1>
                </label>
                <div class="row">
                    <div class="row q-data">
                        <div class="col-sm-12 col-md-12">
                            <div class="portlet-body">
                                <form
                                    class="form-horizontal"
                                    id="new_question"
                                    action=""
                                    accept-charset="UTF-8"
                                    method="post">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label
                                                class="name-tag"
                                                for="question_question_languages_attributes_0_description">Вопрос</label>
                                            <a
                                                data-target="#editor-help-modal"
                                                data-toggle="modal"
                                                class="q-type-icon"
                                                href="#">
                                                <i
                                                    class="fa fa-exclamation-circle blue fa-1x"
                                                    data-placement="right"
                                                    data-toggle="tooltip"
                                                    data-original-title="Вопрос"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea
                                                rows="10"
                                                cols="80"
                                                class="form-control"
                                                id="question-description"
                                                name="question"><?php echo $rew['3']; ?></textarea>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="name-tag control-label" for="question_exam_mode_id">Варианты ответа</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <textarea
                                                                placeholder="Варианты ответа 1"
                                                                cols="40"
                                                                class="form-control ckbasic ans-fill"
                                                                required="required"
                                                                name="opt1"><?php echo $rew['4']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group ">
                                                        <div class="col-md-9">
                                                            <textarea
                                                                placeholder="Варианты ответа 2"
                                                                cols="40"
                                                                class="form-control ckbasic ans-fill"
                                                                required="required"
                                                                name="opt2"><?php echo $rew['5']; ?></textarea>
                                                        </div>
                                                    </div><br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <textarea
                                                        placeholder="Варианты ответа 3"
                                                        cols="40"
                                                        class="form-control ckbasic ans-fill"
                                                        name="opt3"><?php echo $rew['6']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <div class="col-md-9">
                                                    <textarea
                                                        placeholder="Варианты ответа 4"
                                                        cols="40"
                                                        class="form-control ckbasic ans-fill"
                                                        name="opt4"><?php echo $rew['7']; ?></textarea>
                                                </div>
                                            </div><br/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <textarea
                                                        placeholder="Варианты ответа 5"
                                                        cols="40"
                                                        class="form-control ckbasic ans-fill"
                                                        name="opt5"><?php echo $rew['8']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="name-tag">Правильный ответ</label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea
                                                placeholder="Правильный ответ"
                                                rows="3"
                                                class="form-control"
                                                name="ans"><?php echo $rew['9']; ?></textarea>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="btn-row">
                                                <input
                                                    type="submit"
                                                    name="SubmitButton"
                                                    value="Редактировать"
                                                    class="btn green question-submit-btn vx-cust-btn btn-rgt"
                                                    data-disable-with="Create"/>
                                                <a class="btn default vx-cust-btn" href="questions.php">Назад</a>
                                            </div>
                                        </div>
                                    </div><br/><br/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
</body>
</html>