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
                <h2 class="text-2xl font-bold text-gray-800">{{ $options['trends_title'] ?? 'Check Trending Number' }}
                </h2>
            </div>

            <form id="trendsForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Market Select 1 -->
                    <div>
                        <label for="trends-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Market</label>
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
                        <label for="number_type" class="block text-sm font-medium text-gray-700 mb-1">Select Number
                            Type</label>
                        <select name="number_type" id="number_type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Panel Number Field (hidden by default) -->
                    <div id="panel-number-field" class="hidden">
                        <label for="panel_number" class="block text-sm font-medium text-gray-700 mb-1">
                            Panel Number
                        </label>
                        <input type="text" name="panel_number" id="panel_number" placeholder="Enter panel number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Date Selector -->
                    <div>
                        <label for="trends_date" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Date</label>
                        <input type="date" name="date" id="trends_date"
                            value="{{ date('Y-m-d', strtotime('-1 day')) }}" max="{{ date('Y-m-d') }}"
                            min="{{ date('Y-m-d', strtotime('-30 days')) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Submit
                    </button>
                </div>

            </form>
            <div class="space-y-4">
                <div>
                    <form id="trends_payment_form" action="{{ route('transactions.store') }}" method="post"
                        class="hidden space-y-6">
                        <!-- Random image above UPI ID -->
                        <div class="flex justify-center">
                            <img src="https://picsum.photos/100" alt="Random"
                                class="w-48 h-48 object-cover rounded-md" />
                        </div>

                        <div
                            class="bg-yellow-100 border border-yellow-300 text-yellow-800 rounded-lg p-4 text-center font-semibold text-lg">
                            Amount to Pay: <span id="trends_amount">₹{{ $options['trend_check_amount'] }}</span>
                        </div>

                        <div>
                            <label for="trends-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI ID</label>
                            <div class="flex">
                                <input type="text" id="trends-upi" readonly
                                    value="{{ $options['upi_id'] ?? 'demo@upi' }}"
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
                            <label for="promo_code" class="block text-sm font-medium text-gray-700 mb-1">
                                Promo Code (optional)
                            </label>

                            <div class="flex flex-col sm:flex-row gap-2">
                                <input type="text" id="promo_code" name="promo_code"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter promo code">

                                <button type="button" onclick="checkDoubtTrend()"
                                    class="sm:w-auto w-full bg-green-600 text-white px-4 rounded-lg hover:bg-green-700 transition text-sm">
                                    Apply
                                </button>
                            </div>

                            <p id="trends_promo_result" class="text-sm mt-2"></p>
                        </div>

                        <div>
                            <label for="trend_check" class="block text-sm font-medium text-gray-700 mb-1">Transaction
                                ID</label>
                            <input type="text" name="transaction_id" id="trend_check"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter transaction ID">
                        </div>

                        <!-- New UPI Address field -->
                        <div>
                            <label for="upi_address" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                Address</label>
                            <input type="text" name="upi_address" id="upi_address"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter your UPI address">
                        </div>
                        <!-- New UPI Address field -->
                        <div>
                            <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Sent Amount</label>
                            <input type="text" name="amount" id="amount"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter your UPI address">
                        </div>



                        <!-- Submit button -->
                        <div>
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition font-semibold">
                                Submit Payment Details
                            </button>
                        </div>
                    </form>
                </div>

                <div id="result_container"></div>
            </div>
        </div>
</section>
@push('scripts')
    <script src="/assets/js/trends/index.js"></script>
@endpush
