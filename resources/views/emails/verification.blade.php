@extends('emails.layouts.base')

@section('title', 'Verify Your Email')
@section('subtitle', 'Email Verification')

@section('content')
    @include('emails.components.verification_code', ['user' => $user, 'actionUrl' => $url])
@endsection
