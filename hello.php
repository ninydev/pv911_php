<?php

// - на сервере

echo ("current dir: " . __DIR__ . "<br>");
echo ("current file: " . __FILE__ . "<br>");

// - на сервере
?>

<!-- Клиент -->
<div id="url">
</div>

<script>
    document.getElementById("url").innerHTML = location.href;
</script>
<!-- Клиент -->



<?php
//phpinfo();


/*
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://www.php.net/");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

var_dump($output);

// close curl resource to free up system resources
curl_close($ch);

*/