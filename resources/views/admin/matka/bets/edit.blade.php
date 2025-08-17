@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">
                        {{ isset($bet) ? 'Edit Bet' : 'Create Bet' }}
                    </h6>
                </div>
            </div>

            <form action="{{ isset($bet) ? route('admin.matka.bets.edit', $bet->id) : route('admin.matka.bets.create') }}"
                method="POST">
                @csrf
                {{-- Support both create & update with one form --}}
                @if (isset($bet))
                    @method('POST') {{-- still POST since controller checks --}}
                @endif

                {{-- Color --}}
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <div class="number-box p-3 text-center rounded" data-color="{{ old('color', $bet->color ?? 'red') }}"
                        style="
            cursor: pointer;
            background-color: {{ old('color', $bet->color ?? 'red') === 'yellow' ? '#FFF3CD' : (old('color', $bet->color ?? 'red') === 'green' ? '#D4EDDA' : '#F8D7DA') }};
            color: {{ old('color', $bet->color ?? 'red') === 'yellow' ? '#664D03' : (old('color', $bet->color ?? 'red') === 'green' ? '#0F5132' : '#842029') }};
        ">
                        {{ ucfirst(old('color', $bet->color ?? 'red')) }}
                    </div>
                    <input type="hidden" name="color" class="color-input"
                        value="{{ old('color', $bet->color ?? 'red') }}">
                </div>


                {{-- Market --}}
                <div class="mb-3">
                    <label for="market_id" class="form-label">Market</label>
                    <select name="market_id" id="market_id" class="form-control @error('market_id') is-invalid @enderror"
                        required>
                        <option value="">-- Select Market --</option>
                        @foreach ($markets as $market)
                            <option value="{{ $market->id }}"
                                {{ old('market_id', $bet->market_id ?? '') == $market->id ? 'selected' : '' }}>
                                {{ $market->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('market_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Number Type --}}
                <div class="mb-3">
                    <label for="number_type_id" class="form-label">Number Type</label>
                    <select name="number_type_id" id="number_type_id"
                        class="form-control @error('number_type_id') is-invalid @enderror" required>
                        <option value="">-- Select Number Type --</option>
                        @foreach ($numberTypes as $type)
                            <option value="{{ $type->id }}"
                                {{ old('number_type_id', $bet->number_type_id ?? '') == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('number_type_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Number --}}
                <div class="mb-3">
                    <label for="number_id" class="form-label">Number</label>
                    <select name="number_id" id="number_id" class="form-control @error('number_id') is-invalid @enderror"
                        required>
                        <option value="">-- Select Number --</option>
                        @foreach ($numbers as $number)
                            <option value="{{ $number->id }}"
                                {{ old('number_id', $bet->number_id ?? '') == $number->id ? 'selected' : '' }}>
                                {{ $number->number }}
                            </option>
                        @endforeach
                    </select>
                    @error('number_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ isset($bet) ? 'Update Bet' : 'Create Bet' }}
                    </button>
                    <a href="{{ route('admin.matka.bets.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            const colors = {
                red: {
                    bg: "#F8D7DA",
                    text: "#842029"
                },
                yellow: {
                    bg: "#FFF3CD",
                    text: "#664D03"
                },
                green: {
                    bg: "#D4EDDA",
                    text: "#0F5132"
                }
            };

            $(".number-box").on("click", function() {
                let currentColor = $(this).attr("data-color");
                let nextColor = currentColor === "red" ?
                    "yellow" :
                    currentColor === "yellow" ?
                    "green" :
                    "red";

                $(this)
                    .attr("data-color", nextColor)
                    .css({
                        "background-color": colors[nextColor].bg,
                        "color": colors[nextColor].text
                    })
                    .text(nextColor.charAt(0).toUpperCase() + nextColor.slice(1));

                $(this).siblings(".color-input").val(nextColor);
            });
        });
    </script>
@endpush
