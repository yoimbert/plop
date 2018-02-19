<?php

$ch = curl_init("your_url_dir_index");
$fp = fopen("file.json", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

?>
