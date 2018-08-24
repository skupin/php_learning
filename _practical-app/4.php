<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

            //Step1: Define a function and make it return a calculation of 2 numbers
            function myCalc () {
                $num1 = 23;
                $num2 = 45;
                return $num1 * $num2;
            }

            echo "<p>calculation function result: " . myCalc() .  "</p>";

            //Step 2: Make a function that passes parameters and call it using parameter values
            function myAddition ($num1, $num2){
                return $num1 + $num2;
            }

            echo "<p>Function with parameters, adding 2568774 and 45667774: " . myAddition(2568774, 45667774) . "</p>";
		?>


	</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>
