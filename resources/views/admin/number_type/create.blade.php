@extends('admin.app.layout')
@section('content')
    <form action="{{ route('admin.number.type.add') }}" method="post">
        @csrf
        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">Type Of Number</h6>
            <div class="input-style-1">
                <input type="text" placeholder="Jodi" name="name">
            </div>
            <!-- end input -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">Add Type</button>
            </div>
        </div>
    </form>
@endsection
