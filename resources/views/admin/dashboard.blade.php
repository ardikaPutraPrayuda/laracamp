@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8-offset-2">
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
                                        <th>{{ $checkout->User->name }}</th>
                                        <th>{{ $checkout->Camp->title }}</th>
                                        <th>{{ $checkout->Camp->price }}</th>
                                        <th>{{ $checkout->created_at->format('M d Y') }}</th>
                                        <th>
                                            <strong>{{ $checkout->payment_status }}</strong>
                                        </th>
                                    </tr>
                                @empty
                                    <td colspan="3">No Camps Data</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
