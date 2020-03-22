<?php include './includes/header1.inc.php' ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">REGISTRATION</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="./index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register <i class="ion-ios-arrow-forward"></i></span> <span> College Register <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section bg-light">
        <div class="container">
        <div id="coporate_form" class="w-50">
            <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                <!-- Name -->
                <input type="text" name="organization" id="organization" class="form-control mb-4" placeholder="Organisation">
                <input type="text" name="fname" id="fname" class="form-control mb-4" placeholder="First Name(TPO)">
                <input type="text" name="lname" id="lname" class="form-control mb-4" placeholder="Last Name(TPO)">
                <input type="number" name="contactnum" id="contactnum" class="form-control mb-4" placeholder="Contact Number(TPO)">

                <!-- Email -->
                <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail(TPO)">
                <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password(TPO)">

                <input type="text" name="idnum" id="idnum" class="form-control mb-4" placeholder="ID Number(TPO)">
                

                <!-- Send button -->
                <button name="common-register" id="common-register" class="btn btn-info btn-block" type="submit">Register</button>

            </form>
        </div>
        
        </div>
		</section>


<?php include './includes/footer1.inc.php' ?>