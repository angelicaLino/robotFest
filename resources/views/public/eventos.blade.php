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
                <h4>Lista de Eventos</h4>
                <h2>Gaming News &amp; Insights</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section><!-- /.page-header -->

    <section class="blog-section blog-page padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="row grid-post">
                        <div class="col-md-4 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="assets/img/post-1.jpg" alt="post">
                                    <a href="#" class="post-category">Business</a>
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                        <li><i class="las la-user"></i>Elliot Alderson</li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.html">How to Start initiating an startup in few
                                                days.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise
                                            your funds more...</p>
                                        <a href="blog-details.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Grid-->
            </div>
        </div>
    </section>
    <!--Blog Section-->
@endsection