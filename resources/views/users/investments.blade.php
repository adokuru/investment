@extends('layouts.users')

@section('title', 'Investments')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Investments</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Investments
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="operations">
        <h3 class="main-title">Investments</h3>
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
                    @forelse ($investments as $item)
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
									${{  number_format($item->amount, 2) }}
								@else
									@if ($item->currency == 'BTC')
										${{ number_format($item->amount * $btc, 2) }}
									@elseif ($item->currency == 'ETH')
										${{ number_format($item->amount * $eth, 2)  }}
									@elseif ($item->currency == 'USDT')
										${{ number_format($item->amount * $usdt, 2) }}
									@elseif ($item->currency == 'BCH')
										${{ number_format($item->amount * $bch, 2) }}
									@else
										${{ $item->amount }}
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

                    {{ $investments->links('pagination::bootstrap-4') }}
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('script')



@endsection
