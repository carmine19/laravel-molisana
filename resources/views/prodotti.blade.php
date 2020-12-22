@extends('layouts.app');

@section('content')

    <section id="prodotto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($pasta as $value)
                    <div class="main-box-prodotto">
                        <div class="box-title">
                            <h3>{{$value['titolo']}}</h3>
                        </div>
                        <div class="box-img">
                            <div class="img-1">
                                <img src="{{$value['src-h']}}" alt="">
                            </div>
                            <div class="img-2">
                                <img src="{{$value['src-p']}}" alt="">
                            </div>
                        </div>
                        <div class="box-text">
                            <p>{{$value['descrizione']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection


