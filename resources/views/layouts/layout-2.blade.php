@extends('layouts.layout-1')

@section('content')
<main>
    <div class="main">
        <div class="page-title" style="background-image: url('/images/Title-Bg/{{ $TitleBg }}')">
        <div>
            <h1>@yield('page_title')</h1>
            <p>STEPHMOND SOLUTIONS LIMITED</p>
        </div>
        </div>
        <div class="page-content  {{ Request::is('Contact') ? 'Contact' : '' }} {{ Request::is('Solutions') ? 'Solutions' : '' }} {{ Request::is('About') ? 'About' : '' }}">
            @yield('page_content')
        </div>  
    </div>
</main>
@endsection