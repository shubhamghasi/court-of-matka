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
                <h2 class="text-2xl font-bold text-gray-800">📊 Market-Wise Betting Trends</h2>
            </div>

            <form @submit.prevent="submitTrendsForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="trends-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Market</label>
                        <select id="trends-market" x-model="trendsForm.market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            fdprocessedid="7l2x4">
                            <option value="" disabled="" selected="">Choose a market</option>
                            <option value="kalyan">Kalyan</option>
                            <option value="milan">Milan Day</option>
                            <option value="rajdhani">Rajdhani Night</option>
                            <option value="main">Main Bazar</option>
                            <option value="starline">Starline</option>
                        </select>
                    </div>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Premium Insights</h3>
                            <p class="text-gray-600">Get detailed betting trends and analysis</p>
                        </div>
                        <div class="text-2xl font-bold text-indigo-600">₹99</div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="trends-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                ID</label>
                            <div class="flex">
                                <input type="text" id="trends-upi" readonly="" value="courtofmatka@upi"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                                    fdprocessedid="vt8fi">
                                <button type="button" @click="copyUPI('courtofmatka@upi')"
                                    class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition"
                                    fdprocessedid="oiieha">
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
                            <label for="trends-transaction"
                                class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                            <input type="text" id="trends-transaction" x-model="trendsForm.transactionId"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter transaction ID" fdprocessedid="y3fh9d">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                        fdprocessedid="ah8ofh">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        Show Trends
                    </button>
                </div>
            </form>

            <!-- Trends Results -->
            <div x-show="showTrends" x-transition="" class="mt-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">Betting Trends for <span x-text="trendsForm.market"
                            class="capitalize"></span></h3>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Most Played Numbers</h4>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">128</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">345</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">670</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">789</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">234</span>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Recent Winning Numbers</h4>
                            <div class="grid grid-cols-3 gap-2 mt-2">
                                <div class="bg-green-50 p-2 rounded text-center">
                                    <div class="text-green-600 font-semibold">128</div>
                                    <div class="text-xs text-gray-500">Yesterday</div>
                                </div>
                                <div class="bg-green-50 p-2 rounded text-center">
                                    <div class="text-green-600 font-semibold">345</div>
                                    <div class="text-xs text-gray-500">2 days ago</div>
                                </div>
                                <div class="bg-green-50 p-2 rounded text-center">
                                    <div class="text-green-600 font-semibold">567</div>
                                    <div class="text-xs text-gray-500">3 days ago</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Trend Analysis</h4>
                            <div class="h-40 bg-gray-50 rounded-lg mt-2 p-2 flex items-center justify-center">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 400 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0,50 C50,30 100,70 150,50 C200,30 250,60 300,40 C350,20 400,50 400,50"
                                        stroke="#8b5cf6" stroke-width="3" fill="none"></path>
                                    <path d="M0,50 C50,30 100,70 150,50 C200,30 250,60 300,40 C350,20 400,50 400,50"
                                        stroke="#c4b5fd" stroke-width="12" fill="none" stroke-opacity="0.2">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
