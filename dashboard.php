<?php
require __DIR__ . '/vendor/autoload.php';

// Getting URL from GET Request, convert chars to html entities
 $cleanURL = htmlspecialchars($_GET['searchResultsFor'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

 // Check for http or https
//  function urlparts ($cleanURL)
//  {
//      $parts = explode(':', $cleanURL);
//      $cURL = (in_array('http', $parts) || in_array('https', $parts)) ? $cleanURL : $cleanURL;
//      return $cURL;
//  };

 //var_dump(urlparts($cleanURL)); die();

$basePath = curl_init('http://ip-api.com/json/'.$cleanURL);
curl_setopt($basePath, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($basePath);
curl_close($basePath);

$result = json_decode($response, true);
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Adnan Maltiti">
  <title>Dashboard - Transaction Monitor</title>


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <meta name="theme-color" content="#7952b3">


  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Web Crawler</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="signout.php"></a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.html">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Search Results for: <?php echo $cleanURL; ?></h1>
          <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a type="button" href="new-transaction.html" class="btn btn-sm btn-outline-secondary">Clear Data</a>
        </div>
      </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-8">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Code: <?php echo $result['countryCode']; ?></strong>
                <h3 class="mb-0"><?php echo $result['country']; ?></h3>
                <div class="mb-1 text-muted"></div>
                <p class="card-text mb-auto">Region: <?php echo $result['region']; ?></p>
                <p class="card-text mb-auto"><?php echo $result['regionName']; ?></p>
                <p class="card-text mb-auto">City: <?php echo $result['city']; ?></p>
                <p class="card-text mb-auto">Zip: <?php echo $result['zip']; ?></p>
                <p class="card-text mb-auto">Latitude: <strong><?php echo $result['lat']; ?></strong></p>
                <p class="card-text mb-auto">Longitude: <strong><?php echo $result['lon']; ?></strong></p>
                <p class="card-text mb-auto">ISP: <?php echo $result['isp']; ?></p>
                <p class="card-text mb-auto">Org: <?php echo $result['org']; ?></p>
                <p class="card-text mb-auto">AS: <?php echo $result['as']; ?></p>
                <p class="card-text mb-auto">IP: <?php echo $result['query']; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="assests/js/bootstrap.bundle.min.js"></script>
  <script src="dashboard.js"></script>
</body>
</html>
