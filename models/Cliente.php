<?php
class Cliente {
    private $nome;
    private $email;
    private $documento;

    public function __construct($nome, $email, $documento) {
        $this->nome = $nome;
        $this->email = $email;
        $this->documento = $documento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDocumento() {
        return $this->documento;
    }
}
?>