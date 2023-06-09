@extends('layouts.app')

@section('content')
    
    <footer>
   
    <a href="{{ route('contact') }}"></a>
</footer>


    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>
<br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

