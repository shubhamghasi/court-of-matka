<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betting Notifications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        purple: {
                            light: '#EDE9FE',
                            DEFAULT: '#8B5CF6',
                            dark: '#6D28D9',
                            darker: '#5B21B6'
                        },
                        green: {
                            light: '#D1FAE5',
                            DEFAULT: '#10B981',
                            dark: '#059669'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F9FAFB;
        }

        .notification-item {
            transition: transform 0.2s ease;
        }

        .notification-item:hover {
            transform: translateY(-2px);
        }

        textarea {
            resize: none;
            cursor: default;
        }

        textarea:focus {
            outline: none;
        }

        .number-badge {
            transition: all 0.3s ease;
        }

        .number-badge:hover {
            transform: scale(1.05);
        }

        .lowest-bet {
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(16, 185, 129, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        .order-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 10px;
            min-width: 18px;
            height: 18px;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen bg-gradient-to-b from-purple-50 to-white">
        <div class="container mx-auto px-4 py-8 max-w-3xl">
            <header class="mb-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-purple-darker">Betting Notifications</h1>
                    <a href="{{ route('home') }}" id="refresh-btn"
                        class="px-4 py-2 bg-purple text-white rounded-lg hover:bg-purple-dark transition-colors">
                        Back
                    </a>
                </div>
            </header>

            <div class="p-4 space-y-6">
                @forelse ($trendNotifications as $trendRequest)
                    @php
                        $predictions = json_decode($trendRequest->predicted_numbers, true) ?? [];
                        $minPercentage = collect($predictions)->min('percentage');
                        $lowestItems = collect($predictions)->where('percentage', $minPercentage)->values();
                        $highlightedNumber = $lowestItems->isNotEmpty() ? $lowestItems->random()['number'] : null;
                    @endphp

                    <div
                        class="notification-item bg-white rounded-xl shadow-sm overflow-hidden border-l-4 border-purple">
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 bg-purple text-white text-xs font-bold rounded-full mr-2">
                                        #{{ $loop->iteration }}
                                    </span>
                                    <h3 class="text-lg font-semibold text-gray-900">Top Numbers having the opportunity
                                    </h3>
                                </div>
                                <span class="text-xs text-gray-500">
                                    {{ $trendRequest->created_at->format('d M Y, h:i A') }}
                                </span>
                            </div>

                            <textarea class="w-full p-3 bg-purple-50 text-gray-700 rounded-lg border-0 mb-4" rows="2" readonly>
Current betting distribution across numbers. The number(s) with the lowest percentage of bets are highlighted in green.
                            </textarea>

                            <div class="grid grid-cols-5 gap-3 md:grid-cols-10">
                                @foreach ($predictions as $item)
                                    @php
                                        $isLowest = $item['percentage'] == $minPercentage;
                                        $isLightest = $isLowest && $item['number'] == $highlightedNumber;
                                    @endphp
                                    <div
                                        class="number-badge relative flex flex-col items-center justify-center p-2 rounded-lg {{ $isLightest ? 'bg-green-100' : ($isLowest ? 'bg-green-300' : 'bg-gray-100') }}">
                                        <span
                                            class="order-badge {{ $isLowest ? 'bg-green-700' : 'bg-purple-dark' }} text-white">
                                            {{ $item['number'] }}
                                        </span>
                                        <span
                                            class="text-lg font-bold {{ $isLowest ? 'text-green-700' : 'text-black' }}">
                                            {{ $item['number'] }}
                                        </span>
                                        <span
                                            class="text-sm {{ $isLowest ? 'text-green-700 font-medium' : 'text-gray-600' }}">
                                            {{ $item['percentage'] }}%
                                        </span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-green-100 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-600">Highest Chance of Winning</span>
                                </div>
                                @if (!$trendRequest->is_read)
                                    <button onclick="markAsRead({{ $trendRequest->id }})"
                                        class="text-sm font-medium text-green-600 hover:text-green-800 transition-colors">
                                        Mark as Read
                                    </button>
                                @else
                                    <span class="text-sm text-gray-400">Read</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-gray-500 mt-10">No prediction notifications yet.</div>
                @endforelse

                @if ($doubtChecks->isNotEmpty())
                    <div class="mt-12 border-t pt-6">
                        <h2 class="text-xl font-semibold text-purple-darker mb-4">Doubt Check Predictions</h2>

                        @foreach ($doubtChecks as $doubt)
                            <div
                                class="notification-item bg-white rounded-xl shadow-sm overflow-hidden border-l-4 border-green">
                                <div class="p-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <span
                                                class="inline-flex items-center justify-center w-6 h-6 bg-green text-white text-xs font-bold rounded-full mr-2">
                                                #{{ $loop->iteration }}
                                            </span>
                                            <h3 class="text-lg font-semibold text-gray-900">Doubt Prediction Review</h3>
                                        </div>
                                        <span class="text-xs text-gray-500">
                                            {{ $doubt->created_at->format('d M Y, h:i A') }}
                                        </span>
                                    </div>

                                    <textarea class="w-full p-3 bg-green-50 text-gray-700 rounded-lg border-0 mb-4" rows="2" readonly>
Number: {{ $doubt->number }} | Market: {{ $doubt->market?->name }} | Type: {{ $doubt->numberType?->name }}
Accuracy: {{ $doubt->accuracy ?? '70%' }}%
                                    </textarea>

                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <div class="w-4 h-4 bg-green-200 rounded-full mr-2"></div>
                                            <span class="text-sm text-gray-600">Review this prediction before sending to
                                                user</span>
                                        </div>

                                        @if (!$doubt->is_read)
                                            <button onclick="markDoubtAsRead({{ $doubt->id }})"
                                                class="text-sm font-medium text-green-600 hover:text-green-800 transition-colors">
                                                Mark as Read
                                            </button>
                                        @else
                                            <span class="text-sm text-gray-400">Read</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function markAsRead(id) {
            fetch(`/notifications/${id}/mark-as-read`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        location.reload();
                    } else {
                        alert('Something went wrong');
                    }
                });
        }

        function markDoubtAsRead(id) {
            fetch(`/notifications/doubt/${id}/mark-as-read`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        location.reload();
                    } else {
                        alert('Something went wrong');
                    }
                });
        }
    </script>
</body>

</html>
