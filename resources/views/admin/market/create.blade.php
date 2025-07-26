@extends('admin.app.layout')
@section('content')
    @php $isEdit = isset($market); @endphp

    <form action="{{ $isEdit ? route('admin.market.update', $market->id) : route('admin.market.store') }}"
        method="post">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">{{ $isEdit ? 'Edit Market' : 'Create Market' }}</h6>

            <div class="input-style-1">
                <label>Market Name</label>
                <input type="text" placeholder="Market Name" name="name"
                    value="{{ old('name', $market->name ?? '') }}" required>
            </div>

            <div class="input-style-1">
                <label>Start Time</label>
                <input type="time" name="start_time"
                    value="{{ old('start_time', $market->start_time ?? '') }}" required>
            </div>

            <div class="input-style-1">
                <label>End Time</label>
                <input type="time" name="end_time"
                    value="{{ old('end_time', $market->end_time ?? '') }}" required>
            </div>

            <div class="select-style-1">
                <label>Select Activeness</label>
                <div class="select-position">
                    <select name="status" required>
                        <option value="1" {{ old('status', $market->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $market->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">
                    {{ $isEdit ? 'Update Market' : 'Add Market' }}
                </button>
            </div>
        </div>
    </form>
@endsection
