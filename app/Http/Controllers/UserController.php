<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\InvestmentPlan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserIvestment;
use App\Models\Wallet;
use App\Models\WalletType;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendDemoMail;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
    }
    public function dashboard()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        //  $investment = UserIvestment::where('user_id', $user->id)->whereDate('created_at', '<=', now()->subDays(30)->setTime(0, 0, 0)->toDateTimeString())->with('user', 'investment')->first();
        // 
        $investments = UserIvestment::where('user_id', $user->id)->with('user', 'investment')->get();
        $investment = null;
        //find lastest investment 
        $investments->filter(function ($item) {
            return $item->created_at_difference() > 0;
        });

        if ($investments->count() > 0) {
            $investment = $investments->last();
        }
        return view('users.dashboard', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'investment'));
    }

    public function deposit()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.deposit', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }

    public function operations()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $transaction = Transaction::where('user_id', $user->id)->paginate(10);
        $btc = Cryptocap::getSingleAsset('bitcoin')->data->priceUsd;
        $eth = Cryptocap::getSingleAsset('ethereum')->data->priceUsd;
        $usdt = Cryptocap::getSingleAsset('tether')->data->priceUsd;
        $bch = Cryptocap::getSingleAsset('bitcoin-cash')->data->priceUsd;
        return view('users.operations', compact('btc', 'eth', 'usdt', 'bch', 'user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'transaction'));
    }

    public function withdraw()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.withdraw', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }
    public function investment()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $investmentPlans = InvestmentPlan::all();
        return view('users.investment', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'investmentPlans'));
    }
    public function investments()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $btc = Cryptocap::getSingleAsset('bitcoin')->data->priceUsd;
        $eth = Cryptocap::getSingleAsset('ethereum')->data->priceUsd;
        $usdt = Cryptocap::getSingleAsset('tether')->data->priceUsd;
        $bch = Cryptocap::getSingleAsset('bitcoin-cash')->data->priceUsd;
        $investments = Transaction::where('user_id', $user->id)->where('transaction_type', 'Investment')->paginate(10);
        return view('users.investments', compact('btc', 'eth', 'usdt', 'bch', 'user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'investments'));
    }

    public function setting()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.setting', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }
    public function ticket()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.ticket', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }
    public function investmentPlan($id)
    {
        $user = auth()->user();
        if ($user->wallet == null) {
            return redirect()->back()->with('error', 'Please add your wallet first');
        }
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $investment = InvestmentPlan::where('id', $id)->first();
        $wallet = $user->wallet;
        if ($wallet === null) {
            return redirect()->back()->with('error', 'Please add your wallet first');
        }
        return view('users.singleInvestment', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'investment', 'wallet'));
    }
    public function investmentPlanSubmit(Request $request)
    {
        $wallet = auth()->user()->wallet->where('id', $request->wallet)->first();

        if ($wallet->usd_balance < $request->amount) {
            return redirect()->back()->with('error', 'Insufficient Balance');
        }
        $transaction = InvestmentPlan::where('id', $request->investment)->first();

        if ($request->amount < $transaction->minimum_price) {
            return redirect()->back()->with('error', 'Amount lower than Minimum amount');
        }

        DB::transaction(function () use ($request) {
            $user = auth()->user();
            $wallet = $user->wallet->where('id', $request->wallet)->where('status', 1)->first();

            $investment = InvestmentPlan::where('id', $request->investment)->first();
            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->wallet_id = $wallet->id;
            $transaction->amount = $request->amount;
            $transaction->transaction_type = 'Investment';
            $transaction->investment_plan_id = $request->investment;
            $transaction->currency = $wallet->walletType->symbol;
            $transaction->status = 1;
            $transaction->save();

            $user_investment = new UserIvestment();
            $user_investment->user_id = $user->id;
            $user_investment->investment_plan_id = $investment->id;
            $user_investment->amount = $request->amount;
            $user_investment->save();

            $amount_debited = $wallet->usd_balance - $request->amount;
            $crypto_amount = $amount_debited /  Cryptocap::getSingleAsset($wallet->walletType->getSymbol)->data->priceUsd;
            $wallet->amount = $crypto_amount;
            $wallet->usd_balance = $crypto_amount * Cryptocap::getSingleAsset($wallet->walletType->getSymbol)->data->priceUsd;
            $wallet->save();
        });

        return redirect()->route('users.dashboard')->with('success', 'Investment Successfully');
    }
    public function addDeposit(Request $request)
    {
        $wallet = Wallet::where('user_id', auth()->user()->id)->where('wallet_type_id',  $request->type)->first();
        $deposit = new Deposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->value = $request->amount;
        $deposit->wallet_id = $wallet->id;
        $deposit->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->deposit_id = $deposit->id;
        $transaction->transaction_type = 'deposit';
        $transaction->currency = $request->currency;
        $transaction->amount = $request->amount;
        $transaction->status = 0;
        $transaction->save();


        return redirect()->route('users.dashboard')->with('success', 'Deposit pending authorization');
    }
    public function addwithdrawal(Request $request)
    {
        $walletType = WalletType::find($request->type);
        $deposit = new Withdrawal();
        $deposit->user_id = auth()->user()->id;
        $deposit->value = $request->amount;
        $deposit->reference = $walletType->symbol;
        $deposit->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->withdrawal_id = $deposit->id;
        $transaction->transaction_type = 'Withdrawal';
        $transaction->currency = $walletType->symbol;
        $transaction->amount = $request->amount;
        $transaction->status = 0;
        $transaction->save();


        return redirect()->route('users.dashboard')->with('success', 'Withdrawal pending authorization');
    }
    public function createWallet(Request $request)
    {
        $user = auth()->user();
        Wallet::create([
            'wallet_type_id' => $request->wallet_type_id,
            'user_id' => $user->id,
            'usd_balance' => 0,
            'amount' => 0,
            'status' => 1,
        ]);
        return redirect()->back()->with('success', 'Wallet created successfully');
    }

    public function depositMake(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
        ]);
        $amount = $request->amount;
        $type = $request->type;
        $walletType = WalletType::find($request->type);
        $wallet = auth()->user()->wallet->where('wallet_type_id', $request->type)->where('status', 1)->first();
        if ($wallet == null) {
            return redirect()->route('users.deposit')->with('error', 'Please activate your ' . $walletType->name . ' wallet');
        }
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.payDeposit', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'walletType', 'wallet', 'amount'));
    }
    public function refferals(Request $request)
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $investment = UserIvestment::where('user_id', $user->id)->with('user', 'investment')->first();
        return view('users.ref', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'investment'));
    }
    public function WithdrawalMake(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
        ]);
        $user = auth()->user();
        if ($user->earnings < $request->amount) {
            return redirect()->back()->with('error', 'Insufficient Balance');
        }


        $amount = $request->amount;

        $type = $request->type;

        $walletType = WalletType::find($request->type);

        if ($walletType->id == 1) {
            $wallet = $user->btc_address;
        }

        if ($walletType->id == 2) {
            $wallet = $user->eth_address;
        }

        if ($walletType->id == 3) {
            $wallet = $user->usdt_address;
        }

        if ($walletType->id == 4) {
            $wallet = $user->bcc_address;
        }

        if ($wallet == null) {
            return redirect()->route('users.setting')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
        }

        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.paywithdrawal', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'walletType', 'wallet', 'amount'));
    }

    public function updateAddress(Request $request)
    {
        $user = auth()->user();
        $user->btc_address = $request->btc_address;
        $user->eth_address = $request->eth_address;
        $user->usdt_address = $request->usdt_address;
        $user->bcc_address = $request->bcc_address;
        $user->save();
        return redirect()->back()->with('success', 'Address updated successfully');
    }

    public function send(Request $request)
    {
        $user = auth()->user();
        $title = $request->input('topic');
        $content = $request->input('content');
        $mailData = [
            'title' =>  $title,
            'content' => $content,
            'email' => $user->email,
            'name' => $user->name
        ];

        Mail::to('support@allnzonlineassets.org')->send(new SendDemoMail($mailData));

        // Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) use ($title)
        // {

        //     $message->from($user->email, $user->name);

        //     $message->to();

        //     $message->subject($title);

        // });


        return redirect()->back()->with('success', 'Request sent successfully');
    }

    public function transferPay(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
        ]);
        $user = auth()->user();
        if ($user->earnings < $request->amount) {
            return redirect()->back()->with('error', 'Insufficient Balance');
        }

        $amount = $request->amount;

        $type = $request->type;

        $walletType = WalletType::find($request->type);

        if ($walletType->id == 1) {
            $wallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
            if ($wallet == null) {
                return redirect()->route('users.dashboard')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
            }
            $deposit = new Deposit();
            $deposit->user_id = auth()->user()->id;
            $deposit->value = $request->amount;
            $deposit->wallet_id = $wallet->id;
            $deposit->save();

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;

            $transaction->transaction_type = 'Earnings Transfer';
            $transaction->currency = 'BTC';
            $transaction->amount = $request->amount;
            $transaction->status = 1;
            $transaction->save();

            $user->earnings = $user->earnings - $request->amount;
            $user->save();

            // amount to btc wallet
            $btc_wallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
            $btc_wallet->amount = $btc_wallet->amount + ($request->amount / $walletType->value);
            $btc_wallet->usd_balance = $btc_wallet->usd_balance + ($request->amount);
            $btc_wallet->save();
        }

        if ($walletType->id == 2) {
            $wallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
            if ($wallet == null) {
                return redirect()->route('users.dashboard')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
            }
            $deposit = new Deposit();
            $deposit->user_id = auth()->user()->id;
            $deposit->value = $request->amount;
            $deposit->wallet_id = $wallet->id;
            $deposit->save();

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;

            $transaction->transaction_type = 'Earnings Transfer';
            $transaction->currency = 'ETH';
            $transaction->amount = $request->amount;
            $transaction->status = 1;
            $transaction->save();

            $user->earnings = $user->earnings - $request->amount;
            $user->save();

            // amount to eth wallet
            $eth_wallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
            $eth_wallet->amount = $eth_wallet->amount + ($request->amount / $walletType->value);
            $eth_wallet->usd_balance = $eth_wallet->usd_balance + ($request->amount);
            $eth_wallet->save();
        }

        if ($walletType->id == 3) {
            $wallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
            if ($wallet == null) {
                return redirect()->route('users.dashboard')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
            }
            $deposit = new Deposit();
            $deposit->user_id = auth()->user()->id;
            $deposit->value = $request->amount;
            $deposit->wallet_id = $wallet->id;
            $deposit->save();

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;

            $transaction->transaction_type = 'Earnings Transfer';
            $transaction->currency = 'USDT';
            $transaction->amount = $request->amount;
            $transaction->status = 1;
            $transaction->save();

            $user->earnings = $user->earnings - $request->amount;
            $user->save();

            // amount to usdt wallet
            $usdt_wallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
            $usdt_wallet->amount = $usdt_wallet->amount + ($request->amount / $walletType->value);
            $usdt_wallet->usd_balance = $usdt_wallet->usd_balance + ($request->amount);
            $usdt_wallet->save();
        }

        if ($walletType->id == 4) {
            $wallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
            if ($wallet == null) {
                return redirect()->route('users.dashboard')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
            }
            $deposit = new Deposit();
            $deposit->user_id = auth()->user()->id;
            $deposit->value = $request->amount;
            $deposit->wallet_id = $wallet->id;
            $deposit->save();

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;

            $transaction->transaction_type = 'Earnings Transfer';
            $transaction->currency = 'BCH';
            $transaction->amount = $request->amount;
            $transaction->status = 1;
            $transaction->save();

            $user->earnings = $user->earnings - $request->amount;
            $user->save();

            // amount to bcc wallet
            $bcc_wallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
            $bcc_wallet->amount = $bcc_wallet->amount + ($request->amount / $walletType->value);
            $bcc_wallet->usd_balance = $bcc_wallet->usd_balance + ($request->amount);
            $bcc_wallet->save();
        }

        if ($wallet == null) {
            return redirect()->route('users.dashboard')->with('error', 'Please add your ' . $walletType->name . ' reciever address');
        }

        return redirect()->route('users.dashboard')->with('success', 'Transfer Successful');
    }


    public function transfer()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.transferDeposit', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }
}
