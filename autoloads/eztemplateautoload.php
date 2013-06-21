<?php

$eZTemplateOperatorArray = array();
$eZTemplateOperatorArray[] = array( 'script' => 'extension/xrownewrelic/autoloads/NewRelicOperator.php',
                                    'class' => 'NewRelicOperator',
                                    'operator_names' => array('newrelic_header','newrelic_footer'));
