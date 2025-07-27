@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Refund Requests</h6>
                </div>
            </div>
            <!-- End Title -->
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
                                <h6 class="text-sm text-medium">Phone</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Bet Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Status</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($refundsCollection as $refund)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $refund->user?->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $refund->user?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $refund->user?->phone ?? 'N/A' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $refund->market_name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $refund->bet_number }}</p>
                                </td>
                                <td class="text-center">
                                    @php
                                        $statusClass = match ($refund->status) {
                                            'pending' => 'status-btn warning-btn',
                                            'completed' => 'status-btn success-btn',
                                            default => 'status-btn danger-btn',
                                        };

                                        $statusLabel = match ($refund->status) {
                                            'pending' => 'Pending',
                                            'completed' => 'Completed',
                                            default => 'In Progress',
                                        };
                                    @endphp
                                    <p class="text-sm {{ $statusClass }}">{{ $statusLabel }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction{{ $refund->id }}"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $refund->id }}">
                                            <!-- Remove Request -->
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.refund.destroy', $refund->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to remove this refund request?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>

                                            <!-- Status Update -->
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.refund.update-status', $refund->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <select name="status" onchange="this.form.submit()"
                                                        class="form-select form-select-sm">
                                                        <option value="pending"
                                                            {{ $refund->status === 'pending' ? 'selected' : '' }}>Pending
                                                        </option>
                                                        <option value="in_progress"
                                                            {{ $refund->status === 'in_progress' ? 'selected' : '' }}>In
                                                            Progress</option>
                                                        <option value="completed"
                                                            {{ $refund->status === 'completed' ? 'selected' : '' }}>
                                                            Completed</option>
                                                    </select>
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
        </div>
    </div>
@endsection
