@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Bet List</h6>
                </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">User Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Bet Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Bet Amount</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Transaction ID</h6>
                            </th>
                            {{-- <th class="min-width">
                                <h6 class="text-sm text-medium">
                                    Status
                                </h6>
                            </th> --}}
                            {{-- <th>
                                <h6 class="text-sm text-medium text-end">
                                    Actions
                                </h6>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matBetsCollection as $bet)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $bet->user->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->market->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->bet_number }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->bet_amount }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->transaction_id }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>
@endsection
