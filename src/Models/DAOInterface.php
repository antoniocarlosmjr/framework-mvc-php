<?php

/**
 * Interface DAOInterface
 * @version 1.0.0
 */
interface DAOInterface {

	/**
	 * Retorna um array com todos os dados de uma determinada
	 * tabela
	 *
	 * @return array
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function findAll(): array;

	/**
	 * Retorna um array com os todos os dados de uma
	 * dada um id de uma entidade
	 *
	 * @param int $iId
	 * @return array
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function findById(int $iId): array;

	/**
	 * Realiza o insert em uma tabela no banco utilizando um
	 * array de dados definido com índices para as colunas
	 *
	 * @param array $aDados
	 * @return bool
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function save(array $aDados): bool;

	/**
	 * Realiza o update em uma tabela no banco de dados
	 * utilizando um array de dados e um inteiro com o id da tabela
	 *
	 * @param array $aDados
	 * @param int $iId
	 * @return bool
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function replace(array $aDados, int $iId): bool;

	/**
	 * Descreva o método
	 *
	 * @param int $iId
	 * @return bool
	 *
	 * @author Antonio Martins
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function delete(int $iId): bool;

}
