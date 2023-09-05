@extends('layouts.app')

@section('auth')
      @if(auth()->user()->role === 'admin')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4 px-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                 </main>
        @elseif(auth()->user()->role === 'user1')
            @include('layouts.navbars.auth.user1.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                    @include('layouts.navbars.auth.user1.nav')
                    <div class="container-fluid py-4 px-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                 </main>

        @elseif(auth()->user()->role === 'user2')
            @include('layouts.navbars.auth.user2.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                    @include('layouts.navbars.auth.user2.nav')
                    <div class="container-fluid py-4 px-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                 </main>
        @else
            {{-- Include content for non-admin users --}}
            @include('layouts.navbars.auth.viewer.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                @include('layouts.navbars.auth.viewer.nav')
                <div class="container-fluid py-4 px-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>

            @endif
@endsection
