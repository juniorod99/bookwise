<?php
require 'Validacao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        // 'senha' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);
    // dd($validacao);
    if ($validacao->naoPassou()) {
        $_SESSION['validacoes'] = $validacao->validacoes;
        header('location: /login');
        exit();
    }



    // if (sizeof($validacoes) > 0) {
    //     $_SESSION['validacoes'] = $validacoes;
    //     header('location: /login');
    //     exit();
    // }

    $resultado = $database->query(
        query: 'insert into usuarios (nome, email, senha) values (:nome, :email, :senha)',
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ]
    );

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
}
