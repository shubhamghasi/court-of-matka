@php
    $numberAmountCollection = $numberAmountCollection ?? null;
@endphp
@extends('admin.app.layout')
@section('content')
    <div class="m-3 card-style mb-30">
        <form action="{{ route('admin.manage.number.store') }}" method="post">
            @csrf
            <div class="select-style-1">
                <label>Select Market</label>
                <div class="select-position">
                    <select required name="market_id">
                        <option value disabled selected>Select Market</option>
                        @foreach ($marketsCollection as $market)
                            <option value="{{ $market->id }}"
                                {{ $numberAmountCollection?->market_id == $market->id ? 'selected' : '' }}>{{ $market->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="select-style-1">
                <label>Select Number Type</label>
                <div class="select-position">
                    <select required name="number_type_id">
                        <option value="" disabled selected>Select Number Type</option>
                        @foreach ($numberTypeCollection as $numberType)
                            <option value="{{ $numberType->id }}"
                                {{ $numberAmountCollection?->number_type_id == $numberType->id ? 'selected' : '' }}>
                                {{ $numberType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="input-style-1">
                <label>Number</label>
                <input type="number" placeholder="09" name="number" value="{{ $numberAmountCollection?->number }}">
            </div>
            <div class="input-style-1">
                <label>Amount</label>
                <input type="number" placeholder="₹500.00" name="amount" value="{{ $numberAmountCollection?->amount }}">
            </div>
            <button class="main-btn primary-btn btn-hover">Add</button>
        </form>
    </div>
@endsection
