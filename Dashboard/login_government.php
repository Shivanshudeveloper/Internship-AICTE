<?php include 'includes/header1.inc.php'?>
<center>
    <section class="ftco-section bg-light"style="margin-top:70px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="student_form" class="w-50">
                        <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                            <!-- Email -->
                            <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                            <!-- Send button -->
                            <center>
                                <input type="submit" name="login_government" id="login_government" value="login"
                                    class="btn btn-info btn-block w-25" style="font-weight:bold" type="button">
                            </center>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</center>
