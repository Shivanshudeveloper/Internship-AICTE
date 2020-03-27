<?php include './includes/header1.inc.php' ?>
<!-- Send button -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="student_form" class="w-50">
                    <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                        <!-- Name -->
                        <input type="text" name="fname" id="fname" class="form-control mb-4" placeholder="First Name">
                        <input type="text" name="lname" id="lname" class="form-control mb-4" placeholder="Last Name">
                        <input type="number" name="contactnum" id="contactnum" class="form-control mb-4"
                            placeholder="Contact Number">
                        <!-- Email -->
                        <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                        <input type="password" name="password" id="password" class="form-control mb-4"
                            placeholder="Password">



                        <button name="student-register" id="student-register" class="btn btn-info btn-block"
                            type="submit">
                            Register <i class="ml-2 fas fa-sign-out-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>