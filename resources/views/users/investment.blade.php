@extends('layouts.users')

@section('title', 'Investment')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Investment</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Investment
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="deposit-wrapper">
        @forelse ($investmentPlans as $investmentPlan)
            <div class="deposit-item">
                <div class="deposit-inner">
                    <h5 class="subtitle ">{{ $investmentPlan->name }}</h5>
                    <div class="deposit-header">
                        <h3 class="title">{{ $investmentPlan->return_rate }}%</h3>
                        <span><b>Every day</b></span>
                    </div>
                    <div class="deposit-body">
                        <div class="item">
                            <div class="item-thumb">
                                <img src="/backend/assets/images/offer/offer1.png" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Deposit</h5>
                                <h5 class="subtitle"><span class="min">${{ number_format($investmentPlan->minimum_price) }}</span><span class="to">to</span>
								<span class="max">
								@if($investmentPlan->maximum_price > 10000000)
								 Infinite
								@else
								${{ number_format($investmentPlan->maximum_price) }}
								@endif
								</span></h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="/backend/assets/images/offer/offer2.png" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Terms</h5>
                                <h5 class="subtitle">{{ $investmentPlan->contract_duration }} days</h5>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('user.investment-plan', $investmentPlan->id) }}" class="select-plan"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        @empty
            <p>No Investment found</p>
        @endforelse


    </div>
@endsection


@section('script')



@endsection
