<?php
require_once 'config.php';

if (isset($_POST['update'])) {

  $id = mysqli_real_escape_string($mysqli, $_POST['id']);
  $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $login = mysqli_real_escape_string($mysqli, $_POST['login']);
  $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

  if (empty($nome)||empty($email)||empty($login)||empty($senha)) {
    if (empty($nome)) {
      echo "O campo nome está vazio";
    }
    if (empty($email)) {
      echo "O campo email está vazio";
    }
    if (empty($login)) {
      echo "O campo Login está vazio";
    }
    if (empty($senha)) {
      echo "O campo senha está vazio";
    }
  }else {

    $result = mysqli_query($mysqli, "UPDATE usuarios SET nome='$nome', email='$email', login='$login', senha='$senha' WHERE id='$id' ");
    header("location:../index.php");
  }
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id='$id'");
  while ($res = mysqli_fetch_array($result)) {
    $nome = $res['nome'];
    $email = $res['email'];
    $login = $res['login'];
    $senha = $res['senha'];
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>UPDATE</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   </head>
   <body>
     <div class="container">
       <br/>
       <h1 style="text-align: center;">Editar dados do Usuario</h1>
       <div class="container">
         <form action="edit.php" method="post">
           <div class="form-group">
             <label for="n1">Nome</label>
             <input type="text" class="form-control" id="n1" name="nome" value="<?php echo $nome?>" placeholder="Digite seu nome">
           </div>
           <div class="form-group">
             <label for="email1">Email</label>
             <input type="email" class="form-control" id="email1" name="email" value="<?php echo $email?>" placeholder="Digite seu email">
           </div>
           <div class="form-group">
             <label for="login1">Login</label>
             <input type="text" class="form-control" id="login1" name="login" value="<?php echo $login?>" placeholder="Digite seu login">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Senha</label>
             <input type="password" class="form-control" name="senha" value="<?php echo $senha?>" id="exampleInputPassword1" placeholder="Password">
           </div>
           <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
           <button type="submit" name="update" class="btn btn-primary">Update</button>
         </form>
       </div>
     </div>
   </body>
 </html>
