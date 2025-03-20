<?php

function conectarBD(){
    $conexao = mysqli_connect("127.0.0.1","root","","xhopii");
    return ($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email ,$senha){

    $conexao = conectarBD(); //Canal de Comunicação entre APP e BD
    $consulta = "INSERT INTO cliente(cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$dataNascimento', '$telefone', '$email', '$senha')"; //Query que será aplicado no SGBD

    mysqli_query($conexao, $consulta);
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email ,$salario){

    $conexao = conectarBD(); //Canal de Comunicação entre APP e BD
    $consulta = "INSERT INTO funcionario(cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$dataNascimento', '$telefone', '$email', '$salario')"; //Query que será aplicado no SGBD

    mysqli_query($conexao, $consulta);
}

function inserirProduto($nome, $fabricante, $descricao, $valor){

    $conexao = conectarBD(); //Canal de Comunicação entre APP e BD
    $consulta = "INSERT INTO produto(nome, fabricante, descricao, valor) VALUES ('$nome', '$fabricante', '$descricao', '$valor')"; //Query que será aplicado no SGBD

    mysqli_query($conexao, $consulta);
}

?>