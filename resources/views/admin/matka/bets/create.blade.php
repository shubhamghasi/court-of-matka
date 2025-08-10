@extends('admin.app.layout')

@section('content')
    <form action="{{ route('admin.matka.bets.store') }}" method="POST" id="addBetsForm">
        @csrf

        <div class="m-3 card-style mb-30">
            <h6 class="mb-25">Add Bets</h6>

            {{-- Global Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Market --}}
            <div class="input-style-1">
                <label>Market</label>
                <select name="market_id" class="form-control @error('market_id') is-invalid @enderror">
                    <option value="">-- Select Market --</option>
                    @foreach ($markets as $market)
                        <option value="{{ $market->id }}" {{ old('market_id') == $market->id ? 'selected' : '' }}>
                            {{ $market->name }}
                        </option>
                    @endforeach
                </select>
                @error('market_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Number Type --}}
            <div class="input-style-1 mt-3">
                <label>Number Type</label>
                <select name="number_type_id" id="number_type_id"
                    class="form-control @error('number_type_id') is-invalid @enderror">
                    <option value="">-- Select Type --</option>
                    @foreach ($numberTypes as $type)
                        <option value="{{ $type->id }}" {{ old('number_type_id') == $type->id ? 'selected' : '' }}>
                            {{ ucfirst($type->name) }}
                        </option>
                    @endforeach
                </select>
                @error('number_type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Panel Number Input (hidden by default) --}}
            <div id="panelNumberField" class="input-style-1 mt-3 {{ old('panel_number') ? '' : 'd-none' }}">
                <label>Panel Number</label>
                <input type="text" id="panel_number" name="panel_number" value="{{ old('panel_number') }}"
                    class="form-control @error('panel_number') is-invalid @enderror" placeholder="Enter Panel Number">
                @error('panel_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Numbers List --}}
            <div id="numbersList" class="mt-4">
                {{-- If validation fails, repopulate bets --}}
                @if (old('bets'))
                    <div class="row">
                        @foreach (old('bets') as $betId => $bet)
                            <div class="col-md-3 mb-2">
                                <label>{{ $bet['number_label'] ?? '' }}</label>
                                <input type="hidden" name="bets[{{ $betId }}][number_id]"
                                    value="{{ $bet['number_id'] }}">
                                <input type="number"
                                    class="form-control bet-amount @error("bets.$betId.amount") is-invalid @enderror"
                                    name="bets[{{ $betId }}][amount]" value="{{ $bet['amount'] }}"
                                    placeholder="Amount">
                                @error("bets.$betId.amount")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Submit --}}
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="main-btn primary-btn square-btn btn-hover">Add Bets</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let number_type = '';

        $(document).ready(function() {
            $("#number_type_id").change(function() {
                let numberTypeId = $(this).val();
                number_type = $(this).find("option:selected").text();
                console.log(1);
                if (!numberTypeId) return;

                if (number_type.toLowerCase().includes("panel")) {
                    $("#panelNumberField").removeClass("d-none");
                    $("#numbersList").html('');
                } else {
                    $("#panelNumberField").addClass("d-none");
                    fetchNumbers(numberTypeId);
                }
            });

            $("#panel_number").on("input", function() {
                let panelNumber = $(this).val().trim();
                let numberTypeId = $("#number_type_id").val();

                if (panelNumber.length > 0) {
                    fetchNumbers(numberTypeId, panelNumber);
                } else {
                    $("#numbersList").html('');
                }
            });
        });

        function fetchNumbers(numberTypeId, panelNumber = '') {
            $.ajax({
                url: "{{ route('admin.matka.bets.getNumbers') }}",
                type: "POST",
                data: {
                    number_type_id: numberTypeId,
                    panel_number: panelNumber,
                    _token: "{{ csrf_token() }}"
                },
                success: function(numbers) {
                    let html = '<div class="row">';
                    numbers.forEach(function(num) {
                        let labelText = num.number;
                        if (number_type.toLowerCase().includes("panel")) {
                            labelText += ` (${num.panel_number})`;
                        }

                        html += `
                        <div class="col-md-3 mb-2">
                            <label>${labelText}</label>
                            <input type="hidden" name="bets[${num.id}][number_id]" value="${num.id}">
                            <input type="number" class="form-control bet-amount" name="bets[${num.id}][amount]" placeholder="Amount">
                        </div>
                    `;
                    });
                    html += '</div>';

                    html += `
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <label>Min Value</label>
                            <input type="number" id="minValue" class="form-control" placeholder="Min" min="0">
                        </div>
                        <div class="col-md-3">
                            <label>Max Value</label>
                            <input type="number" id="maxValue" class="form-control" placeholder="Max" min="0">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="button" id="fillRandom" class="btn btn-secondary w-100">Random Amount</button>
                        </div>
                    </div>
                `;

                    $("#numbersList").html(html);

                    // Random amount filler
                    $("#fillRandom").off("click").on("click", function() {
                        let min = parseInt($("#minValue").val()) || 0;
                        let max = parseInt($("#maxValue").val()) || 0;

                        if (min <= 0 || max <= 0 || min > max) {
                            alert("Please enter valid Min and Max values.");
                            return;
                        }

                        $(".bet-amount").each(function() {
                            let randomValue = Math.floor(Math.random() * (max - min + 1)) + min;
                            $(this).val(randomValue);
                        });
                    });
                }
            });
        }
    </script>
@endpush
