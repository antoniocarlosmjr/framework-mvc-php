<?php

/**
 * Class EmpresaController
 * @version 1.0.0
 */
class EmpresaController extends AbstractController implements ControllerInterface
{

	private $oEmpresaDao;

	/**
	 * EmpresaController constructor.
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function __construct()
    {
		$this->oEmpresaDao = $this->model('EmpresaDAO');
	}

	/**
	 * Retorna para a view de listagem de empresas
	 *
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index()
    {
		$aDadosEmpresa = $this->oEmpresaDao->findAll();
		$this->view('Empresa/index', $aDadosEmpresa);
	}

	/**
	 * Redireciona para a view de cadastro de empresa
	 *
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrar()
    {
		$this->view('Empresa/cadastrar');
	}

	/**
	 * Realiza o cadastro de uma empresa chamando a classe de negócio
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrarDao(array $aDados): void {
		$oEmpresa = new Empresa(
			$aDados['sCnpj'],
			$aDados['sNome'],
			$aDados['sEmail'],
			$aDados['sEstado'],
			$aDados['sCidade'],
			$aDados['sCep'],
			$aDados['sBairro'],
			$aDados['sLogradouro'],
			$aDados['sTelefone']
		);
		$oEmpresa->cadastrar();
		$this->index();
	}

	/**
	 * Redireciona para a view de atualização de uma empresa
	 *
	 * @param $aDados
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function atualizar(array $aDados): void {
		$aDadosEmpresa = $this->oEmpresaDao->findById($aDados['id']);
		if (!empty($aDadosEmpresa)) {
			$this->view('Empresa/atualizar', $aDadosEmpresa);
		} else {
			$this->paginaNaoEncontrada();
		}
	}

	/**
	 * Realiza a atualização de uma empresa
	 *
	 * @param array $aNovosDados
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function atualizarDao(array $aNovosDados): void {
		$oEmpresa = new Empresa(
			$aNovosDados['sCnpj'],
			$aNovosDados['sNome'],
			$aNovosDados['sEmail'],
			$aNovosDados['sEstado'],
			$aNovosDados['sCidade'],
			$aNovosDados['sCep'],
			$aNovosDados['sBairro'],
			$aNovosDados['sLogradouro'],
			$aNovosDados['sTelefone']
		);
		$oEmpresa->atualizar($aNovosDados['id']);
		$this->index();
	}

	/**
	 * Redireciona para a view de remoção de uma empresa
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function remover(array $aDados): void {
		$aDadosEmpresa = $this->oEmpresaDao->findById($aDados['id']);
		if (!empty($aDadosEmpresa)) {
			$this->oEmpresaDao->delete($aDadosEmpresa['ema_id']);
			$this->view('Empresa/remover');
		} else {
			$this->paginaNaoEncontrada();
		}
	}

    /**
     * @inheritDoc
     */
    public function inativar(array $aDados)
    {
        // TODO: Implement inativar() method.
    }
}