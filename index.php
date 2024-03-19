<?php 
$passwordLength = isset($_GET['password-length']) ? $_GET['password-length'] : 8;

function passwordGeneration($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&()*+,-./:;=?@[\]^_{|}~';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $password;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body data-bs-theme="dark">

    <div class="container text-center p-5 mt-5">
        
            <h1 class="mb-4">
                Strong Password Generator
            </h1>

            <form method="GET" action="index.php">
                <div class="mb-3">
                <label for="password-length" class="form-label">Numero di caratteri</label>
                <input 
                type="number" 
                class="form-control" 
                id="password-length"
                name="password-length"
                aria-describedby="pwHelp"
                min="4"
                max="16"
                value="<?php echo $passwordLength ?>">
                
                <div id="pwHelp" class="form-text">Verrà generata una password con il numero di caratteri richiesti</div>
                </div>
                <button type="submit" class="btn btn-primary">Genera</button>
            </form>

            <div class="mt-5">
                <h2 class="fs-5 mb-5">Password</h2>
                <span class="p-3 rounded-3 border border-white bg-primary-subtle">
                <?php
                echo passwordGeneration($passwordLength);
                ?>
                </span>
            </div>
    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>