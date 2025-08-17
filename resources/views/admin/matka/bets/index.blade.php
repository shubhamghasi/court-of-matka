@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Matka Bets List</h6>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">#</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Market</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number Type</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Date</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Color</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bets as $index => $bet)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $bets->firstItem() + $index }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->market->name ?? 'Unknown' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($bet->number_type->name ?? 'Unknown') }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">
                                        {{ !empty($bet->number->panel_number) ? $bet->number->panel_number : $bet->number->number }}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $bet->created_at->format('d M Y') }}</p>
                                </td>
                                <td>
                                    @php
                                        $colorClass = match ($bet->color) {
                                            'red' => 'bg-danger text-white',
                                            'yellow' => 'bg-warning text-dark',
                                            'green' => 'bg-success text-white',
                                            default => 'bg-secondary text-white',
                                        };
                                    @endphp
                                    <span class="badge {{ $colorClass }} px-3 py-2 rounded-pill">
                                        {{ ucfirst($bet->color) }}
                                    </span>
                                </td>
                                <td>
                                    {{-- ✅ Edit Button --}}
                                    <a href="{{ route('admin.matka.bets.edit', $bet->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    {{-- ✅ Delete Button --}}
                                    <form action="{{ route('admin.matka.bets.destroy', $bet->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this bet?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    <p class="text-sm">No bets found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                @if ($bets->hasPages())
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mt-3 px-2">
                        <div class="text-sm text-muted">
                            Showing {{ $bets->firstItem() }} to {{ $bets->lastItem() }} of {{ $bets->total() }} entries
                        </div>
                        <div>
                            {{ $bets->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @endif
            </div>
            <!-- End Table -->
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
