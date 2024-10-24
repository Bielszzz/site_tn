<?php
  if(isset($_POST['submit']))
  {
   
    include_once('../config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,cpf,sexo,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome', '$email', '$telefone', '$cpf', '$sexo', '$data_nasc','$cidade', '$estado', '$endereco')");

  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tintas | Cadastro </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="menu-icon" id="menu-icon">
      &#9776;
    </div>
    <h1>Cadastro</h1>
    <div class="header-content">
        <div class="profile">
            <a href="perfil.html">
            <i class="fas fa-user-circle profile-icon"></i> 
            </a>
        </div>
    </div>
  </header>


  <nav class="menu" id="menu">
    <ul>
        <h1 style="font-size: 18px; opacity: 70%;">NAVEGAR</h1>
      <li><a href="index.html">Sobre</a></li>
      <li><a href="perfil.html">Perfil</a></li>
      <li><a href="login.php">Cadastro / Login</a></li>
      <li><a href="estoque.html">Estoque</a></li>
      <li><a href="contato.html">Contato</a></li>
    </ul>
  </nav>

    <div class="cadastro">
      <form action="cadastro.php" method="POST">
        <fieldset>
          <legend><b>Cadastro</b></legend>
          <br>
          <div class="inputcad">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelinput">Nome Completo</label>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="text" name="email" id="email" class="inputUser" required>
          <label for="email" class="labelinput">Email</label>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="number" name="telefone" id="telefone" class="inputUser" required>
          <label for="telefone" class="labelinput">Telefone</label>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="number" name="cpf" id="cpf" class="inputUser" required>
          <label for="cpf" class="labelinput">CPF</label>
          </div>
          <br>

          <p>Sexo:</p>
          <input type="radio" name="genero" id="feminino" value="feminino" required>
          <label for="feminino">Feminino</label>
          <br>
          <input type="radio" name="genero" id="masculino" value="masculino" required>
          <label for="masculino">Masculino</label>
          <br>
          <input type="radio" name="genero" id="outro" value="outro" required>
          <label for="outro">Outro</label>
          <br><br>
          <div class="inputcad">
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade" class="labelinput">Cidade</label>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="text" name="estado" id="estado" class="inputUser" required>
          <label for="estado" class="labelinput">Estado</label>
          </div>
          <br><br>

          <div class="inputcad">
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
          <label for="endereco" class="labelinput">Endereço</label>
          </div>
          <br><br>

          <input type="submit" name="submit" id="submit">

          
        </fieldset>
      </form>  
    </div>

  <script src="../script.js"></script>

    <footer>
        <p>&copy; 2024 Fatec Tintas </p>
    </footer>
</body>
</html>