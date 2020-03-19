<?php 
session_start();
if(!isset($_SESSION['loggedIn']))
{
    header("location:login.php?task=PlseLogin");
}
else if($_SESSION['login_level']==1)
{
include './includes/header_students.php'; 
}
else
{
    include './includes/header_students.php'; 
}
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="design/internship/css/main.css" rel="stylesheet" media="all">
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="mt-2">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
            <div class="card card-4">
            <div class="card-body">
            <h2 class="title">Solutions Submitted</h2>
            <div class="row row-space solutionsDivLst">
            <div class="col-xs-12">
                <div class="list-group">

                <?php 
                    include './src/php/dbh.php';
                    $company_uid = "12345678";
                    $sql = "SELECT * FROM problem_statements WHERE company_uid = '12345678'";
                    $result = mysqli_query($conn, $sql);
                    $resultChk = mysqli_num_rows($result);
                    if ($resultChk < 1) {
                        echo '
                            <center>
                                <h2>
                                    No Result Found !
                                </h2>
                            </center>
                        ';
                    } else {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <a href="solutions-details-sbmt.php?uid='.$row['uid'].'&name='.$row['problem'].'" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between listItemDiv">
                                <h5 class="mb-1">'.$row['problem'].'</h5>
                                <small class="list-group-item-success solBtn">12 Student Submited Solutions</small>
                                <small class="list-group-item-warning viewBtn">10 Student Viewd</small> 
                                </div>
                            </a>
                            ';
                        }
                    }
                ?>
            
            
            
            
            
            
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </section>



</div>
  <!-- /.content-wrapper -->
<script src="design/internship/js/jquery.min.js" type="text/javascript"></script>
<script src="design/internship/js/select2.min.js" type="text/javascript"></script>
<script src="design/internship/js/global.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php include './includes/footer.inc.php' ?>
