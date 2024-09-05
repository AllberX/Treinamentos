<?php
require 'vendor/autoload.php';

use simplehtmldom\HtmlWeb;

// Seu código para usar a biblioteca
$client = new HtmlWeb();
$html = $client->load('https://example.com');
echo $html->find('title', 0)->plaintext;
?>
