@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('layout.header')

    <!-- Content section -->
    @include('layout.artikelContent')

    <!-- Footer -->
    @include('layout.footer')
</div>
@endsection