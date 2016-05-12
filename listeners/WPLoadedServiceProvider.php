<?php

namespace App\Listeners;

class WPLoadedServiceProvider
{
    function laravel_str_random($atts)
    {
        if (!isset($atts['length'])) $length = 40;
        else $length = $atts['length'];
        return str_random($length);
    }
    public function handle()
    {
        add_shortcode( 'laravel_str_random', array( '\App\Listeners\WPLoadedServiceProvider', 'laravel_str_random' ) );
    }
}