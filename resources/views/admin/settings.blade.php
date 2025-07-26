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
