<!DOCTYPE html>
<html lang="en">
<head>
  
    @include('frontend.layouts.header-link')
    @include('frontend.layouts.header')
   
   
</head>
<body>
    
<?php use App\Traits\SettingsTrait; ?>
    @yield('mainsection')

    @include('frontend.layouts.footer')
    @include('frontend.layouts.footer-link')
</body>
</html> 