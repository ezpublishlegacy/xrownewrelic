<?php

class xrowNewRelicServerFunctions extends ezjscServerFunctions
{
    /**
     * Generates the JavaScript needed to add newrelic
     *
     * @return string JavaScript
     */

    public static function newrelic()
    {

        $url = 'https://rpm-images.newrelic.com/42/eum/rum.js';
        if ( function_exists( 'curl_init' ) )
        {
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_HEADER, 0 );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
            $content = curl_exec( $ch );
            $info = curl_getinfo( $ch );

            if ( $info['http_code'] != 200 )
            {
                $spcjsContent = false;
                eZDebug::writeError( "New Relic URL ($url) is not avialable ", __METHOD__ );
            }
            curl_close( $ch );
            eZDebug::writeDebug( "New Relic URL ($url) included", __METHOD__ );
        }
        else
        {
            $content = file_get_contents( $url );
            eZDebug::writeDebug( "New Relic URL ($url) included", __METHOD__ );
        }
        return "\n$(document).ready(function() { \n" . $content . "\n});\n";
    }
}
