<?php require_once "core/init.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<!-- ISI KONTENT -->
<br>
<br>
<?php include "loginSession.php"; ?>
<div class="text-lighten-5 center container collection with-header">
    <h4> Masukkan Username & Password</h4>
</div>
<form class="col s6 container collection with-header" method="post" action="login.php">
    <div class="row">
        <div class="input-field col s5 offset-s3 ">
            <input id="username" type="text" name="username" class="validate" required>
            <label for="lblusername">Username</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s5 offset-s3">
            <input name="password" id="password" type="password" class="validate" required>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row">
        <button class="btn col offset-s3" type="submit" name="submit">Masuk<i class="material-icons right">send</i></button>
    </div>
</form>
<br>
<br>
<?php require_once "view/footer.php" ?>
