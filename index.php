<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css%22%3E">
  <link rel="stylesheet" href="style.scss">

</head>
<body>
<div>
  <div class="title">
    <h2>Szabó Sándor</h2>
    <p>Második beadandó</p>

  </div>
  <div class="box">
     <form class="form-inline" action="create.php" method="POST">
        <label for="name">Név:</label>
        <input type="text" class="form-control" id="name" name="name">
        <label for="score">Jegy:</label>
        <input type="number" class="form-control" id="score" name="score">
        <button type="submit" class="button-12" role="button">Hozzáad</button>
    </form>
      <div class="container">
    <table class="table">
        <tbody>
        <?php include 'read.php'; ?>
        </tbody>
    </table>
      </div>
  </div>

 
</div>
</body>
</html>