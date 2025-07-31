@extends('admin.app.layout')

@section('content')
    @php $isEdit = isset($promo); @endphp

    <form action="{{ $isEdit ? route('admin.promo.update', $promo->id) : route('admin.promo.store') }}" method="post">
        @csrf
        @if ($isEdit)
            @method('PUT')
        @endif

        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">{{ $isEdit ? 'Edit Promo Code' : 'Create Promo Code' }}</h6>

            <div class="input-style-1">
                <label>Promo Code</label>
                <input type="text" name="code" placeholder="Enter promo code"
                    value="{{ old('code', $promo->code ?? '') }}" required>
            </div>

            <div class="input-style-1">
                <label>Discount Amount (₹)</label>
                <input type="number" step="0.01" name="discount_amount" placeholder="e.g. 50"
                    value="{{ old('discount_amount', $promo->discount_amount ?? '') }}">
            </div>

            <div class="input-style-1">
                <label>Discount Percent (%)</label>
                <input type="number" name="discount_percent" placeholder="e.g. 10"
                    value="{{ old('discount_percent', $promo->discount_percent ?? '') }}">
            </div>

            <div class="input-style-1">
                <label>Max Uses</label>
                <input type="number" name="max_uses" placeholder="e.g. 100"
                    value="{{ old('max_uses', $promo->max_uses ?? '') }}">
            </div>

            <div class="input-style-1">
                <label>Expiry Date</label>
                <input type="datetime-local" name="expires_at"
                    value="{{ old('expires_at', isset($promo->expires_at) ? \Carbon\Carbon::parse($promo->expires_at)->format('Y-m-d\TH:i') : '') }}">
            </div>

            <div class="select-style-1">
                <label>Status</label>
                <div class="select-position">
                    <select name="is_active" required>
                        <option value="1" {{ old('is_active', $promo->is_active ?? 1) == 1 ? 'selected' : '' }}>Active
                        </option>
                        <option value="0" {{ old('is_active', $promo->is_active ?? 1) == 0 ? 'selected' : '' }}>
                            Inactive</option>
                    </select>
                </div>
            </div>

            <div class="select-style-1">
                <label>Valid on Trends</label>
                <div class="select-position">
                    <select name="is_valid_on_trends" required>
                        <option value="1"
                            {{ old('is_valid_on_trends', $promo->is_valid_on_trends ?? 0) == 1 ? 'selected' : '' }}>Yes
                        </option>
                        <option value="0"
                            {{ old('is_valid_on_trends', $promo->is_valid_on_trends ?? 0) == 0 ? 'selected' : '' }}>No
                        </option>
                    </select>
                </div>
            </div>

            <div class="select-style-1">
                <label>Valid on Doubt Check</label>
                <div class="select-position">
                    <select name="is_valid_on_doubt" required>
                        <option value="1"
                            {{ old('is_valid_on_doubt', $promo->is_valid_on_doubt ?? 0) == 1 ? 'selected' : '' }}>Yes
                        </option>
                        <option value="0"
                            {{ old('is_valid_on_doubt', $promo->is_valid_on_doubt ?? 0) == 0 ? 'selected' : '' }}>No
                        </option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">
                    {{ $isEdit ? 'Update Promo' : 'Add Promo' }}
                </button>
            </div>
        </div>
    </form>
@endsection
