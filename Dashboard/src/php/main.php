<?php

include './dbh.php';
session_start();
if (isset($_POST['internship_post'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $locations = mysqli_real_escape_string($conn, $_POST['locations']);
    $numberInternRequiried = mysqli_real_escape_string($conn, $_POST['numberInternRequiried']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $start = mysqli_real_escape_string($conn, $_POST['startdate']);
    $end = mysqli_real_escape_string($conn, $_POST['end']);
    $contract = mysqli_real_escape_string($conn, $_POST['contract']);
    $whoCanApply = mysqli_real_escape_string($conn, $_POST['whoCanApply']);
    $domain = mysqli_real_escape_string($conn, $_POST['domain']);
    $eligibility = mysqli_real_escape_string($conn, $_POST['eligibility']);
    $perks = mysqli_real_escape_string($conn, $_POST['perks']);
    $certificaion = mysqli_real_escape_string($conn, $_POST['certificaion']);
    $hours = mysqli_real_escape_string($conn, $_POST['hours']);


    $languages = mysqli_real_escape_string($conn, $_POST['languages']);
    $interview = mysqli_real_escape_string($conn, $_POST['interview']);

    $internshipId = "INTERNSHIP_".time().uniqid();


    $companyId = $_SESSION['id'];
    

    $attributes = '';


    if (!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $selected){
            $attributes = $attributes.$selected.',';
        }
    }
    $attributes = rtrim($attributes, ",");


    $sql = "INSERT INTO internhips (uid, company_id, type, title, description, locations, numberInternRequiried, keywords, email, phone, country, company, stipend, start, end, contract, whoCanApply, domain, eligibility, perks, certificaion, hours, languages, interview, attributes) VALUES ('$internshipId' , '$companyId','$type','$title', '$description', '$locations', '$numberInternRequiried', '$keywords', '$email', '$phone', '$country', '$company', '$stipend', '$start', '$end', '$contract', '$whoCanApply', '$domain', '$eligibility', '$perks', '$certificaion', '$hours', '$languages', '$interview', '$attributes');";
    mysqli_query($conn, $sql);
    header('Location: ../../automatch.php?uid='.$internshipId);
}

if (isset($_POST['industryProblem_btn'])) {
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $research = mysqli_real_escape_string($conn, $_POST['research']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $solveby = mysqli_real_escape_string($conn, $_POST['solveby']);
    $studentResearcher = mysqli_real_escape_string($conn, $_POST['studentResearcher']);
    $studentStream = mysqli_real_escape_string($conn, $_POST['studentStream']);
    $studentExpertise = mysqli_real_escape_string($conn, $_POST['studentExpertise']);
    $workResearch = mysqli_real_escape_string($conn, $_POST['workResearch']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    

    
    $company_uid = $_SESSION['id'];
    echo $_SESSION['id'];

    $sql = "INSERT INTO problem_statements (uid , company_uid,problem, description, location, research, category, solveby, studentResearcher, studentStream, studentExpertise, workResearch, duration, stipend, certificate, level) VALUES ('$uid' , '$company_uid','$problem', '$description', '$location', '$research', '$category', '$solveby', '$studentResearcher', '$studentStream', '$studentExpertise', '$workResearch', '$duration', '$stipend', '$certificate', '$level');";
    mysqli_query($conn, $sql);
    header('Location: ../../solutions.php');
}
if(isset($_POST['login']))
{

$username = $_POST['email'];
$password = $_POST['password'];
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM student_register WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['uid'];
            $user=$row['first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index.php"); //another file to send request to the next page if values are correct.
        } 
        else{
             header("location: ../../login.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login.php?error=PlseEnterUsernameorPassword");
    }
}
if(isset($_POST['login_c']))
{
    $username = $_POST['email'];
    $password = $_POST['password'];
    $dbusername = " ";
    $dbpassword = " ";
    $user=" ";
    $id=" ";
    $password=md5($password);

if ($username && $password) {
     $query   = ("SELECT * FROM corporate_register WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['uid'];
            $user=$row['first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['id']=$id;
            $_SESSION['login_level']=2;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index.php"); //another file to send request to the next page if values are correct.
            exit();
        } 
        else{
            
            header("location: ../../login_corporate.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login_corporate.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login_corporate.php?error=PlseEnterUsernameorPassword");
    }
}

if(isset($_POST['login_dm']))
{
session_start();
$username = $_POST['email'];
$password = $_POST['password'];
$dbusername = " ";
$dbpassword = " ";
$password=md5($password);

if ($username && $password) {
    mysqli_select_db($conn, "internal") or die ("Could'nt find database");
    
    $query   = ("SELECT * FROM corporate_register WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['uid'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['loggedIn']=1;
            $_SESSION['login_level']=3;
            $_SESSION['id']=$id;
            header("location: ../../../Dashboard/index.php"); //another file to send request to the next page if values are correct.
            exit();
        } 
        else{
            
            header("location: ../../login.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login.php?error=PlseEnterUsernameorPassword");
    }
}
//corporate register
if (isset($_POST['corporate-register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $corporatelist = mysqli_real_escape_string($conn, $_POST['corporatelist']);
    $idnumber = mysqli_real_escape_string($conn, $_POST['idnumber']);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']);
    $uid = "CORPORATE".uniqid().time();

    // Hashning the password
    $hash_pwd = md5($password);

    $sql = "INSERT INTO corporate_register(uid ,first_name, last_name, email, contact, corporate_list, id_number, organization, password) VALUES('$uid', '$fname', '$lname', '$email', '$contactnum', '$corporatelist', '$idnumber', '$organization', '$hash_pwd')";
    mysqli_query($conn, $sql);
}

//student register
if (isset($_POST['student-register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $institute = mysqli_real_escape_string($conn, $_POST['institute']);

    // Hashning the password
    $hash_pwd = md5($password);

    // Generating a unique id
    $uid = "STU".uniqid().time();

    $sql = "INSERT INTO student_register(uid, first_name, last_name, email, contact, institute, password) VALUES('$uid', '$fname', '$lname', '$email', '$contactnum', '$institute', '$hash_pwd')";
    mysqli_query($conn, $sql);
}

if (isset($_POST['dm-register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $institute = mysqli_real_escape_string($conn, $_POST['institute']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);


    // Hashning the password
    $hash_pwd = md5($password);

    // Generating a unique id
    $uid = "STU".uniqid().time();

    $sql = "INSERT INTO corporate(uid, first_name, last_name, email, contact, institute, password,state,district) VALUES('$uid', '$fname', '$lname', '$email', '$contactnum', '$institute', '$hash_pwd,$state,$district)";
    mysqli_query($conn, $sql);
}
?>
