@php
    $numberTypes = $numberTypes ?? []; // array of id => name
@endphp

@extends('admin.app.layout')

@section('content')
    <form action="{{ route('admin.matka.numbers.store') }}" method="POST">
        @csrf

        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">Add Matka Number</h6>

            {{-- Number Type --}}
            <div class="input-style-1">
                <label>Number Type</label>
                <select name="number_type_id" id="number_type_id" class="form-control">
                    <option value="">-- Select Type --</option>
                    @foreach ($numberTypesCollection as $number_type)
                        <option value="{{ $number_type->id }}" data-name="{{ $number_type->name }}"
                            {{ old('number_type_id') == $number_type->id ? 'selected' : '' }}>
                            {{ ucfirst($number_type->name) }}
                        </option>
                    @endforeach
                </select>
                @error('number_type_id')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <input type="hidden" name="number_type_name" id="number_type_name" value="{{ old('number_type_name') }}">

            {{-- Number --}}
            <div class="input-style-1 mt-3">
                <label>Number(s)</label>
                <input type="text" name="number" placeholder="Enter comma separated numbers"
                    value="{{ old('number') }}" />
                @error('number')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- Panel Number (shown conditionally) --}}
            <div class="input-style-1 mt-3 {{ old('number_type_name') && strtolower(old('number_type_name')) === 'panel' ? '' : 'd-none' }}"
                id="panel_number_field">
                <label>Panel Number</label>
                <input type="text" name="panel_number" placeholder="Enter comma separated panel numbers"
                    value="{{ old('panel_number') }}" />
                @error('panel_number')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">Add Number</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const numberTypeSelect = document.getElementById('number_type_id');
            const panelNumberField = document.getElementById('panel_number_field');

            numberTypeSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const selectedText = selectedOption.text.toLowerCase();
                const typeName = selectedOption.getAttribute('data-name');

                if (selectedText.includes('panel')) {
                    panelNumberField.classList.remove('d-none');
                } else {
                    panelNumberField.classList.add('d-none');
                }

                document.getElementById('number_type_name').value = typeName;
            });
        });
    </script>
@endpush