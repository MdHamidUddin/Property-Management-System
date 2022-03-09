<?php 
$title = "Contact Admin";
require_once('header.php');
require_once('sessionheader.php');

?>
 
</nav>

<section class="login-clean">
        <form method="post" action="../controller/contactAdminCheck.php">
            <div class="mb-3"><input class="form-control" type="text" name="topic" placeholder="Topic"></div>
            <div class="mb-3"><textarea class="form-control" rows="6" style="height:100%;" type="text" name="message" placeholder="Message" ></textarea></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit" value="submit"style="color: var(--bs-light);background: var(--bs-indigo);">Send</button>
        </form>
</section>


