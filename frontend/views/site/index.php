 <?php

  use yii\helpers\Html;
  use yii\widgets\ListView;

  $this->title = 'SISMA HELPDESK';
  ?>

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- bootstrap modal -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


 <body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top  header-transparent ">
     <div class="container d-flex align-items-center">

       <div class="logo mr-auto">
         <h1 class="text-light"><?= Html::a('SISMA HELPDESK', ['/site']) ?></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
       </div>

       <nav class="nav-menu d-none d-lg-block">
         <ul>
           <li class="active"><a href="index.html">Home</a></li>
           <li><a href="#faq">F.A.Q</a></li>
           <li><a href="#contact">Contact Us</a></li>

           <li class="get-started"><a href="#features">Get Started</a></li>
         </ul>
       </nav><!-- .nav-menu -->

     </div>
   </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

     <div class="container">
       <div class="row">
         <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
           <div>
             <h1>How can we help you?</h1>
             <?= $this->render('_search', ['model' => $searchModel]); ?>
           </div>

         </div>
         <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
           <?= Html::img('@web/Appland/assets/img/hero-img.png', ['class' => 'img-fluid']) ?>
         </div>

       </div>
     </div>

   </section><!-- End Hero -->


   <main id="main">

     <!-- ======= App Features Section ======= -->
     <section id="features" class="features">
       <div class="container">

         <div class="section-title">
           <h2>App Features</h2>
           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>

         <div class="row no-gutters">
           <div class="col-xl-12 d-flex align-items-stretch order-2 order-lg-1">
             <div class="content d-flex flex-column justify-content-center">
           
                  <?php
                  echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_content',
                  ])
                  ?>
                
              
             </div>
           </div>
         </div>
       </div>
     </section><!-- End App Features Section -->


     <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq section-bg">
       <div class="container">

         <div class="section-title">

           <h2>Frequently Asked Questions</h2>
           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>

         <div class="accordion-list">
           <ul>
             <?php
              echo ListView::widget([
                'dataProvider' => $thread,
                'itemView' => '_thread',
              ])
              ?>

           </ul>
         </div>

       </div>
     </section><!-- End Frequently Asked Questions Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
       <div class="container">

         <div class="section-title">
           <h2>Contact</h2>
           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>

         <div class="row">

           <div class="col-lg-6">
             <div class="row">
               <div class="col-lg-6 info" data-aos="fade-up">
                 <i class="bx bx-map"></i>
                 <h4>Address</h4>
                 <p>A108 Adam Street,<br>New York, NY 535022</p>
               </div>
               <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                 <i class="bx bx-phone"></i>
                 <h4>Call Us</h4>
                 <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
               </div>
               <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                 <i class="bx bx-envelope"></i>
                 <h4>Email Us</h4>
                 <p>contact@example.com<br>info@example.com</p>
               </div>
               <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                 <i class="bx bx-time-five"></i>
                 <h4>Working Hours</h4>
                 <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
               </div>
             </div>
           </div>

           <div class="col-lg-6">
             <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
               <div class="form-group">
                 <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                 <div class="validate"></div>
               </div>
               <div class="form-group">
                 <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                 <div class="validate"></div>
               </div>
               <div class="form-group">
                 <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                 <div class="validate"></div>
               </div>
               <div class="form-group">
                 <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                 <div class="validate"></div>
               </div>
               <div class="mb-3">
                 <div class="loading">Loading</div>
                 <div class="error-message"></div>
                 <div class="sent-message">Your message has been sent. Thank you!</div>
               </div>
               <div class="text-center"><button type="submit">Send Message</button></div>
             </form>
           </div>

         </div>

       </div>
     </section><!-- End Contact Section -->

   </main><!-- End #main -->



   <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 </body>