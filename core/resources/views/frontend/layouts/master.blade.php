<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.layouts.meta')
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/libraries.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
  @yield('styles')
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    @include('frontend.layouts.header')

    <!-- /.Header 2 -->

    @yield('content')

    <!-- ========================
      Footer
    ========================== -->
    @include('frontend.layouts.footer')
    <button id="scrollTopBtn"><i class="arrow_up"></i></button>

      <div class="module__search-container">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
          <input type="text" class="search__input" placeholder="Search Here">
          <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  <script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  @stack('scripts')
</body>

</html>
