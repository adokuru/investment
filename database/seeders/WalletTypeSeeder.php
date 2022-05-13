<?php

namespace Database\Seeders;

use App\Models\WalletType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class WalletTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WalletType::create([
            'name' => 'Bitcoin',
            'description' => 'Bitcoin is a cryptocurrency and blockchain platform that is based on the Bitcoin protocol. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'BTC',
            'getSymbol' => 'bitcoin',
            'value' => Cryptocap::getSingleAsset('bitcoin')->data->priceUsd,
        ]);
        WalletType::create([
            'name' => 'ethereum',
            'description' => 'Ethereum is a decentralized platform that runs smart contracts, a platform that runs smart contracts. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'ETH',
            'getSymbol' => 'ethereum',
            'value' => Cryptocap::getSingleAsset('ethereum')->data->priceUsd,
        ]);
        WalletType::create([
            'name' => 'USDT',
            'description' => 'Tether is a cryptocurrency that is based on the Ethereum blockchain. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'USDT',
            'getSymbol' => 'tether',
            'value' => Cryptocap::getSingleAsset('tether')->data->priceUsd,
        ]);
        WalletType::create([
            'name' => 'Bitcoin Cash',
            'description' => 'Bitcoin Cash is a cryptocurrency that is based on the Bitcoin protocol. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'BCH',
            'getSymbol' => 'bitcoin-cash',
            'value' => Cryptocap::getSingleAsset('bitcoin-cash')->data->priceUsd,
        ]);

    }
}
