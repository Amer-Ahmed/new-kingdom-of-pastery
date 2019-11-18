<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ (app()->getLocale() == 'en') ? 'ltr' : 'rtl' }}">

<head>
    @include('layouts.admin.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

        <div id="app">
            @yield('content')
        </div>

    </div>

    @include('layouts.admin.scripts')
</body>

</html>
