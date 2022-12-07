@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Success') }}</div>
                <div class="card-body">
                    <p>Your booking was received and you will receive a confirmation shortly.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
