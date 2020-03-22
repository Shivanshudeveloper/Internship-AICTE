<?php 
session_start();
include './includes/header.inc.php' ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="design/internship/css/main.css" rel="stylesheet" media="all">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680 _detailsPg">
        <div class="card card-4">
        <div class="card-body">
            <?php 
                include './src/php/dbh.php';
                $p_uid = $_GET['uid'];
                $sql = "SELECT * FROM solutions WHERE problem_uid = '$p_uid';";
                $result = mysqli_query($conn, $sql);
                    echo '
                    <h2 class="title">'."Submitted Solutions".'</h2>
                    <div class="row row-space solutionsDivLst">
                    <div class="col-xs-12">
                        <div class="list-group">
                    <div class="list-group-item list-group-item-action flex-column align-items-start" >
                        <div class="d-flex w-100 justify-content-between listItemDiv">
                        <h2 class="mainHdng">Problem Details</h2>
                        <div class="col-xs-12 prblmDetlDiv">
                            <h4><span>Statement:</span>  Design a 3d printer</h4>
                        </div>
                        <div class="col-xs-12 prblmDetlDiv">
                            <h4><span>Description:</span>  Design a 3d printer</h4>
                        </div>
                        <div class="col-xs-12 prblmDetlDiv">
                            <h4><span>Location:</span>  Delhi</h4>
                        </div>

                        
                        <!-- <small class="list-group-item-primary list-group-item-success text-dark sussBtn" data-toggle="modal" data-target="#discussion_1">Invite to discussion</small> -->
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start btmDiv" >

                    <h2 class="title">Student Details</h2>
                    <div class="studentDetlFinDiv">
                   
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th>Sr. No.</th>
                        <th>Student Name</th>
                        <th>Qualification</th>
                        <th>Skills</th>
                        <th>Brief Solutions</th>
                        <th>Button</th>
                        <th>Button</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                        <td>1.</td>
                        <td>'.$row['student'].'</td>
                        <td>'.$row['qualification'].'</td>
                        <td>'.$row['skills'].'</td>
                        <td>'.$row['solutions'].'</td>
                        <td><button href="javascript:void(0)" class="btn-success">Invite to discussion</button></td>
                        <td><button href="javascript:void(0)" class="btn-danger">Reject</button></td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    ';
                }
            
            ?>
        
        
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
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="design/internship/js/jquery.min.js" type="text/javascript"></script>
<script src="design/internship/js/select2.min.js" type="text/javascript"></script>
<script src="design/internship/js/global.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php include './includes/footer.inc.php' ?>