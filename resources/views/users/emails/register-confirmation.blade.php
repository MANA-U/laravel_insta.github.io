<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <i class="fa-brands fa-google display-2"></i>

            <h4>Thank you fo signing up.</h4>
            <p></p>
        </div>

        <div class="row justify-content-center">
            <div class="col-6 bg-secondary">
                <h5 class="text-muted">STAY</h5>
                <i class="fa-brands fa-twitter display-6"></i>

                <hr>
                <p class="small text-muted">Google INC, 1600</p>
            </div>
        </div>
    </div>
    <p>Hello {{ $name }}</p>
    <p>Thank you for registering.</p>
    <p>To start, please access the website <a href="{{ $app_url }}">here</a>.</p>
    <p>Thank you!</p>
</body>
</html>

<!-- RegisterController.php $details -->