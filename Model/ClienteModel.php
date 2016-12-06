<?php

class ClienteModel
{

    private $nome;
    private $email;
    private $sexo;

    public function __construct()
    {
        
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function insert()
    {
        echo "Inserido com sucesso!";
    }

    public function update()
    {
        echo "Editado com sucesso!";
    }

    public function delete()
    {
        echo "Excuído com sucesso!";
    }

}

?>