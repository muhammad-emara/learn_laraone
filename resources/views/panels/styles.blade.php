    {{-- Vendor Styles --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/ui/prism.min.css')) }}">
        {{-- Theme Styles --}}
        @yield('vendor-style')
        {{-- Theme Styles --}}
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/bootstrap.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/bootstrap-extended.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/colors.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/components.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/themes/dark-layout.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/themes/semi-dark-layout.css')) }}">
{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp
        {{-- Layout Styles works when don't use customizer --}}
{{-- @if($configData['theme'] == 'dark-layout')
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/themes/dark-layout.css')) }}">
@endif
@if($configData['theme'] == 'semi-dark-layout')
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/themes/semi-dark-layout.css')) }}">
@endif --}}
        {{-- Customizer Styles --}}
        {{-- Page Styles --}}
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/core/menu/menu-types/horizontal-menu.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/core/menu/menu-types/vertical-menu.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/core/colors/palette-gradient.css')) }}">
