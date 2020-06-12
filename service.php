<?php

use Apretaste\Request;
use Apretaste\Response;

class Service
{
	/**
	 * A possible home screen
	 *
	 * @param Request
	 * @param Response
	 */
	public function _main(Request $request, Response $response)
	{
		$response->setTemplate("home.ejs");
	}

	/**
	 * A possible list of results
	 *
	 * @param Request
	 * @param Response
	 */
	public function _results(Request $request, Response $response)
	{
		$items = [
			(Object) ['title' => 'Primer titulo', 'deadline' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Segundo titulo', 'deadline' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Tercer titulo', 'deadline' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Cuarto titulo', 'deadline' => '2020-06-30 18:20:15'],
		];

		$response->setTemplate("results.ejs", ['items' => $items, 'page' => 1, 'pages' => 3]);
	}

	/**
	 * A possible solution for user profile
	 *
	 * @param Request
	 * @param Response
	 */
	public function _profile(Request $request, Response $response)
	{
		$items = [
			(Object) ['title' => '+1 305 457 1656', 'subtitle' => 'Numero de telefono', 'icon' => 'local_phone'],
			(Object) ['title' => 'salvi@apretaste.org', 'subtitle' => 'Correo electronico', 'icon' => 'email'],
			(Object) ['title' => 'Estados Unidos', 'subtitle' => 'Pais de residencia', 'icon' => 'flag'],
		];

		$response->setTemplate("profile.ejs", ['items' => $items]);
	}

	/**
	 * A possible solution for chatting
	 *
	 * @param Request
	 * @param Response
	 */
	public function _chat(Request $request, Response $response)
	{
		$items = [
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'mine', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'mine', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'mine', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'mine', 'text' => 'Hola mundo cruel como anda todo el mio'],
			(Object) ['date' => '2020-06-30 15:23:45', 'owner' => 'them', 'text' => 'Hola mundo cruel como anda todo el mio'],
		];

		$response->setTemplate("chat.ejs", ['items' => $items]);
	}

	/**
	 * A possible view to a news feed
	 *
	 * @param Request
	 * @param Response
	 */
	public function _news(Request $request, Response $response)
	{
		$items = [
			(Object) ['title' => 'Primer titulo un poco largo hablando del tema', 'author' => 'Salvi Pascual', 'image' => 'article.jpg', 'date' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Segundo titulo un poco largo hablando del tema', 'author' => 'Salvi Pascual', 'image' => 'article.jpg', 'date' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Tercer titulo un poco largo hablando del tema', 'author' => 'Salvi Pascual', 'image' => 'article.jpg', 'date' => '2020-06-30 18:20:15'],
			(Object) ['title' => 'Cuarto titulo un poco largo hablando del tema', 'author' => 'Salvi Pascual', 'image' => 'article.jpg', 'date' => '2020-06-30 18:20:15'],
		];

		$images = [__DIR__ . '/images/article.jpg'];

		$response->setTemplate("news.ejs", ['items' => $items], $images);
	}

	/**
	 * A possible view to open an article
	 *
	 * @param Request
	 * @param Response
	 */
	public function _article(Request $request, Response $response)
	{
		$content = [
			'title' => 'Una valiente jugada muy importante',
			'image' => 'article.jpg',
			'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
			'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		];

		$images = [__DIR__ . '/images/article.jpg'];

		$response->setTemplate("article.ejs", $content, $images);
	}

	/**
	 * A possible screen to list users
	 *
	 * @param Request
	 * @param Response
	 */
	public function _users(Request $request, Response $response)
	{
		$users = [
			(Object) ['username' => 'tomasito', 'gender' => 'M', 'avatar' => 'hombre', 'avatarColor' => 'red'],
			(Object) ['username' => 'andrecito', 'gender' => '', 'avatar' => 'artista', 'avatarColor' => 'verde'],
			(Object) ['username' => 'martin', 'gender' => 'F', 'avatar' => 'hippie', 'avatarColor' => 'amarillo'],
			(Object) ['username' => 'pedro', 'gender' => 'M', 'avatar' => 'jefe', 'avatarColor' => 'naranja'],
			(Object) ['username' => 'tina', 'gender' => 'F', 'avatar' => 'sensei', 'avatarColor' => 'azul'],
			(Object) ['username' => 'maria', 'gender' => 'F', 'avatar' => 'apretina', 'avatarColor' => 'morado'],
		];

		$response->setTemplate("users.ejs", ['users' => $users, 'page' => 1, 'pages' => 3]);
	}

	/**
	 * A possible screen to search
	 *
	 * @param Request
	 * @param Response
	 */
	public function _search(Request $request, Response $response)
	{
		$response->setTemplate("search.ejs");
	}

	/**
	 * A possible screen to display text (about/rules/etc.)
	 *
	 * @param Request
	 * @param Response
	 */
	public function _rules(Request $request, Response $response)
	{
		$response->setTemplate("rules.ejs");
	}

	/**
	 * A possible screen when message is not found
	 *
	 * @param Request
	 * @param Response
	 */
	public function _empty(Request $request, Response $response)
	{
		$response->setTemplate("empty.ejs");
	}

	/**
	 * A possible screen for messages (possitive or negative)
	 *
	 * @param Request
	 * @param Response
	 */
	public function _message(Request $request, Response $response)
	{
		$response->setTemplate('message.ejs', [
			'header' => 'Todo está bien',
			'icon' => 'thumb_up',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'btnLink' => 'BAREBONE',
			'btnCaption' => 'Ver otros']);
	}
}
