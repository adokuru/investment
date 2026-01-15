<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CryptoPriceService
{
    /**
     * @return array<string, float>
     */
    public function getUsdPrices(array $assetIds): array
    {
        if (count($assetIds) === 0) {
            return [];
        }

        $response = Http::baseUrl($this->baseUrl())
            ->timeout($this->timeout())
            ->retry(2, 200)
            ->withHeaders($this->headers())
            ->get('/assets', [
                'ids' => implode(',', $assetIds),
            ]);

        if (!$response->successful()) {
            Log::warning('Crypto price request failed.', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return [];
        }

        $assets = $response->json('data');
        if (!is_array($assets)) {
            Log::warning('Crypto price response missing data.', [
                'body' => $response->body(),
            ]);

            return [];
        }

        $prices = [];
        foreach ($assets as $asset) {
            $id = $asset['id'] ?? null;
            $price = $asset['priceUsd'] ?? null;

            if (!is_string($id) || !is_numeric($price)) {
                continue;
            }

            $prices[$id] = (float) $price;
        }

        return $prices;
    }

    public function getUsdPrice(string $assetId): float
    {
        $response = Http::baseUrl($this->baseUrl())
            ->timeout($this->timeout())
            ->retry(2, 200)
            ->withHeaders($this->headers())
            ->get("/assets/{$assetId}");

        if (!$response->successful()) {
            Log::warning('Crypto price request failed.', [
                'assetId' => $assetId,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return 0.0;
        }

        $price = $response->json('data.priceUsd');
        if (!is_numeric($price)) {
            Log::warning('Crypto price response missing priceUsd.', [
                'assetId' => $assetId,
                'body' => $response->body(),
            ]);

            return 0.0;
        }

        return (float) $price;
    }

    private function baseUrl(): string
    {
        return (string) config('crypto-price.base_url');
    }

    private function timeout(): int
    {
        return (int) config('crypto-price.timeout');
    }

    /**
     * @return array<string, string>
     */
    private function headers(): array
    {
        $apiKey = config('crypto-price.api_key');
        if (!is_string($apiKey) || $apiKey === '') {
            return [];
        }

        return [
            'Authorization' => "Bearer {$apiKey}",
        ];
    }
}