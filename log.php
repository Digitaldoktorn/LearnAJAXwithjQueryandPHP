<?
    /* Part 9 -I dont get the result in dev tools "preview" or "response" as in the end of video part 9
    echo $_GET['task']; */

    $data = file_get_contents('data.json');

    $array = json_decode($data, 1);
?>
<pre>
    <?print_r($array)?> <!-- Nothing gets printed in the browser - Part 10 (4:42) -->
</pre>
