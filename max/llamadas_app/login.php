<?php include "includes/header.php"; ?>
<?php include "db_connection.php"; ?>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM usuarios WHERE usuario = '$user'";

        $result = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($result)){
            if (strcmp($row['clave'], $password) ){
                echo "<div class=\"alert alert-danger\" role=\"alert\">
                          Usuario o clave incorrectos!
                        </div>";
            } else {
                echo "<div class=\"alert alert-success\" role=\"alert\">
                      Acceso exitoso!
                    </div>";
            }


        }



    }

?>


<!--<h2 class="text-center">Registro de llamadas</h2>-->


    <h1 class="text-center">Registro de llamadas</h1>

    <div class="center-box" style="margin: 0 auto; width: 400px;">
        <form action="login.php" method="post" class="center-box">
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>

            <input type="submit" name="submit" value="Acceder" class="btn btn-primary">
        </form>

    </div>






<?php include "includes/footer.php";?>