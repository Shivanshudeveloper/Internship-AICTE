<?php

include './dbh.php';
session_start();
if (isset($_POST['internship_post'])) {
    $advertisement_id = mysqli_real_escape_string($conn, $_POST['adid']);
    $job_type = mysqli_real_escape_string($conn, $_POST['job_type']);
    $internship_type = mysqli_real_escape_string($conn, $_POST['internship__type']);
    $locations = mysqli_real_escape_string($conn, $_POST['locations']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $department =  " ";
    if (!empty($_POST['department'])) {
        foreach($_POST['department'] as $selected){
            $department = $department.$selected.',';
        }
    }
    $department = rtrim($department, ",");
    $qualification = " ";
    if (!empty($_POST['qualification'])) {
        foreach($_POST['qualification'] as $selected){
            $qualification = $qualification.$selected.',';
        }
    }
    $qualification = rtrim($qualification, ",");
    $specialisation =" ";
    if (!empty($_POST['specialisation'])) {
        foreach($_POST['specialisation'] as $selected){
            $specialisation = $specialisation.$selected.',';
        }
    }
    $specialisation = rtrim($specialisation, ",");
    
    $description=mysqli_real_escape_string($conn, $_POST['description']);
    $stiphen = mysqli_real_escape_string($conn, $_POST['stiphen']);
    $eligibility=mysqli_real_escape_string($conn,$_POST['eligibility']);
    $terms_of_enagement=mysqli_real_escape_string($conn,$_POST['terms_of_enagement']);
    $logistics=mysqli_real_escape_string($conn,$_POST['logistics']);
    $guidelines=mysqli_real_escape_string($conn,$_POST['guidelines']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $fees = mysqli_real_escape_string($conn, $_POST['fees']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $id =" ";
    $reservation=" ";
    if (!empty($_POST['reserve'])) {
        foreach($_POST['reserve'] as $selected){
            $reservation = $reservation.$selected.',';
        }
    }
    $reservation = rtrim($reservation, ",");
    static $x=100000000;
    $x++;
    $year=date("Y");
    $internshipId = "INTERNSHIPGOV_".$year.$x;
    $companyId = $_SESSION['id'];
    $sql = "INSERT INTO `post_internship_government`(`id`, `uid`,`company_id`, `advertisement_id`, `job_type`, `internship_type`, `locations`, `title`, `role`, `department`, `qualification`, `specialisation`, `description`, `stiphen`, `eligibility`, `terms_of_enagement`, `logistics`, `guidelines`, `duration`, `phone`, `email`, `fees`, `reservation`, `age`) VALUES ('$id','$internshipId','$companyId','$advertisement_id','$job_type','$internship_type','$locations','$title','$role','$department','$qualification','$specialisation','$description','$stiphen','$eligibility','$terms_of_enagement','$logistics','$guidelines','$duration','$phone','$email','$fees','$reservation','$age')";
    mysqli_query($conn, $sql);
    echo $sql;
    header('Location: ../../internships.php?uid='.$internshipId);
}

if (isset($_POST[''])) {
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
    $job_type = mysqli_real_escape_string($conn, $_POST['job_type']);

    $internshipId = "INTERNSHIP_".time().uniqid();


    $companyId = $_SESSION['id'];
    

    $attributes = '';


    if (!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $selected){
            $attributes = $attributes.$selected.',';
        }
    }
    $attributes = rtrim($attributes, ",");


    $sql = "INSERT INTO internhips (uid, company_id, type,job_type, title, description, locations, numberInternRequiried, keywords, email, phone, country, company, stipend, start, end, contract, whoCanApply, domain, eligibility, perks, certificaion, hours, languages, interview, attributes) VALUES ('$internshipId' , '$companyId','$type','$job_type','$title', '$description', '$locations', '$numberInternRequiried', '$keywords', '$email', '$phone', '$country', '$company', '$stipend', '$start', '$end', '$contract', '$whoCanApply', '$domain', '$eligibility', '$perks', '$certificaion', '$hours', '$languages', '$interview', '$attributes');";
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
    $query   = ("SELECT * FROM student_register WHERE student_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['student_email'];
            $dbpassword = $row['student_password'];
            $id=$row['student_uid'];
            $user=$row['student_first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
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

if(isset($_POST['login_government']))
{

$username = $_POST['email'];
$password = $_POST['password'];
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM ubl_register WHERE ubl_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['ubl_email'];
            $dbpassword = $row['ubl_password'];
            $id=$row['ubl_company_id'];
            $user=$row['ubl_first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=2;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
        } 
        else{
             header("location: ../../login_government.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login_government.php?error=UserNotExist");
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
     $query   = ("SELECT * FROM corporate_register WHERE corporate_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $dbusername = $row['corporate_email'];
            $dbpassword = $row['corporate_password'];
            $id=$row['corporate_uid'];
            $user=$row['corporate_first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['id']=$id;
            $_SESSION['login_level']=2;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
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
            header("location: ../../../Dashboard/index_dashboard.php"); //another file to send request to the next page if values are correct.
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
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login_corporate.php?task=RegisteredSuccessfully");
    }
}

//student register
if (isset($_POST['student-register'])) {
    $id ='';
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $languages=" ";
    $technical=" ";
    $skills=" ";
    // Hashning the password
    $hash_pwd = md5($password);

    // Generating a unique id
    $uid = "STU".uniqid().time();

    $sql = "INSERT INTO `student_register`(`id`, `student_uid`, `student_first_name`, `student_last_name`, `student_email`, `student_contact`, `student_languages`, `student_technical`, `student_skills`, `student_password`) VALUES ('$id','$uid', '$fname', '$lname', '$email', '$contactnum', '$languages','$technical','$skills', '$hash_pwd')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login.php?task=RegisteredSuccessfully");
    }
}

if (isset($_POST['common-register'])) 
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $idnumber=" ";
    $organization=" ";
    $hash_pwd=" ";
    $corporatelist=" ";
    // Hashning the password
    $hash_pwd = md5($password);

    // Generating a unique id
    $uid = "TPO".uniqid().time();

    $sql = "INSERT INTO `corporate_register`(`corporate_uid`, `corporate_first_name`, `corporate_last_name`, `corporate_email`, `corporate_contact`, `corporate_corporate_list`, `corporate_id_number`, `corporate_organization`, `corporate_password`, `corporate_state`, `corporate_district`, `corporate_user_level`, `corporate_category`) VALUES('$uid', '$fname', '$lname', '$email', '$contactnum', '$corporatelist', '$idnumber', '$organization', '$hash_pwd')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login_corporate.php?task=RegisteredSuccessfully");
    }
}

if (isset($_POST['ubl_register'])) 
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $idnumber=" ";
    $organization=mysqli_real_escape_string($conn, $_POST['organization']);
    $authority=mysqli_real_escape_string($conn, $_POST['authority']);
    // Hashning the password
    $hash_pwd = md5($password);
    $id=" ";
    // Generating a unique id
    $uid = "UBL".uniqid().time();

    $sql = "INSERT INTO `ubl_register`(`ubl_id`, `ubl_company_id`, `ubl_organisaton`, `ubl_email`, `ubl_password`, `ubl_first_name`, `ubl_last_name`, `ubl_auhority_name`, `ubl_contact_num`) VALUES('$id','$uid','$organization','$email','$hash_pwd','$fname','$lname','$authority','$contactnum')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login_type.php?task=RegisteredSuccessfully");
    }
}

