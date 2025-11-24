<?php
session_start();

if(isset($_SERVER['HTTP_REFERER'])) {

if(!isset($_SESSION['org_referer']))
{
    $_SESSION['org_referer'] = $_SERVER['HTTP_REFERER'];
}
}

$con = mysqli_connect("","","","");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

include "includes/parts/header.php";?>
    <!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="assets/images/slider/1.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>Cauți un post de șofer de tir mai bine plătit în Germania?</span> <span>Ai ajuns unde trebuie!</span></h2>
                            <div class="btns">
                                <div class="btn-style"><a href="#aplica">Aplica</a></div>
                                <div class="btn-style"><a href="#joburi">Joburi disponibile</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="assets/images/slider/2.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>Beneficii multiple: diurnă zilnică asigurată, ore suplimentare platite,</span> <span>diverse scheme de bonusare în funcție de performanțe.</span></h2>
                            <div class="btns">
                                <div class="btn-style"><a href="#aplica">Aplica</a></div>
                                <div class="btn-style"><a href="#joburi">Joburi disponibile</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="assets/images/slider/3.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>Suport garantat de la aplicare până la angajare.</span></h2>
                            <div class="btns">
                                <div class="btn-style"><a href="#aplica">Aplica</a></div>
                                <div class="btn-style"><a href="#joburi">Joburi disponibile</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    <!-- section-section start
    <div class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-d">
                    <div class="section-item">
                        <div class="section-icon">
                            <i class="fi flaticon-ship"></i>
                        </div>
                        <div class="section-content">
                            <p><a href="ocean.html">Ocean Freight</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-d">
                    <div class="section-item">
                        <div class="section-icon">
                            <i class="fi flaticon-truck"></i>
                        </div>
                        <div class="section-content">
                            <p><a href="road.html">Road Freight</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-d">
                    <div class="section-item">
                        <div class="section-icon">
                            <i class="fi flaticon-plane"></i>
                        </div>
                        <div class="section-content">
                            <p><a href="Freight.html">Air Freight</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-d">
                    <div class="section-item">
                        <div class="section-icon">
                            <i class="fi flaticon-delivery"></i>
                        </div>
                        <div class="section-content">
                            <p><a href="#">Warehousing</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    section-section end -->





