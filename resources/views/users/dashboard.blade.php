@extends('layouts.users')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Dashboard</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Dashboard
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row pb-30">
        <div class="col-lg-6">
            <div class="total-earning-item">
                <div class="total-earning-heading">
                    <h5 class="title">Total earning </h5>
                    <h4 class="amount cl-1">$ {{ auth()->user()->balance }}</h4>
                </div>
                @if (auth()->user()->balance > 0)
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="item">
                            <div class="cont">
                                <h4 class="cl-theme">+.3%</h4>
                                <span class="month">June Profit</span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('backend/assets/images/dashboard/graph1.png') }}" alt="dashboard">
                            </div>
                        </div>
                        <div class="item">
                            <div class="cont">
                                <h4 class="cl-1">+.12%</h4>
                                <span class="month">Current Year Profit</span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('backend/assets/images/dashboard/graph2.png') }}" alt="dashboard">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="text-center">
                    <a href="#0" class="normal-button">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        @if ($investment != null)
            <div class="col-lg-6">
                <div class="progress-wrapper mb-30">
                    <h5 class="title cl-white">{{ $investment->investment->name }} Progress</h5>
                    <div class="d-flex flex-wrap m-0-15-20-none">
                        <div class="circle-item">
                            <span class="level">Tenor Day Remaining({{ $investment->days_remaining() }} days)</span>
                            <div class="progress1 circle">
                                <strong></strong>
                            </div>
                        </div>
                        <div class="circle-item">
                            <span class="level">ROI Speed</span>
                            <div class="progress2 circle">
                                <strong></strong>
                            </div>
                        </div>
                        <div class="circle-item">
                            <span class="level">ROI Redeemed</span>
                            <div class="progress3 circle">
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
		<div class="col-xl-6">
            <div class="earn-item mb-30">
                <div class="earn-thumb">
                    <img src="{{ asset('backend/assets/images/dashboard/earn/01.png') }}" alt="dashboard-earn">
                </div>
                <div class="earn-content">
                    <h6 class="title">Active deposits in the amount of</h6>
                    <ul class="mb--5">

                        <li>
                            <div class="icon">
                                <img src="{{ asset('backend/assets/images/dashboard/earn/btc.png') }}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">{{ $bitconwallet != null ? $bitconwallet->amount : '0.000000' }}</span>
                                <span class="cl-4">BTC</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('backend/assets/images/dashboard/earn/xrp.png') }}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">{{ $ethwallet != null ? $ethwallet->amount : '0.000000' }}</span>
                                <span class="cl-4">ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('backend/assets/images/dashboard/earn/eth.png') }}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">{{ $btcashwallet != null ? $btcashwallet->amount : '0.000000' }}</span>
                                <span class="cl-4">BCH</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('backend/assets/images/dashboard/earn/usd.png') }}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">{{ $usdtwallet != null ? $usdtwallet->amount : '0.000000' }}</span>
                                <span class="cl-4">USDT</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<br/><br/>
		<div class="col-lg-12 col-md-12 mb-6">
          <div class="card">
            <div class="card-header pb-0">
              <h6>Market Data</h6>
            </div>
            <div class="card-body p-3">
               <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"><div id="tradingview_20755-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 550px;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;"><div style="width: 100%;height: 550px;background: transparent;padding: 0 !important;"><iframe id="tradingview_20755" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_20755&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=allnzassets.org&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
            <script src="https://s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Light",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
            </div>
          </div>
        </div>
		<br/><br/>
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Stock Market Chart</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
             <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 600px;">
                  <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/hotlists/?locale=en#%7B%22colorTheme%22%3A%22light%22%2C%22dateRange%22%3A%2212M%22%2C%22exchange%22%3A%22US%22%2C%22showChart%22%3Atrue%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Afalse%2C%22showSymbolLogo%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22600%22%2C%22plotLineColorGrowing%22%3A%22rgba(33%2C%20150%2C%20243%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(33%2C%20150%2C%20243%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(240%2C%20243%2C%20250%2C%201)%22%2C%22scaleFontColor%22%3A%22rgba(120%2C%20123%2C%20134%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22symbolActiveColor%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22utm_source%22%3A%22allnzassets.org%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22hotlists%22%7D" style="box-sizing: border-box; height: 600px; width: 100%;"></iframe>
                  
                <style>
				.tradingview-widget-copyright {
					font-size: 13px !important;
					line-height: 32px !important;
					text-align: center !important;
					vertical-align: middle !important;
					/* @mixin sf-pro-display-font; */
					font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright .blue-text {
					color: #2962FF !important;
				}

				.tradingview-widget-copyright a {
					text-decoration: none !important;
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright a:visited {
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright a:hover .blue-text {
					color: #1E53E5 !important;
				}

				.tradingview-widget-copyright a:active .blue-text {
					color: #1848CC !important;
				}

				.tradingview-widget-copyright a:visited .blue-text {
					color: #2962FF !important;
				}
				</style></div>
                <!-- TradingView Widget END -->
            </div>
          </div>
        </div>

        

    </div>
    </div>
@endsection

@section('script')
    <script>
        let values = {{ $investment != null ? $investment->days_remaining() / $investment->investment->contract_duration : 0 }};
        $('.progress1.circle').circleProgress({
            value: '.'+values,
            fill: {
                gradient: ['#00cca2', '#00cca2']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(values * progress) + '<i>%</i>');
        });
        $('.progress2.circle').circleProgress({
            value: 1,
            fill: {
                gradient: ['#8d16e8', '#8d16e8']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(100 * progress) + '<i>%</i>');
        });
        $('.progress3.circle').circleProgress({
            value: .0,
            fill: {
                gradient: ['#ef764c', '#ef764c']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(0 * progress) + '<i>%</i>');
        });
    </script>
@endsection
