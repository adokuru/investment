<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\CryptoPriceService;
use Illuminate\Support\Facades\Log;
use Throwable;

class WalletType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function updatePrice()
    {
        $this->value = $this->getPrice($this->symbol);
        $this->save();
    }

    public function getPrice(string $name): float
    {
        try {
            $price = app(CryptoPriceService::class)->getUsdPrice($this->name);

            return $price > 0 ? $price : (float) $this->value;
        } catch (Throwable $exception) {
            Log::warning('Failed to fetch crypto price.', [
                'asset' => $name,
                'wallet_type_id' => $this->id,
                'error' => $exception->getMessage(),
            ]);

            return (float) $this->value;
        }
    }
}