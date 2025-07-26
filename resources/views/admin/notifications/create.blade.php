@php $notification = $notification ?? null; @endphp

@extends('admin.app.layout')

@section('content')
    <div class="m-3 card-style mb-30">
        <form
            action="{{ $notification ? route('admin.notifications.update', $notification->id) : route('admin.notifications.store') }}"
            method="POST">
            @csrf
            @if ($notification)
                @method('PUT')
            @endif

            <div class="input-style-1">
                <label>Message</label>
                <textarea name="message" rows="3" required placeholder="Enter notification message">{{ old('message', $notification?->message) }}</textarea>
            </div>

            <div class="input-style-1">
                <label>Start Time</label>
                <input type="time" name="start_time" value="{{ old('start_time', $notification?->start_time) }}">
            </div>

            <div class="input-style-1">
                <label>End Time</label>
                <input type="time" name="end_time" value="{{ old('end_time', $notification?->end_time) }}">
            </div>

            <button class="main-btn primary-btn btn-hover mt-3">
                {{ $notification ? 'Update' : 'Create' }} Notification
            </button>
        </form>
    </div>
@endsection