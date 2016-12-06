<?php

require_once 'Model/ClienteModel.php';
$cliente = new ClienteModel();

#Verifica se o formulário foi submetido
if (isset($_POST)) {

    #Verifica o tipo de acção do formulário
    if ($_POST['action'] == "cadastrar") {
        $cliente->setNome(htmlentities($_POST['nome']));
        $cliente->setEmail(htmlentities($_POST['email']));
        $cliente->setSexo(htmlentities($_POST['sexo']));

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