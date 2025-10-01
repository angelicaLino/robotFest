@extends('layouts.public')

@section('content')
    <section class="page-header">
        <div class="page-header-shape">
            <div class="shape"></div>
            <div class="shape center"></div>
            <div class="shape center back"></div>
            <div class="shape right"></div>
        </div>
        <div class="container">
            <div class="page-header-info">
                <h4>Lista de Categorias</h4>
                <h2>Gaming News &amp; Insights</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section><!-- /.page-header -->

        <section class="promo-section padding">
        <div class="container">
            <div class="row">
                @foreach ($categorias as $categoria)
                    <div class="col-lg-4 col-md-6 sm-padding wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="promo-item">
                        <div class="promo-content">
                            <img class="promo-icon" src="{{ asset('assets_public/img/promo-icon-1.png') }}" alt="thumb">
                            <h3>{{ $categoria->nombre }}</h3>
                            <p>{{ $categoria->descripcion }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- /.promo-section-->

@endsection