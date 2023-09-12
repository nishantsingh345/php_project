<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Amaavi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="images/fav.png" type="image/gif" sizes="16*16" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/media.css" />
  </head>
  <style type="text/css">
    a.privacy {
      color: #ffffff !important;
      margin-left: 10px !important;
    }
  </style>
  <body class="home_page">
    <!-- Navbar Section -->

    <!-- <nav class="navbar navbar-expand-lg" style="z-index: 9999">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand hide_brand" href="index.html">
            <img src="images/header_logo.png" class="img-responsive res_1920" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto navbar-right mb-2 mb-lg-0">
              <li class="active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="voyagers.html">Amaavi Voyagers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reachus.html">Reach Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav> -->
<?php include "header.php";?>

    <!-- Crousal -->

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
         <a href="about.php"> <img id="carousel1" src="images/banner/banner1.png" class="d-block w-100" alt="slider" /></a>
        </div>
        <div class="carousel-item">
          <a href="kashmir-group-trip.php"><img id="carousel1" src="images/banner/banner2.png" class="d-block w-100" alt="slider" /></a>
        </div>
        <div class="carousel-item">
          <a href="#"><img id="carousel1" src="images/banner/banner3.png" class="d-block w-100" alt="slider" /></a>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControlsNoTouching"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControlsNoTouching"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- <section class="banner">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1>Travel Far Enough, You Meet Yourself.</h1>
          <a href="about.html">
            <img src="images/icons/home-arrow.png" class="img-responsive" />
            <span> Learn More About Us </span>
          </a>
        </div>
      </div>
    </section> -->

    <section class="home_icon">
      <div class="container">
        <img src="images/home_icon.png" class="img-responsive" />
        <h2>I came, I saw, I loved</h2>
        <p>
         Inspired by the latin phrase ‘Veni, Vidi, Amavi’, we are all about handcrafted travel experiences. We believe that meaningful travel connects us to the world out there, and within. Our team of Adventure Alchemists helps you plan hassle-free getaways to every corner of the world.
        </p>
      
        <a href="about.php" class="i-came-loved"> Know more about Team Amaavi! </a>
      </div>
    </section>
    <section class="home_parallex">
      <div class="container">
        <h2>Ready. Set. Amaavi</h2>
      </div>
    </section>

    <section class="section.right_to_get p" style="margin-top: 30px;">
      <div class="container">
        <h2 style="font-size: 34px; color: #cc4432;padding-bottom:5%" class="text-center">Our Services</h2>
        
        <div class="row" style="padding-bottom:2%">
        <div class="col-md-4 mb-3">
              <div class="card card_border" style="max-width:400px;">
                   <img src="images/icons/pod_4.png" class="card-img-top" style="width: 25%;margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">Domestic Travel</h5>
                             <p class="card-text text-justify">A company born and established in India, we help you explore hidden gems from this magical land of many cultures, stories and experiences.<br><br></p>
                        </div>
              </div>
        </div>

          <div class="col-md-4 mb-3">
              <div class="card card_border" style="max-width: 400px;">
                   <img src="images/icons/pod_3.png" class="card-img-top" style="width: 25%;; margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">International Travel</h5>
                             <p class="card-text text-justify">The world is truly your playground! With highly rated on-ground service and support teams, Amaavi helps you travel the globe, one or many destinations at a time!</p>
                        </div>
              </div>
        </div>

          <div class="col-md-4 mb-3">
              <div class="card" style="max-width: 400px;">
                   <img src="images/icons/pod_2.png" class="card-img-top" style="width: 25%; margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">Personal Travel Consulting </h5>
                             <p class="card-text text-justify">What are you looking for? Adventure, relaxation or inspiration? We can help you curate the perfect itinerary to make that travel dream a reality. </p>
                        </div>
              </div>
        </div>
	</div>

    <div class="row">
          <div class="col-md-4 mb-3">
              <div class="card card_border" style="max-width: 400px;">
                   <img src="images/icons/pod_6.png" class="card-img-top" style="width: 20%; margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">Group Travel Consulting </h5>
                             <p class="card-text text-justify" >Looking for a getaway with family, friends or work colleagues? We tailor-make travel itineraries to suit your budgets and exceed your expectations!</p>
                        </div>
              </div>
        </div>


          <div class="col-md-4 mb-3">
              <div class="card card_border" style="max-width: 400px;">
                   <img src="images/icons/pod_5.png" class="card-img-top" style="width: 20%; margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">Visa Management Services</h5>
                             <p class="card-text text-justify">We help you navigate the Visa process from application to fee payment, appointments to background checks so you can travel smoothly.</p>
                        </div>
              </div>
        </div>


          <div class="col-md-4 mb-3">
              <div class="card" style="max-width: 400px;">
                   <img src="images/icons/pod_1.png" class="card-img-top" style="width: 25%; margin: auto" alt="...">
                        <div class="card-body">
                             <h5 class="card-title"  style="text-align: center;">Destination Management Services</h5>
                             <p class="card-text text-justify" >It’s great to have a travel partner whose experience and expertise can help you make the most of your trip- while you leave the logistics to us!</p>
                        </div>
              </div>
        </div>


           <!-- <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_4.png" class="img-fluid rounded-start" style="width: 75%;" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">DOMESTIC HOLIDAYS</h5>
                    <p class="card-text" style="text-align: center;">
                     A company born and established in India, we help you explore hidden gems from this magical land of many cultures, stories and experiences.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


           <div class="col-md-6">
            <div class="card mb-2" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_3.png" class="img-fluid rounded-start"  style="width: 75%;" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">International Holidays</h5>
                    <p class="card-text">
                     The world is truly your playground! With highly rated on-ground service and support teams, Amaavi helps you travel the globe, one or many destinations at a time!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">

                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_2.png" class="img-fluid rounded-start"  style="width: 75%;"  alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Personal Travel Consulting</h5>
                    <p class="card-text">
                    What are you looking for? Adventure, relaxation or inspiration? We can help you curate the perfect itinerary to make that travel dream a reality.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_1.png" class="img-fluid rounded-start"  style="width: 75%;"  alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Destination Management Services</h5>
                    <p class="card-text">
                    It’s great to have a travel partner whose experience and expertise can help you make the most of your trip- while you leave the logistics to us!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_5.png" class="img-fluid rounded-start"  style="width: 65%;"  alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Visa Management Services</h5>
                    <p class="card-text">
                   We help you navigate the Visa process from application to fee payment, appointments to background checks so you can travel smoothly.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


           <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-4" style="padding: 6% 1%;">
                  <img src="images/icons/pod_6.png" class="img-fluid rounded-start"  style="width: 65%;"  alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Group Travel Consulting</h5>
                    <p class="card-text">
                    ILooking for a getaway with family, friends or work colleagues? We tailor-make travel itineraries to suit your budgets and exceed your expectations!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->




        </div>
      </div>
    </section>

    
        </div>

 
    <section class="home_pods" style="padding:38px 0px">
         <div class="container">
		  <div class="row">
		  <h2 style="font-size: 34px; color: #cc4432; padding-bottom:3%" class="text-center">Upcoming Trips</h2>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<a href="#" style="text-decoration:none;color:#000">
               <div class="pod">
                  <img src="images/01.jpg" style="width:100%">
                  <h3> Slow Travel in Bali </h3>
               </div>
			   </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <a href="kashmir-group-trip.php" style="text-decoration:none;color:#000">
               <div class="pod">
                  <img src="images/02.jpg" style="width:100%">
                  <h3> Kashmir Group Trip </h3>
               </div>
			   </a>
            </div>
           </div>
         </div>
      </section>


    <!-- Testimoniols Section -->

    <section class="home_testimonials">
      <div class="container">
        <h2>Travellers Speak</h2>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carousel-example-generic"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carousel-example-generic"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carousel-example-generic"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div> -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <img
                      src="images/reviews/vibha.png"
                      class="img-responsive"
                      style="width: 80px"
                    />
                    <p class="testimonial_para">
                      "After completing our vaccination schedules, we 3 ladies decided to go for a
                      week long holiday to Nepal. Sceptical about safety and security, we contacted
                      Amaavi experiences to plan the trip for us. The tour they tailored was perfect
                      in every sense and it captured the beauty, mysticism and charm of Nepal very
                      successfully. The Itinerary was perfect and the people who implemented it were
                      even better. The managers, the drivers and the guides were all professionals,
                      very courteous, well behaved and helpful. We have returned back with some
                      amazing memories and would like to thank Mr.Ashwath, the CEO of the company
                      and his entire team for their personalised service and support at every step.
                      We are extremely happy to have chosen Amaavi experiences over others and we
                      highly recommend them to travellers, who I have no doubt will thank us for
                      that 😊. Anu, Vani, Vibha."
                    </p>
                    <div class="customer_details">
                      <h4><strong>Vibha Asthana</strong></h4>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <img
                      src="images/reviews/kirat.png"
                      class="img-responsive"
                      style="width: 80px"
                    />
                    <p class="testimonial_para">
                      "My wife and I went to Spain in December/January 2019. Everything from the
                      visa to the hotels including transfers in awesome chauffeur driven Mercedes
                      and skydiving, scuba, etc was organised by Amaavi. They did a wonderful job
                      and are highly recommend. They were available pretty much 24x7 during our trip
                      and made sure our visit was trouble free.."
                    </p>
                    <div class="customer_details">
                      <h4><strong>kirat kalra</strong></h4>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <img
                      src="images/reviews/harmeeth.png"
                      class="img-responsive"
                      style="width: 80px"
                    />
                    <p class="testimonial_para">
                      "Kudos Team Amaavi!!...can never thank you enough! At such short notice you
                      did put together a magical, memorable experience for me and my wife in
                      Bali...it was awesome start to finish. The tickets, documentation formalities
                      were very well taken care of before embarking and upon arrival the transfers
                      and check-ins were absolutely smooth and hassle free.The experiences and
                      activities you suggested were spot on and adhered to us accurately. Travelling
                      around Bali was amazing and while we loved our time spent at an altitude in
                      Kintamani and in the Mount Batur area, there’s just something about being down
                      at sea level that resonated with us in Kuta and Nusa Dua.Both the stays were
                      comfortable,relaxing and most importantly in ideal locations. We both were
                      blown away & squealed with delight at being surprised with a cake at breakfast
                      on my wife's 50th birthday at the resort in Ubud and express our gratitude for
                      your thought.It was adorable indeed! We look forward to banking upon your
                      expertise for our future journeys."
                    </p>
                    <div class="customer_details">
                      <h4><strong>Harmeeth Soin</strong></h4>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <img
                      src="images/reviews/Venkatesh jonna.png"
                      class="img-responsive"
                      style="width: 80px"
                    />
                    <p class="testimonial_para">
                      "Had an amazing vacation in Greece planned by Amaavi. They have a knack of
                      picking amazing accommodation. We stayed at a beautiful boutique hotel (Petit
                      Palace) in Santorini, and had a brilliant view of the Acropolis in Athens.
                      Airport and ferry transfers were right on time and well maintained. It was a
                      very relaxing experience. I definitely recommend Amaavi for your travels. :)."
                    </p>
                    <div class="customer_details">
                      <h4><strong>Venkatesh Jonna</strong></h4>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <img src="images/unnamed.png" class="img-responsive" style="width: 80px" />
                    <p class="testimonial_para">
                      "We found Amaavi the best in planning the vacation. This is our second time
                      experience with Amaavi and many more to go. This time we were 2 families with
                      kids of 2 and 8 years. The way they planned the itenary along with the kids
                      was just beyond our expectations. Full of adventures, beautiful scenic
                      destinations and comfortable stay. Chauffeur was also polite from picking up
                      from airport till we left. Thank you Amaavi and keep up the great work. Best
                      wishes. Like."
                    </p>
                    <div class="customer_details">
                      <h4><strong>Roja Devi</strong></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="controls testimonial_control carousel_styles">
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carousel-example-generic"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carousel-example-generic"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!-- <div class="controls testimonial_control">
              <a
                class="left fa fa-chevron-left btn btn-default testimonial_btn"
                href="#carousel-example-generic"
                data-slide="prev"
              ></a>
              <a
                class="right fa fa-chevron-right btn btn-default testimonial_btn"
                href="#carousel-example-generic"
                data-slide="next"
              ></a>
            </div> -->
          </div>
        </div>

        <!-- <a href="services.html" class="ammavi_experience"> Try the Amaavi Experience </a>  -->
      </div>
    </section>

    <!-- Footer Section -->
<?php include "footer.php";?>

  
</body>
  </body>
</html>
