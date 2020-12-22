@extends('layouts.app');

@section('content')


        <section id="prodotti">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-title">
                            <h2>Le lunghe</h2>
                        </div>
                    </div>

                    @foreach($pasta as $value)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="box-img">
                                <img src="{{$value['src']}}" alt="">
                            </div>
                            <div class="box-overlay">
                                <a href="">{{$value['titolo']}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>



@endsection


