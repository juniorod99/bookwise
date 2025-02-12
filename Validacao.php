<?php
class Validacao
{
    public $validacoes;

    public static function validar($regras, $dados)
    {
        $validacao = new self;
        foreach ($regras as $campo => $regrasDoCampo) {
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];

                if ($regra == 'confirmed') {
                    $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);
                } else {
                    $validacao->$regra($campo, $valorDoCampo);
                }
            }
        }

        return $validacao;
    }

    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "O $campo é obrigatorio";
        }
    }

    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O $campo é invalido";
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        if ($valor != $valorDeConfirmacao) {
            $this->validacoes[] = "Os $campo são diferentes";
        }
    }

    public function naoPassou()
    {
        // dd($this->validacoes);
        return sizeof($this->validacoes) > 0;
    }
}
/**
 *     $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if ($validacao->naoPassou()) {
        $_SESSION['validacoes'] == $validacao->validacoes;
        header('location: /login');
        exit();
    }
 *     if (strlen($nome) == 0) {
        $validacoes[] = 'O nome é obrigatorio';
    }

    if (strlen($email) == 0) {
        $validacoes[] = 'O email é obrigatorio';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes[] = 'O email é invalido';
    }

    if ($email != $email_confirmacao) {
        $validacoes[] = 'O emails são diferentes';
    }

    if (strlen($senha) == 0) {
        $validacoes[] = 'A senha é obrigatorio';
    }

    if (strlen($senha) < 8 || strlen($senha) > 30) {
        $validacoes[] = 'A senha precisa ser entre 8 a 30 caracteres';
    }

    if (!str_contains($senha, '*')) {
        $validacoes[] = 'A senha precisa ter um *';
    }
 */
