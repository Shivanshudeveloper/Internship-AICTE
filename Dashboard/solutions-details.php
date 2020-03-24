<?php
include './includes/auth.php';
include './includes/header.inc.php' ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="design/internship/css/main.css" rel="stylesheet" media="all">
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="mt-2">

    <?php 
        include './src/php/dbh.php';
        $uid = $_GET['uid'];

        $sql = "SELECT * FROM problem_statements WHERE uid = '$uid';";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
            <div class="card card-4">
            <div class="card-body">
            <h4 class="title">'.$row['problem'].'</h4>
            <div class="row row-space solutionsDivLst">
            <div class="col-xs-12">
                <div class="list-group">
            <div class="list-group-item list-group-item-action flex-column align-items-start" >
                <div class="d-flex w-100 justify-content-between listItemDiv">
                <h2 class="mainHdng">Problem Details</h2>
                <div class="col-xs-12 prblmDetlDiv">
                    <h4><span>Statement:</span>  '.$row['problem'].' </h4>
                </div>
                <div class="col-xs-12 prblmDetlDiv">
                    <h4><span>Description:</span>  '.$row['description'].' </h4>
                </div>
                <div class="col-xs-12 prblmDetlDiv">
                    <h4><span>Location:</span> '.$row['location'].' </h4>
                </div>
    
                
                <!-- <small class="list-group-item-primary list-group-item-success text-dark sussBtn" data-toggle="modal" data-target="#discussion_1">Invite to discussion</small> -->
                </div>
            </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start btmDiv" >
                
    
            <h2 class="title">Student Details</h2>
            <form action="./src/php/main.php?p_uid='.$row['uid'].'" method="POST">
            <div class="row row-space">
            <div class="col-sm-6 col-xs-12">
            <div class="input-group">
            <label class="label">Student Name</label>
            <input class="input--style-4" type="text" name="student">
            </div>
            </div>
            <div class="col-sm-6 col-xs-12 desTextAre">
            <div class="input-group">
            <label class="label">Student Qualification</label>
            <input class="input--style-4" type="text" name="qualification">
            </div>
            </div>
            </div>
            <div class="row row-space">
            <div class="col-sm-6 col-xs-12">
            <div class="input-group">
            <label class="label">Skills</label>
            <input class="input--style-4" type="text" name="skills">
            </div>
            </div>
            <div class="col-sm-6 col-xs-12 desTextAre">
            <div class="input-group">
            <label class="label">Brief Solutions</label>
            <textarea name="solutions" class="input--style-4"></textarea>
            </div>
            </div>
            </div>
            <div class="row row-space">
            <div class="col-sm-6 col-xs-12">
            <div class="input-group">
            <label class="label">File Attached</label>
            <input type="File" name="">
            </div>
            </div>
            <div class="col-sm-6 col-xs-12">
            <div class="input-group">
            <label class="label">Video Attached</label>
            <input type="File" name="">
            </div>
            </div>
            <div class="col-sm-6 col-xs-12">
            <div class="input-group">
            <!-- <a href="solutions.php"><button class="btn btn--radius-2 btn--blue" type="submit">Submit</button></a> -->
            <input type="submit" name="solutionSubmit_btn" value="Submit" class="btn btn--radius-2 btn--blue">
            </div>
            </div>
            </div>
            </form>
            </div>
            </div>
    
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- modal pop up ****-->
            <!-- The Modal -->
            <div class="modal fade" id="discussion_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Welcome</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="col-xs-12">
                    <div class="input-group">
                    <label class="label">Name</label>
                    <input class="input--style-4" type="text" name="name">
                    </div>
                    </div>
                    <div class="col-xs-12 desTextAre">
                    <div class="input-group">
                    <label class="label">Description</label>
                    <textarea class="textareaSec input--style-4 "></textarea>
                    </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                </div>
                </div>
            </div>
        </div>
            
            ';
        }
    ?>
    

    </section>



</div>
  <!-- /.content-wrapper -->
<script src="design/internship/js/jquery.min.js" type="text/javascript"></script>
<script src="design/internship/js/select2.min.js" type="text/javascript"></script>
<script src="design/internship/js/global.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php include './includes/footer.inc.php' ?>
