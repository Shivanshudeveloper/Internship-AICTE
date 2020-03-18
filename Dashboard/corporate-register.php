<?php include './includes/header1.inc.php' ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">CORPORATE REGISTRATION</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Register <i
                            class="ion-ios-arrow-forward"></i></span> <span> Corporate Register <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div id="coporate_form" class="w-50">

            <label for="meetingPlace">Meeting place: </label>
            <select class="form-group" id="meetingPlace">
                <option value="Corporate">Corporate</option>
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
            <form class="text-center border border-light p-5" action="#!">
                <input type="text" name="fname" id="fname" class="form-control mb-4" placeholder="First Name">
                <input type="text" name="lname" id="lname" class="form-control mb-4" placeholder="Last Name">
                <input type="text" name="contactnum" id="contactnum" class="form-control mb-4"
                    placeholder="Contact Number">
                <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                <input type="password" name="pswrd" id="pswrd" class="form-control mb-4" placeholder="Password">
                <select name="corporatelist" id="corporatelist" class="browser-default custom-select mb-4">
                    <option value="" selected>Select</option>
                    <option value="TIN" selected>TIN</option>
                    <option value="GST">GST</option>
                    <option value="ROC">ROC</option>
                    <option value="CIN">CIN</option>
                    <option value="Association Registration">Association Registration</option>

                </select>
                <input type="text" name="idnum" id="idnum" class="form-control mb-4" placeholder="ID Number">
                <input type="text" name="organization" id="organization" class="form-control mb-4"
                    placeholder="Organisation">
                    <!-- Send button -->
                <button name="corporate-register" id="corporate-register" class="btn btn-info btn-block"
                    type="button">Register</button>

            </form>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $("#add_fields_placeholder").change(function() {
        if ($(this).val() == "Other") {
            $("#add_fields_placeholderValue").show();
        } else {
            $("#add_fields_placeholderValue").hide();
        }
    });
});
</script>

<?php include './includes/footer1.inc.php' ?>