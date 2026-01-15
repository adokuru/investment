<?php

namespace App\Console\Commands;

use App\Models\WalletType;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdatePrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update prices';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //    Update prices with crypto price service
        Log::info('Updating prices...');
        $walletTypes = WalletType::all();
        foreach ($walletTypes as $walletType) {
            Log::info('Updating ' . $walletType->name);
            $walletType->updatePrice();
            Log::info('Updated ' . $walletType->name);
        }
    }
}