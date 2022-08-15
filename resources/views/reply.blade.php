@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ $message->message }}
            <form method="POST" action="">
            @csrf
                <input type="hidden" name="id" value="{{ $reply->id ?? '' }}" />
                <input type="hidden" name="message_ref" value="{{ $message->id }}" />
                <textarea name="message"  class="form-control">{{ $reply->message ?? ''}}</textarea>
                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-warning" href="/dashboard">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
