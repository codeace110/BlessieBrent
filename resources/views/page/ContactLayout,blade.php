<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('homepage/css/homepage.css') }}">

    <!-- Page-specific styles -->
    @yield('styles')
</head>
<body>

    <!-- Navbar -->
    @include('partials.HomeNav')
    
    @include('partials.Contact.ContactMain')

    <!-- Footer -->
    @include('partials.Homefooter')


    <!-- Custom scripts -->
    @yield('scripts')
</body>
</html>
