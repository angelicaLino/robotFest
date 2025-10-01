@extends('layouts.public')

@section('content')
    <section class="page-header single">
        <div class="page-header-shape">
            <div class="shape"></div>
            <div class="shape center"></div>
            <div class="shape center back"></div>
            <div class="shape right"></div>
        </div>
        <div class="container">
            <div class="page-header-info">
                <h4>Detalle del Evento</h4>
                <h2>{{ $evento->nombre }}</h2>
                <p>{{ $evento->descripcion }}</p>
                <ul class="post-meta">
                    <li><i class="las la-user"></i>Elliot Alderson</li>
                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('d F Y') }}</li>
                    <li><i class="las la-comments"></i>Comments 0</li>
                    <li><i class="las la-location-arrow"></i> {{ $evento->lugar ?? 'Por confirmar' }}</li>
                </ul>
            </div>
        </div>
    </section><!-- /.page-header -->

    <section class="blog-section blog-page padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="post-details">
                        <div class="post-thumb"><img src="assets/img/post-1.jpg" alt="img"></div>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.
                            Arkit a trusted name for providing assistants. Initially their main objective was to ensure
                            the service they provide these people are loyal to their industry, experienced and
                            professional.</p>

                        <p>Unless you are the one who really cares about this, it is not terribly important. What all
                            matters are how your hybrid mobile application development is going to work in the long run
                            as no one will care about how it was built.</p>

                        <blockquote>
                            <i class="fas fa-quote-right"></i>
                            There are no secrets to success. It is the result preparation, hard work and learning from
                            failure.<span>- Winston Churchill.</span>
                        </blockquote>

                        <p>There are some big shifts taking place in the field of construction equipment mathematics.
                            Starting with the integration of mathematics devices in vehicles right from the
                            manufacturers, to the standardization and integration of mathematics data across various
                            business functions, the future of mathematics has never seemed so full of potential for
                            fleet-based businesses.</p>

                        <ul class="post-details-gallery">
                            <li><img src="assets/img/post-1.jpg" alt="img"></li>
                            <li><img src="assets/img/post-2.jpg" alt="img"></li>
                        </ul>
                        <!--Gallary-->

                        <h3>Creative approach to every project</h3>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.
                            Arkit a trusted name for providing assistants. Initially their main objective was to ensure
                            the service they provide these people are loyal to their industry, experienced and
                            professional.</p>
                        <p>Another speaker, John Meuse, senior director of heavy equipment at Waste Management Inc.,
                            echoed this, citing a cost-saving of $17,000 for the company when it cut idling time of a
                            single Caterpillar 966 wheel loader.</p>

                        <ul class="tags">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Startup</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                        <!--Tags-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section-->
@endsection
