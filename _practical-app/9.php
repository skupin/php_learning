<?php session_start();
$_SESSION['givBacon'] = "Bacon ipsum dolor amet tri-tip salami ground round hamburger. Salami shank meatball, ground round spare ribs chuck pig short loin kevin buffalo t-bone. Ball tip meatloaf landjaeger leberkas. Filet mignon shank brisket frankfurter kielbasa picanha. Leberkas alcatra andouille, swine drumstick pork shoulder.";
?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>


    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Create a link saying Click Here, and set
        the link href to pass some parameters and use the GET super global to see it*/

        $name = "this is a string with spaces";
        $buttonText = "CLICK HERE";

        ?>

        <a href="9.php?name=<?php echo $name; ?>"><?php echo $buttonText; ?></a>

        <?php print_r($_GET); ?>
        <?php /* Step 2 - Set a cookie that expires in one week*/ ?>

        <?php

        if (!isset($_COOKIE['myFirstCookie'])) {
            $cookieName = "myFirstCookie";
            $cookieValue = "kJSDNFBkjSNDFkj;SNDFkjs";

            $cookieExpiration = time() + (60 * 60 * 24 * 7);

            setcookie($cookieName, $cookieValue, $cookieExpiration);

        } else {
            echo $_COOKIE['myFirstCookie'];
        }

        ?>

        <?php /* Step 3 - Start a session and set it to value, any value you want.*/
        echo $_SESSION['givBacon'];

        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>