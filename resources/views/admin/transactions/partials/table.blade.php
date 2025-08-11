<div class="table-responsive">
    <table class="table top-selling-table">
        <thead>
            <tr>
                <th>
                    <h6 class="text-sm text-medium">#</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">User ID</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Name</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Transaction ID</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Promo Code</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">UPI Address</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Amount</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Status</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium">Created At</h6>
                </th>
                <th>
                    <h6 class="text-sm text-medium text-end">Actions</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $index => $transaction)
                <tr>
                    <td>
                        <p class="text-sm">{{ $index + 1 }}</p>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->user_id }}</p>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->user->name }}</p>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->transaction_id }}</p>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->promo_code ?? '-' }}</p>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->upi_address ?? '-' }}</p>
                    </td>
                    <td>
                        <p class="text-sm">₹{{ number_format($transaction->amount, 2) }}</p>
                    </td>
                    <td>
                        @php
                            $statusClasses = [
                                'pending' => 'badge bg-warning text-dark',
                                'approved' => 'badge bg-success',
                                'rejected' => 'badge bg-danger',
                            ];
                        @endphp
                        <span class="{{ $statusClasses[$transaction->status] ?? 'badge bg-secondary' }}">
                            {{ ucfirst($transaction->status) }}
                        </span>
                    </td>
                    <td>
                        <p class="text-sm">{{ $transaction->created_at->format('d M Y, h:i A') }}</p>
                    </td>
                    <td class="text-end">
                        {{-- Change Payment Status --}}
                        <a href="javascript:void(0);" class="text-warning me-2 change-status"
                            data-id="{{ $transaction->id }}">
                            Change Status
                        </a>

                        {{-- Allow User (only if not already allowed) --}}
                        @if (!$transaction->user->has_trends_access)
                            <a href="javascript:void(0);" class="text-success allow-user"
                                data-user-id="{{ $transaction->user->id }}">
                                Allow User
                            </a>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">
                        <p class="text-sm">No transactions found.</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if ($transactions->hasPages())
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mt-3 px-2">
            <div class="text-sm text-muted">
                Showing {{ $transactions->firstItem() }} to {{ $transactions->lastItem() }} of
                {{ $transactions->total() }} entries
            </div>
            <div>
                {{ $transactions->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    @endif
</div>
</div>
@if ($transactions->hasPages())
    <div class="mt-3">
        {{ $transactions->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
    </div>
@endif
