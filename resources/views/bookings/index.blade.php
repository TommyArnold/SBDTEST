@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Bookings') }}</div>
                <div class="card-body text-right">
                    <a href="/bookings/create" class="btn btn-primary">New Booking</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Booking Date</th>
                                <th>Flexibility</th>
                                <th>Vehicle Size</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ucwords($booking->user()->first()->name)}}</td>
                                <td>{{$booking->booking_date}}</td>
                                <td>+- {{$booking->flexibility_option()->first()->name}} Day{{$booking->flexibility_option()->first()->name > 1 ? 's':''}}</td>
                                <td>{{$booking->vehicle_size_option()->first()->name}}</td>
                                <td>{{$booking->user()->first()->contact_number}}</td>
                                <td>{{$booking->user()->first()->email}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-default"><i class="fa fa-check"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
