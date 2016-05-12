<?php
/**
 * Created by PhpStorm.
 * User: megasent1
 * Date: 12.05.16
 * Time: 18:07
 */
use App\Listeners\WPLoadedServiceProvider;
use App\Events\WPLoadedEvent;
$dispatcher = new \Illuminate\Events\Dispatcher();
$dispatcher->listen([WPLoadedEvent::class], WPLoadedServiceProvider::class);
