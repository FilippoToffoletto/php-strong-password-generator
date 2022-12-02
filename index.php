<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generatore Password</title>

    <link rel="stylesheet" href="./style.css">

</head>
<body>
   <main>
        <div class="ft-container">
            <h1 class="text-uppercase mb-2">Strong password generator</h1>
            <div class="ft-form">
                <div class="py-4">
                    <form action="text-start">
                        <label for="basic-url" class="form-label text-capitalize">required password length</label>
                        <div class="input-group mb-3 w-50 m-auto">
                            <input type="text" class="form-control text-center" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </form>
                </div>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="same_chars" id="flexRadioDefault1" checked>
                        <label class="form-check-label text-capitalize" for="flexRadioDefault1">
                            repeating characters
                        </label>
                    </div>
                    <div class="form-check mx-4">
                        <input class="form-check-input" type="radio" name="same_chars" id="flexRadioDefault2">
                        <label class="form-check-label text-capitalize" for="flexRadioDefault2">
                            NO repeating characters
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox-form d-flex">
                        <input type="checkbox" id="numbers" checked>
                        <label for="numbers" class="mx-3">Numbers</label>
                    </div>
                    <div class="checkbox-form d-flex">
                        <input type="checkbox" id="letters" checked>
                        <label for="numbers" class="mx-3">Letters</label>
                    </div>
                    <div class="checkbox-form d-flex">
                        <input type="checkbox" id="specialchars" checked>
                        <label for="numbers" class="mx-3">Spacial Characters</label>
                    </div>
                </div>

            </div>   
            <div class="d-flex justify-content-center py-5">
                <button class="ft-btn">Generate</button>
            </div> 
            
        </div>

   </main>
    
</body>
</html>