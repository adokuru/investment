@extends('layouts.users')

@section('title', 'Withdrawal')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Withdrawal</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Withdrawal
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="deposit">
        <h3 class="main-title">Make Withdraw</h3>
        <h4 class="main-subtitle">01. Choose Payment System</h4>

        <div class="deposit-system">
            <div class="text-start ">
                <form class="make-deposit">
                    <div class="create_form_group">
                        <label for="old_pass">Withdraw Type:</label>
                        <div class="select-item mb-3">
                            <select class="select-bar" id="type">
                                <option value="1">Bitcoin</option>
                                <option value="2">Ethereum</option>
                                <option value="4">Bitcoin Cash</option>
                                <option value="3">USDT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="total-profit">Total Earnings</label>
                        <input id="balance" type="text" readonly value="${{ $user->balance }}" class="readonly">
                    </div>
                </form>

            </div>
        </div>
        <div class="deposit-system">
            <h4 class="main-subtitle">02. Enter the amount of Withdraw:</h4>
            <form class="make-deposit">
                <div class="form-group">
                    <input id="value-amount" type="text" placeholder="Enter your amount" class="make-amount" value="0.00">
                </div>
                <div class="form-group">
                    <label for="total-profit">Total Withdrawal</label>
                    <input id="amount" type="text" readonly value="0.00" class="readonly">
                </div>
                <div class="form-group">
                    <button onclick="makeDeposit()" type="button" class="custom-button border-0">Withdraw</button>
                </div>
            </form>
        </div>
    </div>

@endsection


@section('script')

    <script>
        const input = document.getElementById('value-amount');
        const log = document.getElementById('amount');
        input.addEventListener('change', updateValue);

        function updateValue(e) {
            log.value = e.target.value;
        }

        function makeDeposit(e) {

            let amount = document.getElementById('amount').value;
            let type = document.getElementById('type').value;
            let data = {
                amount: amount,
                type: type
            };
            window.location.href = "{{ route('withdrawal.make') }}" + "?" + $.param(data);
        }
    </script>

@endsection
