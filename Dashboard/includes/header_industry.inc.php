<!DOCTYPE html>
<html lang="en">

<head>
    <title>AICTE Internship Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open1-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate1.css">

    <link rel="stylesheet" href="css/owl1.carousel.min.css">
    <link rel="stylesheet" href="css/owl1.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific1-popup.css">

    <link rel="stylesheet" href="css/aos1.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon1.css">
    <link rel="stylesheet" href="css/icomoon1.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-analytics.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>

</head>

<body class="newBgRptr">
    <div class="topnav">
        <div class="row">
            <div class="col">
                <select class="form-control w-40" name="sel" id="sel">
                <?php 
                    include '../src/php/dbh.php';
                    $sql="SELECT * FROM `industry category`;";
                      $res = mysqli_query($conn,$sql);
                      echo $sql;
                      while($row=mysqli_fetch_assoc($res))
                      {
                    ?> 
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                      <?php }?>
                </select>
            </div>
            <div class="col">
                <select class="form-control w-40" name="sel" id="sel">
                    <option value="industry Catgory">Industry Catgory</option>
                    <option value="industry Catgory">Industry Catgory</option>
                    <option value="industry Catgory">Industry Catgory</option>
                    <option value="industry Catgory">Industry Catgory</option>
                    <option value="industry Catgory">Industry Catgory</option>
                    <option value="industry Catgory">Industry Catgory</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control w-40" placeholder="Search..">
            </div>
        </div>
        <div class="row">
            <div class="col" align>

                <center>
                    <label for="">Company</label>
                    <input type="radio" name="id1" id="company" value="company">
                    <label for="">student</label>
                    <input type="radio" name="id1" id="company" value="company">
                </center>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg ftco-navbar-light headerDivNew" id="ftco-navbar">
        <div style="background-color: #000080 !important" class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                AICTE helps Student find work they love & Organization find best intern on pan India basis
            </button>
            <div class="collapse navbar-collapse" style="background-color: #000080 !important" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <center>
                            <a href="index.php" class="text-light nav-link pl-0">AICTE HELPS STUDENT FIND WORK THEY LOVE
                                & ORGANIZATIONS FIND BEST INTERNS ON PAN INDIA BASIS</a>
                    </li>
                    </center>

                    <li class="nav-item">
                        <a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->
    <style>
    .topnav {
        overflow: hidden;
        background-color: #e9e9e9;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Style the "active" element to highlight the current page */
    .topnav a.active {
        background-color: #2196F3;
        color: white;
    }

    /* Style the search box inside the navigation bar */
    .topnav input[type=text] {
        float: right;
        padding: 6px;
        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
    }

    /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
    @media screen and (max-width: 600px) {

        .topnav a,
        .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }

        .topnav input[type=text] {
            border: 1px solid #ccc;
        }
    }
    </style>