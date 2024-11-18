<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('web.layouts.head')

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @include('web.layouts.nav')



        @yield('content')


        @include('web.layouts.script')
</body>

</html>