@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <!-- Content section -->
    @include('layout.eventContent')

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection