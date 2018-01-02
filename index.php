<?php
require_once 'controller/config.php';
$result = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id DESC")

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <br/>
      <h1 style="text-align: center;">Lista de Usuarios</h1>
      <br/><br/>
      <div class="container">
        <form action="controller/add.php" method="post">
                <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Login</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['nome']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>".$res['login']."</td>";
                echo "<td><a href=\"controller/edit.php?id=$res[id]\">Edit</a> | <a href=\"controller/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

              }
               ?>

            </tbody>
          </table>
          <a href="addUser.php">Adicionar Usuarios</a>
        </form>

      </div>

    </div>
  </body>
</html>
