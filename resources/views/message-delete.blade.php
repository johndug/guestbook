@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="">
            @csrf
                <input type="hidden" name="id" value="{{ $message->id ?? '' }}" />
                Are you sure you want to delete this message?<br />
                {{ $message->message ?? ''}}<br />
                <button class="btn btn-danger" type="submit">Delete</button>
                <a class="btn btn-warning" href="/dashboard">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
