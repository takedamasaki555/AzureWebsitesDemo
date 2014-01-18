<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<?php
$baseurl = 'http://mtdevcs01.cloudapp.net/mt/mt-data-api.cgi/v1/sites/1/entries';

$json = file_get_contents($baseurl);

$output = json_decode($json);
print "<pre>";
print_r($output);
print "</pre>";


?>
        
    </body>
</html>
