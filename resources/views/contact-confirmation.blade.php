@extends('layouts.app')
@section('title', 'Confirmation')

@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>

            <h2 class="mb-4">Your Submitted Information</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{ $data['name'] }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $data['phone'] }}</li>
                <li class="list-group-item"><strong>Message:</strong> {{ $data['message'] }}</li>
            </ul>
        </div>
    </section>
    </main>
@endsection