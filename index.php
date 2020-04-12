<?php 
	require_once("core/cfg.php"); // Core config file.
	
	//  View::render() -> Render template. Can receive 1 or 2 parameters: the template and an associative array, or only can receive the template. 
	// View::redirect("/index") -> Redirect to route. Can receive 1 parameter: the route.

	// Folders -> model, view and controller correspond to the MVC (Model-View-Controller) layers. assets correspond to the css, img and scripts. DB correspond to the configure files from database or similary. It contains a simple configuration of PDO. core correspond to the core of the framework.

	//	Routes

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET': //Routes GET
				switch ($_SERVER['REQUEST_URI']) {
					case '/':
						View::render("index.php.cp");
						break;
					case '/index':
						View::render("index.php.cp");
						break;
				/*	default:
						View::render("index.php.cp");
						break;	*/ // You can uncomment this if you like.
				}
			break;
		case 'POST': // Routes POST
				switch ($_SERVER['REQUEST_URI']) {
					case '/some':
						// Code
						break;
					case '/another':
						// Code
						break;
				}
			break;
		case 'PUT':
				// Routes PUT
			break;
		case 'DELETE':
				// Routes DELETE
			break;
	}

?>