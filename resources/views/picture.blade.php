<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('item') }}">Item Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('picture') }}">Picture Page</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Picture Page</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Picture 1">
                    <div class="card-body">
                        <p class="card-text">Picture 1 Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Picture 2">
                    <div class="card-body">
                        <p class="card-text">Picture 2 Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Picture 3">
                    <div class="card-body">
                        <p class="card-text">Picture 3 Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
