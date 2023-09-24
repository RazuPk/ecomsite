@extends('admin.layouts.template')
@section('page-title')
    Dashboard | EcomSite
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations {{ $admin }}! 🎉</h5>
                                <p class="mb-4">
                                    You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                    your profile.
                                </p>

                                <a href="{{ route('adminprofile') }}" class="btn btn-sm btn-outline-primary">View Profile</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('dashboard/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('dashboard/assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Profit</span>
                                <h3 class="card-title mb-2">$12,628</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('dashboard/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Sales</span>
                                <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                            <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                                <div id="apexchartsfgg7400i"
                                    class="apexcharts-canvas apexchartsfgg7400i apexcharts-theme-light"
                                    style="width: 440px; height: 300px;"><svg id="SvgjsSvg1288" width="440"
                                        height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="440" height="300">
                                            <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                    data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="2021" data:collapsed="false"
                                                        style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                    data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="2"
                                                        data:collapsed="false"
                                                        style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="2020" data:collapsed="false"
                                                        style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1290" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(53.796875, 51)">
                                            <defs id="SvgjsDefs1289">
                                                <linearGradient id="SvgjsLinearGradient1294" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1295" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1296" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1297" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskfgg7400i">
                                                    <rect id="SvgjsRect1299" width="376.203125" height="223.73"
                                                        x="-5" y="-3" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskfgg7400i"></clipPath>
                                                <clipPath id="nonForecastMaskfgg7400i"></clipPath>
                                                <clipPath id="gridRectMarkerMaskfgg7400i">
                                                    <rect id="SvgjsRect1300" width="370.203125" height="221.73"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1298" width="21.9721875" height="217.73" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1294)" class="apexcharts-xcrosshairs"
                                                y2="217.73" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1320" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1321" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1323"
                                                        font-family="Helvetica, Arial, sans-serif" x="26.157366071428573"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1324">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1326"
                                                        font-family="Helvetica, Arial, sans-serif" x="78.47209821428572"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1327">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1329"
                                                        font-family="Helvetica, Arial, sans-serif" x="130.78683035714286"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1330">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1332"
                                                        font-family="Helvetica, Arial, sans-serif" x="183.1015625"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1333">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1335"
                                                        font-family="Helvetica, Arial, sans-serif" x="235.41629464285714"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1336">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1338"
                                                        font-family="Helvetica, Arial, sans-serif" x="287.73102678571433"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1339">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1341"
                                                        font-family="Helvetica, Arial, sans-serif" x="340.0457589285715"
                                                        y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1342">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1357" class="apexcharts-grid">
                                                <g id="SvgjsG1358" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1360" x1="0" y1="0"
                                                        x2="366.203125" y2="0" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1361" x1="0" y1="43.546"
                                                        x2="366.203125" y2="43.546" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1362" x1="0" y1="87.092"
                                                        x2="366.203125" y2="87.092" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1363" x1="0" y1="130.638"
                                                        x2="366.203125" y2="130.638" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1364" x1="0" y1="174.184"
                                                        x2="366.203125" y2="174.184" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1365" x1="0" y1="217.73"
                                                        x2="366.203125" y2="217.73" stroke="#eceef1"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1359" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1367" x1="0" y1="217.73" x2="366.203125"
                                                    y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1366" x1="0" y1="1" x2="0"
                                                    y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1301" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1302" class="apexcharts-series" seriesName="2021"
                                                    rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1304"
                                                        d="M 15.171272321428573 120.638L 15.171272321428573 62.255200000000016Q 15.171272321428573 52.255200000000016 25.171272321428575 52.255200000000016L 21.14345982142857 52.255200000000016Q 31.14345982142857 52.255200000000016 31.14345982142857 62.255200000000016L 31.14345982142857 62.255200000000016L 31.14345982142857 120.638Q 31.14345982142857 130.638 21.14345982142857 130.638L 25.171272321428575 130.638Q 15.171272321428573 130.638 15.171272321428573 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 15.171272321428573 120.638L 15.171272321428573 62.255200000000016Q 15.171272321428573 52.255200000000016 25.171272321428575 52.255200000000016L 21.14345982142857 52.255200000000016Q 31.14345982142857 52.255200000000016 31.14345982142857 62.255200000000016L 31.14345982142857 62.255200000000016L 31.14345982142857 120.638Q 31.14345982142857 130.638 21.14345982142857 130.638L 25.171272321428575 130.638Q 15.171272321428573 130.638 15.171272321428573 120.638z"
                                                        pathFrom="M 15.171272321428573 120.638L 15.171272321428573 120.638L 31.14345982142857 120.638L 31.14345982142857 120.638L 31.14345982142857 120.638L 31.14345982142857 120.638L 31.14345982142857 120.638L 15.171272321428573 120.638"
                                                        cy="52.255200000000016" cx="64.48600446428571" j="0"
                                                        val="18" barHeight="78.38279999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1305"
                                                        d="M 67.48600446428571 120.638L 67.48600446428571 110.15580000000001Q 67.48600446428571 100.15580000000001 77.48600446428571 100.15580000000001L 73.45819196428572 100.15580000000001Q 83.45819196428572 100.15580000000001 83.45819196428572 110.15580000000001L 83.45819196428572 110.15580000000001L 83.45819196428572 120.638Q 83.45819196428572 130.638 73.45819196428572 130.638L 77.48600446428571 130.638Q 67.48600446428571 130.638 67.48600446428571 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 67.48600446428571 120.638L 67.48600446428571 110.15580000000001Q 67.48600446428571 100.15580000000001 77.48600446428571 100.15580000000001L 73.45819196428572 100.15580000000001Q 83.45819196428572 100.15580000000001 83.45819196428572 110.15580000000001L 83.45819196428572 110.15580000000001L 83.45819196428572 120.638Q 83.45819196428572 130.638 73.45819196428572 130.638L 77.48600446428571 130.638Q 67.48600446428571 130.638 67.48600446428571 120.638z"
                                                        pathFrom="M 67.48600446428571 120.638L 67.48600446428571 120.638L 83.45819196428572 120.638L 83.45819196428572 120.638L 83.45819196428572 120.638L 83.45819196428572 120.638L 83.45819196428572 120.638L 67.48600446428571 120.638"
                                                        cy="100.15580000000001" cx="116.80073660714285" j="1"
                                                        val="7" barHeight="30.482199999999995"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1306"
                                                        d="M 119.80073660714285 120.638L 119.80073660714285 75.31900000000002Q 119.80073660714285 65.31900000000002 129.80073660714285 65.31900000000002L 125.77292410714284 65.31900000000002Q 135.77292410714284 65.31900000000002 135.77292410714284 75.31900000000002L 135.77292410714284 75.31900000000002L 135.77292410714284 120.638Q 135.77292410714284 130.638 125.77292410714284 130.638L 129.80073660714285 130.638Q 119.80073660714285 130.638 119.80073660714285 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 119.80073660714285 120.638L 119.80073660714285 75.31900000000002Q 119.80073660714285 65.31900000000002 129.80073660714285 65.31900000000002L 125.77292410714284 65.31900000000002Q 135.77292410714284 65.31900000000002 135.77292410714284 75.31900000000002L 135.77292410714284 75.31900000000002L 135.77292410714284 120.638Q 135.77292410714284 130.638 125.77292410714284 130.638L 129.80073660714285 130.638Q 119.80073660714285 130.638 119.80073660714285 120.638z"
                                                        pathFrom="M 119.80073660714285 120.638L 119.80073660714285 120.638L 135.77292410714284 120.638L 135.77292410714284 120.638L 135.77292410714284 120.638L 135.77292410714284 120.638L 135.77292410714284 120.638L 119.80073660714285 120.638"
                                                        cy="65.31900000000002" cx="169.11546875" j="2"
                                                        val="15" barHeight="65.31899999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1307"
                                                        d="M 172.11546875 120.638L 172.11546875 14.35460000000002Q 172.11546875 4.354600000000019 182.11546875 4.354600000000019L 178.08765624999998 4.354600000000019Q 188.08765624999998 4.354600000000019 188.08765624999998 14.35460000000002L 188.08765624999998 14.35460000000002L 188.08765624999998 120.638Q 188.08765624999998 130.638 178.08765624999998 130.638L 182.11546875 130.638Q 172.11546875 130.638 172.11546875 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 172.11546875 120.638L 172.11546875 14.35460000000002Q 172.11546875 4.354600000000019 182.11546875 4.354600000000019L 178.08765624999998 4.354600000000019Q 188.08765624999998 4.354600000000019 188.08765624999998 14.35460000000002L 188.08765624999998 14.35460000000002L 188.08765624999998 120.638Q 188.08765624999998 130.638 178.08765624999998 130.638L 182.11546875 130.638Q 172.11546875 130.638 172.11546875 120.638z"
                                                        pathFrom="M 172.11546875 120.638L 172.11546875 120.638L 188.08765624999998 120.638L 188.08765624999998 120.638L 188.08765624999998 120.638L 188.08765624999998 120.638L 188.08765624999998 120.638L 172.11546875 120.638"
                                                        cy="4.354600000000019" cx="221.43020089285713" j="3"
                                                        val="29" barHeight="126.28339999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1308"
                                                        d="M 224.43020089285713 120.638L 224.43020089285713 62.255200000000016Q 224.43020089285713 52.255200000000016 234.43020089285713 52.255200000000016L 230.40238839285712 52.255200000000016Q 240.40238839285712 52.255200000000016 240.40238839285712 62.255200000000016L 240.40238839285712 62.255200000000016L 240.40238839285712 120.638Q 240.40238839285712 130.638 230.40238839285712 130.638L 234.43020089285713 130.638Q 224.43020089285713 130.638 224.43020089285713 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 224.43020089285713 120.638L 224.43020089285713 62.255200000000016Q 224.43020089285713 52.255200000000016 234.43020089285713 52.255200000000016L 230.40238839285712 52.255200000000016Q 240.40238839285712 52.255200000000016 240.40238839285712 62.255200000000016L 240.40238839285712 62.255200000000016L 240.40238839285712 120.638Q 240.40238839285712 130.638 230.40238839285712 130.638L 234.43020089285713 130.638Q 224.43020089285713 130.638 224.43020089285713 120.638z"
                                                        pathFrom="M 224.43020089285713 120.638L 224.43020089285713 120.638L 240.40238839285712 120.638L 240.40238839285712 120.638L 240.40238839285712 120.638L 240.40238839285712 120.638L 240.40238839285712 120.638L 224.43020089285713 120.638"
                                                        cy="52.255200000000016" cx="273.74493303571427" j="4"
                                                        val="18" barHeight="78.38279999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1309"
                                                        d="M 276.74493303571427 120.638L 276.74493303571427 88.3828Q 276.74493303571427 78.3828 286.74493303571427 78.3828L 282.7171205357143 78.3828Q 292.7171205357143 78.3828 292.7171205357143 88.3828L 292.7171205357143 88.3828L 292.7171205357143 120.638Q 292.7171205357143 130.638 282.7171205357143 130.638L 286.74493303571427 130.638Q 276.74493303571427 130.638 276.74493303571427 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 276.74493303571427 120.638L 276.74493303571427 88.3828Q 276.74493303571427 78.3828 286.74493303571427 78.3828L 282.7171205357143 78.3828Q 292.7171205357143 78.3828 292.7171205357143 88.3828L 292.7171205357143 88.3828L 292.7171205357143 120.638Q 292.7171205357143 130.638 282.7171205357143 130.638L 286.74493303571427 130.638Q 276.74493303571427 130.638 276.74493303571427 120.638z"
                                                        pathFrom="M 276.74493303571427 120.638L 276.74493303571427 120.638L 292.7171205357143 120.638L 292.7171205357143 120.638L 292.7171205357143 120.638L 292.7171205357143 120.638L 292.7171205357143 120.638L 276.74493303571427 120.638"
                                                        cy="78.3828" cx="326.05966517857144" j="5"
                                                        val="12" barHeight="52.255199999999995"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1310"
                                                        d="M 329.05966517857144 120.638L 329.05966517857144 101.44660000000002Q 329.05966517857144 91.44660000000002 339.05966517857144 91.44660000000002L 335.03185267857145 91.44660000000002Q 345.03185267857145 91.44660000000002 345.03185267857145 101.44660000000002L 345.03185267857145 101.44660000000002L 345.03185267857145 120.638Q 345.03185267857145 130.638 335.03185267857145 130.638L 339.05966517857144 130.638Q 329.05966517857144 130.638 329.05966517857144 120.638z"
                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 329.05966517857144 120.638L 329.05966517857144 101.44660000000002Q 329.05966517857144 91.44660000000002 339.05966517857144 91.44660000000002L 335.03185267857145 91.44660000000002Q 345.03185267857145 91.44660000000002 345.03185267857145 101.44660000000002L 345.03185267857145 101.44660000000002L 345.03185267857145 120.638Q 345.03185267857145 130.638 335.03185267857145 130.638L 339.05966517857144 130.638Q 329.05966517857144 130.638 329.05966517857144 120.638z"
                                                        pathFrom="M 329.05966517857144 120.638L 329.05966517857144 120.638L 345.03185267857145 120.638L 345.03185267857145 120.638L 345.03185267857145 120.638L 345.03185267857145 120.638L 345.03185267857145 120.638L 329.05966517857144 120.638"
                                                        cy="91.44660000000002" cx="378.3743973214286" j="6"
                                                        val="9" barHeight="39.191399999999994"
                                                        barWidth="21.9721875"></path>
                                                </g>
                                                <g id="SvgjsG1311" class="apexcharts-series" seriesName="2020"
                                                    rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1313"
                                                        d="M 15.171272321428573 150.638L 15.171272321428573 187.24779999999998Q 15.171272321428573 197.24779999999998 25.171272321428575 197.24779999999998L 21.14345982142857 197.24779999999998Q 31.14345982142857 197.24779999999998 31.14345982142857 187.24779999999998L 31.14345982142857 187.24779999999998L 31.14345982142857 150.638Q 31.14345982142857 140.638 21.14345982142857 140.638L 25.171272321428575 140.638Q 15.171272321428573 140.638 15.171272321428573 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 15.171272321428573 150.638L 15.171272321428573 187.24779999999998Q 15.171272321428573 197.24779999999998 25.171272321428575 197.24779999999998L 21.14345982142857 197.24779999999998Q 31.14345982142857 197.24779999999998 31.14345982142857 187.24779999999998L 31.14345982142857 187.24779999999998L 31.14345982142857 150.638Q 31.14345982142857 140.638 21.14345982142857 140.638L 25.171272321428575 140.638Q 15.171272321428573 140.638 15.171272321428573 150.638z"
                                                        pathFrom="M 15.171272321428573 150.638L 15.171272321428573 150.638L 31.14345982142857 150.638L 31.14345982142857 150.638L 31.14345982142857 150.638L 31.14345982142857 150.638L 31.14345982142857 150.638L 15.171272321428573 150.638"
                                                        cy="177.24779999999998" cx="64.48600446428571" j="0"
                                                        val="-13" barHeight="-56.60979999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1314"
                                                        d="M 67.48600446428571 150.638L 67.48600446428571 209.0208Q 67.48600446428571 219.0208 77.48600446428571 219.0208L 73.45819196428572 219.0208Q 83.45819196428572 219.0208 83.45819196428572 209.0208L 83.45819196428572 209.0208L 83.45819196428572 150.638Q 83.45819196428572 140.638 73.45819196428572 140.638L 77.48600446428571 140.638Q 67.48600446428571 140.638 67.48600446428571 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 67.48600446428571 150.638L 67.48600446428571 209.0208Q 67.48600446428571 219.0208 77.48600446428571 219.0208L 73.45819196428572 219.0208Q 83.45819196428572 219.0208 83.45819196428572 209.0208L 83.45819196428572 209.0208L 83.45819196428572 150.638Q 83.45819196428572 140.638 73.45819196428572 140.638L 77.48600446428571 140.638Q 67.48600446428571 140.638 67.48600446428571 150.638z"
                                                        pathFrom="M 67.48600446428571 150.638L 67.48600446428571 150.638L 83.45819196428572 150.638L 83.45819196428572 150.638L 83.45819196428572 150.638L 83.45819196428572 150.638L 83.45819196428572 150.638L 67.48600446428571 150.638"
                                                        cy="199.0208" cx="116.80073660714285" j="1"
                                                        val="-18" barHeight="-78.38279999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1315"
                                                        d="M 119.80073660714285 150.638L 119.80073660714285 169.8294Q 119.80073660714285 179.8294 129.80073660714285 179.8294L 125.77292410714284 179.8294Q 135.77292410714284 179.8294 135.77292410714284 169.8294L 135.77292410714284 169.8294L 135.77292410714284 150.638Q 135.77292410714284 140.638 125.77292410714284 140.638L 129.80073660714285 140.638Q 119.80073660714285 140.638 119.80073660714285 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 119.80073660714285 150.638L 119.80073660714285 169.8294Q 119.80073660714285 179.8294 129.80073660714285 179.8294L 125.77292410714284 179.8294Q 135.77292410714284 179.8294 135.77292410714284 169.8294L 135.77292410714284 169.8294L 135.77292410714284 150.638Q 135.77292410714284 140.638 125.77292410714284 140.638L 129.80073660714285 140.638Q 119.80073660714285 140.638 119.80073660714285 150.638z"
                                                        pathFrom="M 119.80073660714285 150.638L 119.80073660714285 150.638L 135.77292410714284 150.638L 135.77292410714284 150.638L 135.77292410714284 150.638L 135.77292410714284 150.638L 135.77292410714284 150.638L 119.80073660714285 150.638"
                                                        cy="159.8294" cx="169.11546875" j="2" val="-9"
                                                        barHeight="-39.191399999999994" barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1316"
                                                        d="M 172.11546875 150.638L 172.11546875 191.6024Q 172.11546875 201.6024 182.11546875 201.6024L 178.08765624999998 201.6024Q 188.08765624999998 201.6024 188.08765624999998 191.6024L 188.08765624999998 191.6024L 188.08765624999998 150.638Q 188.08765624999998 140.638 178.08765624999998 140.638L 182.11546875 140.638Q 172.11546875 140.638 172.11546875 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 172.11546875 150.638L 172.11546875 191.6024Q 172.11546875 201.6024 182.11546875 201.6024L 178.08765624999998 201.6024Q 188.08765624999998 201.6024 188.08765624999998 191.6024L 188.08765624999998 191.6024L 188.08765624999998 150.638Q 188.08765624999998 140.638 178.08765624999998 140.638L 182.11546875 140.638Q 172.11546875 140.638 172.11546875 150.638z"
                                                        pathFrom="M 172.11546875 150.638L 172.11546875 150.638L 188.08765624999998 150.638L 188.08765624999998 150.638L 188.08765624999998 150.638L 188.08765624999998 150.638L 188.08765624999998 150.638L 172.11546875 150.638"
                                                        cy="181.6024" cx="221.43020089285713" j="3"
                                                        val="-14" barHeight="-60.96439999999999"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1317"
                                                        d="M 224.43020089285713 150.638L 224.43020089285713 152.411Q 224.43020089285713 162.411 234.43020089285713 162.411L 230.40238839285712 162.411Q 240.40238839285712 162.411 240.40238839285712 152.411L 240.40238839285712 152.411L 240.40238839285712 150.638Q 240.40238839285712 140.638 230.40238839285712 140.638L 234.43020089285713 140.638Q 224.43020089285713 140.638 224.43020089285713 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 224.43020089285713 150.638L 224.43020089285713 152.411Q 224.43020089285713 162.411 234.43020089285713 162.411L 230.40238839285712 162.411Q 240.40238839285712 162.411 240.40238839285712 152.411L 240.40238839285712 152.411L 240.40238839285712 150.638Q 240.40238839285712 140.638 230.40238839285712 140.638L 234.43020089285713 140.638Q 224.43020089285713 140.638 224.43020089285713 150.638z"
                                                        pathFrom="M 224.43020089285713 150.638L 224.43020089285713 150.638L 240.40238839285712 150.638L 240.40238839285712 150.638L 240.40238839285712 150.638L 240.40238839285712 150.638L 240.40238839285712 150.638L 224.43020089285713 150.638"
                                                        cy="142.411" cx="273.74493303571427" j="4"
                                                        val="-5" barHeight="-21.772999999999996"
                                                        barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1318"
                                                        d="M 276.74493303571427 150.638L 276.74493303571427 204.6662Q 276.74493303571427 214.6662 286.74493303571427 214.6662L 282.7171205357143 214.6662Q 292.7171205357143 214.6662 292.7171205357143 204.6662L 292.7171205357143 204.6662L 292.7171205357143 150.638Q 292.7171205357143 140.638 282.7171205357143 140.638L 286.74493303571427 140.638Q 276.74493303571427 140.638 276.74493303571427 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 276.74493303571427 150.638L 276.74493303571427 204.6662Q 276.74493303571427 214.6662 286.74493303571427 214.6662L 282.7171205357143 214.6662Q 292.7171205357143 214.6662 292.7171205357143 204.6662L 292.7171205357143 204.6662L 292.7171205357143 150.638Q 292.7171205357143 140.638 282.7171205357143 140.638L 286.74493303571427 140.638Q 276.74493303571427 140.638 276.74493303571427 150.638z"
                                                        pathFrom="M 276.74493303571427 150.638L 276.74493303571427 150.638L 292.7171205357143 150.638L 292.7171205357143 150.638L 292.7171205357143 150.638L 292.7171205357143 150.638L 292.7171205357143 150.638L 276.74493303571427 150.638"
                                                        cy="194.6662" cx="326.05966517857144" j="5"
                                                        val="-17" barHeight="-74.0282" barWidth="21.9721875"></path>
                                                    <path id="SvgjsPath1319"
                                                        d="M 329.05966517857144 150.638L 329.05966517857144 195.957Q 329.05966517857144 205.957 339.05966517857144 205.957L 335.03185267857145 205.957Q 345.03185267857145 205.957 345.03185267857145 195.957L 345.03185267857145 195.957L 345.03185267857145 150.638Q 345.03185267857145 140.638 335.03185267857145 140.638L 339.05966517857144 140.638Q 329.05966517857144 140.638 329.05966517857144 150.638z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskfgg7400i)"
                                                        pathTo="M 329.05966517857144 150.638L 329.05966517857144 195.957Q 329.05966517857144 205.957 339.05966517857144 205.957L 335.03185267857145 205.957Q 345.03185267857145 205.957 345.03185267857145 195.957L 345.03185267857145 195.957L 345.03185267857145 150.638Q 345.03185267857145 140.638 335.03185267857145 140.638L 339.05966517857144 140.638Q 329.05966517857144 140.638 329.05966517857144 150.638z"
                                                        pathFrom="M 329.05966517857144 150.638L 329.05966517857144 150.638L 345.03185267857145 150.638L 345.03185267857145 150.638L 345.03185267857145 150.638L 345.03185267857145 150.638L 345.03185267857145 150.638L 329.05966517857144 150.638"
                                                        cy="185.957" cx="378.3743973214286" j="6"
                                                        val="-15" barHeight="-65.31899999999999"
                                                        barWidth="21.9721875"></path>
                                                </g>
                                                <g id="SvgjsG1303" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1312" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1368" x1="0" y1="0" x2="366.203125"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1369" x1="0" y1="0" x2="366.203125"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1370" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1371" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1372" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1343" class="apexcharts-yaxis" rel="0"
                                            transform="translate(15.796875, 0)">
                                            <g id="SvgjsG1344" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1345"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="52.5" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1346">30</tspan>
                                                    <title>30</title>
                                                </text><text id="SvgjsText1347" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="96.04599999999999" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1348">20</tspan>
                                                    <title>20</title>
                                                </text><text id="SvgjsText1349" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="139.59199999999998" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1350">10</tspan>
                                                    <title>10</title>
                                                </text><text id="SvgjsText1351" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="183.13799999999998" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1352">0</tspan>
                                                    <title>0</title>
                                                </text><text id="SvgjsText1353" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="226.68399999999997" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1354">-10</tspan>
                                                    <title>-10</title>
                                                </text><text id="SvgjsText1355" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="270.22999999999996" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1356">-20</tspan>
                                                    <title>-20</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1291" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 457px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                            id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            2022
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="growthChart" style="min-height: 154.875px;">
                                <div id="apexchartsfkqoegh1"
                                    class="apexcharts-canvas apexchartsfkqoegh1 apexcharts-theme-light"
                                    style="width: 228px; height: 154.875px;"><svg id="SvgjsSvg1373" width="228"
                                        height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1375" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(7, -25)">
                                            <defs id="SvgjsDefs1374">
                                                <clipPath id="gridRectMaskfkqoegh1">
                                                    <rect id="SvgjsRect1377" width="222" height="285"
                                                        x="-3" y="-1" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskfkqoegh1"></clipPath>
                                                <clipPath id="nonForecastMaskfkqoegh1"></clipPath>
                                                <clipPath id="gridRectMarkerMaskfkqoegh1">
                                                    <rect id="SvgjsRect1378" width="220" height="287"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1383" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1384" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1385" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1386" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1394" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1395" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1396" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1397" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1379" class="apexcharts-radialbar">
                                                <g id="SvgjsG1380">
                                                    <g id="SvgjsG1381" class="apexcharts-tracks">
                                                        <g id="SvgjsG1382"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="17.357317073170734"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1388">
                                                        <g id="SvgjsG1393"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Growth" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1398"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="url(#SvgjsLinearGradient1394)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="17.357317073170734"
                                                                stroke-dasharray="5"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="234" data:value="78" index="0"
                                                                j="0"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1389" r="54.65121951219512" cx="108"
                                                            cy="108" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG1390" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                                id="SvgjsText1391" font-family="Public Sans"
                                                                x="108" y="123" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="15px"
                                                                font-weight="500" fill="#566a7f"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                                id="SvgjsText1392" font-family="Public Sans"
                                                                x="108" y="99" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="22px"
                                                                font-weight="500" fill="#566a7f"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: &quot;Public Sans&quot;;">78%</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1399" x1="0" y1="0" x2="216"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1400" x1="0" y1="0" x2="216"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1376" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i
                                                class="bx bx-dollar text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2022</small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i
                                                class="bx bx-wallet text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2021</small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 229px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('dashboard/assets/img/icons/unicons/paypal.png') }}" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Payments</span>
                                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                    -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('dashboard/assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Transactions</span>
                                <h3 class="card-title mb-2">$14,857</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                    +28.14%</small>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                    style="position: relative;">
                                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                        </div>
                                        <div class="mt-sm-auto">
                                            <small class="text-success text-nowrap fw-semibold"><i
                                                    class="bx bx-chevron-up"></i> 68.2%</small>
                                            <h3 class="mb-0">$84,686k</h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart" style="min-height: 80px;">
                                        <div id="apexchartsj8piczj5"
                                            class="apexcharts-canvas apexchartsj8piczj5 apexcharts-theme-light"
                                            style="width: 143px; height: 80px;"><svg id="SvgjsSvg1402" width="143"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1404" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1403">
                                                        <clipPath id="gridRectMaskj8piczj5">
                                                            <rect id="SvgjsRect1409" width="144" height="85"
                                                                x="-4.5" y="-2.5" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskj8piczj5"></clipPath>
                                                        <clipPath id="nonForecastMaskj8piczj5"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskj8piczj5">
                                                            <rect id="SvgjsRect1410" width="139" height="84"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <filter id="SvgjsFilter1416" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%"
                                                            y="-50%">
                                                            <feFlood id="SvgjsFeFlood1417" flood-color="#ffab00"
                                                                flood-opacity="0.15" result="SvgjsFeFlood1417Out"
                                                                in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1418"
                                                                in="SvgjsFeFlood1417Out" in2="SourceAlpha"
                                                                operator="in" result="SvgjsFeComposite1418Out">
                                                            </feComposite>
                                                            <feOffset id="SvgjsFeOffset1419" dx="5"
                                                                dy="10" result="SvgjsFeOffset1419Out"
                                                                in="SvgjsFeComposite1418Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1420"
                                                                stdDeviation="3 " result="SvgjsFeGaussianBlur1420Out"
                                                                in="SvgjsFeOffset1419Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1421" result="SvgjsFeMerge1421Out"
                                                                in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1422"
                                                                    in="SvgjsFeGaussianBlur1420Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1423"
                                                                    in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1424" in="SourceGraphic"
                                                                in2="SvgjsFeMerge1421Out" mode="normal"
                                                                result="SvgjsFeBlend1424Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line id="SvgjsLine1408" x1="0" y1="0"
                                                        x2="0" y2="80" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="80" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1425" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1426" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1434" class="apexcharts-grid">
                                                        <g id="SvgjsG1435" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1437" x1="0" y1="0"
                                                                x2="135" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1438" x1="0" y1="20"
                                                                x2="135" y2="20" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1439" x1="0" y1="40"
                                                                x2="135" y2="40" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1440" x1="0" y1="60"
                                                                x2="135" y2="60" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1441" x1="0" y1="80"
                                                                x2="135" y2="80" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1436" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1443" x1="0" y1="80"
                                                            x2="135" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1442" x1="0" y1="1"
                                                            x2="0" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1411"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1412" class="apexcharts-series"
                                                            seriesName="seriesx1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1415"
                                                                d="M 0 76C 9.45 76 17.55 12 27 12C 36.45 12 44.55 62 54 62C 63.45 62 71.55 22 81 22C 90.45 22 98.55 38 108 38C 117.45 38 125.55 6 135 6"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="5"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMaskj8piczj5)"
                                                                filter="url(#SvgjsFilter1416)"
                                                                pathTo="M 0 76C 9.45 76 17.55 12 27 12C 36.45 12 44.55 62 54 62C 63.45 62 71.55 22 81 22C 90.45 22 98.55 38 108 38C 117.45 38 125.55 6 135 6"
                                                                pathFrom="M -1 120L -1 120L 27 120L 54 120L 81 120L 108 120L 135 120">
                                                            </path>
                                                            <g id="SvgjsG1413" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1449" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker w0xsh8gei no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffab00"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" default-marker-size="0">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1414" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1444" x1="0" y1="0"
                                                        x2="135" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1445" x1="0" y1="0"
                                                        x2="135" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1446" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1447" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1448" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1407" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1433" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1405" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 171, 0);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 282px; height: 117px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Order Statistics</h5>
                            <small class="text-muted">42.82k Total Sales</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">8,258</h2>
                                <span>Total Orders</span>
                            </div>
                            <div id="orderStatisticsChart" style="min-height: 137.55px;">
                                <div id="apexchartstas650fb"
                                    class="apexcharts-canvas apexchartstas650fb apexcharts-theme-light"
                                    style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg1450" width="130"
                                        height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1452" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-7, 0)">
                                            <defs id="SvgjsDefs1451">
                                                <clipPath id="gridRectMasktas650fb">
                                                    <rect id="SvgjsRect1454" width="150" height="173"
                                                        x="-4.5" y="-2.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMasktas650fb"></clipPath>
                                                <clipPath id="nonForecastMasktas650fb"></clipPath>
                                                <clipPath id="gridRectMarkerMasktas650fb">
                                                    <rect id="SvgjsRect1455" width="145" height="172"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1456" class="apexcharts-pie">
                                                <g id="SvgjsG1457" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1458" r="44.835365853658544" cx="70.5"
                                                        cy="70.5" fill="transparent"></circle>
                                                    <g id="SvgjsG1459" class="apexcharts-slices">
                                                        <g id="SvgjsG1460"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Electronic" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1461"
                                                                d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                fill="rgba(105,108,255,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                index="0" j="0" data:angle="153"
                                                                data:startAngle="0" data:strokeWidth="5"
                                                                data:value="85"
                                                                data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1462"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Sports" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1463"
                                                                d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                fill="rgba(133,146,163,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                index="0" j="1" data:angle="27"
                                                                data:startAngle="153" data:strokeWidth="5"
                                                                data:value="15"
                                                                data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1464"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Decor" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1465"
                                                                d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                fill="rgba(3,195,236,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                index="0" j="2" data:angle="90"
                                                                data:startAngle="180" data:strokeWidth="5"
                                                                data:value="50"
                                                                data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1466"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Fashion" rel="4" data:realIndex="3">
                                                            <path id="SvgjsPath1467"
                                                                d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="5" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                index="0" j="3" data:angle="90"
                                                                data:startAngle="270" data:strokeWidth="5"
                                                                data:value="50"
                                                                data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1468" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"><text id="SvgjsText1469"
                                                        font-family="Helvetica, Arial, sans-serif" x="70.5"
                                                        y="90.5" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="0.8125rem" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text
                                                        id="SvgjsText1470" font-family="Public Sans" x="70.5"
                                                        y="71.5" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="1.5rem" font-weight="400" fill="#566a7f"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                            </g>
                                            <line id="SvgjsLine1471" x1="0" y1="0" x2="141"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1472" x1="0" y1="0" x2="141"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1453" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(133, 146, 163);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(113, 221, 55);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 282px; height: 139px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-mobile-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Electronic</h6>
                                        <small class="text-muted">Mobile, Earbuds, TV</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Fashion</h6>
                                        <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Decor</h6>
                                        <small class="text-muted">Fine Art, Dining</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                            class="bx bx-football"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Sports</h6>
                                        <small class="text-muted">Football, Cricket Kit</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class="col-md-6 col-lg-4 order-1 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-tabs-line-card-income"
                                    aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                    Income
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab">Expenses</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab">Profit</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                                style="position: relative;">
                                <div class="d-flex p-4 pt-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{ asset('dashboard/assets/img/icons/unicons/wallet.png') }}" alt="User">
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Total Balance</small>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$459.10</h6>
                                            <small class="text-success fw-semibold">
                                                <i class="bx bx-chevron-up"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id="incomeChart" style="min-height: 215px;">
                                    <div id="apexchartse2m0vfm1"
                                        class="apexcharts-canvas apexchartse2m0vfm1 apexcharts-theme-light"
                                        style="width: 329px; height: 215px;"><svg id="SvgjsSvg1473" width="329"
                                            height="215" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1475" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 10)">
                                                <defs id="SvgjsDefs1474">
                                                    <clipPath id="gridRectMaske2m0vfm1">
                                                        <rect id="SvgjsRect1480" width="317.6875" height="175.73"
                                                            x="-3" y="-1" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaske2m0vfm1"></clipPath>
                                                    <clipPath id="nonForecastMaske2m0vfm1"></clipPath>
                                                    <clipPath id="gridRectMarkerMaske2m0vfm1">
                                                        <rect id="SvgjsRect1481" width="339.6875" height="201.73"
                                                            x="-14" y="-14" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1501" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1502" stop-opacity="0.5"
                                                            stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                        <stop id="SvgjsStop1503" stop-opacity="0.25"
                                                            stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                        <stop id="SvgjsStop1504" stop-opacity="0.25"
                                                            stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1479" x1="0" y1="0"
                                                    x2="0" y2="173.73" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="173.73" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1507" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1508" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1510"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1511"></tspan>
                                                            <title></title>
                                                        </text><text id="SvgjsText1513"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="44.52678571428571" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1514">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1516"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="89.05357142857142" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1517">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1519"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="133.58035714285714" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1520">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1522"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="178.10714285714286" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1523">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1525"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="222.63392857142858" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1526">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1528"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="267.16071428571433" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1529">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1531"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="311.68750000000006" y="202.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1532">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1535" class="apexcharts-grid">
                                                    <g id="SvgjsG1536" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1538" x1="0" y1="0"
                                                            x2="311.6875" y2="0" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1539" x1="0" y1="43.4325"
                                                            x2="311.6875" y2="43.4325" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1540" x1="0" y1="86.865"
                                                            x2="311.6875" y2="86.865" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1541" x1="0"
                                                            y1="130.29749999999999" x2="311.6875"
                                                            y2="130.29749999999999" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1542" x1="0" y1="173.73"
                                                            x2="311.6875" y2="173.73" stroke="#eceef1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1537" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1544" x1="0" y1="173.73"
                                                        x2="311.6875" y2="173.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1543" x1="0" y1="1"
                                                        x2="0" y2="173.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1482"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1483" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1505"
                                                            d="M 0 173.73L 0 112.92450000000001C 15.584375 112.92450000000001 28.942410714285714 125.95425 44.526785714285715 125.95425C 60.11116071428572 125.95425 73.46919642857144 86.86500000000001 89.05357142857143 86.86500000000001C 104.63794642857142 86.86500000000001 117.99598214285714 121.611 133.58035714285714 121.611C 149.16473214285713 121.611 162.52276785714287 34.74600000000001 178.10714285714286 34.74600000000001C 193.69151785714286 34.74600000000001 207.0495535714286 104.238 222.63392857142858 104.238C 238.21830357142858 104.238 251.57633928571428 65.14875 267.1607142857143 65.14875C 282.7450892857143 65.14875 296.103125 91.20825 311.6875 91.20825C 311.6875 91.20825 311.6875 91.20825 311.6875 173.73M 311.6875 91.20825z"
                                                            fill="url(#SvgjsLinearGradient1501)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaske2m0vfm1)"
                                                            pathTo="M 0 173.73L 0 112.92450000000001C 15.584375 112.92450000000001 28.942410714285714 125.95425 44.526785714285715 125.95425C 60.11116071428572 125.95425 73.46919642857144 86.86500000000001 89.05357142857143 86.86500000000001C 104.63794642857142 86.86500000000001 117.99598214285714 121.611 133.58035714285714 121.611C 149.16473214285713 121.611 162.52276785714287 34.74600000000001 178.10714285714286 34.74600000000001C 193.69151785714286 34.74600000000001 207.0495535714286 104.238 222.63392857142858 104.238C 238.21830357142858 104.238 251.57633928571428 65.14875 267.1607142857143 65.14875C 282.7450892857143 65.14875 296.103125 91.20825 311.6875 91.20825C 311.6875 91.20825 311.6875 91.20825 311.6875 173.73M 311.6875 91.20825z"
                                                            pathFrom="M -1 217.1625L -1 217.1625L 44.526785714285715 217.1625L 89.05357142857143 217.1625L 133.58035714285714 217.1625L 178.10714285714286 217.1625L 222.63392857142858 217.1625L 267.1607142857143 217.1625L 311.6875 217.1625">
                                                        </path>
                                                        <path id="SvgjsPath1506"
                                                            d="M 0 112.92450000000001C 15.584375 112.92450000000001 28.942410714285714 125.95425 44.526785714285715 125.95425C 60.11116071428572 125.95425 73.46919642857144 86.86500000000001 89.05357142857143 86.86500000000001C 104.63794642857142 86.86500000000001 117.99598214285714 121.611 133.58035714285714 121.611C 149.16473214285713 121.611 162.52276785714287 34.74600000000001 178.10714285714286 34.74600000000001C 193.69151785714286 34.74600000000001 207.0495535714286 104.238 222.63392857142858 104.238C 238.21830357142858 104.238 251.57633928571428 65.14875 267.1607142857143 65.14875C 282.7450892857143 65.14875 296.103125 91.20825 311.6875 91.20825"
                                                            fill="none" fill-opacity="1" stroke="#696cff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaske2m0vfm1)"
                                                            pathTo="M 0 112.92450000000001C 15.584375 112.92450000000001 28.942410714285714 125.95425 44.526785714285715 125.95425C 60.11116071428572 125.95425 73.46919642857144 86.86500000000001 89.05357142857143 86.86500000000001C 104.63794642857142 86.86500000000001 117.99598214285714 121.611 133.58035714285714 121.611C 149.16473214285713 121.611 162.52276785714287 34.74600000000001 178.10714285714286 34.74600000000001C 193.69151785714286 34.74600000000001 207.0495535714286 104.238 222.63392857142858 104.238C 238.21830357142858 104.238 251.57633928571428 65.14875 267.1607142857143 65.14875C 282.7450892857143 65.14875 296.103125 91.20825 311.6875 91.20825"
                                                            pathFrom="M -1 217.1625L -1 217.1625L 44.526785714285715 217.1625L 89.05357142857143 217.1625L 133.58035714285714 217.1625L 178.10714285714286 217.1625L 222.63392857142858 217.1625L 267.1607142857143 217.1625L 311.6875 217.1625">
                                                        </path>
                                                        <g id="SvgjsG1484" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1486" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1487" r="6"
                                                                    cx="0" cy="112.92450000000001"
                                                                    class="apexcharts-marker no-pointer-events wubzm4m0o"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="0" j="0"
                                                                    index="0" default-marker-size="6"></circle>
                                                                <circle id="SvgjsCircle1488" r="6"
                                                                    cx="44.526785714285715" cy="125.95425"
                                                                    class="apexcharts-marker no-pointer-events wunr51xnm"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="1" j="1"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1489" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1490" r="6"
                                                                    cx="89.05357142857143" cy="86.86500000000001"
                                                                    class="apexcharts-marker no-pointer-events wxyka3j21j"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="2" j="2"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1491" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1492" r="6"
                                                                    cx="133.58035714285714" cy="121.611"
                                                                    class="apexcharts-marker no-pointer-events wm96mvslf"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="3" j="3"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1493" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1494" r="6"
                                                                    cx="178.10714285714286" cy="34.74600000000001"
                                                                    class="apexcharts-marker no-pointer-events wqo764v7n"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="4" j="4"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1495" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1496" r="6"
                                                                    cx="222.63392857142858" cy="104.238"
                                                                    class="apexcharts-marker no-pointer-events wlqa6xlij"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="5" j="5"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1497" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1498" r="6"
                                                                    cx="267.1607142857143" cy="65.14875"
                                                                    class="apexcharts-marker no-pointer-events wvty855m5"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="6" j="6"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1499" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaske2m0vfm1)">
                                                                <circle id="SvgjsCircle1500" r="6"
                                                                    cx="311.6875" cy="91.20825"
                                                                    class="apexcharts-marker no-pointer-events wod7md6bt"
                                                                    stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9"
                                                                    rel="7" j="7" index="0"
                                                                    default-marker-size="6"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1485" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1545" x1="0" y1="0"
                                                    x2="311.6875" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1546" x1="0" y1="0"
                                                    x2="311.6875" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1547" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1548" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1549" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1550" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                                                </rect>
                                                <rect id="SvgjsRect1551" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1478" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG1533" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1534" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1476" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center pt-4 gap-2">
                                    <div class="flex-shrink-0" style="position: relative;">
                                        <div id="expensesOfWeek" style="min-height: 57.7px;">
                                            <div id="apexchartscia3dk5if"
                                                class="apexcharts-canvas apexchartscia3dk5if apexcharts-theme-light"
                                                style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg1552"
                                                    width="60" height="57.7" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1554" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-10, -10)">
                                                        <defs id="SvgjsDefs1553">
                                                            <clipPath id="gridRectMaskcia3dk5if">
                                                                <rect id="SvgjsRect1556" width="86" height="87"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskcia3dk5if"></clipPath>
                                                            <clipPath id="nonForecastMaskcia3dk5if"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskcia3dk5if">
                                                                <rect id="SvgjsRect1557" width="84" height="89"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1558" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1559">
                                                                <g id="SvgjsG1560" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1561"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0"
                                                                            d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(236,238,241,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="2.0408536585365864"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1563">
                                                                    <g id="SvgjsG1567"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="seriesx1" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath1568"
                                                                            d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="rgba(105,108,255,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="4.081707317073173"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                            data:angle="234" data:value="65"
                                                                            index="0" j="0"
                                                                            data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                        </path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1564" r="18.881402439024395"
                                                                        cx="40" cy="40"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                    <g id="SvgjsG1565"
                                                                        class="apexcharts-datalabels-group"
                                                                        transform="translate(0, 0) scale(1)"
                                                                        style="opacity: 1;"><text id="SvgjsText1566"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="40" y="45"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto" font-size="13px"
                                                                            font-weight="400" fill="#697a8d"
                                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1569" x1="0" y1="0"
                                                            x2="80" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1570" x1="0" y1="0"
                                                            x2="80" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1555" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 61px; height: 59px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-n1 mt-1">Expenses This Week</p>
                                        <small class="text-muted">$39 less than last week</small>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 330px; height: 377px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/paypal.png') }}" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Paypal</small>
                                        <h6 class="mb-0">Send money</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+82.6</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/wallet.png') }}" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Mac'D</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+270.69</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/chart.png') }}" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Transfer</small>
                                        <h6 class="mb-0">Refund</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+637.91</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/cc-success.png') }}" alt="User"
                                        class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Credit Card</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-838.71</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/wallet.png') }}" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Starbucks</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+203.33</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('dashboard/assets/img/icons/unicons/cc-warning.png') }}" alt="User"
                                        class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Mastercard</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-92.45</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
@endsection
