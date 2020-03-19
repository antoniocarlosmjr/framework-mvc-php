<?php

/**
 * AbstractController
 * @version 1.0.0
 */
class AbstractController
{

    /**
     * Retorna a instância do model solicitado
     *
     * @param $sModel
     * @return object
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function model(string $sModel)
    {
        require_once 'src/Models/' . $sModel . '.php';
        $sClasse =  $sModel;
        return new $sClasse();
    }

    /**
     * Chama uma determinada view
     *
     * @param string $sView
     * @param array $aDados
     * @return void
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function view(string $sView, array $aDados = [])
    {
        $oView = new View();
        $oView->output($sView, $aDados);
    }

    /**
     * Chama a view de erro 404 onde a página não foi encontrada
     *
     * @return void
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function paginaNaoEncontrada()
    {
        $this->view('Erro/Erro404');
    }

    /**
     * Chama a view da página inicial
     *
     * @return void
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function paginaInicial()
    {
        $this->view('Inicio');
    }

    /**
     * Redireciona para uma página com ação específica
     *
     * @param string $sModulo
     * @return void
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function redirect(string $sModulo)
    {
        header( 'Location: '. $sModulo);
    }

}
