@extends('layouts.users')

@section('title', 'Settings')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Settings</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Settings
            </li>
        </ul>
    </div>
@endsection
@section('content')
                    <div class="partners">
                        <h3 class="main-title">Settings</h3>
                        <div class="row mb-30-none">
                            <div class="col-lg-6 mb-30">
                                <div class="create_wrapper mw-100">
                                    <h5 class="subtitle">Personal Info</h5>
                                    <form class="create_ticket_form row mb-30-none">
                                        
                                        <div class="create_form_group col-sm-12">
                                            <label for="full_name">Full Name:</label>
                                            <input disabled value="{{$user->name}}" type="text" id="full_name" placeholder="Full Name">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="account_email">Your Email Address:</label>
                                            <input disabled type="text" id="account_email" placeholder="Enter your Email" value="{{$user->email}}">
                                        </div>
                                        
                                        {{-- <div class="create_form_group col-sm-6 align-self-end">
                                            <button type="submit" class="custom-button border-0">Save</button>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="create_wrapper mw-100">
                                    <h5 class="subtitle">Withdrawal system</h5>
                                    <form class="create_ticket_form row mb-30-none" action="{{ route('users.updateAddress') }}" method="POST">
                                        @csrf
                                        <div class="create_form_group col-sm-12">
                                            <label for="bitcoin_account_no">Your Bitcoin Address:</label>
                                            <input name="btc_address" type="text" id="bitcoin_account_no" value="{{$user->btc_address}}">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="litecoin_account">Your Bitcoin Cash Address:</label>
                                            <input name="bcc_address" type="text" id="litecoin_account" value="{{$user->bcc_address}}">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="dogecoin_account">Your USDT Address:</label>
                                            <input name="usdt_address" type="text" id="dogecoin_account" value="{{$user->usdt_address}}">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="ethereum_account">Your Ethereum Address:</label>
                                            <input name="eth_address" type="text" id="ethereum_account" value="{{$user->eth_address}}">
                                        </div>
                                        <div class="create_form_group col-sm-6 align-self-end">
                                            <button type="submit" class="custom-button border-0">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 mb-30">
                                <div class="create_wrapper mw-100">
                                    <h5 class="subtitle">Change Passowrd</h5>
                                    <form class="create_ticket_form row mb-30-none">
                                        <div class="create_form_group col-sm-12">
                                            <label for="old_pass">Old Passowrd:</label>
                                            <input type="password" id="old_pass" placeholder="Enter your Old Password">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="new_pass">New password::</label>
                                            <input type="password" id="new_pass" placeholder="Enter your new password:">
                                        </div>
                                        <div class="create_form_group col-sm-12">
                                            <label for="repeat_pass">Repeat the new password::</label>
                                            <input type="password" id="repeat_pass" placeholder="Repeat your new password:">
                                        </div>
                                        <div class="create_form_group col-sm-6 align-self-end">
                                            <button type="submit" class="custom-button border-0">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
@endsection


@section('script')



@endsection
