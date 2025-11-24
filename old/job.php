<?php
session_start();
if(isset($_SERVER['HTTP_REFERER'])) {

if(!isset($_SESSION['org_referer']))
{
    $_SESSION['org_referer'] = $_SERVER['HTTP_REFERER'];
}
}
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
$con = mysqli_connect("","","","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $query = "SELECT * FROM web_et_jobs WHERE id='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
include "includes/parts/header.php";?>

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2><?=$row['title']?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-page-area">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 col-md-12 col-12">
                   <div class="blog-left-bar">
                      <blockquote><div style="float: left;">Locatie: <?=$row['location']?></div> <div style="float: right;">Salariu: <?=$row['salary']?></div></blockquote>
                       <div class="blog-item">
                           <div class="blog-content-2">
                               <?=$row['description']?>
                           </div>
                       </div>
                       <?php if($row['type']!=1){?>

                        <form class="ui form" action="iti-multumim-ca-ai-aplicat.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="Aplicare-Job" value="DA">
                                <input type="hidden" name="Titlu job" value="<?=$row['title']?>">
                                <input type="hidden" name="Locatie job" value="<?=$row['location']?>">
                                <input type="hidden" name="Link_job" value="<?php echo'https://eu-truckers.com/job.php?id='.$_GET["id"].''?>">
                                <div class="field">
                                    <label>Prenume</label>
                                    <input type="text" name="first_name" placeholder="Nume" data-validation-error-msg="Te rog sa introduci numele si prenumele" data-validation="length" data-validation-length="min3">
                                </div>
                                <div class="field">
                                    <label>Nume</label>
                                    <input type="text" name="first_name" placeholder="Nume" data-validation-error-msg="Te rog sa introduci numele si prenumele" data-validation="length" data-validation-length="min3">
                                </div>
                                <div class="field">
                                    <label>Telefon</label>
                                    <input type="number" data-validation="number" data-validation-error-msg="Te rog sa introduci un numar de telefon corect" data-validation-allowing="range[10000000;1000000000000000000]" name="phone" placeholder="Telefon">
                                </div>
                                 <div class="field">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                 <div class="field">
                                    <label>Disponibilitate pentru relocare în Germania  </label>
                                    <div class="ui form">
                                      <div class="grouped fields">
                                        <div class="field">
                                          <div class="ui radio checkbox">
                                            <input type="radio" name="relocation" value="DA">
                                            <label>DA</label>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <div class="ui radio checkbox">
                                            <input type="radio" name="relocation" value="NU">
                                            <label>NU</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="ui form">
                                    <div class="field">
                                    <label>Limbi straine cunoscute</label>
                                    <div class="field">
                                      <label>Engleza</label>
                                      <div class="ui selection dropdown">
                                          <input type="hidden" name="engllish">
                                          <i class="dropdown icon"></i>
                                          <div class="default text">Engleza</div>
                                          <div class="menu">
                                              <div class="item" data-value="1">Incepator</div>
                                              <div class="item" data-value="2">Mediu</div>
                                              <div class="item" data-value="3">Avansat</div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label>Germana</label>
                                      <div class="ui selection dropdown">
                                          <input type="hidden" name="german">
                                          <i class="dropdown icon"></i>
                                          <div class="default text">Germana</div>
                                          <div class="menu">
                                              <div class="item" data-value="1">Incepator</div>
                                              <div class="item" data-value="2">Mediu</div>
                                              <div class="item" data-value="3">Avansat</div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label>Italiana</label>
                                      <div class="ui selection dropdown">
                                          <input type="hidden" name="italian">
                                          <i class="dropdown icon"></i>
                                          <div class="default text">Italiana</div>
                                          <div class="menu">
                                              <div class="item" data-value="1">Incepator</div>
                                              <div class="item" data-value="2">Mediu</div>
                                              <div class="item" data-value="3">Avansat</div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label>Franceza</label>
                                      <div class="ui selection dropdown">
                                          <input type="hidden" name="franch">
                                          <i class="dropdown icon"></i>
                                          <div class="default text">Franceza</div>
                                          <div class="menu">
                                              <div class="item" data-value="1">Incepator</div>
                                              <div class="item" data-value="2">Mediu</div>
                                              <div class="item" data-value="3">Avansat</div>
                                          </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>






                            </div>
                            <div class="col-lg-6">

                                <div class="field">
                                    <label>Experienta</label>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_1" value="1" /><label>Prelata</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_2" value="1" /><label>Cisterna</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_3" value="1" /><label>Containere</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_4" value="1" /><label>Tandem</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_5" value="1" /><label>Frigo</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="experience_6" value="1" /><label>A 5-a roata</label>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>ADR</label>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="adr_collets" value="1" /><label>ADR COLETE</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="adr_cistern" value="1" /><label>ADR CISTERNE</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="adr_general" value="1" /><label>ADR (INCARCATURA GENERALA)</label>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Experienta</label>
                                    <div class="ui form">
                                      <div class="grouped fields">
                                        <div class="field">
                                          <div class="ui radio checkbox">
                                            <input type="radio" name="driver_experience" value="1">
                                            <label>Incepator</label>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <div class="ui radio checkbox">
                                            <input type="radio" name="driver_experience" value="2">
                                            <label>Experienta peste 1 an</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Ce tip de permis ai?</label>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_1" value="1" /><label>B</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_2" value="1" /><label>C</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_3" value="1" /><label>C1E</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_4" value="1" /><label>CE</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_5" value="1" /><label>D</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_6" value="1" /><label>DE</label>
                                    </div>
                                </div>

                                <div class="field">
                                      <label>Disponibilitate</label>
                                      <div class="ui selection dropdown">
                                          <input type="hidden" name="disponibility">
                                          <i class="dropdown icon"></i>
                                          <div class="default text">Disponibilitate</div>
                                          <div class="menu">
                                              <div class="item" data-value="1">Imediat</div>
                                              <div class="item" data-value="2">1-2 saptamani</div>
                                              <div class="item" data-value="3">1 luna</div>
                                          </div>
                                      </div>
                                    </div>

                            </div>


                        </div>

                    <div style="margin-top:15px;margin-bottom:35px;"class="row">
                        <div class="col-lg-6">
                             <div class="field">
                                    <label>GDPR</label>
                                    <div class="ui checkbox">
                                        <input data-validation="checkbox_group" data-validation-qty="min1" data-validation-error-msg="Te rog sa accepti ca datele furnizate de tine sa fie procesate si folosite de European Work Power" type="checkbox" name="Consimtamant" value="Sunt de acord ca datele mele personale sa fie prelucrate de European Work Power" required=""/><label>Accept ca datele personale furnizate de mine sa fie folosite pentru a primi date si informatii din partea European Work Power</label>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-6">
                            <button class="ui button aplica" type="submit">Aplica</button>
                        </div>
                    </div>



                    </form>


















                       <?php }else{?>
                        <div style="margin-bottom: 200px;" class="ui form warning">
                          <div class="ui warning message">
                            <div class="header">Ne pare rau dar acest job nu mai este disponibil!</div>
                            <ul class="list">
                                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'];?>/#joburi"> Poti vedea aici lista completa de joburi.</a></li>
                            </ul>
                          </div>
                        </div>
                       <?php }?>
                       <!--
                        <div class="tag-share">
                            <div class="tag">
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Law</a></li>
                                </ul>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       -->
                    </div>
                </div>
           </div>
       </div>
   </div>







<?php
        mysqli_close($con);
        include "includes/parts/footer.php";
    }
?>
