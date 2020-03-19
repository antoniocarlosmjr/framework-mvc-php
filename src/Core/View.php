<?php

/**
 * Class View
 * @version 1.0.0
 */
class View
{

    private $sTemplate;

    /**
     * View constructor.
     * @param string $sCaminhoTemplate
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function __construct(string $sCaminhoTemplate = 'src/Views/Template/Template.php')
    {
        $this->sTemplate = $sCaminhoTemplate;
    }

    /**
     * Cria o contedo da página pela view informada por parâmetro e inclui
     * o arquivo do template definido.
     *
     * @param string $sView
     * @param array $aDados
     * @author Antonio Martins
     * @return void
     *
     * @since 1.0.0 - Definição do versionamento da classe
     */
    public function output(string $sView, array $aDados)
    {
        $sConteudoPagina = "src/Views/" . $sView . ".php";
        require_once $this->sTemplate;
    }

}