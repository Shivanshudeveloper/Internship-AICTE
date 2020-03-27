<?php include './includes/header1.inc.php' ?>
<center>
    <section class="ftco-section bg-light">
        <div class="container">
            <div id="coporate_form" class="w-50">

                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php"
                    id="form_corporate">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="meetingPlace">Type of Employer: </label>
                                <select class="form-control" id="type">
                                    <option value="Corporate" selected>Corporate</option>
                                    <option value="District Megistrate">District Megistrate</option>
                                    <option value="NASCOM">NASCOM</option>
                                    <option value="AGGREGATOR">AGGREGATOR</option>
                                    <option value="SECTOR SKILL COUNCIL">SECTOR SKILL COUNCIL</option>
                                    <option value="ASSOCHAM">ASSOCHAM</option>
                                    <option value="PUBLIC SECTOR UNIT">PUBLIC SECTOR UNIT</option>
                                    <option value="GOVERNMENT DEPARTMENT">GOVERNMENT DEPARTMENT</option>
                                    <option value="NON GOVERNMENTAL ORGANISATION">NON GOVERNMENTAL ORGANISATION</option>
                                    <option value="CII">CII</option>
                                    <option value="FICCI">FICCI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                                <input type="text" name="fname" id="fname" class="form-control mb-4"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" class="form-control mb-4"
                                    placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control mb-4"
                                    placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control mb-4"
                                    placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select name="corporatelist" id="corporatelist"
                                    class="browser-default custom-select mb-4">
                                    <option value="" selected>Select</option>
                                    <option value="TIN" selected>TIN</option>
                                    <option value="GST">GST</option>
                                    <option value="ROC">ROC</option>
                                    <option value="CIN">CIN</option>
                                    <option value="Association Registration">Association Registration</option>

                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="idnum" id="idnum" class="form-control mb-4"
                                    placeholder="ID Number">
                            </div>
                        </div>
                    </div>
                    <input type="number" name="contactnum" id="contactnum" class="form-control mb-4"
                        placeholder="Contact Number">

                    <!-- Send button -->
                    <button name="corporate-register" id="corporate-register" class="btn btn-info btn-block"
                        type="submit">Register</button>
                </form>


                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php" id="dm"
                    style="display:none">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="meetingPlace">Type of Employer: </label>
                                <select class="form-control" id="type">
                                    <option value="Corporate" selected>Corporate</option>
                                    <option value="District Megistrate">District Megistrate</option>
                                    <option value="NASCOM">NASCOM</option>
                                    <option value="AGGREGATOR">AGGREGATOR</option>
                                    <option value="SECTOR SKILL COUNCIL">SECTOR SKILL COUNCIL</option>
                                    <option value="ASSOCHAM">ASSOCHAM</option>
                                    <option value="PUBLIC SECTOR UNIT">PUBLIC SECTOR UNIT</option>
                                    <option value="GOVERNMENT DEPARTMENT">GOVERNMENT DEPARTMENT</option>
                                    <option value="NON GOVERNMENTAL ORGANISATION">NON GOVERNMENTAL ORGANISATION</option>
                                    <option value="CII">CII</option>
                                    <option value="FICCI">FICCI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" class="form-control mb-4"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" class="form-control mb-4"
                                    placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control mb-4"
                                    placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control mb-4"
                                    placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="state" id="state" class="form-control mb-4"
                                    placeholder="State">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="district" id="district" class="form-control mb-4"
                                    placeholder="District">
                            </div>
                        </div>
                    </div>
                    <!-- Name -->
                    <input type="number" name="contactnum" id="contactnum" class="form-control mb-4"
                        placeholder="Contact Number">

                    <button name="dm-register" id="dm-register" class="btn btn-info btn-block" type="Submit">
                        Register <i class="ml-2 fas fa-sign-out-alt"></i></button>
                </form>
            </div>
        </div>
    </section>
</center>

<script>
$(document).ready(function() {
    $("#type").change(function() {
        if ($(this).val() == "District Megistrate") {
            console.log($(this).val())
            $("#form_corporate").hide();
            $("#dm").show();
        } else if ($(this).val() == "Corporate" || $(this).val() == "NASCOM" || $(this).val() ==
            "AGGREGATOR" || $(this).val() == "SECTOR SKILL COUNCIL" || $(this).val() == "ASSOCHAM" || $(
                this).val() == "PUBLIC SECTOR UNIT") {
            $("#dm").hide();
            $("#form_corporate").show();
        }
    });
});
</script>
