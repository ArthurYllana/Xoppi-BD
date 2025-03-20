<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNascimento = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];

      inserirCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email ,$senha);

      header('location:../view/cadastroCliente.php');
      die();
}

//Cadastro de Funcionário
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSalario'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNascimento = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $email = $_POST['inputEmail'];
      $salario = $_POST['inputSalario'];

      inserirFuncionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email ,$salario);

      header('location:../view/cadastroFuncionario.php');
      die();
}

//Cadastro de Produto
if(!empty($_POST['inputNome']) && !empty($_POST['inputFabricante']) && 
   !empty($_POST['inputDescricao']) && !empty($_POST['inputValor'])){

      $nome = $_POST['inputNome'];
      $fabricante = $_POST['inputFabricante'];
      $descricao = $_POST['inputDescricao'];
      $valor = $_POST['inputValor'];

      inserirProduto($nome, $fabricante, $descricao, $valor);

      header('location:../view/cadastroProduto.php');
      die();
}
?>