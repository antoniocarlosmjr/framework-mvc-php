<?php

/**
 * Class PessoaController
 * @version 1.0.0
 */
class PessoaController extends AbstractController {

	private $oPessoaDao;

	/**
	 * PessoaController constructor.
	 *
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function __construct() {
		$this->oPessoaDao = $this->model('PessoaDAO');
	}

	/**
	 * Retorna para a tela de listagem das pessoas
	 *
	 * @return void
	 *
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index(): void {
		$aDadosPessoa = $this->oPessoaDao->findAll();
		$this->view('Pessoa/index', $aDadosPessoa);
	}

	/**
	 * Redireciona para a view de cadastro de uma pessoa
	 *
	 * @return void
	 *
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrar(): void {
		$this->view('Pessoa/cadastrar');
	}

	/**
	 * Realiza o cadastro de uma pessoa chamando a classe de negócio
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @throws Exception
	 * @since 1.0.0 - Definição do versionamento da classe
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 */
	public function cadastrarDao(array $aDados): void {
		$oPessoa = new Pessoa(
			$aDados['sCpf'],
			$aDados['sNome'],
			$aDados['tDataNasc']
		);
		$oPessoa->cadastrar();
		$this->index();
	}

	/**
	 * Redireciona para a view de atualização de uma pessoa
	 *
	 * @param $aDados
	 * @return void
	 *
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function atualizar(array $aDados): void {
		$aDadosPessoa = $this->oPessoaDao->findById($aDados['id']);
		if (!empty($aDadosPessoa)) {
			$this->view('Pessoa/atualizar', $aDadosPessoa);
		} else {
			$this->paginaNaoEncontrada();
		}
	}

	/**
	 * Realiza a atualização de uma empresa chamando a camada de negócio
	 *
	 * @param array $aNovosDados
	 * @return void
	 *
	 * @throws Exception
	 * @since 1.0.0 - Definição do versionamento da classe
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 */
	public function atualizarDao(array $aNovosDados): void {
		$oPessoa = new Pessoa(
			$aNovosDados['sCpf'],
			$aNovosDados['sNome'],
			$aNovosDados['tDataNasc']
		);
		$oPessoa->atualizar($aNovosDados['id']);
		$this->index();
	}

	/**
	 * Redireciona para a view de remoção de uma pessoa
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @author Antonio Martins antoniocarlos@moobitech.com.br
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function remover(array $aDados): void {
		$aDadosPessoa = $this->oPessoaDao->findById($aDados['id']);
		if (!empty($aDadosPessoa)) {
			$this->oPessoaDao->delete($aDadosPessoa['psa_id']);
			$this->view('Pessoa/remover');
		} else {
			$this->paginaNaoEncontrada();
		}
	}

}