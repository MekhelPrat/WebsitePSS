@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <!-- Content section -->
    @include('layout.magangContent')

    <!-- Footer -->
    @include('includes.footer2')
</div>
@endsection