@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('layout.header2')

    <!-- Content section -->
    @include('layout.eventContent')

    <!-- Footer -->
    @include('layout.footer')
</div>
@endsection