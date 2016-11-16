<?php
/**
 * Created by PhpStorm.
 * User: TwilRoad
 * Date: 2016/11/16 0016
 * Time: 13:52
 */
namespace Notadd\Foundation\Debug;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use Notadd\Foundation\Debug\Listeners\RouteRegistrar;
/**
 * Class DebugServiceProvider
 * @package Notadd\Foundation\Debug
 */
class DebugServiceProvider extends ServiceProvider {
    /**
     * @return void
     */
    public function boot() {
        $this->app->make(Dispatcher::class)->subscribe(RouteRegistrar::class);
    }
}