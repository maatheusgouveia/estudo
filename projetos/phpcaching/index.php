<?php
// Configurações
date_default_timezone_set('America/Sao_Paulo');
$validadeEmSegundos = 120;
$arquivoCache = 'phpcaching/cache/index.html';
$urlDinamica = 'http://localhost/mostrapreco/phpcaching/paginas/index.php';

// Verifica se o arquivo cache existe e se ainda é válido
if (file_exists($arquivoCache) && (filemtime($arquivoCache) > time() - $validadeEmSegundos)) {

    // Lê o arquivo cacheado
    $conteudo = file_get_contents($arquivoCache);
} else {

    // Acessa a versão dinâmica
    $conteudo = file_get_contents($urlDinamica);

    // Cria o cache
    file_put_contents($arquivoCache, $conteudo);
}

// Exibe o conteúdo da página
echo $conteudo;
