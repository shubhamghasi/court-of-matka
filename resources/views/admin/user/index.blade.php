@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Users List</h6>
                </div>
                <div class="right d-flex">
                    <form action="{{ route('admin.user') }}" method="GET" class="d-flex me-3">
                        <input type="text" name="search" class="form-control me-2" placeholder="Search users..."
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <!-- Bulk remove trends access -->
                    <form action="{{ route('admin.users.removeTrendsAccess') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to remove trends access from ALL users?');">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger">Remove All Trends Access</button>
                    </form>
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
                                <h6 class="text-sm text-medium">User Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Phone</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Email</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Verified?</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Has Trends Access</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Created At</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usersCollection as $user)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $user->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $user->phone ?? 'N/A' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $user->email }}</p>
                                </td>
                                <td>
                                    <p
                                        class="text-center status-btn {{ $user->email_verified_at ? 'success-btn' : 'danger-btn text-white' }}">
                                        {{ $user->email_verified_at ? 'Verified' : 'Not Verified' }}
                                    </p>
                                </td>
                                <td>
                                    <p
                                        class="text-center status-btn {{ $user->has_trends_access ? 'success-btn' : 'danger-btn text-white' }}">
                                        {{ $user->has_trends_access ? 'Yes' : 'No' }}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $user->created_at->format('d M, Y h:i A') }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.market.edit', $user->id) }}">
                                            <button class="edit">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                        </a>
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction{{ $user->id }}"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $user->id }}">
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.market.destroy', $user->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.market.edit', $user->id) }}">
                                                    <button class="btn text-gray">Edit</button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No users found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="mt-3">
                    {{ $usersCollection->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
