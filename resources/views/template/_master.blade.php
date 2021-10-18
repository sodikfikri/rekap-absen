<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
        <title>Bonceng - @yield('title')</title>
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
        <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{ asset('css/bible.css') }}">

        <link rel="stylesheet" href="{{asset('fonts/Poppins/fonts.css')}}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

        <!-- Plugin -->
        <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">

        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet" href="{{asset('vendors/fontawesome5.15.2/css')}}">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/template/bootstrap.min.css')}}">

        <!-- APP CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
        <!-- CDN DataTable -->
        <link rel="stylesheet" href="{{asset('css/template/datatables.min.css')}}">
        <!-- Date Ranger -->
        <link rel="stylesheet" href="{{ asset('css/lib/daterangepicker.css') }}">
        <style>
            /** Circle Button */
            .contain-image-37 {
                object-fit: contain;
                width: 70px;
                height: 37px;
            }
            .btn-circle-sm {
                padding: 6px 8px 6px 8px;
                border-radius: 60px;
                transition: 0.2s ease-in-out;
            }
            .btn-circle-red {
                border: 1px solid #e52920;
                color: #e52920;
            }
            .btn-circle-red:hover {
                background-color: #e52920;
                color: #fff;
            }
            /** Addtional CSS */
            .bg-text-muted {
                background-color: #dedede;
                padding: 2px;
                border-radius: 3px;
            }
            .watermark {
                top: -2px;
                left: 22px;
                z-index: -1;
                position: absolute;
                color: #ffffff;
            }
            .clip-bullet {
                position: absolute;
                top: -45px;
                left: -55px;
                z-index: -2;
            }
            .clip-bullet .bg-circle-red {
                padding: 60px;
                border-radius: 50%;
                background-color: #E52920;
                top: 0;
                left: 0;
            }
            .font-10 {
                font-size: 10px;
            }
            .font-12 {
                font-size: 12px;
            }
            .font-16 {
                font-size: 16px;
            }
            .label-title {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                color: #212229;
                margin-bottom: 15px;
                font-size: 14px;
                text-transform: capitalize;
            }
            .sub-menu .active .nav-link:before {
                background-color: #fff!important;
            }
            .sub-menu .active .nav-link {
                color: #fff!important;
            }
            li.active-single {
                background: #ce2018;
            }
            li.active-single .nav-link {
                padding-left: 65px;
            }
            .border-detail {
                padding: 8px;
                border: 1.5px solid #ddd;
                border-radius: 60px;
                cursor: pointer;
                display: inline-block;
                transition: 0.2s ease-in-out;
            }
            .border-detail:hover {
                background-color: #ddd;
            }
            .border-success {
                border-color: #19d895!important;
            }
            .border-danger {
                border-color: #fe2d23!important;
            }
            .overlay {
                position: fixed;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                display: none;
                z-index: 10
            }

            .overlay-open .sidebar {
                margin-left: 0;
                z-index: 99999999
            }
            .select-box-row {
                padding: 10px;
                border-radius:30px;
                background-color:#fff;
                text-decoration: none!important;
                color: #e52920;
                border: 1px solid #e52920;
                transition: 0.2s ease-in-out;
            }
            .disabled-selected {
                color: #e5292070!important;
                border-color: #e5292070!important;
            }

            .select-box-row:hover {
                color: #e52920;
            }
            .select-box-row:focus {
                color: #e52920;
                border: 1px solid #e52920;
            }
            .tab-all a.active {
                background-color:#e52920;
                color:#fff;
                box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(233, 30, 99, 0.6);
            }
            .box-badge {
                padding: 6.5px;
            }
            .box-badge-success {
                border: 1px solid #06d6a0;
                color: #06d6a0;
                border-radius: 60px;
            }
            .box-badge-danger {
                background-color: #ef476f;
                color: #fff;
                border-radius: 60px;
            }
            .box-badge-primary {
                background-color: #118ab2;
                color: #fff;
                border-radius: 60px;
            }
            .scrolled-view {
                overflow-x: auto;
                overflow-y: hidden;
                white-space: nowrap;
                display: inline-block;
            }
            .back-animated {
                font-size: 19px;
                transition: 0.1s ease-out;
            }
            .back-animated:hover {
                text-decoration: none;
                padding-left: 5px;
            }
            .display-0 {
                display: none!important;
            }
            .floating-button {
                position: fixed;
                right: 22px;
                bottom: 22px;
                z-index: 999;
            }
            .cogs-button {
                text-align: center;
                padding: 11px;
                background-color: #fff;
                box-shadow: 0px 4px 10px 2px rgba(0,0,0,0.2);
                border-radius: 50%;
                width: 50px;
                height: auto;
                font-size: 20px;
                cursor: pointer;
                transition: 0.5s all ease;
            }
            .cogs-button:hover {
                box-shadow: 0px 1px 5px 1px rgba(0,0,0,0.2);
            }
            /** Custom FORM */
            .form-control {
                border-color: #aaa!important;
                height: 35px;
                border-radius: 4px;
            }
            /* Custom CSS */
            .card {
                /* border-radius: 10px!important; */
                transition: 0.25s ease-in-out;
            }
            .card-clip {
                z-index:0;
            }
            .card-clip .card-body {
                clip-path: inset(0px 0px 0px 0px);
            }
            .card-chart {
                border-top-left-radius: 10px;
                border-top-right-radius:10px;
            }
            .card-clickable {
                cursor: pointer;
            }
            .card-clickable:hover {
                border: 2px solid #e52920;
            }
            .card-active {
                border: 2px solid #e52920;
            }
            .card-hover {
                cursor: pointer;
            }
            .card-hover:hover {
                box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.8), 0 1px 8px 0 rgba(167, 175, 183, 0.13)!important;
            }
            .card-background {
                background-color: red;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                position: absolute;
            }
            .table-hover tr {
                cursor: pointer;
            }
            .nav ul {
                white-space: nowrap;
            }
            .nav ul li {
                display: inline;
            }
            .btn-danger {
                background-color: #fe2d23!important;
                border-color: #f22d23!important;
            }
            .btn-danger:hover {
                background-color: #e52a21!important;
                border-color: #e52a21!important;
            }
            .text-danger {
                color: #fe2d23!important;
            }
            div#DataTables_Table_0_wrapper {
                width: 100% !important;
            }
            /* Custom Button */
            .btn-selected-area {
                border: 0;
                padding-top: 4px;
                padding-bottom: 4px;
            }
            .btn-selected-area.selected {
                color: #06d6a0;
                border: 1px solid #06d6a0;
                background: inherit;
            }
            .btn-selected-area.times {
                color: #f22d23;
                border: 1px solid #f22d23;
                background: inherit;
            }
            .btn-selected-area.unselected {
                border: 1px solid #eaeaea;
                background-color: #eaeaea;
                color: #eaeaea;
            }
            /* Media Screen */
            @media only screen
                and (min-device-width: 310px)
                and (max-device-width: 812px)
                /* and (-webkit-min-device-pixel-ratio: 3) */
                and (orientation: portrait) {
                    .nav {
                        width: 180%;
                    }
                    .scroll-card {
                        overflow: auto;
                    }
                }
        </style>
        <!-- Custom Styling -->
        @yield('style')
    </head>
    <body class="sidebar-toggle-display">
        <!-- Floating Button -->
        <div class="modal fade" id="_viewModalDashboard" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:0!important">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="form-group">
                            <label for="" class="text-muted">Auto Reload</label>
                            <select name="" id="_autoReload" class="form-control">
                                <option value="0">Off</option>
                                <option value="1" selected>1m</option>
                                <option value="2">3m</option>
                                <option value="3">5m</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer" style="border:0;">
                        <button class="btn btn-danger" id="_btnChangeSetting">Change</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        @include('template._navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- Left Sidebar -->
            @include('template._sidebar')
            <div class="main-panel">
                <!-- Main Content -->
                @yield('content')
                <!-- Footer -->
                @include('template._footer')
            </div>
        </div>
        <!-- Main Script -->
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script src="{{ asset('js/misc.js') }}"></script> --}}
        <script src="{{ asset('vendors/fontawesome5.15.2/js/all.min.js') }}"></script>
        <script src="{{ asset('js/lib/sweetalert2@10.js') }}"></script>
        <script src="{{ asset('js/lib/datatables.min.js') }}"></script>
        <script src="{{ asset('js/lib/xlsx.full.min.js') }}"></script>
        <script src="{{ asset('js/lib/FileSaver.js') }}"></script>
        <script src="{{ asset('js/lib/moment.min.js') }}"></script>
        <script src="{{ asset('js/lib/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/lib/jszip.js') }}"></script>
        <script src="{{ asset('js/lib/jszip.min.js') }}"></script>
        <script src="{{ asset('js/lib/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/lib/parallel.js') }}"></script>
        <script src="{{ asset('js/custom/notify.js') }}"></script>

        <!-- Custom Script -->
        @yield('script')
    </body>
</html>
