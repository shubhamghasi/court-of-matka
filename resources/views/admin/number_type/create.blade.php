@php
    $typesCollection = $typesCollection ?? null;
@endphp
@extends('admin.app.layout')
@section('content')
    <form action="{{ !empty($typesCollection) ? route('admin.number.type.update', $typesCollection->id) : route('admin.number.type.store') }}"
        method="post">
        @csrf
        @if ($typesCollection)
            @method('patch')
        @endif
        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">Type Of Number</h6>
            <div class="input-style-1">
                <input type="text" placeholder="Jodi" name="name" value="{{ $typesCollection?->name }}">
            </div>
            <!-- end input -->
            <div class="d-flex justify-content-end">
                <button type="submit"
                    class="main-btn primary-btn square-btn btn-hover">{{ !empty($typesCollection) ? 'Update' : 'Add Type' }}</button>
            </div>
        </div>
    </form>
@endsection
