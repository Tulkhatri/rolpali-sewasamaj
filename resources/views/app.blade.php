<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta property="og:title" content="Rolpali Sewa Samaj Rolpa">
    <meta property="og:description" content="Rolpali Sewa Samaj">
    <meta property="og:image" content="https://rolpalisewasamaj.org/logo.png">
    <meta property="og:url" content="https://rolpalisewasamaj.org">
    <meta property="og:type" content="website">
     <!-- Link to the new favicon -->
     <link rel="icon" href="{{ asset('favicon.jpg') }}" type="image/x-icon" />
    @vite('resources/js/app.js')
    @inertiaHead
    @routes
  </head>
  <body>
    @inertia
  </body>
</html>