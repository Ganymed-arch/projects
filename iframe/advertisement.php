<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Partnering</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="../src/js/checks.js" type="text/javascript"></script>
</head>
<body class="bg-dark" onkeyup="checkInputs()">
<div class="col12">
  <div class="card">
    <div>
      <div class="card-body">
        <b style="text-transform: uppercase">You can simply fill in the form below and we'll hit you up soon! Stay tuned ;)</b><br>
        <i style="color: #ff0000">&ast;Do have in mind, that only if you fill in all fields we will receive the advertisement!</i><br>
        <form method="POST">
          <label class="col-12 m-1">
            &pointint;&nbsp;Enter here your specific Discord Username:&nbsp;<br>
            <input style="width: 100%" type="text" content="user-name" name="user-name" placeholder="For instance: #1234 Bump">
          </label>
          <label class="col-12 m-1">
            &pointint;&nbsp;Enter here the amount you would consider a fair price:&nbsp;
            <input style="width: 100%" type="number" content="fair-price" name="user-count" placeholder="For instance: 20€ a week">
          </label>
          <label class="col-12 m-1">
            &pointint;&nbsp;Explain us what you offer:&nbsp;
            <textarea style="width: 100%; height: 150px" content="server-description" name="server-description" placeholder="Key points are alright"></textarea>
          </label>
          <label class="col-12 m-1">
            &pointint;&nbsp;Explain us what you would expect from us:&nbsp;
            <textarea style="width: 100%; height: 150px" content="server-description" name="server-description" placeholder="Key points are alright"></textarea>
          </label>
          <label class="col-12 m-1">
            <input style="width: 100%" type="submit" class="btn btn-danger" value="SUBMIT!" content="submission-button" name="submission-button" hidden>
          </label>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
require_once "../functions/send_submission.php";