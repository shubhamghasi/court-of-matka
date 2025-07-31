@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Number Amount List</h6>
                </div>
                <div class="right">
                    <a href="{{ route('admin.manage.number.create') }}" class="btn btn-primary">Add Number Amount</a>
                </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">Market Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">
                                    Number Type
                                </h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">
                                    Number
                                </h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">
                                    Amount
                                </h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-center">
                                    Created At
                                </h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">
                                    Action
                                </h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($numberAmountCollection as $numData)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $numData->market?->name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ ucfirst($numData->number_type?->name) }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $numData->number }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">₹{{ $numData->amount }}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-center">{{ $numData->created_at->format('d M, Y  h:i A') }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.manage.number.edit', $numData->id) }}">
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
                                                <form action="{{ route('admin.manage.number.destroy', $numData->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.manage.number.edit', $numData->id) }}"><button
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
