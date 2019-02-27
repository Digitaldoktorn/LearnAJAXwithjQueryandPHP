<?php
    /* echo $_GET['task']; */

    $data = file_get_contents('data.json');

    $array = json_decode($data, 1);
?>
<pre>
    <?php print_r($array)?> <!-- Nothing gets printed in the browser - Part 10 (4:42) -->
</pre>