<div class="features-area features-style-2">
        <div class="container">
            <div class="section-title text-center">
                <h1>Beneficii</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="features-item features-item-2">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="feature-wrap">
                                <div class="features-icon feature-icon3">
                                    <i class="flaticon-lock"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Angajator german</h3>
                                    <p>Colaborăm cu peste 300 de angajatori germani care își respectă contractele și angajații. Ne vom asigura că oamenii pentru care vei lucra sunt de încredere și îți oferă acea stabilitate pentru care germanii sunt faimoși.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="feature-wrap">
                                <div class="features-icon feature-icon3">
                                    <i class="flaticon-agreement"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Seriozitate și încredere</h3>
                                    <p>Contractele se semnează pe Germania direct cu angajatorul tău. Totul este legal, în conformitate cu cerințele promulgate de U.E.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="feature-img">
                            <img style="margin-top: 25%;margin-bottom: 25%" src="assets/images/truck.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-item">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="feature-wrap">
                                <div class="features-icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Suport</h3>
                                    <p>Punem la dispoziția ta un asistent personal care: îți va face o ofertă de muncă cât mai avantajoasă, ținând cont de pregătirea, experiența și nevoile tale. Te va sprijini pe durata interviului cu angajatorul german. Îți va oferi suport pe întreaga durată a călătoriei până la angajator.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="feature-wrap">
                                <div class="features-icon">
                                    <i class="flaticon-coin"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Costuri</h3>
                                    <p>Ne vom ocupa de tot procesul de recrutare fără niciun cost din partea ta! Odată ce vei fi acceptat la jobul pentru care ai aplicat, poți să începi să îți faci bagajele. Costurile transportului vor fi suportate integral de noi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- .about-area start -->
    <div class="about-area" id="aplica">


        <div style="margin-top:25px" class="container">
            <center><h4 style="margin:15px;">ℹ️ APLICĂ AICI PENTRU O OFERTĂ PERSONALIZATĂ</h4></center>
            <div class="row">
                <div class="col-lg-8">
                    <form id="formular" class="ui form" action="iti-multumim-ca-ai-aplicat.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="field">
                                    <label>Prenume</label>
                                    <input type="text" name="first_name" placeholder="Prenume" data-validation-error-msg="Te rog sa introduci prenumele" data-validation="length" data-validation-length="min3">
                                </div>
                                <div class="field">
                                    <label>Nume</label>
                                    <input type="text" name="last_name" placeholder="Nume" data-validation-error-msg="Te rog sa introduci numele" data-validation="length" data-validation-length="min3">
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
                                            <input type="radio" name="relocation" value="1">
                                            <label>DA</label>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <div class="ui radio checkbox">
                                            <input type="radio" name="relocation" value="0">
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
                                          <input type="hidden" name="english">
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
                                          <input type="hidden" name="french">
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
                                    <label>Curse</label>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="drives_1" value="1" /><label>Pe distange lungi</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="drives_2" value="1" /><label>Pe distange scurte</label>
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
                                    <label>Cazare</label>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="accommodation_1" value="1" /><label>Modul plata angajator</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="accommodation_2" value="1" /><label>Camion</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="accommodation_3" value="1" /><label>Locuinta in regie proprie</label>
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
                                        <input type="checkbox" name="license_7" value="1" /><label>D1</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="license_6" value="1" /><label>DE</label>
                                    </div>
                                    
                                </div>
                                <div class="field">
                                    <label>Salariu dorit ( in mana - euro )</label>
                                    <input type="text" name="salary">
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
                                        <input data-validation="checkbox_group" data-validation-qty="min1" data-validation-error-msg="Te rog sa accepti ca datele furnizate de tine sa fie procesate si folosite de European Work Power" type="checkbox" name="gdpr" value="1" required/><label>Accept ca datele personale furnizate de mine sa fie folosite pentru a primi date si informatii din partea European Work Power</label>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-6">
                            <button class="ui button aplica" type="submit">Aplica</button>
                        </div>
                    </div>



                    </form>
                </div>
                <div class="col-lg-4 sec-p">
                    <div class="about-content">
                        <div class="about-icon">
                            <i class="fi flaticon-travel"></i>
                        </div>
                        <h2>Contact</h2>
                        <span>Email: candidati@eu-truckers.com</span>
                        <span>Telefon: +40 735 183 011</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
  <!-- .about-area start
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/images/about/about.svg" alt="">
                   </div>
                </div>
                <div class="col-lg-6 sec-p">
                    <div class="about-content">
                        <div class="about-icon">
                            <i class="fi flaticon-travel"></i>
                        </div>
                        <h2>Who We Are?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
                        <span>Long established fact that a reader</span>
                        <span>We making it look like readable English.</span>
                        <span>Long established fact that a reader</span>
                    </div>
                    <div class="signature-section">
                        <div class="si-text">
                            <p>Ketty Raigott</p>
                            <span>Chairman & Chief Executive Officer</span>
                        </div>
                        <img src="assets/images/about/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     about-area end
     service-area start
    <div class="service-area service-s2">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <span>We Provide the Best</span>
                    <h2>Our Service</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="fi flaticon-truck"></i>
                            </div>
                            <h2>Land Transport</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="fi flaticon-ship"></i>
                            </div>
                            <h2>Sea Freight</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="fi flaticon-plane"></i>
                            </div>
                            <h2>Air Freight</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="fi flaticon-construction"></i>
                            </div>
                            <h2>Logistic Solutions</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="flaticon-truck-2"></i>
                            </div>
                            <h2>Packaging and Store</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-single">
                            <div class="service-icon">
                                <i class="flaticon-trolley"></i>
                            </div>
                            <h2>Warehousing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    service-area end
     start track-section
    <section class="track-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="track">
                        <h3>Enter Your Email and Track Your Cargo</h3>
                        <div class="tracking-form">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </form>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Tracking Number">
                                    </form>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <button type="submit">Track Your Cargo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <end container
    </section>
    <!-- end track-section -->
    <!-- feature-area start -->
    <div class="features-area features-style-2" id="joburi">
        <div class="container">
            <div class="section-title text-center">
                <h2>Uite câteva dintre joburile disponibile în acest moment<br><span>Dacă nu găsești ceva potrivit, Aplică Aici, iar noi vom căuta o ofertă cât mai avantajoasă pentru tine și te vom suna imediat!</span></h2>
            </div>




	<section>
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



        </div>
    </div>
    <!-- feature-area start -->










    <!-- counter-area start
    <div class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="counter-content">
                        <h2>Our Some Important Things That will Satisfite You...</h2>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.Many desktop publishing packages and web page editors now</p>
                        <div class="btns">
                            <div class="btn-style btn-style-3"><a href="#">Learn More About Us...</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="counter-grids">
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="4,012">00</span></h2>
                            </div>
                            <p>Delivered Packages</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="605">00</span></h2>
                            </div>
                            <p>Countries Covered</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="920">00</span></h2>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="3,592">00</span></h2>
                            </div>
                            <p>Tons of Goods</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     counter-area end -->

    <!-- testimonial-area start -->
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial-active owl-carousel">
                        <div class="testimonial-wrap">
                            <div class="testimonial-img">
                                <img src="https://graph.facebook.com/100000878227676/picture?type=large" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>O companie care se gandeste la nevoile soferilor!</p>
                                    <h4>Dan Floruta</h4>
                                </div>
                            </div>
                            <div class="test-c d-none d-lg-block"></div>
                            <div class="test-b d-none d-lg-block"></div>
                        </div>
                        <div class="testimonial-wrap">
                            <div class="testimonial-img">
                                <img src="https://graph.facebook.com/100005792053981/picture?type=large" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>O companie care intr-adevar intelege nevoile soferilor din toate punctele de vedere, asa ca nu ezitati sa aplicati.
