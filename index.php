<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adnan Maltiti">
    <title>Dashboard - Web Map</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <nav class="nav nav-masthead justify-content-center">
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">DNS lookUp</h1>
            <p class="lead">Find the location (country) of the server hosting your URL. Please enter the Naked Domain below. (eg. example.com)</p>
            <form action="dashboard.php" method="GET">
                <input type="text" id="searchfield" name="searchResultsFor" class="form-control" placeholder="Enter a URL to search..." required autofocus>
                <br>
                <p class="lead">
                <button type="submit" class="btn btn-secondary">Search</button>
                </p>
            </form>

        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Designed for CPEN643 Project by Adnan Abdul-Hamid.</p>
            </div>
        </footer>
    </div>
</body>

</html>