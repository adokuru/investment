<?php

declare(strict_types=1);

return [
    'base_url' => env('CRYPTO_PRICE_BASE_URL', 'https://api.coincap.io/v3'),
    'api_key' => env('CRYPTO_PRICE_API_KEY', "85a893e0add3b7650d9898ed2fc81ebd29d57dd1a00006440d5a5c8a8a80ba63"),
    'timeout' => env('CRYPTO_PRICE_TIMEOUT', 10),
];