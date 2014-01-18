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
foreach ( $output->items as $data ){
    echo "<h1>タイトル<br/>".$data->title."</h1><br/>";
    echo "<h1>内容".$data->body."</h1><br/><hr/>";
}
?>
        
    </body>
</html>

