
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/restablecerContrasena.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="../controlador/action/act_restablecerContrasena2.php" method="POST">
                <h2>Restablecer Password</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Email</label>
                    <input type="email" class="form-control" id="c" name="correo">
                </div>
                <button type="submit" class="btn btn-primary">Restablecer</button>
            </form>
        </div>
    </div>
</body>
</html>