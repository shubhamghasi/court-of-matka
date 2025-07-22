@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Number Types</h6>
                </div>
                <div class="right">
                    <a href="{{ route('admin.number.type.create') }}" class="btn btn-primary">Add Type</a>
                </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">ID</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Name</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium text-end">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typesCollection as $type)
                            <tr>
                                <td>
                                    <p class="text-sm">{{ $type->id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">{{ strtoupper($type->name) }}</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <a href="{{ route('admin.number.type.edit', $type->id) }}">
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
                                                <form
                                                    action="{{ route('admin.number.type.destroy', $type->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="text-gray btn">Remove</button>
                                                </form>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('admin.number.type.edit', $type->id) }}"><button
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
