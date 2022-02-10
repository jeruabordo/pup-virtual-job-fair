@extends('layouts.homelayout')

@section('content')
    <section class="topcompanies">
        <h1 style="text-align: center;  background-color:#ebebebb3;
                  padding: 10px;
                  margin: 0 1.75rem;">Top Employers
        </h1>

        <div class="grid-container">
            @foreach ($clients as $client)
                <a class="hollow button" href="{{ route('home', ['client_id' => $client->id]) }}"> <img
                        src="{{ $client->logo }}" alt=""></a>
            @endforeach
        </div>
    </section>
@endsection
