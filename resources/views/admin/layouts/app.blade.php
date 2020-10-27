<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ config('app.name', 'Federação') }}.</title>
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Aplicativo de CRM para pessoas que trabalham com eventos sociais.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{url('/assets/css/base.min.css')}}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('admin.layouts.header')
        <div class="app-main">

            @include('admin.layouts.sidebar')

            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="{{$icon}}"> </i>
                                </div>
                                <div>
                                    <span>{{$title}}</span>
                                </div>
                            </div>
                            @yield('create-button')
                        </div>
                    </div>

                    @include('admin.layouts.alerts')

                    @yield('contentHome')
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-card mb-3 card">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footer')

    </div>

    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <!--CORE-->
    <script src="{{url('/assets/js/jquery-3.3.2.min.js')}}"></script>
    <script src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/assets/js/metismenu.js')}}"></script>
    <script src="{{url('/assets/js/scripts-init/app.js')}}"></script>
    <script src="{{url('/assets/js/scripts-init/demo.js')}}"></script>

</body>
@stack('scripts')

</html>
@yield('modals')

