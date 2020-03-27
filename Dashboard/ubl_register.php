<?php include './includes/header1.inc.php' ?>
<center>
<section class="ftco-section bg-light">
    <div class="container">
        <div id="coporate_form" class="w-50">
            
                <form method="post" class="text-center border border-light p-3" action="./src/php/main.php">
                    <!-- Name -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select name="authority" id="authority" class="form-control">
                                    <option value="Urban Body">Urban Body</option>  
                                    <option value="Local Body">Local Body</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="organization" id="organization" class="form-control"
                                    placeholder="Organisation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" class="form-control"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <input type="number" name="contactnum" id="contactnum" class="form-control mb-4"
                        placeholder="Contact Number(TPO)">



                    <!-- Send button -->
                    <center>
                        <button name="ubl_register" id="ubl_register" class="btn btn-info btn-block w-25" style="font-weight:bold; font-family: Verdana"
                            type="submit">Register</button>
                    </center>
                </form>
           
        </div>

    </div>
</section>
</center>