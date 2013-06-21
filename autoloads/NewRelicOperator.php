<?php

class NewRelicOperator
{
    function operatorList()
    {
        return array( 'newrelic_header', 'newrelic_footer');
    }
    
    function namedParameterPerOperator()
    {
        return false;
    }

    function namedParameterList()
    {
        return array( 'newrelic_header' => array( ),'newrelic_footer' => array( ) );
    }

    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters, $placement)
    {
        if (!extension_loaded('newrelic') )
        {
            eZDebug::writeError( "New relic extension not avaiable." );
            return;
        }
        switch ($operatorName)
        {
        	case 'newrelic_header':
                    $operatorValue = newrelic_get_browser_timing_header( true );
        	break;
        	case 'newrelic_footer':
                    $operatorValue = newrelic_get_browser_timing_footer( true );
                break;
        	default:
        	    $operatorValue = null;
        	break;
        }
    }
}
