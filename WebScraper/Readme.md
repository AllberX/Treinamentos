Web scraper -Script que coleta dados de sites da web. 
Fiz um scraper que coleta os títulos das notícias de uma página de notícias.

Scraper PHP usando a biblioteca 'simple_html_dom', que você pode encontrar aqui no GitHub. 
Primeiro, você precisará instalar a biblioteca. Se estiver usando Composer, você pode adicionar a seguinte linha ao seu composer.json:

{
    "require": {
        "simple-html-dom/simple-html-dom": "^1.5"
    }
}


Ou instale diretamente com Composer:

composer require simple-html-dom/simple-html-dom


***
O que o código faz:
Inclui a biblioteca simple_html_dom: Através do autoload do Composer.

Define a função scrapeNewsTitles: Faz uma solicitação HTTP para a URL fornecida e carrega o HTML.

Encontra e coleta títulos: Assume que os títulos das notícias estão em elementos <h2>. Modifique o seletor conforme necessário para o site que você está scaneando.

Imprime os títulos: Exibe os títulos coletados em uma lista HTML.

Observações
Legalidade e ética: Sempre verifique os termos de serviço do site que você está raspando para garantir que você esteja em conformidade com as regras. 
O scraping de alguns sites pode ser contra os termos de serviço ou ilegal.

Robustez: Este é um exemplo básico. Sites podem ter estruturas HTML diferentes ou usar JavaScript para carregar conteúdo. 
Scraping de sites mais complexos pode exigir técnicas mais avançadas.
