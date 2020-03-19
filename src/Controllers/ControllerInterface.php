<?php

/**
 * Interface IOController
 * @version 1.0.0
 */
interface ControllerInterface
{

	/**
	 * Redireciona para o index do controller
	 *
	 * @author Antonio Martins 
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index();

	/**
	 * Redireciona para a view de cadastro do controller
	 *
	 * @author Antonio Martins 
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrar();

	/**
	 * Realiza o cadastro de dados pelo DAO
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrarDao(array $aDados);

	/**
	 * Redireciona para a view de atualização
	 *
	 * @param array $aDados
	 * @return void
	 *
	 * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function atualizar(array $aDados);

	/**
	 * Realiza a atualização de dados pelo DAO
	 *
	 * @param array $aDados
	 * @return void
     *
	 * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function atualizarDao(array $aDados);

	/**
	 * Remove um dado utilizando o DAO
     *
	 * @param array $aDados
	 * @return void
     *
	 * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function remover(array $aDados);

    /**
     * Inativa um dado pelo DAO
     *
     * @param array $aDados
     * @return mixed
     *
     * @author Antonio Martins
     * @since 1.0.0 - Definição do versionamento da classe
     */
	public function inativar(array $aDados);

}