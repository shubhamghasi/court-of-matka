@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Promo List</h6>
                </div>
                <div class="right">
                    <a href="{{ route('admin.promo.create') }}" class="main-btn primary-btn btn-sm">+ Add Promo</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium text-center">Code</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Amount</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Percent</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Max Uses</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Used</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Valid on Trends</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Valid on Doubt</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Status</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center text-center">Expires</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center text-center">Created at</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center text-end">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($promos as $promo)
                            <tr>
                                <td>
                                    <p class="text-sm text-center">{{ strtoupper($promo->code) }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->discount_amount ? "₹".$promo->discount_amount : '---' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->discount_percent ? $promo->discount_percent . '%' : '---' }}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->max_uses ?? '-' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->uses }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->is_valid_on_trends ? 'Yes' : 'No' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->is_valid_on_doubt ? 'Yes' : 'No' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $promo->is_active ? 'Active' : 'Inactive' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">
                                        {{ $promo->expires_at ? $promo->expires_at->format('d M, Y h:i A') : '—' }}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">
                                        {{ $promo->created_at->format('d M, Y h:i A') }}
                                    </p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.promo.edit', $promo->id) }}">
                                            <button class="edit">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                        </a>
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction{{ $promo->id }}"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $promo->id }}">
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.promo.destroy', $promo->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this promo?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.promo.edit', $promo->id) }}">
                                                    <button class="btn text-gray">Edit</button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <p class="text-sm text-center">No promo codes available.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $promos->links() }}
            </div>
        </div>
    </div>
@endsection
