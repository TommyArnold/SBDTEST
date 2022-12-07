@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Booking') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bookings.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="booking_date" class="col-md-4 col-form-label text-md-end">{{ __('Booking Date') }}</label>

                            <div class="col-md-6">
                                <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{ old('booking_date') }}" required autocomplete="booking_date" autofocus>

                                @error('booking_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="flexibility_option_id" class="col-md-4 col-form-label text-md-end">{{ __('Flexibility') }}</label>

                            <div class="col-md-6">
                                <select id="flexibility_option_id" class="form-control @error('flexibility_option_id') is-invalid @enderror" name="flexibility_option_id" required autocomplete="flexibility_option_id" autofocus>
                                    @foreach($flexibility_options as $option)
                                    <option value="{{$option->id}}" {{ (old("flexibility_option_id") == $option->id ? "selected":"") }}>+- {{$option->name}} Day{{$option->name > 1 ? 's':''}}</option>
                                    @endforeach
                                </select>

                                @error('flexibility_option_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="vehicle_size_option_id" class="col-md-4 col-form-label text-md-end">{{ __('Vehicle Size') }}</label>

                            <div class="col-md-6">
                                <select id="vehicle_size_option_id" class="form-control @error('vehicle_size_option_id') is-invalid @enderror" name="vehicle_size_option_id" required autocomplete="vehicle_size_option_id" autofocus>
                                    @foreach($vehicle_size_options as $option)
                                    <option value="{{$option->id}}" {{ (old("vehicle_size_option_id") == $option->id ? "selected":"") }}>{{$option->name}}</option>
                                    @endforeach
                                </select>

                                @error('vehicle_size_option_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_number" type="contact_number" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Booking') }}
                                </button>                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
