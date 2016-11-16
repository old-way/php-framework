<?php
/**
 * Created by PhpStorm.
 * User: TwilRoad
 * Date: 2016/11/16 0016
 * Time: 13:54
 */
namespace Notadd\Foundation\Debug\Listeners;
use Notadd\Foundation\Debug\Apis\DebugApi;
use Notadd\Foundation\Routing\Abstracts\RouteRegistrar as AbstractRouteRegistrar;
/**
 * Class RouteRegistrar
 * @package Notadd\Foundation\Debug\Listeners
 */
class RouteRegistrar extends AbstractRouteRegistrar {
    /**
     * @return void
     */
    public function handle() {
        $this->router->group(['middleware' => ['web', 'auth:api'], 'prefix' => 'api'], function() {
            $this->router->post('debug', DebugApi::class . '@handle');
        });
    }
}