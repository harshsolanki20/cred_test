<?php 
if(!isset($_SESSION['activeUser']))
{
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Git Practice Page</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GitPractice</a>

      <div class="collapse navbar-collapse show">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/cred/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>

        <button class="btn btn-outline-light btn-sm">Logout</button>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-4">
    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="https://picsum.photos/200" class="card-img-top" alt="sample">
          <div class="card-body">
            <h5 class="card-title">Practice Card</h5>
            <p class="card-text">This card is just for Git push testing.</p>
            <a href="#" class="btn btn-primary btn-sm">Click</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Second Card</h6>
            <p class="card-text">Added another card to show changes.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
