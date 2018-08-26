<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
        <?php

        // this is a change

        /*  Step 1 - Create a database in PHPmyadmin

            Step 2 - Create a table like the one from the lecture

            Step 3 - Insert some Data

            Step 4 - Connect to Database and read data

    */

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $connect = mysqli_connect('localhost','root','447713001','php_learning');
                    if (!$connect){
                        die("Database connection failed. " . mysqli_connect_error());
                    } else {
                        echo "<h4>We are connected</h4>";
                    }


                    $query = "SELECT * FROM users";
                    $result = mysqli_query($connect,$query);
                    if (!$result) {
                        die('Query failed! ..' . mysqli_error());
                    }
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $user = $row['username'];
                        $pass = $row['password'];
                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$user</td>";
                        echo "<td>$pass</td>";
                        echo "</tr>";

                    }
                ?>
            </tbody>
        </table>


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
