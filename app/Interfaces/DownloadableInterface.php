<?php

namespace App\Interfaces;


interface DownloadableInterface
{
    public function getResultFilename();
    public function getFile();
    public function getFileExt();
    public function download();
}