<?php 
session_start();
if(!isset($_SESSION['loggedIn']))
{
  header("location:login_corporate.php?task=PlseLogin");
}
else{
  include './includes/header.inc.php';
}
?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Internhips</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Internship</li>
                    </ol>
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
        <div class="card">
            <div class="card-header">


                <h3 class="card-title">Post Internship</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="card-body">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Post Internship</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="./src/php/main.php" method="POST">
                        <div class="card-body">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Job Type</label>
                                <select class="form-control" name="job_type" id="job_type">
                                    <option value="Job">Job</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Cooperative Education">Cooperative Education</option>
                                    <option value="Experience Learning">Experience Learning</option>
                                    <option value="On Campus Student Employement">On Campus Student Employement</option>
                                    <option value="Fellowship">Fellowship</option>
                                    <option value="Research">Research</option>
                                    <option value="Industry Problems">Industry Problems</option>
                                </select>
                                <script>
                                function reDirect() {
                                    var type = $("#type").val();
                                    if (type == "Industry Problems") {
                                        window.location = "./industry_problems.php";
                                    }
                                }
                                </script>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Internship Type</label>
                                <select onclick="reDirect();" class="form-control" name="type" id="type">
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Internship Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Internship Description</label>
                                <textarea name="description" id="desciption" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Internship Location</label>
                                <input type="text" class="form-control" id="locations" name="locations"
                                    placeholder="Delhi, Lucknow, Mumbai">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Number Interns Requiried</label>
                                        <input type="text" class="form-control" id="numberInternRequiried"
                                            name="numberInternRequiried" placeholder="Number Intern Requiried">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keywords</label>
                                        <input type="text" class="form-control" id="keywords" name="keywords">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Attributes Look For</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Communication Skills (Verbal & Writing)"
                                                class="form-check-input" name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Communication Skills
                                                (Verbal & Writing)</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Presentation Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Presentation
                                                Skills</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Listning Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Listning Skills</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Management Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Management
                                                Skills</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Entrepreneurial Skills"
                                                class="form-check-input" name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Entrepreneurial
                                                Skills</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Planning Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Planning Skills</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Startup Experience" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Startup
                                                Experience</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Creative Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Creative Skills</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Sales Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Sales Skills</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Sales Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Sales Skills</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Good Customer Service"
                                                class="form-check-input" name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Good Customer
                                                Service</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Time Management" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Time Management</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Coding Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Coding Skills</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Good Appearence" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Good Appearence</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Research Oriented" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Research
                                                Oriented</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Team Work Skill" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Team Work Skill</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Probleam Solving" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Probleam Solving</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Handson Experience" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Handson
                                                Experience</label>
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Vocational Skills" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Vocational
                                                Skills</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Digital Marketing" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Digital
                                                Marketing</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Goverment Experience" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Goverment
                                                Experience</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="NGO Experience" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">NGO Experience</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Analytical Ability" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Analytical
                                                Ability</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Learning Ability" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Learning Ability</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" value="Out of Box Thinking" class="form-check-input"
                                                name="check_list[]">
                                            <label class="form-check-label" for="exampleCheck1">Out of Box
                                                Thinking</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@example.com">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone No.">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Country</label>
                                        <input type="text" class="form-control" id="country" name="country"
                                            placeholder="Country">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" id="company" name="company"
                                            placeholder="My Company Inc.">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Stipend Given</label>
                                <input type="number" class="form-control" id="stipend" name="stipend"
                                    placeholder="10000">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Spoken Languages Requiried</label>
                                <input type="text" class="form-control" id="languages" name="languages">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Starting from</label>
                                        <input type="date" class="form-control" id="startdate" name="startdate">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">End At</label>
                                        <input type="date" class="form-control" id="end" name="end">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contract</label>
                                        <input type="text" class="form-control" id="contract" name="start"
                                            placeholder="Contract">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Who can Apply</label>
                                        <input type="text" class="form-control" id="whoCanApply" name="whoCanApply"
                                            placeholder="Data Expert">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Domain Internship</label>
                                <input type="text" class="form-control" id="domain" name="domain"
                                    placeholder="Goverment, Women">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Eligibility Criteria</label>
                                <input type="text" class="form-control" id="eligibility" name="eligibility"
                                    placeholder="Python">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Perks</label>
                                <input type="text" class="form-control" id="perks" name="perks">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Any Certification Requiried</label>
                                <input type="text" class="form-control" id="certificaion" name="certificaion">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Working Hours</label>
                                <input type="text" class="form-control" id="hours" name="hours">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Interview Preparation Module</label>
                                <select class="form-control" name="interview" id="interview">
                                    <option value="Introduction Module">Introduction Module</option>
                                    <option value="Cummunication Skills">Cummunication Skills</option>
                                    <option value="Industry Rules">Industry Rules</option>
                                    <option value="Office Rules">Office Rule</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="internship_post" class="btn btn-primary">Submit</button>
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

<?php include './includes/footer.inc.php' ?>