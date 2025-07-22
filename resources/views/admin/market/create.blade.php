@extends('admin.app.layout')
@section('content')
    <form action="{{ route('admin.market.store') }}" method="post">
        @csrf
        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">Market Name</h6>
            <div class="input-style-1">
                <input type="text" placeholder="Market Name" name="name">
            </div>
            <!-- end input -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">Add Market</button>
            </div>
        </div>
    </form>
@endsection
