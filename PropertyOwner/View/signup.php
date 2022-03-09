<?php
$title = "Sign Up";
require_once('header.php');

?>
</nav>
<section class="register-photo">

    <div class="form-container">
        <form method="post" action="../controller/regcheck.php" enctype="multipart/form-data">
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name"  placeholder="Name" minlength="3" maxlength="30" onkeyup="validateName();">
             <span id="nameMsg"></span>
             </div>

            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" minlength="3" maxlength="30"></div>

            <div class="mb-3"><input class="form-control" type="email" name="email" id="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="text" name="phone" placeholder="Phone Number"></div>
            <div class="mb-3"><input class="form-control" type="text" name="address" placeholder="Address"></div>

            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" minlength="4"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required="" minlength="4"></div>

            <div class="mb-3">
                <div class="form-control"> <span> <a>Gender:</span>

                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </div>
            </div>


            <div class="mb-3">

                <div class="form-control">
                    <span>Profile Photo </span>

                </div>
                <img src="../view/assets/img/meeting.jpg" id="previewImg" width="150px">
                <input class="btn btn-success" type="file" name="file" id="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">

            </div>

            <div class="mb-3"><button class="btn btn-dark d-block w-100" type="submit" name="submit">Sign Up</button></div><a class="already" href="/view/login.php">You already have an account? Login here.</a>
        </form>
    </div>
</section>

<script src="../js/singUp.js"></script>


