@extends('layouts.app')

@section('guest')
    {{-- @if (\Request::is('login/forgot-password'))
        @include('layouts.navbars.guest.nav')
        @yield('content') --}}
    {{-- @else
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.nav')
            </div>
        </div>
    </div>
    @yield('content')
    @include('layouts.footers.guest.footer')
    @endif --}}
    @if (\Request::is('rtl'))
        @include('layouts.navbars.guest.sidebar-rtl')
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
            @include('layouts.navbars.guest.nav-rtl')
            <div class="container-fluid py-4">
                @yield('content')
                @include('layouts.footers.guest.footer')
            </div>
        </main>
    @elseif (\Request::is('profile'))
        @include('layouts.navbars.guest.sidebar')
        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
            @include('layouts.navbars.guest.nav')
            @yield('content')
        </div>
    @elseif (\Request::is('virtual-reality'))
        @include('layouts.navbars.guest.nav')
        <div class="border-radius-xl mt-3 mx-3 position-relative"
            style="background-image: url('../assets/img/vr-bg.jpg') ; background-size: cover;">
            @include('layouts.navbars.guest.sidebar')
            <main class="main-content mt-1 border-radius-lg">
                @yield('content')
            </main>
        </div>
        @include('layouts.footers.guest.footer')
    @else
        @include('layouts.navbars.guest.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg }">
            @include('layouts.navbars.guest.nav')
            <div class="container-fluid py-4 px-4">
                @yield('content')
                @include('layouts.footers.guest.footer')
            </div>
        </main>
    @endif
@endsection
