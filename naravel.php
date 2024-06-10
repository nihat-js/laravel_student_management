<?php


require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;


class HomeController{
    public function index(): string
    {
        return "echo colling indiex fun";
}
}
// Load routes
//$routes = @require __DIR__ . '/routes.php';

// Create a request object from the current PHP globals
$routes = new RouteCollection();

$routes->add('home', new \Symfony\Component\Routing\Route('/', [
    '_controller' => 'HomeController::index'
]));

$routes->add('about', new \Symfony\Component\Routing\Route('/about', [
    '_controller' => 'AboutController::index'
]));

// Set up the context
$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

// Create the URL matcher
$matcher = new UrlMatcher($routes, $context);

try {
// Match the request to a route
$parameters = $matcher->match($request->getPathInfo());

// Extract the controller and method
list($controller, $method) = explode('::', $parameters['_controller']);


// Instantiate the controller
$controllerInstance = new $controller();

// Call the controller method
$responseContent = call_user_func([$controllerInstance, $method]);

// Create a response object
$response = new Response($responseContent);

} catch (ResourceNotFoundException $e) {
// Handle the case where no route matches
$response = new Response('Not Found', 404);
}

// Send the response to the browser
$response->send();

