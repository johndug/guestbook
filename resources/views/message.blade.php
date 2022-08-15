@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="">
            @csrf
                <input type="hidden" name="id" value="{{ $message->id ?? '' }}" />
                <textarea name="message"  class="form-control">{{ $message->message ?? ''}}</textarea>
                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-warning" href="/guest">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
