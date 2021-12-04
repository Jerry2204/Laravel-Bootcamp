@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Date</th>
                                    <th>Paid Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                <tr>
                                    <td>{{ $checkout->user->name }}</td>
                                    <td>{{ $checkout->camp->title }}</td>
                                    <td>{{ $checkout->camp->price }}K</td>
                                    <td>{{ $checkout->created_at->format('d-M-Y') }}</td>
                                    <td>
                                        <strong>{{ $checkout->payment_status }}</strong>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">No Camp Registered</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
