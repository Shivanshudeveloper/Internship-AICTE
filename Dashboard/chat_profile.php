<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
include 'includes/header.inc.php';?>
<html>

<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet">

</head>
<style>
.container {
    max-width: 100%;
    margin: auto;
}

img {
    max-width: 100%;
}

.inbox_people {
    background: #f8f8f8 none repeat scroll 0 0;
    float: left;
    overflow: hidden;
    width: 40%;
    border-right: 1px solid #c4c4c4;
}

.inbox_msg {
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
}

.top_spac {
    margin: 20px 0 0;
}


.recent_heading {
    float: left;
    width: 40%;
}

.srch_bar {
    display: inline-block;
    text-align: right;
    width: 60%;
    padding:
}

.headind_srch {
    padding: 10px 29px 10px 20px;
    overflow: hidden;
    border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
    color: #05728f;
    font-size: 21px;
    margin: auto;
}

.srch_bar input {
    border: 1px solid #cdcdcd;
    border-width: 0 0 1px 0;
    width: 80%;
    padding: 2px 0 4px 6px;
    background: none;
}

.srch_bar .input-group-addon button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    padding: 0;
    color: #707070;
    font-size: 18px;
}

.srch_bar .input-group-addon {
    margin: 0 0 0 -27px;
}

.chat_ib h5 {
    font-size: 15px;
    color: #464646;
    margin: 0 0 8px 0;
}

.chat_ib h5 span {
    font-size: 13px;
    float: right;
}

.chat_ib p {
    font-size: 14px;
    color: #989898;
    margin: auto
}

.chat_img {
    float: left;
    width: 11%;
}

.chat_ib {
    float: left;
    padding: 0 0 0 15px;
    width: 88%;
}

.chat_people {
    overflow: hidden;
    clear: both;
}

.chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
}

.inbox_chat {
    height: 550px;
    overflow-y: scroll;
}

.active_chat {
    background: #ebebeb;
}

.incoming_msg_img {
    display: inline-block;
    width: 6%;
}

.received_msg {
    display: inline-block;
    padding: 0 0 0 10px;
    vertical-align: top;
    width: 92%;
}

.received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
}

.received_withd_msg {
    width: 57%;
}

.mesgs {
    float: left;
    padding: 30px 15px 0 25px;
    width: 60%;
}

.sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0;
    color: #fff;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.outgoing_msg {
    overflow: hidden;
    margin: 26px 0 26px;
}

.sent_msg {
    float: right;
    width: 46%;
}

.input_msg_write input {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #4c4c4c;
    font-size: 15px;
    min-height: 48px;
    width: 100%;
}

.type_msg {
    border-top: 1px solid #c4c4c4;
    position: relative;
}

.msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    right: 0;
    top: 11px;
    width: 33px;
}

.msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    right: 5;
    top: 11px;
    width: 33px;
}

.messaging {
    padding: 0 0 50px 0;
}

.msg_history {
    height: 516px;
    overflow-y: auto;
}
</style>

<body>
    <div class="content-wrapper">
        <div class="container">
            <h3 class=" text-center">Messaging</h3>
            <div class="messaging">
                <div class="inbox_msg">
                    <div class="inbox_people">
                        <div class="headind_srch">
                            <div class="recent_heading">
                                <h4>Recent</h4>
                            </div>
                            <div class="dropdown">
                                <form method="POST">
                                    <select class="form-control" name="id1" id="id1">
                                        <option value="Python Programmer">Python Programmer</option>
                                        <option value="C++">C++</option>
                                        <option value="JAVA">JAVA</option>x
                                    </select>
                            </div>
                            <br>
                            <div class="dropdown">
                                <select class="form-control" name="id2" id="id2">
                                    <option value="Applied">Applied</option>
                                    <option value="Hold">Hold</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Rejected">Automatched</option>
                                </select>
                            </div>
                            <button name="submit_search" class="btn btn-primary mt-2" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="inbox_chat">
                            <?php
if(isset($_POST['submit_search']))
{
            include './src/php/dbh.php';
$query = mysqli_real_escape_string($conn,$_POST['id2']);
$query_status = mysqli_real_escape_string($conn,$_POST['id1']);

				$sql="SELECT * FROM student_register where ";
				$res = mysqli_query($conn,$sql);
				if($res)
				{
					while($row=mysqli_fetch_assoc($res))
					{
			echo '
      		<div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                 
                  <a href="student_select.php?uid='.$row['uid'].'company_id='.$_SESSION['id'].'&user='.$_SESSION['user'].'">
                  '.$row['first_name'].'
                  </a>
                  <span class="chat_date">Dec 25</span>
                  
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                   
                </div>
              </div>
			</div>
			';
			}
		}
	}
	else
	{
    include './src/php/dbh.php';
		$sql="SELECT * FROM student_register";
		$res = mysqli_query($conn,$sql);
		if($res)
		{
			while($row=mysqli_fetch_assoc($res))
			{
	echo '
  <div class="chat_list">
	  <div class="chat_people">
		<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
    <div class="chat_ib">
    <a href="student_select.php?uid='.$row['uid'].'&company_id='.$_SESSION['id'].'&user='.$_SESSION['user'].'">
    '.$row['first_name'].'
    </a>
		  <p>Test, which is a new approach to have all solutions 
			astrology under one roof.</p>
		</div>
	  </div>
	</div>
	';
	}
}

	}
			?>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>