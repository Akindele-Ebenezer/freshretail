@extends('layouts.layout-1')

@section('content')
<main>
    <div class="main">
        <div class="page-title" style="background-image: url('/images/page-title-bg.jpg')">
            <h1>@yield('page_title')</h1>
            <p>STEPHMOND SOLUTIONS LIMITED</p>
        </div>
        <div class="page-content">
            @yield('page_content')
        </div>  
    </div>
</main>
@endsection