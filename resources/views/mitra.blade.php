@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <!-- Content section -->
    @include('layout.mitraContent')

    <!-- Footer -->
    @include('includes.footer2')
</div>
@endsection