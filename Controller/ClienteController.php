<?php

require_once 'Model/ClienteModel.php';
$cliente = new ClienteModel();

#Verifica se o formulário foi submetido
if (isset($_POST)) {

    #Verifica o tipo de ação do formulário
    if ($_POST['action'] == "cadastrar") {
        $cliente->setNome(htmlentities($_POST['nome'], ENT_QUOTES, 'UTF-8'));
        $cliente->setEmail(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
        $cliente->setSexo(htmlentities($_POST['sexo'], ENT_QUOTES, 'UTF-8'));

        echo "<br>nome: {$cliente->getNome()}";
        echo "<br>e-mail: {$cliente->getEmail()}";
        echo "<br>sexo: {$cliente->getSexo()}";
        echo "<br>{$cliente->insert()}";
    }

    if ($_POST['action'] == "editar") {
        echo $cliente->update();
    }

    if ($_POST['action'] == "excluir") {
        echo $cliente->delete();
    }
}
?>