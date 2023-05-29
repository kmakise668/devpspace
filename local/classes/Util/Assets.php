<?php

namespace Local\Util;

class Assets
{
    private $base;
    private $manifest;

    public function __construct(string $base = 'local/build/', string $manifestFile = 'manifest.json')
    {
        $this->base = $base;
        $this->loadManifest($manifestFile);
    }

    private function loadManifest(string $manifestFile)
    {
        $manifestPath = $_SERVER['DOCUMENT_ROOT'] . '/' . $this->base . $manifestFile;

        if (!file_exists($manifestPath)) {
            throw new \Exception('Manifest file not found!');
        }

        $this->manifest = json_decode(file_get_contents($manifestPath), true);
    }

    public function getEntry(string $entryName)
    {
        $entryPath = $this->base . $entryName;

        if (!isset($this->manifest[$entryPath])) {
            throw new \Exception('Entry `' . $entryPath . '` not found in manifest file!');
        }

        return $this->manifest[$entryPath];
    }
}

// Создаем экземпляр класса Assets
$assetManager = new \Local\Util\Assets();

// Получаем путь к стилям
$cssPath = $assetManager->getEntry('global.css');

// Получаем путь к скрипту
$jsPath = $assetManager->getEntry('main.js');
