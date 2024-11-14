@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('layout.header')

    <!-- Content section -->
    @include('layout.aboutContent')

    <!-- Footer -->
    @include('layout.footer')
</div>
@endsection