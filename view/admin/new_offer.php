<?php
include("includes/header.php");
include("includes/sidebar.php");
include("../conn.php");

// Prepare the SELECT statements
$queri = "SELECT subject FROM subjects";
$query = "SELECT class FROM classes";

// Execute the SELECT statements
$result = mysqli_query($conn, $queri);
$res = mysqli_query($conn, $query);

// Prepare the INSERT statement
$sql = "INSERT INTO questions_ru (subject, marks, question, opt1, opt2, opt3, opt4,opt5, ans, name) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?)";

if (isset($_POST['SubmitButton'])) {
  // Get the form field values
  $subject = $_POST['subject'];
  $marks = $_POST['marks'];
  $question = $_POST['question'];
  $opt1 = $_POST['opt1'];
  $opt2 = $_POST['opt2'];
  $opt3 = $_POST['opt3'];
  $opt4 = $_POST['opt4'];
  $opt5 = $_POST['opt5'];
  $ans = $_POST['ans'];
  $name = $_POST['name'];

  // Create a prepared statement
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the parameters with the form field values
  mysqli_stmt_bind_param($stmt, "ssssssssss", $subject, $marks, $question, $opt1, $opt2, $opt3, $opt4, $opt5, $ans, $name);

  // Execute the statement
  mysqli_stmt_execute($stmt);

  // Redirect to the desired page
  echo '<script>window.location.href="questions.php";</script>';

  // Clean up
  mysqli_stmt_close($stmt);
}

include("includes/footer.php");
?>

<div class="content-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h3>Новый вопрос</h3>
                <p>1.Выберите субьект и категорию, к которой относится вопрос. Оценку как и есит 1</p><hr/>
                <p>2.В поле «Вопрос» мы вводим вопрос, а в поле «Ответы» вводим варианты ответа</p><hr/>
                <p>3.В поле «Правильный ответ» введите ответ полностью. !! ответ должен быть в
                    варианте ответа, затем скопирован в поле "правильный ответ"</p><hr/>
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
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="name-tag control-label">Субьект</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control" required="required" name="name">
                                                            <option disabled="disabled" selected="selected">- Выберите -</option>
                                                            <?php
                                                                    $row = mysqli_fetch_row($res);
                                                                    $sub = $row[0];
                                                                    echo '<option value="'. $sub .'">'. $sub .'</option>"'; 
                                                                        
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <label class="name-tag control-label">Категорий</label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <select class="form-control" required="required" name="subject">
                                                            <option disabled="disabled" selected="selected" value="">- Выберите -</option>
                                                            <?php
                                                                    while($row = mysqli_fetch_row($result)){ 
                                                                        $cla = $row[0];
                                                                        echo '<option value="'. $cla .'">'. $cla .'</option>"'; 
                                                                        }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="name-tag control-label" for="question_mark">Оценка</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input
                                                            value="1"
                                                            class="form-control small text-wide-150"
                                                            required="required"
                                                            step="1"
                                                            min="1"
                                                            max="5"
                                                            type="number"
                                                            name="marks"
                                                            id="question_mark"/>
                                                    </div>
                                                </div><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                data-original-title="Question Here"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea
                                            rows="10"
                                            cols="80"
                                            class="form-control"
                                            id="question-description"
                                            name="question"></textarea>
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
                                                            name="opt1"></textarea>
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
                                                            name="opt2"></textarea>
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
                                                    name="opt3"></textarea>
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
                                                    name="opt4"></textarea>
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
                                                    name="opt5"></textarea>
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
                                            name="ans"></textarea>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="btn-row">
                                            <input
                                                type="submit"
                                                name="SubmitButton"
                                                value="Создать"
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