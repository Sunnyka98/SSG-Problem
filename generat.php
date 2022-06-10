<?php
require __DIR__ . '/kirby/bootstrap.php';
$kirby = kirby();
$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, $pathsToCopy = null, $pages = null);
$files = $staticSiteGenerator->generate($outputFolder = './website/_counter', $baseUrl = '/', $preserve = []);
foreach ($files as $file) {
    echo $file . PHP_EOL;
}