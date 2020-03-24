<?php include 'includes/header1.inc.php'?>	
		<section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                <div id="student_form" class="w-100">
                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                    <!-- Email -->
                    <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                    <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password">
                    <!-- Send button -->

                    <input type="submit" name="login_c" id="login_c" value="login" class="btn btn-info btn-block" type="button">
                </form>
                </div>
            </div>
            <div class="col">
                <img style="margin-top: 20%; margin-left: 30%"  src="https://static.skillshare.com/uploads/project/08872f4476eda5c3322bff38bf2a3f4a/f8f48d7b" alt="AICTE">
            </div>
        </div>
        
        </div>
		</section>


<?php include './includes/footer1.inc.php' ?>
