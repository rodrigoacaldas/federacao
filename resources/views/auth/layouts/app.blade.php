<!doctype html>
<html lang="pt_BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ config('app.name', 'Federação') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="Sistema de cadastro de atletas da "{{ config('app.name', 'Federação') }}>
    <link rel="icon" href="{{url('assets/images/favicon.png')}}" type="image/png">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{url('main.css')}}" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-6">
                    <div class="mx-auto mb-3 text-center">
                        <h2 class="text-white">{{ config('app.name', 'Federação') }}</h2>
                    </div>
                    <div class="modal-dialog w-100">
                        <div class="modal-content">
                            @yield('content')
                        </div>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © VaptFotos 2019</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{url('assets/scripts/main.js')}}"></script>
</body>
</html>
