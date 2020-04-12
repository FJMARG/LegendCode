# LegendCode
Mini MVC  PHP Framework made with vanilla PHP code.

index.php is the route file. Edit this file to add your routes.

View::render() -> Render template. Can receive 1 or 2 parameters: the template and an associative array, or only can receive the template.

View::redirect("/index") -> Redirect to route. Can receive 1 parameter: the route.

Template is, by default, a .php.cp file.

Folders -> model, view and controller correspond to the MVC (Model-View-Controller) layers. assets correspond to the css, img and scripts. DB correspond to the configure files from database or similary. It contains a simple configuration of PDO. core correspond to the core of the framework.