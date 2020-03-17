<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AICTE Connect With | FlekDeno Technology</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img width="4%" onclick="dashboard();" src="https://upload.wikimedia.org/wikipedia/en/e/eb/All_India_Council_for_Technical_Education_logo.png" alt="AICTE" srcset="">
    <div class="collapse navbar-collapse ml-4" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="localhost:5000/dashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav float-right">
      <li class="nav-item">
        <a class="nav-link" href="localhost:5000/users/login">Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>

<div class="container mt-2">
    <div class="card card-body">
        <h4 class="text-center">Messages</h4>
        <div class="card-body">
          
      <!-- @Message Area -->
      <div id="message-area" style="height: 300px; overflow-y: scroll;"></div>
      <!-- @Message Area -->

      </div>
      <form class="form-group mt-2">
        <textarea name="message" id="message" class="form-control" cols="10" rows="2"></textarea>
        <button type="button" onclick="sendMsg()" class="btn mt-2 btn-primary btn-block btn-sm">
          Send Message
          <i class="fas fa-paper-plane"></i>
        </button>
      </form>
    </div>
</div>
<script>
const sendMsg = () => {
    var message = $("#message").val();
        date = new Date();
    var pageURL = window.location.href;
        url = new URL(pageURL);
        company_id= url.searchParams.get("company_id");
        uid = url.searchParams.get("uid");
        userName = url.searchParams.get("userName");
    console.log(userName)
    if (!message) {
        console.log("No Message Found")
    } else {
        $.post("./src/php/main.php", {
            user: userName,
            message: message,
            company_id:company_id,
            uid: uid,
            date: date,
            messageSend: true
        }).then(() => {
            console.log("Inserted!")
        })
    }
    clearTextArea()
}

const clearTextArea = () => {
    document.getElementById("message").value = ""
    console.log("Cleared")
}

var pageURL = window.location.href;
    url = new URL(pageURL);
    company_id = url.searchParams.get("projectId");
    userName = url.searchParams.get("userName");
    userId = url.searchParams.get("userId");
setInterval(() => {
  $("#message-area").load("./src/php/main.php", {
    projectId: projectId,
    userId: userId,
    userName: userName,
    loadData: true
  })
}, 1000)
</script>
</body>
</html>