<?php declare(strict_types=1);

use \Xervice\DataProvider\DataProviderConfig;

$config[DataProviderConfig::DATA_PROVIDER_GENERATED_PATH] =  dirname(__DIR__) . '/src/Generated/DataTransferObjects';

$config[DataProviderConfig::DATA_PROVIDER_PATHS] = [
    dirname(__DIR__) . '/src/Shared/_schemas/transfer'
];

$config[DataProviderConfig::DATA_PROVIDER_NAMESPACE] = 'App\\Generated\\DataTransferObjects';
