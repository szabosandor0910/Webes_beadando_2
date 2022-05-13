<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css%22%3E
</head>
<body>
<div class="container">
  <div>
    <h2>Szabó Sándor</h2>
  </div>
  <p>Adatbázis (CRUD) kezelő weboldala!</p>
  <div class="box">
     <form class="form-inline m-2" action="create.php" method="POST">
        <label for="name">Név:</label>
        <input type="text" class="form-control m-2" id="name" name="name">
        <label for="score">Pont:</label>
        <input type="number" class="form-control m-2" id="score" name="score">
        <button type="submit" class="btn btn-primary">Hozzáad</button>
    </form>
    <table class="table">
        <tbody>
        <?php include 'read.php'; ?>
        </tbody>
    </table>
  </div>

 
</div>
</body>
</html>