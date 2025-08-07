@php
    use App\Models\NumberType;
@endphp

@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Matka Numbers List</h6>
                </div>
                <a href="{{ route('admin.matka.numbers.create') }}" class="main-btn primary-btn btn-hover">Add New Number</a>
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
                                <h6 class="text-sm text-medium">Type</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Number</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($matkaNumbers as $index => $number)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $index + 1 }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($number->type->name) ?? 'Unknown' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">
                                        @if ($number->panel_number)
                                            {{ $number->panel_number }} <span
                                                class="small text-muted">({{ $number->number }})</span>
                                        @else
                                            {{ $number->number }}
                                        @endif
                                    </p>
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.matka.numbers.edit', $number->id) }}"
                                        class="text-primary me-2">Edit</a>
                                    <form action="{{ route('admin.matka.numbers.destroy', $number->id) }}" method="POST"
                                        style="display: inline-block;"
                                        onsubmit="return confirm('Are you sure you want to delete this number?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-danger border-0 bg-transparent p-0"
                                            type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <p class="text-sm">No numbers found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if ($matkaNumbers->hasPages())
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mt-3 px-2">
                        <div class="text-sm text-muted">
                            Showing {{ $matkaNumbers->firstItem() }} to {{ $matkaNumbers->lastItem() }} of
                            {{ $matkaNumbers->total() }} entries
                        </div>
                        <div>
                            {{ $matkaNumbers->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
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
