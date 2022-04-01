@include('panel.layouts.header')
@include('panel.layouts.sidebar')
<div class="content">
    @include('panel.layouts.nav')
    @include('panel.layouts.breadcrumb')
    @include('sweetalert::alert')
    @yield('content')
</div>
@include('panel.layouts.footer')
