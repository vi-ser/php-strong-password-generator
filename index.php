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

            <form action="password-generation.php">
                <div class="mb-3">
                <label for="password-length" class="form-label">Numero di caratteri</label>
                <input 
                type="number" 
                class="form-control" 
                id="password-length" 
                aria-describedby="pwHelp"
                min="4"
                max="16">
                
                <div id="pwHelp" class="form-text">Verrà generata una password con il numero di caratteri richiesti</div>
                </div>
                <button type="submit" class="btn btn-primary">Genera</button>
            </form>

    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>