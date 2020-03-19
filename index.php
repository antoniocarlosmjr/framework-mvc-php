<?php
require 'config/config.php';
require 'vendor/autoload.php';

$oCoreController = new AbstractController();

if (!empty($_REQUEST)) {
    redirecionarUrl();
} else {
    $oCoreController->paginaInicial();
}

/**
 * Método que realiza a instância do objeto de acordo com o que foi
 * solicitado na requisição.
 *
 * @return void
 *
 * @author Antonio Martins
 * @since 1.0.0 - Definição do versionamento da classe
 */
function redirecionarUrl(): void {
    $sControlador = ucfirst($_REQUEST['controller']);
    $sClasse = $sControlador . "Controller";
    if (class_exists($sClasse)) {
        $oInstancia = new $sClasse;
        $sMetodo = $_REQUEST['action'];
        if(method_exists($sClasse, $sMetodo)) {
            $oInstancia->$sMetodo($_REQUEST);
        } else {
            $oInstancia->index();
        }
    } else {
        $oCoreController = new AbstractController();
        $oCoreController->paginaNaoEncontrada();
    }
}
