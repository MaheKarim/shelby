<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title', 'dashboard')</title>

   @include('partials.styles')

</head>

<body>
<div id="app">
    <div class="main-wrapper">
    @include('partials.header')

    @include('partials.sidebar')

    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading', 'dashboard')</h1>

                    <div class="buttons" style="margin: 0 0 -10px 20px;">
                        @yield('heading_buttons')
                    </div>

                    @yield('breadcrumbs')

                </div>
                @include('partials.alert')
                <div class="section-body">
                    @yield('contents')
                </div>
            </section>
        </div>

        @include('partials.footer')
    </div>
</div>

@include('partials.scripts')
@stack('stack_js')

</body>
</html>
