@extends('emails.layouts.base')

@section('title', 'Your Predicted Number')
@section('subtitle', 'Matka Prediction')

@section('content')
    @include('emails.components.predicted_number', [
        'user' => $user,
        'predicted_number' => $predicted_number
    ])
@endsection
