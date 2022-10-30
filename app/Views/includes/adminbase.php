<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <title>Task</title>

</head>
<body>
<header class="header">
<nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 10px 3px 3px #cecbcb ;">
  <h1 style="margin-left: 20px ; margin-right: 20px;">Task</h1>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="admin_dashboard">Home</a>
      <a class="nav-item nav-link" href="manageuser">Manage Users</a>
      <a class="nav-item nav-link" href="adminprofile">Profile</a>
      <a class="nav-item nav-link" href="logout">Logout</a>
      

    </div>
  </div>
</nav>
    </header>
    <?= $this->renderSection('adminbase'); ?>

    <footer>
    <div class="text-center p-4" style="box-shadow: 10px 3px 3px #cecbcb ;">
    2022 Copyright!
  </div>
</footer>
</body>
</html>
