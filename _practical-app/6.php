<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*Step1: Make a form that submits one value to POST super global*/
            if (isset($_POST['submit'])){
                echo "<h1>Thanks " . $_POST['FirstName'] . " we will be in touch soon!</h1>";
            }

        ?>

        <form action="6.php" method="post">

            <input type="text" name="FirstName" placeholder="First Name">
            <input type="text" name="LastName" placeholder="Last Name">
            <input type="submit" name="submit" value="Send information">

        </form>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>