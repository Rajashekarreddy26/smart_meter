@extends('template')
@section('title', 'Consumers')
@push('scripts')
<script src="{{  asset('js/consumer.js') }}"></script>
@endpush
@section('content')
<div class="container-fluid">
    <div id="consumers_list_body">
        @csrf
        @include('registration.consumers_list_body')
    </div>
</div>
    @endsection