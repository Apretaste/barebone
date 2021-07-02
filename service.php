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
			"runTutorial" => false,
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
			"list" => array(
				array(
					"icon" => "fas fa-brain",
					"title" => "A sassy title",
					"text" => "Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line",
					"actions" => array(
						array(
							"icon" => "fas fa-user",
							"caption" => "Visitar perfil",
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-trash",
							"caption" => "Eliminar",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"icon" => "fas fa-ban",
					"title" => "There is no action here",
					"text" => "Much ado about nothing",
					"ontap" => "fireExampleEvent"
				),
				array(
					"icon" => "fas fa-menorah",
					"title" => "Just the title, how cool!",
					"ontap" => "fireExampleEvent",
					"actions" => array(
						array(
							"icon" => "fas fa-trash",
							"caption" => "Eliminar",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"icon" => "fas fa-ankh",
					"text" => "Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line",
					"actions" => array(
						array(
							"icon" => "fas fa-play",
							"caption" => "Iniciar audio",
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-trash",
							"caption" => "Eliminar",
							"ontap" => "fireExampleEvent"
						)
					)
				)
			),
			"people" => array(
				array(
					"username" => "salvipascual",
					"gender" => "M",
					"text" => "Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line",
					"avatar" => array(
						"picture" => "/images/avatars/salvipascual.jpg",
						"face" => "nerd",
						"color" => "naranja",
						"online" => true,
						"influencer" => true
					),
					"actions" => array(
						array(
							"icon" => "fas fa-user",
							"caption" => "Visitar perfil",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"username" => "refageist",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "amarillo",
						"online" => true,
						"influencer" => true
					),
					"chips" => array(
						array(
							"icon" => "fas fa-bolt",
							"text" => "45,678",
							"clear" => true
						),
						array(
							"icon" => "fas fa-users",
							"text" => "123",
							"clear" => true
						)
					),
					"actions" => array(
						array(
							"icon" => "fas fa-user",
							"caption" => "Visitar perfil",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"username" => "juanita",
					"gender" => "F",
					"text" => "Trabajadora social",
					"avatar" => array(
						"face" => "chica",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"actions" => array(
						array(
							"icon" => "fas fa-user",
							"caption" => "Visitar perfil",
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-trash",
							"caption" => "Eliminar",
							"ontap" => "fireExampleEvent"
						)
					)
				)
			)
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
			"person" => [
				array(
					"username" => "salvipascual",
					"gender" => "M",
					"text" => "Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line",
					"avatar" => array(
						"picture" => "/images/avatars/salvipascual.jpg",
						"face" => "nerd",
						"color" => "naranja",
						"online" => true,
						"influencer" => true
					),
					"actions" => array(
						array(
							"icon" => "fas fa-user",
							"caption" => "Visitar perfil",
							"ontap" => "fireExampleEvent"
						)
					)
				),
			],
			"chat" => [
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "pepe",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "maria",
					"gender" => "F",
					"avatar" => array(
						"face" => "hippie",
						"color" => "amarillo",
						"online" => true,
						"influencer" => true
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "pepe",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda mundo cruel como anda todo el todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "maria",
					"gender" => "F",
					"avatar" => array(
						"face" => "hippie",
						"color" => "amarillo",
						"online" => true,
						"influencer" => true
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "salvipascual",
					"gender" => "M",
					"avatar" => array(
						"face" => "sensei",
						"color" => "verde",
						"online" => true,
						"influencer" => false
					),
					"position" => "right",
					"text" => "Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio"
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "salvipascual",
					"gender" => "M",
					"avatar" => array(
						"face" => "sensei",
						"color" => "verde",
						"online" => true,
						"influencer" => false
					),
					"position" => "right",
					"text" => "Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio"
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "pepe",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-trash",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "pepe",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"position" => "left",
					"text" => "Hola mundo mundo cruel como anda todo el cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "pepe",
					"gender" => "M",
					"avatar" => array(
						"face" => "hombre",
						"color" => "rojo",
						"online" => false,
						"influencer" => false
					),
					"position" => "left",
					"text" => "Hola mundo cruel como mundo cruel como anda todo el anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				),
				array(
					"date" => "2020-06-30 15:25:50",
					"username" => "maria",
					"gender" => "F",
					"avatar" => array(
						"face" => "hippie",
						"color" => "amarillo",
						"online" => true,
						"influencer" => true
					),
					"position" => "left",
					"text" => "Hola mundo cruel como anda todo el mio",
					"actions" => array(
						array(
							"icon" => "fas fa-thumbs-up",
							"text" => 10,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-thumbs-down",
							"text" => 2,
							"ontap" => "fireExampleEvent"
						),
						array(
							"icon" => "fas fa-share-alt",
							"ontap" => "fireExampleEvent"
						)
					)
				)
			]
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
			"inputs" => array(
				array(
					"icon" => "fas fa-user",
					"label" => "Inserte su @username"
				),
				array(
					"label" => "Inserte su correo",
					"type" => "email",
					"value" => "salvi@gmail.com"
				)
			),
			"textarea" => array(
				"icon" => "fas fa-question",
				"label" => "Descríbase en 140 caracteres"
			),
			"editor" => array(
				"label" => "¿Qué cree de la Pizarra?",
				"isEditor" => true,
				"value" => "<i>gta </i><b>gta </b><u>gta</u>"
			),
			"switch" => array(
				"label" => "Mostrar género",
				"active" => true
			),
			"combo" => array(
				"icon" => "fas fa-male",
				"label" => "Género",
				"selected" => "M",
				"options" => array(
					array(
						"value" => "M",
						"caption" => "Masculino"
					),
					array(
						"value" => "F",
						"caption" => "Femenino"
					)
				)
			),
			"buttonOk" => array(
				"icon" => "fas fa-thumbs-up",
				"caption" => "Aceptar",
				"size" => "large",
				"isPrimary" => true,
				"ontap" => "fireExampleEvent"
			),
			"buttonOpt" => array(
				"caption" => "Más opciones",
				"size" => "medium",
				"isPrimary" => false,
				"ontap" => "fireExampleEvent"
			),
			"buttonDel" => array(
				"icon" => "fas fa-thumbs-down",
				"caption" => "Cancelar",
				"size" => "small",
				"isPrimary" => false,
				"ontap" => "fireExampleEvent"
			)
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
			"card" => array(
				"isAd" => true,
				"image" => "https://apretaste.blob.core.windows.net/pizarra/0001b26d50758625f7d74928f2ca5b9c.jpg",
				"text" => "Secondarely, @salvipascual this is a #NiceText to show, that points to https://www.apretaste.org or opens the email salvi@apretaste.org, and cannot be larger of certain #NumberOfChars, because it won\'t let the text go to a #third line",
				"inserted" => "2020-06-30 15:25:50",
				"username" => "salvipascual",
				"gender" => "M",
				"avatar" => array(
					"face" => "nerd",
					"color" => "naranja",
					"online" => true,
					"influencer" => true
				),
				"shared" => array(
					"icon" => "fas fa-newspaper",
					"text" => "Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line",
					"ontap" => "fireExampleEvent"
				),
				"reactions" => array(
					"like" => 11,
					"love" => 2,
					"lol" => 4,
					"angry" => 1,
					"amaze" => 5,
					"sad" => 0,
					"sucks" => 1
				)
			),
			"paginator" => array(
				"page" => 5,
				"total" => 11,
				"ontapNext" => "fireExampleEvent",
				"ontapBack" => "fireExampleEvent"
			)
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
		// create content array
		$content = [
			"rules" => array(
				array(
					"title" => "Esto es lo primero que debes saber",
					"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor salvi@apretaste.org incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				),
				array(
					"title" => "Esto es lo segubndo mas importante que debes saber",
					"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				),
				array(
					"text" => "Lorem ipsum dolor sit amet, consectetur a @salvipascual adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				),
				array(
					"title" => "Y aca, viene la bomba",
					"text" => "Lorem ipsum dolor sit amet, https://www.apretaste.org consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				)
			)
		];

		// create response
		$response->setCache();
		$response->setComponent('Reglas', $content);
	}
}
