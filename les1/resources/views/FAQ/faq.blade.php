@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">FAQ</div>

                    <div class="card-body">
                        @foreach($categories as $category)
                            <h2>{{ $category->name }}</h2>
                            <ul>
                                @foreach($category->items as $item)
                                    <li>
                                        <strong>{{ $item->question }}</strong>
                                        <p>{{ $item->answer }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
