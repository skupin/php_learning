<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP*/

		if (1 > 10){
			echo "nope";
		} elseif (2 > 10){
			echo "nope nope";
		} else {
			echo "<p>I love PHP!</p>";
		}

		/*Step 2: Make a forloop  that displays 10 numbers*/

		for ($myVar = 1; $myVar < 20000 ; $myVar += $myVar * 2){
			echo "<p>" . $myVar . "</p>";
		}

		/*Step 3 : Make a switch Statement that test againts one condition with 5 cases*/

		$myCondition = 42;

		switch ($myCondition){
			case 10:
				echo "nope";
				break;
			case 22:
				echo "nope nope";
				break;
			case 29:
				echo "nope";
				break;
			case 35:
				echo "nope";
				break;
			case 42:
				echo "<p>The meaning of life</p>";
		}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>