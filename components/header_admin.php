<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/public/css/style.css">
  <script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
</head>

<body style="background-color:#FFA500">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/public/image/kk.png" width="35" height="45" class="d-inline-block align-top" alt="">
        <b> ADMIN: <?php echo $_SESSION['id'] ?></b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link active" href="complainstats"> SHOW STATS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="complain_manage"> MANAGE DONATIONS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adminprofile"> ACCOUNT DETAILS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout"> LOGOUT </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>