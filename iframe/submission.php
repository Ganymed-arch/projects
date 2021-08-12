<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Partnering</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href="../src/css/submission.css" type="text/css" rel="stylesheet">
      <script src="../src/js/checks.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="card border-0">
            <div class="card-header bg-cust-blu">
                <b style="text-transform: uppercase">You can simply fill out the form below and we'll hit you up soon!<br>
                <i class="text-light fw-bold">&ast;Keep in mind that you can reach us only if you fill in all the fields!</i><br>
            </div>
            <div class="card-body">
                <form method="POST" action="thank_you.php">
                    <label class="col-12 m-1" id="username">
                        ⮚ Enter here your specific Discord Username:&nbsp;<br>
                        <input class="w-100" minlength="1" required maxlength="100" type="text" content="user-name" name="user-name" placeholder="Example#1234">
                    </label>
                    <label class="col-12 m-1">
                        ⮚ Enter here the amount of users on your server:&nbsp;
                        <input class="w-100" min="1" required max="1000000" type="number" content="user-count" name="user-count" placeholder="Please use the general amount, no special letters">
                    </label>
                    <label class="col-12 m-1">
                        ⮚ Please do also add an invitation to your server:&nbsp;
                        <input class="w-100" type="text" required content="invitation"  minlength="1" maxlength="100" name="invitation" placeholder="https://discord.gg/tALu2Cx">
                    </label>
                    <label class="col-12 m-1">
                        ⮚ Enter here a short description about your server:&nbsp;
                        <textarea class="w-100" style="height: 150px" required content="server-description"  minlength="10" maxlength="1000" name="server-description" placeholder="Tell us what YOUR server makes it special..."></textarea>
                    </label>
                    <label class="col-12 m-1">
                        <input type="submit" id="submit-button" class="w-100 btn bg-cust-blu text-light" value="SUBMIT!" content="submission-button" name="submission-button">
                    </label>
                </form>
            </div>
        </div>
    </body>
</html>
