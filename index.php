<?php 

function generatePwd(){
    return "ciaociao";
}


if(isset($_GET["pwdLength"])){
    $newPwd = generatePwd();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body class="text-light bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1 class="mb-3">STRONG Password Generator</h1>
                <h2>Genera una password Sicura</h2>
            </div>
            <div class="alert alert-dark text-center" role="alert">
                <?php echo $newPwd ?>
            </div>
            <div class="col-12 text-center">
              <form action="index.php" method="get">
                <label for="pwdLength">Lunghezza password:</label>
                <input class="w-25" type="number" name="pwdLength" placeholder="Inserisci un numero" min="8" max="32">

                <button type="submit" class="btn btn-light ms-3 ">Invia</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </form>  
            </div>
        </div>
    </div>
</body>
</html>