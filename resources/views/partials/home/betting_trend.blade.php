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
            <div id="result_container"></div>
        </div>
    </div>
</section>
@push('scripts')
    <script src="/assets/js/trends/index.js"></script>
@endpush
