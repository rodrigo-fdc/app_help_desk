<?php

    session_start();
    //REMOVER INDICES DO ARRAY DE SESSÃO
    //unset()

    //DESTRUIR A VARIÁVEL DE SESSÃO
    session_destroy();
    header('Location: index.php');
?>