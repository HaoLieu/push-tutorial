<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display</title>
</head>
<style>
  .content {
      border: 1px solid gray;
      border-radius:10px;
      width:400px;
      margin:15px auto;
      padding:15px;
    }
    body {
        padding: 40px;
        background-color: #fff8df;
    }
    p {
      font-weight: bold;
      font-size: 20px;
      color: gray;
    }
    #name, #email, #gender, #web, #ops {
      font-size: 20px;
      color: #0bf427;
    }
    #save {
      font-size: 15px;
      font-weight: bold;
      border: 1px solid #0bf427;
      border-radius: 5px;
      padding: 10px 30px 10px 30px;
      background-color: #0bf427;
      color: white;
    }
    #back {
      font-size: 15px;
      font-weight: bold;
      border: 1px solid #0bf427;
      border-radius: 5px;
      padding: 10px 30px 10px 30px;
      background-color: white;
      color: #0bf427;
      margin-left: 10px;
    }
  }
</style>
<body>
  <h1 style = "color: #0bf427; text-align:center;">Confirm Information</h1>
  <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $check = $_POST['check'];
    $cars = $_POST['cars'];
  ?>
  <div class="content">
    <div>
      <p>Your name</p>
      <p id="name"><?= $name ?></p>
    </div>
    <div>
      <p>Your email</p>
      <p id="email"><?= $email ?></p>
    </div>
    <div>
      <p>Gender</p>
      <p id="gender"><?= $gender ?></p>
    </div>
    <div>
      <p>Favorite Web Browsers</p>
      <ul id="web">
        <?php
          foreach($check as $opt)
          echo '<li>'.$opt.'</li>';
        ?>
      </ul>
    </div>
    <div>
      <p>Prefered Operating System</p>
      <p id="ops"><?= $cars ?></p>
    </div>
    <button id="save">Save</button>
    <button id="back">Back</button>
</div>
</body>
</html>