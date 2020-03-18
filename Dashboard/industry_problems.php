<?php 
session_start();
if(!isset($_SESSION['loggedIn']))
{
    header("location:login.php?task=PlseLogin");
}
else
{
include './includes/header.inc.php'; 
}
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="design/internship/css/select2.min.css" rel="stylesheet" media="all">
<link href="design/internship/css/main.css" rel="stylesheet" media="all">
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="mt-2">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
    <div class="card card-4">
    <div class="card-body">
    <h2 class="title">Industries Problem</h2>
    <form action="./src/php/main.php" method="POST">
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Problem Statement</label>
    <input class="input--style-4" type="text" name="problem">
    </div>
    </div>
    <div class="col-sm-6 col-xs-12 desTextAre">
    <div class="input-group">
    <label class="label">Description</label>
    <textarea name="description" class="textareaSec input--style-4 "></textarea>

    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Location</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="location">
    <option disabled="disabled" selected="selected">Choose Location</option>
    <option>Location 1</option>
    <option>Location 2</option>
    <option>Location 3</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Can Research Paper Submission</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="research">
    <option disabled="disabled" selected="selected">Choose Subject</option>
    <option>YES</option>
    <option>No</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Category of The Problem</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="category">
    <option disabled="disabled" selected="selected">Choose Category</option>
    <option>Category 1</option>
    <option>Category 2</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Who Can Solve (Individual/Team)</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="solveby">
    <option disabled="disabled" selected="selected">Choose Who Can Solve</option>
    <option>Individual</option>
    <option>Team</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Student or Researcher</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="studentResearcher">
    <option disabled="disabled" selected="selected">Choose option</option>
    <option>Subject 1</option>
    <option>Subject 2</option>
    <option>Subject 3</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Student Stream</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="studentStream">
    <option disabled="disabled" selected="selected">Choose option</option>
    <option>Subject 1</option>
    <option>Subject 2</option>
    <option>Subject 3</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Student Expertise</label>
    <textarea name="studentExpertise" class="textareaSec input--style-4 "></textarea>
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Work/Research Reference Links</label>
    <input class="input--style-4" type="text" name="workResearch">
    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Expected duration</label>
    <input class="input--style-4" type="text" name="duration">
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">Stipned if any</label>
    <div class="p-t-10">
    <label class="radio-container m-r-45">Yes
    <input type="radio" name="stipend" checked="checked" name="yes">
    <span class="checkmark"></span>
    </label>
    <label class="radio-container">No
    <input type="radio" name="stipend">
    <span class="checkmark"></span>
    </label>
    </div>
    </div>
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
        <label class="label">Certificate</label>
        <div class="p-t-10">
    <label class="radio-container m-r-45">Yes
    <input type="radio" checked="checked" name="certificate">
    <span class="checkmark"></span>
    </label>
    <label class="radio-container">No
    <input type="radio" name="certificate">
    <span class="checkmark"></span>
    </label>
    </div>
    <!-- <a href="solutions.php"><button class="btn btn--radius-2 btn--blue" type="submit">Submit</button></a> -->

    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label class="label">File Attached</label>
    <input type="File" name="">
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        
    </div>
    </div>
    <div class="row row-space">
    <div class="col-sm-6 col-xs-12">

    

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Post as Requirements</label>
    </div>


    <div class="input-group">
    <label class="label">Level</label>
    <div class="rs-select2 js-select-simple select--no-search">
    <select name="level">
    <option disabled="disabled" selected="selected">Choose option</option>
    <option>6 month</option>
    <option>1 year</option>
    <option>3 year</option>
    </select>
    <div class="select-dropdown"></div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-xs-12">
    <div class="input-group">
    <label>&nbsp;</label>
    <input type="submit" name="industryProblem_btn" value='Submit' class="btn btn--radius-2 btn--blue">
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>



</div>
  <!-- /.content-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="design/internship/js/bootstrap.min.js"></script>
  <script src="design/internship/js/jquery.min.js" type="text/javascript"></script>
<script src="design/internship/js/select2.min.js" type="text/javascript"></script>
<script src="design/internship/js/global.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php include './includes/footer.inc.php' ?>
