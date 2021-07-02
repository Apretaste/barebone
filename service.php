<?php

use Apretaste\Alert;
use Apretaste\Request;
use Apretaste\Response;
use Apretaste\Database;

class Service
{
	/**
	 * A home screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _main(Request $request, Response $response)
	{
		$content = [
			"tutorial" => false,
			"username" => $request->person->username
		];

		// create response
		$response->setCache();
		$response->setComponent('Main', $content);
	}

	/**
	 * A list screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _listas(Request $request, Response $response)
	{
		// create content array
		$content = [
		];

		// create response
		$response->setCache();
		$response->setComponent('Listas', $content);
	}

	/**
	 * A chat screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _chat(Request $request, Response $response)
	{
		// create content array
		$content = [
		];

		// create response
		$response->setCache();
		$response->setComponent('Chat', $content);
	}

	/**
	 * A forms screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _forms(Request $request, Response $response)
	{
		// create content array
		$content = [
		];

		// create response
		$response->setCache();
		$response->setComponent('Forms', $content);
	}

	/**
	 * A social screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _social(Request $request, Response $response)
	{
		// create content array
		$content = [
		];

		// create response
		$response->setCache();
		$response->setComponent('Social', $content);
	}

	/**
	 * A rules screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _reglas(Request $request, Response $response)
	{
		// create response
		$response->setCache();
		$response->setComponent('Reglas');
	}
}
