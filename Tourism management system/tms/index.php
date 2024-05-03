<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>My Travel - my memory</title>
  <meta name="description" content="Traveller">
  <meta name="author" content="WebThemez">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
  <!-- Owl Carousel Assets -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
 <div id="#top"></div>
 <section id="home">
  <div class="banner-container">
    <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
    <div class="container banner-content">
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Travel Plans</h2>
          <p>Get your plans right away.. enjoy!!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Amazing Tours</h2>
          <p>Travel you remember for life long!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Best Travel Travel</h2>
          <p>Get best deals at our place</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div> 
      </div>
    </div>
  </div>
</section>
<section id="introText">
  <div class="container">
    <div class="text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <h1>Our Travel Gives You a Great Holiday Package. </h1>
    </div>
  </div>
</section>
<!--About-->
<section id="aboutUs" class="secPad">
  <div class="container">

    <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <!-- Heading -->
      <h2>About Us</h2>
      <p>.</p>
    </div>
    <div class="row adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <div class="col-md-4"><img src="images/logo-color.png" alt="" width="1000" height="1000" class="img-responsive img-thumbnail"></div>
      <div class="col-md-8">
        <p><strong>Introduction to Rwanda Global Travels</strong></p> 
        <p>Rwanda Global Travels is a prominent travel company based in Rwanda that specializes in offering exceptional tourism experiences to visitors who wish to explore the beauty and culture of the country. The company prides itself on providing top-notch services that cater to the diverse needs and preferences of tourists, ensuring a memorable and enriching travel experience.</p>
        <p><strong>Services Offered by Rwanda Global Travels</strong></p>
        <p>Rwanda Global Travels offers a wide range of services aimed at facilitating seamless travel experiences for tourists visiting Rwanda. Some of the key services provided by the company include:</p>
        <ol>
          <li>
            <p><strong>Customized Tour Packages</strong>: The company offers customized tour packages that are tailored to meet the specific requirements and interests of individual travelers. These packages can include visits to popular tourist attractions, cultural experiences, wildlife safaris, and more.</p>
          </li>
          <li>
            <p><strong>Transportation Services</strong>: Rwanda Global Travels provides reliable transportation services to ensure convenient and comfortable travel within the country. This includes airport transfers, vehicle rentals, and guided tours with experienced drivers.</p>
          </li>
          <li>
            <p><strong>Accommodation Arrangements</strong>: The company assists tourists in finding suitable accommodation options that align with their preferences and budget. From luxury hotels to cozy guesthouses, Rwanda Global Travels helps visitors secure comfortable lodging during their stay.</p>
          </li>
          <li>
            <p><strong>Guided Tours and Activities</strong>: To enhance the overall travel experience, Rwanda Global Travels organizes guided tours led by knowledgeable local guides who provide insights into the history, culture, and natural wonders of Rwanda. Additionally, the company arranges various activities such as gorilla trekking, hiking excursions, cultural performances, and more.</p>
          </li>
          <li>
            <p><strong>Travel Planning Assistance</strong>: The team at Rwanda Global Travels offers comprehensive travel planning support to help tourists create itineraries that maximize their time in Rwanda. Whether it’s obtaining permits for national parks or arranging special experiences, the company ensures a hassle-free journey for its clients.</p>
          </li>
        </ol>
        <p><strong>Commitment to Sustainable Tourism</strong></p>
        <p>Rwanda Global Travels is dedicated to promoting sustainable tourism practices that prioritize environmental conservation, community engagement, and cultural preservation. The company actively collaborates with local communities and conservation organizations to ensure that tourism activities benefit both visitors and host communities while safeguarding Rwanda’s natural heritage for future generations.</p>
        <p><strong>Conclusion</strong></p>
        <p>In conclusion, Rwanda Global Travels stands out as a reputable travel company in Rwanda that goes above and beyond to deliver exceptional tourism services while promoting sustainable practices. With its diverse range of offerings, personalized approach to trip planning, and commitment to responsible tourism, the company plays a vital role in showcasing the beauty and richness of Rwanda to travelers from around the world.</p>
      </div>
    </div>
  </div>   
</section>


<!--Package-->
<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Most Popular Packages</h2>
    </div>
    <div class="">
      <h3>Package List</h3>
      <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
          <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4>National park Name: <?php echo htmlentities($result->PackageName);?></h4>
              <h6>National park Type : <?php echo htmlentities($result->PackageType);?></h6>
              <p><b>National park Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
              <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
              <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>   
  </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container secPad text-center">
      <h2>"The World is a book, and those who do not travel read only a page."
      </h2><h3>-Saint Augustine</h3>
    </div>
    <!--/.container-->
  </div>
</section>
<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Gallery</h2>
      <p>&nbsp;</p>
    </div>
    <div class="row">            
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items clearfix papper " id="3" >
            <article class="col-sm-4  isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/bg-2.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/bg-2.jpg" class="fancybox">                                                
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/bwindi5.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/bwindi5.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>


            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/coorg-hill-station1.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/coorg-hill-station1.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/lake-kivu-rwanda.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/lake-kivu-rwanda.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/nyungwe-safari.jpg" alt="" width="700" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img5.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/Kigali-Citys-1.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/Kigali-Citys-1.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/1_S8pfsJUJt8c8tzdbb2oj5A.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/1_S8pfsJUJt8c8tzdbb2oj5A.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/Kigali Conference Center_External.jpg" alt="" width="300" height="270" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/Kigali Conference Center_External.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
			

            <article class="col-sm-4 isotopeItem print"></article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3>Contact Form</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Full Name" id="name" required
              data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Please enter your email" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <h4>Address:</h4>
        <address>
          Rwanda Grobal Travels<br>
          12th, street<br>
          Kigali,Nyarugenge 
          <br>
        </address>
        <h4>Phone:</h4>
        <address>
          +250-7892-094-82<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
