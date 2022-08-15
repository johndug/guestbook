@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messages  <a href="/message" class="btn btn-primary">New Message</a></div>

                <ul class="list-group list-group-flush">
                @foreach ($messages as $message)
                    <li class="list-group-item">
                        <p>{{ $message->message }}</p>
                    <a href="/message/{{ $message->id }}" class="btn btn-primary">Edit</a>  <a href="/message/delete/{{ $message->id }}" class="btn btn-danger">Delete</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
