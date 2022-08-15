@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messages</div>

                <ul class="list-group list-group-flush">
                @foreach ($messages as $message)
                    <li class="list-group-item">
                        {{ $message->Owner->name }} - {{ $message->updated_at }}
                        <p>{{ $message->message }}</p>
                        @if ($message->Reply)
                        &gt; {{ $message->Reply->message }} - {{ $message->Reply->Owner->name}}
                        @else
                        <a href="/reply/{{ $message->id }}" class="btn btn-primary">Reply</a>
                        @endif
                    
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
