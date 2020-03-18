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
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="mt-2">
    <header>
   <div class="container">
     <div class="headerImg"><img src="images/companyProfileHdr.jpg" class="img-fluid"></div>
   </div>
 </header>
    <!--End of Header-->

<!-- Main container -->
  <div class="container">
    <div class="contantMainDiv">
      <div class="aboutComapnyDiv">
          <a href="profile.php" class="btn btn-primary float-right mt-2 mb-2">
              Edit
          </a>
        <h2 class="mainHdng">About Company: American Express</h2>
        <div class="aboutCompanyCntDiv">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <h3>Specialities</h3>
            <p>Education products. Training Courses. Training material.</p>
            <ul class="compnayPrdctDetl">
            <li><p><strong>Headquarters</strong></p>
                <p>712 East 41st Streed</p>
                <p>Mountain view CA 94043</p>
                <p>United States</p>
            </li>
            <li><p><strong>Website</strong></p>
                <p>www.test.com</p>
                <p><strong>Type</strong></p>
                <p>Public Company</p>
                <p><strong>Founded</strong></p>
                <p>2003</p>
            </li>
            <li>
                <p><strong>Industry</strong></p>
                <p>Education</p>
                <p><strong>Company Size</strong></p>
                <p>1001-5000 employees</p>
            </li>
            </ul>
        </div>
        <div class="companyJobsDiv">
            <h2 class="mainHdng">Jobs at American Express</h2>
            <div class="seeAllJbs float-right"><a href="javascript:void(0)">See all jobs</a></div>
            <br>
            <ul>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)">
                <h3>Manager, Acquisition Planning & Performance,...</h3>
                <p>American Express </p>
                <p>Sydney, New South Wales...</p>
                </a>
                <div class="btmDivFtr">
                <p>33 minutes ago</p>
                </div>
            </li>
            
            </ul>
            

        </div>
        </div>
            </div>

        <div class="companyRgtSideNav">
        <div class="compnyLodoDiv">
        <center>
            <img src="images/comapnyLogo.png">
        </center>
        </div>
        <div class="thmbCmpnyIcnDiv">
        <div class="compnyVideoDiv">
        <iframe width="100%" height="115" src="https://www.youtube.com/embed/C2WDdqm7iHk?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border: 1px solid #ccc"></iframe>
        </div>
            
        </div>
        <h2 class="mainHdng">Product and Services</h2>
        <div class="thmbCmpnyIcnDiv prdctThmbDetlDiv">
            <ul>
            <li><div class="thmbIcnPrdct"><img src="images/prdctOne.jpg"></div> <div class="prdctThmbCnt"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p></div></li>
            <li><div class="thmbIcnPrdct"><img src="images/prdctOne.jpg"></div> <div class="prdctThmbCnt"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p></div></li>
            
            </ul>
        <h3><a href="javascript:void(0)">More product..</a></h3>
        </div>
        <h2 class="mainHdng">We hare hiring!</h2>
        <div class="thmbCmpnyIcnDiv prdctThmbDetlDiv">
            <ul>
            <li><div class="thmbIcnPrdct"><img src="images/weareHiring.jpg"></div> <div class="prdctThmbCnt"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p></div></li>
            
            </ul>
        <h3><a href="javascript:void(0)">Learn more..</a></h3>
        </div>
        <h2 class="mainHdng">Viewers also viewed</h2>
        <div class="thmbCmpnyIcnDiv viewerAlsoViewd">
            <ul>
            <li><img src="images/c01.jpg"></li>
            <li><img src="images/c02.jpg"></li>
            <li><img src="images/c03.jpg"></li>
            <li><img src="images/c04.jpg"></li>
            </ul>
            <h3><a href="javascript:void(0)">View more...</a></h3>
        </div>
        </div>

        </div>
    </section>



  </div>
  <!-- /.content-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<?php include './includes/footer.inc.php' ?>
