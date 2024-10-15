<!DOCTYPE html>
<html lang="en">
<head>
  
    @include('frontend.layouts.header-link')
    @include('frontend.layouts.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    
<?php use App\Traits\SettingsTrait; ?>
    @yield('mainsection')

    @include('frontend.layouts.footer')
    @include('frontend.layouts.footer-link')
</body>
</html> 