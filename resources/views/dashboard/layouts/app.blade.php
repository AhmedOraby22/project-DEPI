<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.head')
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('dashboard.layouts.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        @include('dashboard.layouts.header')


        <div class="container">
          @yield('content')
        </div>
        @include('dashboard.layouts.footer')

      </div>
      <!-- End Custom template -->
    </div>
    @include('dashboard.layouts.script')
    <!--   Core JS Files   -->

  </body>
</html>
