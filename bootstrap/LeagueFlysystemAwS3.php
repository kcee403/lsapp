<?php
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

include __DIR__ . '/vendor/autoload.php';

$client = new S3Client([
    'credentials' => [
        'key'    => 'AKIAILEH2PC56JEWGWQ',
        'secret' => 'NDC0S1SRCAG4CwDQPQUOHkfAhQK1TauuqONumL5C'
        'bucket' => 'lara-file'
    ],
    'region' => 'us-east-1',
    'version' => '5.5',
    'bucket' => 'lara-file'
]);

$adapter = new AwsS3Adapter($client, 'lara-file');
$filesystem = new Filesystem($adapter);
