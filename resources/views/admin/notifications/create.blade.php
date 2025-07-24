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
                <label>Name</label>
                <input type="text" name="name" required placeholder="e.g., Shubham"
                    value="{{ old('name', $notification?->name) }}">
            </div>

            <div class="input-style-1">
                <label>Message Part 1 (Action)</label>
                <input type="text" name="message_part_1" required placeholder="e.g., bought"
                    value="{{ old('message_part_1', $notification?->message_part_1) }}">
            </div>

            <div class="input-style-1">
                <label>Message Part 2 (What was bought)</label>
                <input type="text" name="message_part_2" required placeholder="e.g., new product 1"
                    value="{{ old('message_part_2', $notification?->message_part_2) }}">
            </div>

            <div class="input-style-1">
                <label>Location</label>
                <input type="text" name="location" placeholder="e.g., Mumbai"
                    value="{{ old('location', $notification?->location) }}">
            </div>

            <div class="select-style-1">
                <label>Status</label>
                <div class="select-position">
                    <select name="active" required>
                        <option value="1" {{ old('active', $notification?->active) == 1 ? 'selected' : '' }}>Active
                        </option>
                        <option value="0" {{ old('active', $notification?->active) == 0 ? 'selected' : '' }}>Inactive
                        </option>
                    </select>
                </div>
            </div>

            <button class="main-btn primary-btn btn-hover mt-3">
                {{ $notification ? 'Update' : 'Create' }} Notification
            </button>
        </form>
    </div>
@endsection
