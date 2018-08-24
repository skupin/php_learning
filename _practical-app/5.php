<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php


        //Step1: Use a pre-built math function here and echo it

            echo "<p>This is the POW function, we are calculating the result of -2 elevated to the power of 20: " . pow(-2,20) ."</p>";

        //Step 2:  Use a pre-built string function here and echo it
            setlocale(LC_MONETARY, 'en_US');
            $myUpperCase = "THIS IS ALL IN CAPS";
            echo "<p>this is the strtolower function, makes everything lower case<br>Original string:<br>" . $myUpperCase . "<br>This is all in lower case:<br>" . strtolower($myUpperCase) . "</p>";


        //Step 3:  Use a pre-built Array function here and echo it

            $array1 = [1, 3 ,5];
            $array2 = [2, 4, 6];

            echo "<p>This function is caller array_merge, ir combines arrays into one, we have two arrays:<br>";
            echo "Number one:</p><pre>";
            print_r($array1);
            echo "</pre>";
            echo "<p>Number two:</p><pre>";
            print_r($array2);
            echo "</pre>";
            echo "<p>Merged arrays:</p><pre>";
            print_r(array_merge($array1, $array2));
            echo "</pre>";
        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>