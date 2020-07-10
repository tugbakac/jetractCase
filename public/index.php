<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

//require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

//$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

/*$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);*/

?>

<?php
    include 'header.php';
?>

<!-- Image Area-->
<header class="masthead bg-light text-secondary text-center">
		<div class="container d-flex align-items-center flex-column">
			<!-- Heading-->
			<h1 class="masthead-heading text-uppercase mt-5 mb-0">Image Area</h1>
			<!-- Subheading-->
			<p class="masthead-subheading font-weight-light mt-1 mb-0"> Web Designer </p>
		</div>
	</header>

	<!-- About Section-->
	<section id="about">
		<div class="container">
		  <div class="row">
			<div class="col-lg-6">
				<div class="fakeimg bg-light" style="height: 100%;"><h2>Image</h2></div>
			</div>
  
			<div class="col-lg-6 content">
			  <h2 class="text-warning">Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
			  <h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
  
			  <ul>
				<li><i class="fa fa-check text-warning"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li><i class="fa fa-check text-warning"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				<li><i class="fa fa-check text-warning"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
			  </ul>
  
			</div>
		  </div>
  
		</div>
	  </section>

	<!-- Mission Section-->
	<section class="page-section bg-secondary text-white mb-0" id="mission">
		<div class="container">
			<!-- Mission Section Heading-->
			<h2 class="page-section-heading text-center text-uppercase text-light mb-5">Mission</h2>
			<!-- Mission Section Content-->
			<div class="row">
				<div class="col-lg-4 ml-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nulla esse illum consequuntur qui architecto inventore, placeat quis voluptatibus eos corporis at iusto veniam amet deserunt nihil necessitatibus autem animi!</p></div>
				<div class="col-lg-4 mr-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, porro eveniet voluptatibus aspernatur nobis, nostrum vel maxime illum error corrupti repudiandae voluptas! Ipsam sint dicta deleniti numquam quidem culpa praesentium!</p></div>
			</div>
			<!-- Mission Section Button-->
			<div class="text-center mt-4">
				<a class="btn btn-xl btn-outline-light" href="#">
					Look at more!
				</a>
			</div>
		</div>
	</section>

	<!-- Services-->
	<section class="page-section bg-white">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-warning"></i><i class="fas fa fa-shopping-basket fa-stack-1x fa-inverse"></i></span>
					<h4 class="my-3">E-Commerce</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-warning"></i><i class="fa fa-mobile fa-stack-1x fa-inverse"></i></span>
					<h4 class="my-3">Responsive Design</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-warning"></i><i class="fa fa-user-secret fa-stack-1x fa-inverse"></i></span>
					<h4 class="my-3">Web Security</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
			</div>
		</div>
	</section>

<?php
    include 'footer.php'
?>
