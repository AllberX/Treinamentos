<?php
require 'vendor/autoload.php'; // Certifique-se de que o autoload do Composer esteja incluído

use simplehtmldom\HtmlWeb;

function scrapeNewsTitles($url) {
    $client = new HtmlWeb();
    $html = $client->load($url);

    if (!$html) {
        echo "Não foi possível carregar o HTML da URL fornecida.";
        return;
    }

    $titles = [];
    foreach ($html->find('h2') as $element) { // Supondo que os títulos das notícias estão em <h2>
        $titles[] = $element->plaintext;
    }

    return $titles;
}

$url = 'https://example-news-site.com'; // Substitua pela URL do site que você deseja raspar
$titles = scrapeNewsTitles($url);

echo "<h1>Títulos das Notícias</h1>";
if (!empty($titles)) {
    echo "<ul>";
    foreach ($titles as $title) {
        echo "<li>" . htmlspecialchars($title) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum título encontrado.";
}
?>

