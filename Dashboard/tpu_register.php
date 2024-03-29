<?php include './includes/header1.inc.php' ?>
    	
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
                <button name="common-register" id="common-register" class="btn btn-info btn-block w-25" style="font-weight:bold; font-family: Verdana" type="submit">Register</button>

            </form>
        </div>
        
        </div>
		</section>


<?php include './includes/footer1.inc.php' ?>