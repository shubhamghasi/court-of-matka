@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Notifications List</h6>
                </div>
                <div class="right">
                    <a href="{{ route('admin.notifications.create') }}" class="main-btn primary-btn btn-sm">Add
                        Notification</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">Message</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Start Time</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">End Time</h6>
                            </th>
                            <th class="text-end">
                                <h6 class="text-sm text-medium">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notifications as $notification)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $notification->message }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $notification->start_time ?? '—' }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $notification->end_time ?? '—' }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.notifications.edit', $notification->id) }}">
                                            <button class="edit">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                        </a>

                                        <button class="more-btn ml-10 dropdown-toggle"
                                            id="moreAction{{ $notification->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction{{ $notification->id }}">
                                            <li class="dropdown-item">
                                                <form action="{{ route('admin.notifications.destroy', $notification->id) }}"
                                                    method="post"
                                                    onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-gray">Delete</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.notifications.edit', $notification->id) }}">
                                                    <button class="btn text-gray">Edit</button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <p class="text-center text-sm text-gray-500">No notifications found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
