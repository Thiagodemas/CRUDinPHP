<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adicionar Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <br/>
    <h1 style="text-align: center;">Cadastrar Usuarios</h1>
      <div class="container">
        <form action="controller/add.php" method="post">
          <div class="form-group">
            <label for="n1">Nome</label>
            <input type="text" class="form-control" id="n1" name="nome" placeholder="Digite seu nome">
          </div>
          <div class="form-group">
            <label for="email1">Email</label>
            <input type="email" class="form-control" id="email1" name="email" placeholder="Digite seu email">
          </div>
          <div class="form-group">
            <label for="login1">Login</label>
            <input type="text" class="form-control" id="login1" name="login" placeholder="Digite seu login">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </body>
</html>
