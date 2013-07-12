xrownewrelic
============

Integration with New Relic for eZ Publish


* Setup your config.php
* Enter the two operator into your layout.

Place at start of the header tag:

    <head>
    {newrelic_header}

Place at end of the closing body tag.

    <body>
    {newrelic_footer}


Sample:

    <!DOCTYPE html>
    <html>
    <head>
    {newrelic_header}
    </head>
    <body>
    {newrelic_footer}
    </body>
    </html>


[For more information contact xrow GmbH](http://www.xrow.com)
