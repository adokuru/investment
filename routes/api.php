<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFAController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes (no authentication required)
Route::prefix('v1')->group(function () {

    // Authentication routes (guest only)
    Route::middleware('guest')->group(function () {
        // Registration
        Route::post('/register', [RegisteredUserController::class, 'store'])
            ->name('api.register');

        // Login
        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->name('api.login');

        // Password reset
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('api.password.email');

        Route::post('/reset-password', [NewPasswordController::class, 'store'])
            ->name('api.password.update');

        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('api.password.reset');
    });

    // Public information routes
    Route::get('/investment-plans', function () {
        return \App\Models\InvestmentPlan::all();
    })->name('api.investment-plans.public');

    Route::get('/wallet-types', function () {
        return \App\Models\WalletType::all();
    })->name('api.wallet-types.public');

    // Contact form submission
    Route::post('/contact', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'msg_subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to('support@allnzonlineasset.org')
                ->send(new \App\Mail\SendDemoMail([
                    'title' => $request->msg_subject,
                    'content' => $request->message,
                    'email' => $request->email,
                    'name' => $request->name,
                ]));

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message. Please try again later.'
            ], 500);
        }
    })->name('api.contact');
});

// Authenticated routes
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {

    // Get authenticated user
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('api.user');

    // Profile routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])
            ->name('api.profile.show');

        Route::put('/', [ProfileController::class, 'update'])
            ->name('api.profile.update');
    });

    // Email verification routes
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('api.verification.send');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('api.verification.verify');

    // Password confirmation
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->name('api.password.confirm');

    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('api.logout');

    // Two-Factor Authentication routes
    Route::prefix('2fa')->group(function () {
        Route::post('/', [TwoFAController::class, 'store'])
            ->name('api.2fa.verify');

        Route::get('/resend', [TwoFAController::class, 'resend'])
            ->name('api.2fa.resend');
    });

    // User routes (require user role and 2FA)
    Route::middleware(['isUser', '2fa'])->prefix('user')->group(function () {

        // Dashboard
        Route::get('/dashboard', [UserController::class, 'dashboard'])
            ->name('api.user.dashboard');

        // Wallet routes
        Route::post('/wallet/create', [UserController::class, 'createWallet'])
            ->name('api.user.wallet.create');

        // Deposit routes
        Route::get('/deposit', [UserController::class, 'deposit'])
            ->name('api.user.deposit');

        Route::get('/deposit/pay', [UserController::class, 'depositMake'])
            ->name('api.user.deposit.make');

        Route::post('/deposit/pay', [UserController::class, 'addDeposit'])
            ->name('api.user.deposit.add');

        // Withdrawal routes
        Route::get('/withdraw', [UserController::class, 'withdraw'])
            ->name('api.user.withdraw');

        Route::get('/withdrawal/pay', [UserController::class, 'WithdrawalMake'])
            ->name('api.user.withdrawal.make');

        Route::post('/withdrawal/pay', [UserController::class, 'addwithdrawal'])
            ->name('api.user.withdrawal.add');

        // Operations/Transactions
        Route::get('/operations', [UserController::class, 'operations'])
            ->name('api.user.operations');

        // Investment routes
        Route::get('/investment-plans', [UserController::class, 'investment'])
            ->name('api.user.investment-plans');

        Route::get('/investment/{id}', [UserController::class, 'investmentPlan'])
            ->name('api.user.investment-plan');

        Route::post('/investment', [UserController::class, 'investmentPlanSubmit'])
            ->name('api.user.investment.submit');

        Route::get('/investments', [UserController::class, 'investments'])
            ->name('api.user.investments');

        // Transfer earnings
        Route::get('/transfer-earnings', [UserController::class, 'transfer'])
            ->name('api.user.transfer');

        Route::get('/transfer/pay', [UserController::class, 'transferPay'])
            ->name('api.user.transfer.pay');

        // Settings
        Route::get('/setting', [UserController::class, 'setting'])
            ->name('api.user.setting');

        Route::post('/setting', [UserController::class, 'updateAddress'])
            ->name('api.user.setting.update');

        // Support/Ticket routes
        Route::get('/ticket', [UserController::class, 'ticket'])
            ->name('api.user.ticket');

        Route::post('/ticket', [UserController::class, 'send'])
            ->name('api.user.ticket.send');

        // Referrals
        Route::get('/referrals', [UserController::class, 'refferals'])
            ->name('api.user.referrals');
    });
});