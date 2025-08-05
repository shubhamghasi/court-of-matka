@extends('admin.app.layout')

@section('title', 'App Settings')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Manage App Settings</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('admin.settings.update') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="app_name" class="form-label">App Name</label>
                                <input type="text" class="form-control" name="app_name" id="app_name"
                                    value="{{ old('app_name', $options['app_name'] ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="upi_id" class="form-label">UPI ID</label>
                                <input type="text" class="form-control" name="upi_id" id="upi_id"
                                    value="{{ old('upi_id', $options['upi_id'] ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="trends_title" class="form-label">Trends Title</label>
                                <input type="text" class="form-control" name="trends_title" id="trends_title"
                                    value="{{ old('trends_title', $options['trends_title'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="doubt_title" class="form-label">Doubt Title</label>
                                <input type="text" class="form-control" name="doubt_title" id="doubt_title"
                                    value="{{ old('doubt_title', $options['doubt_title'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="play_matka_title" class="form-label">Play Matka Title</label>
                                <input type="text" class="form-control" name="play_matka_title" id="play_matka_title"
                                    value="{{ old('play_matka_title', $options['play_matka_title'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="refund_title" class="form-label">Refund Title</label>
                                <input type="text" class="form-control" name="refund_title" id="refund_title"
                                    value="{{ old('refund_title', $options['refund_title'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title"
                                    value="{{ old('meta_title', $options['meta_title'] ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" rows="4" class="form-control">{{ old('meta_description', $options['meta_description'] ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="trend_check_amount" class="form-label">Trend Check Amount</label>
                                <input type="number" step="0.01" class="form-control" name="trend_check_amount"
                                    id="trend_check_amount"
                                    value="{{ old('trend_check_amount', $options['trend_check_amount'] ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="doubt_check_amount" class="form-label">Doubt Check Amount</label>
                                <input type="number" step="0.01" class="form-control" name="doubt_check_amount"
                                    id="doubt_check_amount"
                                    value="{{ old('doubt_check_amount', $options['doubt_check_amount'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                                <input type="number" class="form-control" name="whatsapp_number" id="whatsapp_number"
                                    value="{{ old('whatsapp_number', $options['whatsapp_number'] ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="top_baner_text" class="form-label">Top Banner Text</label>
                                <input type="text" class="form-control" name="top_baner_text" id="top_baner_text"
                                    value="{{ old('top_baner_text', $options['top_baner_text'] ?? 'Reminder: Your wallet balance must be sufficient before placing a vote.') }}">
                            </div>
                            <div class="mb-3">
                                <label for="top_baner_text" class="form-label">Google Search Console Tag</label>
                                <input placeholder="Please enter google tag" type="text" class="form-control"
                                    name="google_search_console_tag" id="google_search_console_tag"
                                    value="{{ old('google_search_console_tag', $options['google_search_console_tag'] ?? '') }}">
                            </div>

                            <hr>
                            <h5 class="mb-3">Feature Visibility</h5>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="play_matka_enabled"
                                    name="play_matka_enabled" value="1"
                                    {{ old('play_matka_enabled', $options['play_matka_enabled'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="play_matka_enabled">Enable Play Matka Section</label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="secure_bet_enabled"
                                    name="secure_bet_enabled" value="1"
                                    {{ old('secure_bet_enabled', $options['secure_bet_enabled'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="secure_bet_enabled">Enable Secure Bet Section</label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="betting_trend_enabled"
                                    name="betting_trend_enabled" value="1"
                                    {{ old('betting_trend_enabled', $options['betting_trend_enabled'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="betting_trend_enabled">Enable Betting Trend
                                    Section</label>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="doubt_check_enabled"
                                    name="doubt_check_enabled" value="1"
                                    {{ old('doubt_check_enabled', $options['doubt_check_enabled'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="doubt_check_enabled">Enable Doubt Check
                                    Section</label>
                            </div>


                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Save Settings
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
