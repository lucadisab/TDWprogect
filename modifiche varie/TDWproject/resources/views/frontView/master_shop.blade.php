<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- css -->
@include('frontView.inc.css')
  </head>
  <body>
    <!-- header_top -->
      @include('frontView.inc.header_top')
      <!-- main content -->
        @yield('shopContent')
    <!-- footer -->
      @include('frontView.inc.footer')
<!-- javascript -->
@include('frontView.inc.js')

  </body>
</html>
