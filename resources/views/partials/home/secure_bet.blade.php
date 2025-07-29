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
                <h2 class="text-2xl font-bold text-gray-800">{{ $options['refund_title'] ?? "Refund Amount" }}</h2>
            </div>

            <div class="my-3">
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-md text-sm text-yellow-800">
                    <strong>Note:</strong> If you experience a loss based on our prediction (whether played on our app
                    or any other platform),
                    you are eligible to receive <span class="font-semibold">up to 50% refund</span> upon valid proof
                    submission.
                </div>
            </div>

            <form id="refundForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div>
                        <label for="refund-market" class="block text-sm font-medium text-gray-700 mb-1">Select Market
                            1</label>
                        <select name="market_id" id="refund-market"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose a market</option>
                            @foreach ($marketsCollection as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="refund_number_type" class="block text-sm font-medium text-gray-700 mb-1">Select Number
                            Type</label>
                        <select name="number_type" id="refund_number_type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="" disabled selected>Choose Type</option>
                            @foreach ($numberTypes as $type)
                                <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="bet_number" class="block text-sm font-medium text-gray-700 mb-1">
                            Bet Number
                        </label>
                        <input type="text" name="bet_number" id="bet_number"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter Bet Number" required>
                    </div>
                </div>
                <div>
                    <label for="upi_address" class="block text-sm font-medium text-gray-700 mb-1">
                        UPI Address for Refund
                    </label>
                    <input type="text" name="upi_address" id="upi_address"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Enter your UPI address" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Submit Refund Request
                    </button>
                </div>
            </form>

            <!-- Success Message -->
            <div id="refundSuccess"
                class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative hidden"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline"> Your refund request has been submitted successfully.</span>
                <button id="dismissSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- WhatsApp Proof Submission Message -->
            <div id="whatsappInstruction"
                class="mt-4 bg-green-100 border border-green-300 text-green-900 px-4 py-4 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 hidden">

                <div>
                    <p class="font-semibold mb-1 text-base">Thank you for submitting your refund request.</p>
                    <p class="text-sm">Please share proof of your loss with us on WhatsApp to complete the verification
                        process.</p>
                </div>

                <a href="https://wa.me/{{ !empty($options['whatsapp_number']) ? $options['whatsapp_number'] : '9878113585' }}"
                    target="_blank"
                    class="inline-flex items-center justify-center gap-2 bg-green-500 text-white px-5 py-2.5 rounded-lg hover:bg-green-600 transition text-sm w-full sm:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white" viewBox="0 0 24 24">
                        <path
                            d="M20.52 3.48A11.82 11.82 0 0012.01 0C5.37 0 .01 5.36.01 12c0 2.11.55 4.13 1.6 5.95L0 24l6.2-1.62a11.92 11.92 0 005.81 1.48h.01c6.64 0 12-5.36 12-12 0-3.2-1.24-6.2-3.5-8.52zm-8.51 18.1h-.01a9.88 9.88 0 01-5.05-1.37l-.36-.21-3.68.96.99-3.58-.24-.37a9.86 9.86 0 01-1.52-5.29C2.14 6.38 6.49 2 12 2c2.66 0 5.17 1.04 7.07 2.93A9.94 9.94 0 0122 12c0 5.52-4.49 10-10 10zm5.41-7.55c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15s-.77.96-.94 1.16-.35.22-.65.07c-.3-.15-1.26-.46-2.41-1.48-.89-.8-1.5-1.8-1.68-2.1-.17-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.38-.02-.53-.07-.15-.67-1.62-.91-2.22-.24-.6-.49-.52-.67-.53H7.5c-.2 0-.52.07-.8.35s-1.05 1.02-1.05 2.5c0 1.47 1.07 2.9 1.22 3.1.15.2 2.1 3.21 5.09 4.5.71.31 1.26.5 1.7.64.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.09-.12-.27-.2-.57-.35z" />
                    </svg>
                    <span class="font-medium">Chat on WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>
