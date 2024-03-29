<?php
session_start();

// Include the database file
include 'dbh.php';
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
            $_SESSION['login']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../chat_profile_student.php"); //another file to send request to the next page if values are correct.
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
else
{
    /* echo"Error"; */
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
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../chat_profile.php"); //another file to send request to the next page if values are correct.
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
            $_SESSION['login']=1;
            $_SESSION['level']=2;
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
else
{
   /*  echo"Error"; */
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

if(isset($_POST['post_internship'])){
$url=mysqli_real_escape_string($conn,$_POST['url']);
$tittle=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$salary=mysqli_real_escape_string($conn,$_POST['salary']);
$StartDate=mysqli_real_escape_string($conn,$_POST['startdate']);
$contract=mysqli_real_escape_string($conn,$_POST['contract']);
$working_hours=mysqli_real_escape_string($conn,$_POST['working_hours']);
$experience=mysqli_real_escape_string($conn,$_POST['experience']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$requirements=mysqli_real_escape_string($conn,$_POST['requirements']);
$date=date();
$id=$company.uniqid().time();
$id=mysqli_real_escape_string($conn,$id);
$duration=mysqli_real_escape_string($conn,$_POST['duration']);
$expiration_date=mysqli_real_escape_string($conn,$_POST['expiration_date']);

   $sql= "INSERT INTO `posted_internship`(`id`, `url`, `title`, `content`, `city`, `country`, `company`, `salary`, `StartDate`, `contract`, `working_hours`, `experience`, `category`, `requirements`, `date`, `duration`, `expiration_date`) VALUES ('$id','$url','$tittle','$content','$city','$country','$company','$salary','$SatrtDate','$contract','$working_hours','$experience','$category','$requirements','$date','$duration','$expiration_date')";
   $res = mysqli_query($conn,$sql);
   if($res){
       header("Location:../../post_internship.php?task=success");
   }
   else
   {
    header("Location:../../post_internship.php?task=unsuccessful");
}
}
if (isset($_POST['loadUserStudent'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$userId' and msg_to='$projectId';";
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

if (isset($_POST['loadDataCompany'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId=    mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$projectId' and msg_to='$userId';";
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
    $sql = "SELECT * FROM message where msg_from='$userId' or msg_to='$projectId' ;";
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

if (isset($_POST['loadUserCompany'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['student_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from='$userId' or msg_to='$projectId' ;";
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
?>
