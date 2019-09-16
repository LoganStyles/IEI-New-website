@include('templates.header')
    @yield('content')
    <script type="text/javascript">
    var BASEURL = {!! json_encode(url('/')) !!}
    </script>        
@include('templates.footer')