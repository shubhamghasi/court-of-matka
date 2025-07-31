@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Doubt Check Requests</h6>
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
                            <th>
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number Type</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Transaction ID</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Status</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Accuracy</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Created at</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doubtRequests as $doubt)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $doubt->user?->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $doubt->user?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $doubt->market?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $doubt->number }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($doubt->numberType?->name) }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $doubt->transaction_id }}</p>
                                </td>
                                <td>
                                    <span
                                        class="status-btn {{ $doubt->status == 'resolved' ? 'success-btn' : 'close-btn' }}">
                                        {{ ucfirst($doubt->status ?? 'Pending') }}
                                    </span>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $doubt->accuracy ?? 'Not analyzed' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text -center">{{ $doubt->created_at->format('d M, Y h:i A')}}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <!-- Mark as Resolved -->
                                        @if ($doubt->status !== 'resolved')
                                            <form action="{{ route('admin.doubt.mark-resolved', $doubt->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="edit">
                                                    <span class="text-sm">Resolve <i class="lni lni-checkmark"></i></span>
                                                </button>
                                            </form>
                                        @endif

                                        <!-- Dropdown for future actions -->
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction{{ $doubt->id }}"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $doubt->id }}">
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.doubt.analyze', $doubt->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="text-gray btn">Analyze & Send</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.doubt.send-result', $doubt->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="text-gray btn">Send Result to
                                                        User</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>
    </div>
@endsection
