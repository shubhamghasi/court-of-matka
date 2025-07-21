@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Users List</h6>
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
                                <h6 class="text-sm text-medium">Email</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Verified?</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">Action</h6>
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
                        @foreach ($usersCollection as $user)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $user->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $user->email }}</p>
                                </td>
                                <td>
                                    <p class=" text-center status-btn {{ $user->email_verified_at ? "success-btn" : "danger-btn text-white" }}">{{ $user->email_verified_at ? "Verified" : "Not Verified" }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.market.edit', $user->id) }}">
                                            <button class="edit">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                        </a>
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.market.destroy', $user->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.market.edit', $user->id) }}"><button
                                                        class="btn text-gray">
                                                        Edit
                                                    </button></a>
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
