<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Laravel</title>
</head>
<body>
    <header class="py-4 bg-body-secondary ">
        <ul class="d-flex justify-content-center list-unstyled">
            <li class="mx-2"><a class="btn btn-outline-primary" href="/">Home</a></li>
            <li class="mx-2"><a class="btn btn-primary" href="/about">About</a></li>
        </ul>
    </header>
    <main class="container text-center mt-4">
        <h1>{{$title}}</h1>
        <p>{{$message}}</p>
    </main>

</body>
</html>