Recomand cu mare incredere!</p>
                                    <h4>Adrian Titus</h4>

                                </div>
                            </div>
                            <div class="test-c d-none d-lg-block"></div>
                            <div class="test-b d-none d-lg-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->
     <!-- blog-area start
    <div class="blog-area blog-style-2">
        <div class="container">
            <div class="col-l2">
                <div class="section-title section-title-3 text-center">
                    <span>Stay With Our Blog</span>
                    <h2>Our Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/blog/4.jpg" alt="">
                            <div class="blog-s-text">
                                <div class="blog-content">
                                    <h3>We can ensure you about the safe delevery</h3>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-content blog-content2">
                                    <h3><a href="blog-details.html">We can ensure you about the safe delevery</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                    <a href="blog-details.html">Read more...</a>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/blog/5.jpg" alt="">
                            <div class="blog-s-text">
                                <div class="blog-content">
                                    <h3>We can ensure you about the safe delevery</h3>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-content blog-content2">
                                    <h3><a href="blog-details.html">We can ensure you about the safe delevery</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                    <a href="blog-details.html">Read more...</a>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/blog/6.jpg" alt="">
                            <div class="blog-s-text">
                                <div class="blog-content">
                                    <h3>We can ensure you about the safe delevery</h3>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-content blog-content2">
                                    <h3><a href="blog-details.html">We can ensure you about the safe delevery</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                    <a href="blog-details.html">Read more...</a>
                                </div>
                                <div class="blog-content-sub blog-content-sub-2">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li>October 13, 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     blog-area start -->
<?php
include "includes/parts/footer.php"; ?>
