<!-- Section 3: Loss Refund -->
<section id="refund" class="mb-12">
    <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
        <div class="p-8">
            <div class="flex items-center mb-6">
                <div class="bg-blue-500 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">🛡️ Loss Refund (With Proof)</h2>
            </div>

            <form @submit.prevent="submitRefundForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="refund-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                            Market</label>
                        <select id="refund-market" x-model="refundForm.market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            fdprocessedid="pxgezs">
                            <option value="" disabled="" selected="">Choose a market</option>
                            <option value="kalyan">Kalyan</option>
                            <option value="milan">Milan Day</option>
                            <option value="rajdhani">Rajdhani Night</option>
                            <option value="main">Main Bazar</option>
                            <option value="starline">Starline</option>
                        </select>
                    </div>

                    <div>
                        <label for="bet-number" class="block text-sm font-medium text-gray-700 mb-1">Bet
                            Number</label>
                        <input type="text" id="bet-number" x-model="refundForm.betNumber"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter your bet number" fdprocessedid="5503t">
                    </div>

                    <div>
                        <label for="amount-played" class="block text-sm font-medium text-gray-700 mb-1">Amount
                            Played</label>
                        <input type="number" id="amount-played" x-model="refundForm.amountPlayed"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter amount played" fdprocessedid="p22kpw">
                    </div>

                    <div>
                        <label for="proof-upload" class="block text-sm font-medium text-gray-700 mb-1">Upload
                            Proof</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="proof-upload"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-1 text-sm text-gray-500"><span class="font-semibold">Click to
                                            upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 2MB)</p>
                                </div>
                                <input id="proof-upload" type="file" class="hidden" accept=".jpg,.jpeg,.png"
                                    @change="handleFileUpload($event)">
                            </label>
                        </div>
                        <p x-text="refundForm.fileName" class="mt-1 text-sm text-gray-500"></p>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                        fdprocessedid="d769t8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Submit Refund Request
                    </button>
                </div>
            </form>

            <!-- Success Message -->
            <div x-show="refundSuccess" x-transition=""
                class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline"> Your refund request has been submitted successfully.</span>
                <button @click="refundSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                    fdprocessedid="dlhzfr">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
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
