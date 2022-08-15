@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Guestbook</div>

                <ul class="list-group list-group-flush">
                @foreach ($messages as $message)
                    <li class="list-group-item">
                        <p>{{ $message->message }}</p>
                        <p>{{ $message->updated_at }}</p>
                        @if ($message->Reply)
                        &gt; {{ $message->Reply->message }} - {{ $message->Reply->Owner->name}}
                        @endif
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
