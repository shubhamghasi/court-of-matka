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
                                <h6 class="text-sm text-medium">Phone</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number Type</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Bet Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Bet Amount</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Created at</h6>
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
                                    <p class="text-sm">{{ $bet->user?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->market->phone ?? 'N/A' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->market->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($bet->number_type?->name) }}</p>
                                </td>
                                <td>
                                    @php
                                        $numberTypeName = strtolower($bet->number_type?->name ?? '');
                                    @endphp

                                    @if (strpos($numberTypeName, 'panel') !== false)
                                        <p class="text-sm">
                                            {{ $bet->bet_number->panel_number }}
                                            <span class="small">({{ $bet->bet_number->number }})</span>
                                        </p>
                                    @else
                                        <p class="text-sm">{{ $bet->bet_number->number }}</p>
                                    @endif
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->amount }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $bet->created_at->format('d M, Y h:i A') }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div
                    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mt-3 px-2">
                    <div class="text-sm text-muted">
                        Showing {{ $matBetsCollection->firstItem() }} to {{ $matBetsCollection->lastItem() }} of
                        {{ $matBetsCollection->total() }} entries
                    </div>
                    <div>
                        {{ $matBetsCollection->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
                <!-- End Table -->
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .pagination {
            margin: 0;
            padding: 0;
        }

        .page-item {
            margin: 0 2px;
        }

        .page-link {
            border-radius: 6px;
            padding: 6px 12px;
        }
    </style>
@endpush
