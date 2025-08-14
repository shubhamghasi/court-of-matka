<!-- Play Matka Section -->
<section id="play" class="mb-12">
    <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
        <div class="p-8">
            <div class="flex items-center mb-6">
                <div class="bg-green-500 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">{{ $options['play_matka_title'] ?? 'Play Matka' }}</h2>
            </div>

            <form id="play_matka_form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Select Market</label>
                        <select id="market" name="market_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Choose a market</option>
                            @foreach ($marketsCollection as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Number Type</label>
                        <select id="number_type_id" name="number_type_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Select type</option>
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Panel Number (hidden initially) -->
                    <div id="panelNumberField" class="hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Panel Number</label>
                        <input type="text" id="panel_number" name="panel_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Enter Panel Number">
                    </div>
                </div>

                <!-- Dynamic Numbers List -->
                <div id="numbersList" class="mt-4"></div>

                <!-- Submit -->
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition">
                        <i class="fa-solid fa-lock text-warning"></i> Lock Prediction
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#number_type_id").change(function() {
                let numberTypeId = $(this).val();
                number_type = $(this).find("option:selected").text();

                if (!numberTypeId) return;

                if (number_type.toLowerCase().includes("panel")) {
                    $("#panelNumberField").removeClass("hidden");
                    $("#numbersList").html('');
                } else {
                    $("#panelNumberField").addClass("hidden");
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

            // ✅ Require at least one checkbox selected
            $("#play_matka_form").on("submit", function(e) {
                e.preventDefault();

                let form = $(this);

                // Check if at least one checkbox is selected
                let hasValue = $(".bet-checkbox:checked").length > 0;
                if (!hasValue) {
                    alert("Please select at least one number before submitting.");
                    return;
                }

                $.ajax({
                    url: "/matka/play-bet/store",
                    type: "POST",
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        form.find("button[type=submit]").prop("disabled", true).text(
                            "Submitting...");
                    },
                    success: function(response) {
                        showToast("success", response.message || "Bet placed successfully");
                        form.trigger("reset"); // clear the form
                        $("#numbersList").html(""); // clear numbers list
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = Object.values(errors).flat().join("\n");
                            showToast("error", errorMessages);
                        } else {
                            showToast("error", "Something went wrong!");
                        }
                    },
                    complete: function() {
                        form.find("button[type=submit]").prop("disabled", false).text(
                            "Submit Bet");
                    }
                });
            });
        });

        function fetchNumbers(numberTypeId, panelNumber = '') {
            $.ajax({
                url: "{{ route('matka.play.getNumbers') }}",
                type: "get",
                data: {
                    number_type_id: numberTypeId,
                    panel_number: panelNumber,
                    _token: "{{ csrf_token() }}"
                },
                success: function(numbers) {
                    let html = '<div class="grid grid-cols-2 md:grid-cols-4 gap-4">';
                    numbers.forEach(function(num) {
                        let labelText = num.number;
                        if (number_type.toLowerCase().includes("panel")) {
                            labelText += ` (${num.panel_number})`;
                        }

                        html += `
                    <div class="flex items-center gap-2">
                        <input id="${num.type.name}_${num.id}" type="checkbox" 
                            name="bets[]" 
                            value="${num.id}" 
                            class="bet-checkbox w-4 h-4">
                        <label for="${num.type.name}_${num.id}" class="text-sm">${labelText}</label>
                    </div>
                `;
                    });
                    html += '</div>';
                    $("#numbersList").html(html);
                }
            });
        }
    </script>
@endpush
