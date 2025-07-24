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
                <h2 class="text-2xl font-bold text-gray-800">Doubt Check</h2>
            </div>

            <form @submit.prevent="submitDoubtForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="doubt-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Market</label>
                        <select id="doubt-market" x-model="doubtForm.market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            fdprocessedid="06jnueh">
                            <option value="" disabled="" selected="">Choose a market</option>
                            <option value="kalyan">Kalyan</option>
                            <option value="milan">Milan Day</option>
                            <option value="rajdhani">Rajdhani Night</option>
                            <option value="main">Main Bazar</option>
                            <option value="starline">Starline</option>
                        </select>
                    </div>

                    <div>
                        <label for="doubt-number" class="block text-sm font-medium text-gray-700 mb-1">Enter
                            Number</label>
                        <input type="text" id="doubt-number" x-model="doubtForm.number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter number for prediction" fdprocessedid="ksd3fn">
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
                            <label for="doubt-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                ID</label>
                            <div class="flex">
                                <input type="text" id="upi" readonly value="{{ $admin_upi_id ?? 'test@upi' }}"
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
                            <label for="doubt-transaction"
                                class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                            <input type="text" id="doubt-transaction" x-model="doubtForm.transactionId"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter transaction ID" fdprocessedid="y924ri">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                        fdprocessedid="sujruc">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                        Check Prediction
                    </button>
                </div>
            </form>

            <!-- Prediction Results -->
            <div x-show="showPrediction" x-transition="" class="mt-6">
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Prediction Result</h3>

                    <div class="flex items-center justify-center">
                        <div class="text-center">
                            <div x-show="predictionResult === 'strong'"
                                class="bg-green-100 text-green-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                Strong Chances
                            </div>
                            <div x-show="predictionResult === 'good'"
                                class="bg-blue-100 text-blue-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                Good Chances
                            </div>
                            <div x-show="predictionResult === 'possible'"
                                class="bg-yellow-100 text-yellow-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                Can Be Possible
                            </div>
                            <div x-show="predictionResult === 'weak'"
                                class="bg-orange-100 text-orange-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                Weak Chances
                            </div>
                            <div x-show="predictionResult === 'no'"
                                class="bg-red-100 text-red-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                No Chance
                            </div>

                            <p class="text-gray-600">For number <span x-text="doubtForm.number"
                                    class="font-semibold"></span> in <span x-text="doubtForm.market"
                                    class="font-semibold capitalize"></span> market</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