if (isset($_POST['dm-register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);


    // Hashning the password
    $hash_pwd = md5($password);
    $corporate_list=" ";
    $id_number=" ";
    $organization=" ";
    $user_level=2;
    // Generating a unique id
    $uid = "DM".uniqid().time();

    $sql = "INSERT INTO `corporate_register`(`uid`, `first_name`, `last_name`, `email`, `contact`, `corporate_list`, `id_number`, `organization`, `password`, `state`, `district`, `user_level`) VALUES('$uid', '$fname', '$lname', '$email', '$contactnum', '$corporate_list','$id_number','$organization','$hash_pwd','$state','$district','$user_level')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login_corporate.php?task=RegisteredSuccessfully");
    }
}

if (isset($_POST['loadDataCompany'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId=    mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$projectId' and msg_to='$userId' or msg_to='$projectId' and msg_from='$userId'  ORDER BY msg_date ASC;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk < 1) {
        echo '
        <span class="">
            <p class="h4 text-center" style="margin-top: 15%;">No Message Yet</p>
            <!-- <img src="https://media1.giphy.com/media/eonIj5bw871io/source.gif" class="img-fluid w-50" alt="No Message" srcset=""> -->
        </span>
        ';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="chat_list">
            <div class="chat_people">
              <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    '.$row['msg_from_name'].'
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>'.$row['msg'].'</p>
                    <span class="time_date"> 11:01 AM | Today</span>
                </div>
            </div>
        </div>
    </div>
            ';
        }
    }
}


if (isset($_POST['loadDataStudent'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['student_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$projectId' and msg_to='$userId' or msg_to='$projectId' and msg_from='$userId'  ORDER BY msg_date ASC;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if (($resultChk)< 1) {
        echo '
        <span class="">
            <p class="h4 text-center" style="margin-top: 15%;">No Message Yet</p>
            <!-- <img src="https://media1.giphy.com/media/eonIj5bw871io/source.gif" class="img-fluid w-50" alt="No Message" srcset=""> -->
        </span>
        ';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="incoming_msg">
            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                    alt="sunil"> 
                    </div>
                    '.$row['msg_from_name'].'
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>'.$row['msg'].'</p>
                    <span class="time_date"> 11:01 AM | Today</span>
                </div>
            </div>
        </div>
    </div>
            ';
        }
    }
}

// @POST Request for sending Message
if (isset($_POST['messageSendByCompany'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $projectId = mysqli_real_escape_string($conn, $_POST['student_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['uid']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $sql = "INSERT INTO message (msg_to, msg_from, msg_from_name, msg, msg_date) VALUES ('$projectId', '$userId', '$user', '$message','$date');";
$res = mysqli_query($conn, $sql);
}

if (isset($_POST['messageSendByStudent'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $sql = "INSERT INTO message (msg_to, msg_from, msg_from_name, msg, msg_date) VALUES ('$projectId', '$userId', '$user', '$message','$date');";
$res = mysqli_query($conn, $sql);
}
if(isset($_POST['offerrelease'])){
    $company_id=$_SESSION['id'];
    $offer="OFFER".uique().time();
    $sql="INSERT INTO offer_list(uid,offer_id,company_id,student_id,time_stamp)VALUES('','$offer','$company_id','$student_id','');";
    $res = mysqli_query($conn,$sql);
    
}
?>
