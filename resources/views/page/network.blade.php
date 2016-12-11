@extends('_layouts._master')



@section('content')
    <section class="container">
        <div class="center">
            <h2>HIROYUKI SERVICE NETWORK</h2>
            <p class="lead">Website : www.Hiroyuki-ind.com.my</p>
        </div>
        <img src="{{ url('public/images/network.png') }}" alt="network" class="img-responsive center-block">
       {!! \App\Setting::find(1)->network !!}
    </section>




@endsection