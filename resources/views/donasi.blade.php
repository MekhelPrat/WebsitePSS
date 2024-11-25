@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <!-- Content section -->
    @include('layout.donasiContent')

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection