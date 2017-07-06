<?php
$phar = new Phar('./../haha.phar');


$phar->startBuffering();

$phar->buildFromDirectory(__DIR__);
$phar->compressFiles(Phar::GZ);

$phar->setStub($phar->createDefaultStub('index.php'));


$phar->stopBuffering();