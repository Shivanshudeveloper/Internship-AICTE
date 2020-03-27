<?php 
include './includes/auth.php';
include './includes/header.inc.php';
?>

<link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">

<script type="text/javascript" src="js/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-10">
                   

                </div>
            </div>
        </div><!-- /.container-fluid -->    
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="mt-2 mb-2">
            <?php include './includes/msg.inc.php' ?>
        </div>
        <!-- Default box -->
        <div class="card-body" style="text-align: center;">
            <!-- /.card-header -->
            <!-- form start -->

            <form action="./src/php/main.php" method="POST">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Advertisement Id</label>
                                <input type="text" class="form-control" name="adid" id="adid"
                                    placeholder="Advertisement Id">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Job Type</label>
                                <select class="form-control" name="job_type" id="job_type">
                                    <option value="Job">Job</option>
                                    <option value="Internship" selected>Internship</option>
                                    <option value="Cooperative Education">Cooperative Education</option>
                                    <option value="Experience Learning">Experience Learning</option>
                                    <option value="On Campus Student Employement">On Campus Student Employement</option>
                                    <option value="Fellowship">Fellowship</option>
                                    <option value="Research">Research</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Internship Type</label>
                                <select class="form-control" name="internship__type" id="internship__type">
                                    <option value="Part Time">Part Time</option>
                                    <option value="Full Time"selected>Full Time</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" id="locations" name="locations"
                                    placeholder="Delhi, Lucknow, Mumbai">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Internship Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Internship Role</label>
                                <input type="text" class="form-control" name="role" id="role" placeholder="Role">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Department</label>
                            <div class="form-group">
                                <select id="department" name="department[]" multiple class="form-control"
                                    id="multi-select-demo">
                                    <option value="Urban planning including town planning">Urban planning including town
                                        planning</option>

                                    <option value="Regulation of land use and construction of buildings. ">Regulation of
                                        land use and construction of buildings.</option>

                                    <option value="Planning for economic and social development. ">Planning for economic
                                        and social development. </option>

                                    <option value="Roads and bridges. ">Roads and bridges. </option>

                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>

                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <label>Qualification</label>
                            <div class="form-group">
                                <select id="qualification" name="qualification[]" multiple class="form-control"
                                    data-placeholder="Select Qualification">
                                    <option value="B. TECH">B. TECH</option>
                                    <option value="B.PLAN">B.PLAN</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>

                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label>Specialisation</label>
                            <div class="form-group">
                                <select id="specialisation" name="specialisation[]" multiple class="form-control"
                                    data-placeholder="Select a specialisation">
                                    <option value="CIVIL">CIVIL</option>
                                    <option value="IT">IT</option>
                                    <option value="MECHANICAL">MECHANICAL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Internship Description(Task/Function)</label>
                                <textarea name="description" id="desciption" cols="15" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Stiphen And Allowance</label>
                                <textarea name="stiphen" id="desciption" cols="15" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Eligibility Conditions</label>
                                <textarea class="form-control" name="eligibility" id="eligibility" cols="30" rows="3">1.	Open only to Indian students 
2.	Not more than 14 months should have passed from the date of graduation to the date from which the internship is sought
3.	The qualifications may be relaxed in special category cases with prior permission of Urban Local Body.

                                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Terms of Engagement</label>
                                <textarea class="form-control" name="terms_of_enagement" id="terms_of_enagement" cols="30" rows="3">Terms of Engagement	•	The intern will be required to submit a digital undertaking specified under Annexure A to the Urban Local Body certifying his credentials, professional conduct and character before the commencement of the internship.
•	The interns will be tasked with projects under the indicative Roles defined under Annexure B at the discretion of the Urban Local Body.
•	The intern will be eligible for an internship certificate only upon completion of the internship period and internship projects, which may be relaxed as per the discretion of the Urban Local Body under special circumstances.
•	The interns shall be required to maintain confidentiality of all the documents/reports or any information received by him/her during his/her internship period. The interns shall not reveal to any person or organisation any information relating to the Urban Local Body, its work and policies. The interns may also be required to sign a confidentiality agreement as per Annexure C prior to the commencement of the internship.
•	Notice period of 4 weeks will have to be given prior to leaving the internship. 
•	It is neither a job nor assurance for a job in the Urban Local Body.
                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logistics</label>
                                <textarea class="form-control" name="logistics" id="logistics" cols="30" rows="3">Logistics 	Interns shall bring the laptop and mobile internet connectivity with them. They shall not be entitled to any emoluments/ allowances whatsoever. They shall arrange their own transport to and from office. 

The ULB may support the interns with resources for completion of the assignment as per its discretion.

                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guidelines</label>
                                <textarea class="form-control" name="guidelines" id="guidelines" cols="30" rows="3">Revision of the Guidelines	The Ministry may review and revise the guidelines as per its discretion. 
                                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row invisible" id="new" name="new">
                    <div class="col">
                            <label for="exampleInputEmail1">Fees</label>
                            <div class="form-group">
                                <textarea class="form-control" name="fees" id="fees"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Important Dates</label>
                                <textarea class="form-control" name="guidelines" id="guidelines" cols="30" rows="3">Revision of the Guidelines	The Ministry may review and revise the guidelines as per its discretion. 
                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Reservations And Relaxations</label>
                                <select name="reserve[]" id="reserve" multiple class="form-control">
                                    <option value="SC/ST">SC/ST</option>
                                    <option value="OBC">OBC</option>
                                    <option value="EWS">EWS</option>
                                    <option value="GENERAL">GENERAL</option>
                                    <option value="DEFENCE">DEFENCE</option>
                                    <option value="SPORTS PERSONAL">SPORTS PERSONAL</option>
                                    <option value="PWD">PWD</option>
                                    <option value="X-SERVICEMAN">X-SERVICEMAN</option>
                                </select>
                            </div>
                        </div>
                      
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age Limits</label>
                                <input class="form-control" type="text" id="age" name="age">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <center>
                            <button type="button" id="advance" name="advance" onclick="myFunction()"
                                class="btn btn-success">Advance</button>
                            <button type="submit" id="internship_post" name="internship_post" class="btn btn-primary">Submit</button>
                            <button type="button"  onclick="reset()"
                                class="btn btn-primary">Reset</button>
                        </center>
                    </div>
            </form>
        </div>
</div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- script for selecting multiple checkboxes in dropdown -->
<script>
function myFunction() {
    var className = $("#new").attr("class");

    if (className == "row invisible") {
        $("#new").removeClass("row invisible").addClass("row");
        $("#advance").html('Basic');
    } else {
        $("#new").removeClass("row").addClass("row invisible");
        $("#advance").html('Advance');
    }

}

function reset() {
    document.getElementById("simpleform").reset();
}
</script>
<script>
$(document).ready(function() {
    $('#reserve').multiselect({
        nonSelectedText: 'Select Reservation',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '320px'
    });
});

$(document).ready(function() {
    $('#qualification').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '320px'
    });
});

$(document).ready(function() {
    $('#department').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '320px'
    });
});

$(document).ready(function() {
    $('#specialisation').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '320px'
    });
});
</script>