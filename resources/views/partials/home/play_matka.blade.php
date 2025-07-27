<!-- Section 2: Play Matka -->
<section id="play" class="mb-12">
    <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
        <div class="p-8">
            <div class="flex items-center mb-6">
                <div class="bg-green-500 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Play Matka</h2>
            </div>

            <form id="play_matka_form" class="space-y-6">
                @method('post')
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="market" class="block text-sm font-medium text-gray-700 mb-1">Select Market</label>
                        <select id="market" name="market_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose a market</option>
                            @foreach ($marketsCollection as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="number_type_id" class="block text-sm font-medium text-gray-700 mb-1">Number
                            Type</label>
                        <select id="number_type_id" name="number_type_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                            <option value="" disabled selected>Select type</option>
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="number" class="block text-sm font-medium text-gray-700 mb-1">Enter Number</label>
                        <input type="text" id="number" name="bet_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter your number">
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Enter Price</label>
                        <input type="number" id="price" name="bet_amount"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter amount">
                    </div>

                    <div>
                        <label for="upi" class="block text-sm font-medium text-gray-700 mb-1">UPI ID</label>
                        <div class="flex">
                            <input type="text" id="upi" readonly value="{{ $options['upi_id'] ?? 'demo@upi' }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50">
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
                        <label for="user_upi" class="block text-sm font-medium text-gray-700 mb-1">Your UPI
                            Address</label>
                        <input type="text" id="user_upi" name="user_upi"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="e.g. yourname@upi">
                    </div>

                    <div>
                        <label for="transaction" class="block text-sm font-medium text-gray-700 mb-1">Transaction
                            ID</label>
                        <input type="text" id="transaction" name="transaction_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter transaction ID">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Submit Bet
                    </button>
                </div>
            </form>

            <!-- Success Message -->
            <div id="successMessage" style="display: none;"
                class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline"> Your bet has been placed successfully.</span>
                <button onclick="hideSuccessMessage()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        // Copy UPI
        function copyUPI() {
            const upiInput = document.getElementById('upi');
            navigator.clipboard.writeText(upiInput.value).then(() => {
                alert('UPI ID copied!');
            });
        }

        // Hide success alert
        function hideSuccessMessage() {
            document.getElementById('successMessage').style.display = 'none';
        }
    </script>
@endpush
