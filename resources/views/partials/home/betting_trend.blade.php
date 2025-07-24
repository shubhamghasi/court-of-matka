<!-- Section 4: Market-Wise Betting Trends -->
<section id="trends" class="mb-12">
    <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
        <div class="p-8">
            <div class="flex items-center mb-6">
                <div class="bg-purple-500 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Check Trending Number</h2>
            </div>

            <form id="trendsForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Market Select 1 -->
                    <div>
                        <label for="trends-market" class="block text-sm font-medium text-gray-700 mb-1">Select Market
                            1</label>
                        <select name="market" id="trends-market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose a market</option>
                            @foreach ($marketsCollection as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Market Select 2 -->
                    <div>
                        <label for="number_type" class="block text-sm font-medium text-gray-700 mb-1">Select Number Type</label>
                        <select name="number_type" id="number_type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose Type</option>
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Premium Insights</h3>
                            <p class="text-gray-600">Get detailed betting trends and analysis</p>
                        </div>
                        <div class="text-2xl font-bold text-indigo-600">₹{{ !empty($options['trend_check_amount']) ? $options['trend_check_amount'] : '0.00' }}</div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="trends-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI ID</label>
                            <div class="flex">
                                <input type="text" id="trends-upi" readonly value="{{ $options['upi_id'] ?? "demo@upi"}}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50">
                                <button type="button" id="copyUPI"
                                    class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label for="trend_check" class="block text-sm font-medium text-gray-700 mb-1">Transaction
                                ID</label>
                            <input type="text" name="transaction_id" id="trend_check"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter transaction ID">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Get Number
                    </button>
                </div>
            </form>

            <!-- Static Trends Results -->
            <div id="predictionSuccessMessage" style="display: none;"
                class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <span class="block sm:inline"> We have recieved your query! We will send you an email within 10 minutes
                    with predicted number upon validating the payment information.</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- Error Message Block -->
            <div id="PredictionerrorMessage" style="display: none;"
                class="mt-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline" id="errorText">Something went wrong.</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="$('#errorMessage').fadeOut();">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                        </path>
                    </svg>
                </button>
            </div>


        </div>
    </div>
</section>
