xrownewrelic
============

Integration with New Relic for eZ Publish


* Setup your config.php
* Enter the two operator into your layout.

Place the {newrelic_footer()} tag  as close to the top of the HEAD as possible, but after any position-sensitive META tags:

    <head>
    <meta name="XXX" content="XXX" />
    <meta name="XXX" content="XXX" />
    <meta name="XXX" content="XXX" />
    {newrelic_header()}
    </head>

Place at end of the closing body tag.

    <body>
    <div id="content>...</div>
    {newrelic_footer()}
    </body>


Sample:

    <!DOCTYPE html>
    <html>
    <head>
    {newrelic_header()}
    </head>
    <body>
    {newrelic_footer()}
    </body>
    </html>


[For more information contact xrow GmbH](http://www.xrow.com)
