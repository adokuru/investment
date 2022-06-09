@extends('layouts.users')

@section('title', 'Operations')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Operations</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Operations
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="operations">
        <h3 class="main-title">Operations</h3>
        {{-- <form class="operation-filter">
            <div class="filter-item">
                <label for="date">Date from:</label>
                <input type="date" placeholder="Date from">
            </div>
            <div class="filter-item">
                <label for="date">Date To:</label>
                <input type="date" placeholder="Date from">
            </div>
            <div class="filter-item">
                <label>Operation:</label>
                <div class="select-item">
                    <select class="select-bar">
                        <option value="o1">Add funds</option>
                        <option value="o2">Withdraw funds</option>
                        <option value="o4">Deposit funds</option>
                        <option value="o3">Transfer funds</option>
                    </select>
                </div>
            </div>
            <div class="filter-item">
                <label>Status:</label>
                <div class="select-item">
                    <select class="select-bar">
                        <option value="p1">Prepared</option>
                        <option value="p2">Prepared</option>
                        <option value="p3">Prepared</option>
                        <option value="p4">Prepared</option>
                        <option value="p5">Prepared</option>
                        <option value="p6">Prepared</option>
                    </select>
                </div>
            </div>
            <div class="filter-item">
                <button type="submit" class="custom-button">Filter</button>
            </div>
        </form> --}}
        <div class="table-wrapper">
            <table class="transaction-table">
                <thead>
                    <tr>
                        <th>DATE AND TIME</th>
                        <th>OPERATION</th>
                        <th>payment method</th>
                        <th>Amount</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaction as $item)
                        <tr>
                            <td>
                                <i class="far fa-calendar"></i> {{ $item->created_at }}
                            </td>
                            @if ($item->transaction_type == 'deposit')
                                <td>
                                    <i class="fas fa-plus-circle"></i> Add funds
                                </td>
                            @elseif ($item->transaction_type == 'withdraw')
                                <td>
                                    <i class="fas fa-minus-circle"></i> Withdraw funds
                                </td>
                            @else
                                <td>
                                    <i class="fas fa-exchange-alt"></i> {{ $item->transaction_type }}
                                </td>
                            @endif
                            <td>
                                @if ($item->currency == 'BTC')
                                    <img src="/backend/assets/images/dashboard/earn/btc2.png" alt="dashboard-earn"> {{ $item->currency }}
                                @elseif ($item->currency == 'ETH')
                                    <img src="/backend/assets/images/dashboard/earn/eth2.png" alt="dashboard-earn"> {{ $item->currency }}
                                @else
                                    {{ $item->currency }}
                                @endif
                            </td>
                            <td>
								@if ($item->transaction_type == 'Investment')
									{{ number_format($item->amount, 2) }}
								@else
									@if ($item->currency == 'BTC')
										{{ number_format($item->amount * $btc, 2) }}
									@elseif ($item->currency == 'ETH')
										{{ number_format($item->amount * $eth, 2)  }}
									@elseif ($item->currency == 'USDT')
										{{ number_format($item->amount * $usdt, 2) }}
									@elseif ($item->currency == 'BCH')
										{{ number_format($item->amount * $bch, 2) }}
									@else
										{{ $item->amount }}
									@endif
								@endif
                            </td>
                            <td>
							@if ($item->transaction_type == 'Investment')
								{{ $item->status == 0 ? 'Pending' : ($item->status == 1 ? 'Ongoing' : 'Completed') }}
								@else
                                {{ $item->status == 0 ? 'Pending' : ($item->status == 1 ? 'Completed' : 'Cancelled') }}
							 @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p>No transactions</p>
                            </td>
                        </tr>
                    @endforelse

                    {{ $transaction->links('pagination::bootstrap-4') }}
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('script')



@endsection
