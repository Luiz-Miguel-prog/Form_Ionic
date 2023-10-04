<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['Nome'];
  $sobre = $_POST['Sobrenome'];
  $email = $_POST['Email'];
  $endereco = $_POST['Endereco'];
  $Nasc = $_POST['Nasc'];
  $Genero = $_POST['Genero']; // Corrected variable name
  $senha = $_POST['senha1'];
  $senha2  = $_POST['senha2'];

  include_once 'conexao.php';

  $senha = md5($senha);
  $senha2 = md5($senha2);

  if ($senha == $senha2) {
    $sql = "INSERT INTO form (nome, sobre, email, endereco, Nasc, Genero, senha) VALUES ('$nome', '$sobre', '$email', '$endereco', '$Nasc', '$Genero', '$senha')";
    if (mysqli_query($conexao_db, $sql)) {
      $msg = "Cadastrado com sucesso!";
    } else {
      echo "Erro ao inserir no banco de dados: " . mysqli_error($conexao_db);
    }
  } else {
    echo '<script type="text/javascript">
            window.onload = function () { alert("As senhas devem ser iguais"); }
          </script>';
  }

  mysqli_close($conexao_db);
}
?>
