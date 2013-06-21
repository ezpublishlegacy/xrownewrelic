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
        switch ($operatorName)
        {
        	case 'newrelic_header':
                $operatorValue = newrelic_get_browser_timing_header( true );
        	break;
        	case 'newrelic_footer':
        	    $operatorValue = newrelic_get_browser_timing_footer( true );
        	default:
        	    $operatorValue = null;
        	break;
        }
    }
}