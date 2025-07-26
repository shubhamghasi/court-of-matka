@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Trends Check Requests</h6>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">User ID</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Name</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Transaction ID</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number Type</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Predicted Numbers</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Status</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trendsRequestCollection as $trendRequest)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $trendRequest->user?->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $trendRequest->user?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $trendRequest->market->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $trendRequest->transaction_id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($trendRequest->type?->name) }}</p>
                                </td>

                                <!-- Updated Predicted Numbers Column -->
                                <td>
                                    @php
                                        $predictions = json_decode($trendRequest->predicted_numbers, true);
                                    @endphp

                                    @if (is_array($predictions) && count($predictions))
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach ($predictions as $item)
                                                <span class="badge rounded-pill bg-light text-dark border">
                                                    {{ $item['number'] }} ({{ $item['percentage'] }}%)
                                                </span>
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-muted">Not generated</span>
                                    @endif
                                </td>

                                <td>
                                    <span
                                        class="status-btn {{ !empty($trendRequest->trendRequest) ? 'success-btn' : 'close-btn' }}">
                                        {{ !empty($trendRequest->trendRequest) ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>

                                <td>
                                    <div class="action justify-content-end">
                                        <!-- Send Button -->
                                        <form action="{{ route('admin.trends.send-number', $trendRequest->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="edit">
                                                <span class="text-sm">Send <i class="lni lni-arrow-right"></i></span>
                                            </button>
                                        </form>

                                        <!-- Dropdown Menu -->
                                        <button class="more-btn ml-10 dropdown-toggle"
                                            id="moreAction{{ $trendRequest->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $trendRequest->id }}">
                                            <!-- Generate Random -->
                                            <li class="dropdown-item">
                                                <form
                                                    action="{{ route('admin.trends.generate-number', $trendRequest->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="type"
                                                        value="{{ $trendRequest->type?->name }}">
                                                    <input type="hidden" name="is_random" value="true">
                                                    <button type="submit" class="text-gray btn">Generate Random</button>
                                                </form>
                                            </li>

                                            <!-- Generate Data-based -->
                                            <li class="dropdown-item">
                                                <form
                                                    action="{{ route('admin.trends.generate-number', $trendRequest->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="type"
                                                        value="{{ $trendRequest->type?->name }}">
                                                    <input type="hidden" name="is_random" value="false">
                                                    <button type="submit" class="text-gray btn">Generate Data</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
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