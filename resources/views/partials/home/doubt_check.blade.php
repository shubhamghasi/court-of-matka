<!-- Section 5: Doubt Check -->
<section id="doubt" class="mb-12">
    <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
        <div class="p-8">
            <div class="flex items-center mb-6">
                <div class="bg-pink-500 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">{{ $options['doubt_title'] ?? 'Doubt Check' }}</h2>
            </div>

            <form id="doubt_check_form" onsubmit="submitDoubtForm(event)" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="doubt_check_market" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Market</label>
                        <select id="doubt_check_market" name="market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose a market</option>
                            @foreach ($marketsCollection as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="doubt_check_number_type" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Number Type</label>
                        <select id="doubt_check_number_type" name="number_type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose Type</option>
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="doubt_check_number" class="block text-sm font-medium text-gray-700 mb-1">Enter
                            Number</label>
                        <input type="text" name="number" id="doubt_check_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter number for prediction">
                    </div>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Premium Prediction</h3>
                            <p class="text-gray-600">Get expert analysis on your number</p>
                        </div>
                        <div class="text-2xl font-bold text-indigo-600">
                            ₹{{ !empty($options['doubt_check_amount']) ? $options['doubt_check_amount'] : '0.00' }}
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="doubt_check_upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                ID</label>
                            <div class="flex">
                                <input type="text" id="doubt_check_upi" readonly
                                    value="{{ $options['upi_id'] ?? 'demo@upi' }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-l-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <button type="button" onclick="copyUPI()"
                                    class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label for="doubt_check_promo" class="block text-sm font-medium text-gray-700 mb-1">
                                Promo Code (optional)
                            </label>

                            <div class="flex flex-col sm:flex-row gap-2">
                                <input type="text" name="promo" id="doubt_check_promo"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm"
                                    placeholder="Enter promo code if you have one">

                                <button type="button" onclick="checkPromoCode()"
                                    class="sm:w-auto w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition text-sm">
                                    Check Promo
                                </button>
                            </div>

                            <p id="promo_check_result" class="text-sm mt-2"></p>
                        </div>
                        <div>
                            <label for="doubt_check_transaction_id"
                                class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                            <input type="text" name="transactionId" id="doubt_check_transaction_id"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter transaction ID">
                        </div>

                        <!-- ✅ Info Note -->
                        <div class="bg-yellow-100 border-l-4 border-yellow-400 p-4 text-yellow-800 rounded-md text-sm">
                            <strong>Note:</strong> All premium prediction requests will be delivered within <strong>30
                                minutes</strong> via notifications and your registered email.
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                        Resolve Doubt
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        function showToast(type, message) {
            const toastId = 'toast-' + Date.now();
            const toast = $(`
                <div id="${toastId}" class="px-4 py-3 rounded shadow text-white flex items-center justify-between gap-4 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}">
                    <span>${message}</span>
                    <button onclick="$('#${toastId}').fadeOut();" class="text-white font-bold text-lg">&times;</button>
                </div>
            `);

            $('#toast-container').append(toast);
            setTimeout(() => {
                toast.fadeOut(400, () => toast.remove());
            }, 4000);
        }

        function submitDoubtForm(e) {
            e.preventDefault();

            const market = document.getElementById("doubt_check_market").value;
            const numberType = document.getElementById("doubt_check_number_type").value;
            const number = document.getElementById("doubt_check_number").value.trim();
            const transactionId = document.getElementById("doubt_check_transaction_id").value.trim();
            const promo = document.getElementById("doubt_check_promo").value.trim();

            if (!market || !numberType || !number || !transactionId) {
                showToast('error', "Please fill in all fields before submitting.");
                return;
            }

            $.ajax({
                url: '{{ route('doubt.check.submit') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    market: market,
                    number_type: numberType,
                    number: number,
                    transactionId: transactionId
                },
                beforeSend: function() {
                    // Optional: UI blocking here
                },
                success: function(response) {
                    if (response.success) {
                        showToast('success', response.message || "Doubt submitted successfully!");
                        document.getElementById("doubt_check_form").reset();
                    } else {
                        showToast('error', response.message || "Something went wrong.");
                    }
                },
                error: function(xhr) {
                    showToast('error', "Submission failed. Please try again.");
                }
            });
        }

        function checkPromoCode() {
            const promo = document.getElementById("doubt_check_promo").value.trim();
            const resultBox = document.getElementById("promo_check_result");

            if (!promo) {
                resultBox.textContent = "Please enter a promo code.";
                resultBox.className = "text-sm text-red-600 mt-2";
                return;
            }

            $.ajax({
                url: '{{ route('promo.check') }}', 
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    promo: promo
                },
                success: function(response) {
                    if (response.valid) {
                        resultBox.textContent = response.message || "Promo code is valid!";
                        resultBox.className = "text-sm text-green-600 mt-2";
                    } else {
                        resultBox.textContent = response.message || "Invalid or expired promo code.";
                        resultBox.className = "text-sm text-red-600 mt-2";
                    }
                },
                error: function() {
                    resultBox.textContent = "Could not verify promo code. Try again.";
                    resultBox.className = "text-sm text-red-600 mt-2";
                }
            });
        }
    </script>
@endpush
