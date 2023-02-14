<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "gestion_immobilière";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Select Data
  $sql = "SELECT * FROM annonce";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adverts</title>
    <html>
  <head>
  </head>
  <body>
  <header>
  <form action="search.php" method="post">
  <select name='searchPick'>
    <option value='e1'>On Sale</option>
    <option value='e2'>On Rent</option>
  </select>
    <input type="text" name="searchBar" placeholder="Search...">
    <input type="submit" value="Send">
</form>
    </header>
    <div style="display: flex; flex-wrap: wrap;">
      <?php
        $searchKey = $_POST['searchBar'];
        if (isset($_POST['searchBar'])){
          
        }
      ?>
        <div class="card">
          <h3><?php echo $row['Titre']; ?></h3>
          <img src="<?php echo $row['Image']; ?>" alt="Image">
          <p class="addresse"><?php echo $row['Addresse']; ?></p>
          <p class="montant">$<?php echo $row['Montant']; ?></p>
          <p class="supfic">Superficie: <?php echo $row['Superficie']; ?>m²</p>
          <p class="desc"><?php echo $row['Description']; ?></p>
          <p class="date">Created on <?php echo $row['Date_Annonce']; ?></p>
          <p class="type">Currently <?php echo $row['Type_Annonce']; ?></p>
          <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </div>
      <?php endwhile; ?>
    </div>
  </body>
</html>

<?php
  mysqli_close($conn);
?>

<script src="add.js"> </script>