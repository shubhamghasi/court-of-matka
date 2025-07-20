@extends('admin.app.layout')
@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Number Types</h6>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>
@endsection
