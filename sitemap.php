<?php

/**
 *  generate_sitemap.php
 *  Crea un sitemap.xml dinámico con todas las páginas públicas (.php, .html, .htm).
 *  Excluye carpetas internas como vendor, css, js, img, dist, etc.
 *
 *  Uso CLI:    php tools/generate_sitemap.php
 *  Uso web:    <a href="/tools/generate_sitemap.php" target="_blank">Regenerar sitemap</a>
 */

$baseUrl = 'https://polizaderentas.com';         // cambia si usas otro dominio o subcarpeta
$rootDir = realpath(__DIR__ . '/..');            // raíz del proyecto (carpeta padre de /tools)
$outFile = $rootDir . '/sitemap.xml';            // destino final

$allowedExt = ['php', 'html', 'htm', 'pdf'];            // tipos a indexar
$excludeDirs  = ['vendor', 'css', 'js', 'img', 'dist', 'node_modules', 'tests'];  // rutas a saltar
$excludeFiles = ['contacto.php', 'handler.php'];  // ej.: scripts de backend que no van al sitemap

$urls = [];

/**
 *  Recorre directorios de forma recursiva
 */
$iterator = new RecursiveIteratorIterator(
    new RecursiveCallbackFilterIterator(
        new RecursiveDirectoryIterator($rootDir, FilesystemIterator::SKIP_DOTS),
        function ($file, $key, $iter) use ($excludeDirs) {
            // Omite carpetas no deseadas
            if ($iter->hasChildren() && in_array($file->getFilename(), $excludeDirs)) {
                return false;
            }
            return true;
        }
    ),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $file) {
    if ($file->isFile()) {
        $ext = strtolower($file->getExtension());
        if (in_array($ext, $allowedExt)) {
            $relative = str_replace($rootDir, '', $file->getPathname());
            $relative = ltrim($relative, '/\\');
            if (in_array($relative, $excludeFiles)) continue;

            // Construye la URL completa
            $loc = rtrim($baseUrl, '/') . '/' . str_replace('\\', '/', $relative);

            // Opcional: elimina el .php del final si tienes rewrites
            // $loc = preg_replace('/\.php$/','',$loc);

            $urls[] = [
                'loc'        => htmlspecialchars($loc, ENT_XML1),
                'lastmod'    => date('Y-m-d', $file->getMTime()),
                'changefreq' => 'monthly',
                'priority'   => $loc === $baseUrl . '/' ? '1.0' : '0.7'
            ];
        }
    }
}

/**
 *  Genera XML
 */
$xml  = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('urlset');
$xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($urls as $u) {
    $xml->startElement('url');
    foreach ($u as $tag => $value) {
        $xml->writeElement($tag, $value);
    }
    $xml->endElement(); // </url>
}

$xml->endElement(); // </urlset>
$xml->endDocument();

// file_put_contents($outFile, $xml->outputMemory());

// echo "Sitemap generado con " . count($urls) . " URLs → $outFile\n";
