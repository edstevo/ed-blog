<?php namespace Blog\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Blog\Http\Middleware\CORSMiddleware',
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth'			=> 'Blog\Http\Middleware\Authenticate',
		'auth.basic'	=> 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest'			=> 'Blog\Http\Middleware\RedirectIfAuthenticated',
	];

}
