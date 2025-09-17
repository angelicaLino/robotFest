@extends('layouts.public')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h4>El festival de robótica más grande e innovador</h4>
                <h1>Bienvenidos a Robot Fest </h1>
                <div class="btn-group">
                    <a href="contact.html" class="default-btn">Conocenos un poco más</a>
                    <a data-autoplay="true" data-vbtype="video" href="{{ asset('assets_public/audio/videoEMI.mp4') }}" class="dl-video-popup play-btn">
                        <svg enable-background="new 0 0 41.999 41.999" version="1.1" viewBox="0 0 41.999 41.999" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                            </path>
                        </svg>
                        <div class="ripple"></div>
                    </a>
                </div>
                <div class="hero-element">
                    <img src="{{ asset('assets_public/img/imagen_personas.png')}}" alt="thumb">
                    <div class="shape-wrap">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                        <div class="shape shape-3"></div>
                        <div class="shape shape-4"></div>
                    </div>
                    <div class="shape-wrap right">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                        <div class="shape shape-3"></div>
                        <div class="shape shape-4"></div>
                    </div>
                </div><!-- /.hero-element -->
            </div>
        </div>
        <div class="gradiant-border"></div>
    </section>
    <!--/.hero-section  -->

    <section class="matches-section padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Próximos partidos</h3>
                <h2>Batallas extremas <br> Maestres <span>Torneo</span></h2>
                <p>Nuestro éxito en la creación de soluciones empresariales se debe en gran parte 
                    <br>a nuestros talentosos y altamente equipo comprometido.</p>
            </div>
            <ul class="upcoming-matches">
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="200ms">
                        <img src="{{ asset('assets_public/img/team-logo-1.png')}}" alt="team">
                        <h3><a href="team-details.html">Purple Death Cadets</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                    </div>
                    <div class="match-time">
                        <h3>10:00 <span>25TH May 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a></li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="200ms">
                        <h3><a href="team-details.html">Trigger Brain Squad</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                        <img src="{{ asset('assets_public/img/team-logo-2.png')}}" alt="team">
                    </div>
                </li><!-- /.matches-list-1 -->
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="400ms">
                        <img src="{{ asset('assets_public/img/team-logo-3.png')}}" alt="team">
                        <h3><a href="team-details.html">The Black Hat Hackers</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                    </div>
                    <div class="match-time">
                        <h3>12:30 <span>10TH Jan 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a></li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="400ms">
                        <h3><a href="team-details.html">Your Worst Nightmare</a></h3>
                        <div class="match-info">Group 05 | Match 02nd</div>
                        <img src="{{ asset('assets_public/img/team-logo-4.png')}}" alt="team">
                    </div>
                </li><!-- /.matches-list-2 -->
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="600ms">
                        <img src="{{ asset('assets_public/img/team-logo-5.png')}}" alt="team">
                        <h3><a href="team-details.html">Witches and Quizards</a></h3>
                        <div class="match-info">Group 02 | Match 03rd</div>
                    </div>
                    <div class="match-time">
                        <h3>04:20 <span>15TH Dec 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a></li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="600ms">
                        <h3><a href="team-details.html">Resting Bitch Faces</a></h3>
                        <div class="match-info">Group 02 | Match 03rd</div>
                        <img src="{{ asset('assets_public/img/team-logo-6.png')}}" alt="team">
                    </div>
                </li><!-- /.matches-list-3 -->
            </ul>
        </div>
    </section><!-- /.matches-section -->

    <section class="watch-live-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Mira la jugabilidad</h3>
                <h2>Ver en vivo <span>Transmisión</span></h2>
                <p>Nuestro éxito en la creación de soluciones empresariales se debe en gran parte <br>a nuestros talentosos y altamente equipo comprometido.</p>
            </div>
            <div class="carousel-wrap">
                <div class="watch-carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/video-thumb-1.jpg')}}" alt="thumb">
                            <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc" class="dl-video-popup play-btn">
                                <svg enable-background="new 0 0 41.999 41.999" version="1.1" viewBox="0 0 41.999 41.999" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                                    </path>
                                </svg>
                                <div class="ripple"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/video-thumb-2.jpg')}}" alt="thumb">
                            <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc" class="dl-video-popup play-btn">
                                <svg enable-background="new 0 0 41.999 41.999" version="1.1" viewBox="0 0 41.999 41.999" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                                    </path>
                                </svg>
                                <div class="ripple"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/video-thumb-3.jpg')}}" alt="thumb">
                            <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc" class="dl-video-popup play-btn">
                                <svg enable-background="new 0 0 41.999 41.999" version="1.1" viewBox="0 0 41.999 41.999" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                                    </path>
                                </svg>
                                <div class="ripple"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section><!-- /.watch-live-section -->

    <section class="team-section padding-bottom">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Nuestros jugadores</h3>
                <h2>Conozca a nuestro <span>Jugadores</span></h2>
                <p>Nuestro éxito en la creación de soluciones empresariales se debe en gran parte 
                    <br>a nuestros talentosos y altamente equipo comprometido.</p>
            </div>
            <div class="outside-spacing">
                <div class="team-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets_public/img/team-1.png')}}" alt="thumb">
                                    <div class="shape-wrap">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <span class="whte-shape"></span>
                                    <h3><a href="player-details.html">Brandon Larned</a></h3>
                                    <h4>Overwatch</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets_public/img/team-2.png')}}" alt="thumb">
                                    <div class="shape-wrap">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <span class="whte-shape"></span>
                                    <h3><a href="player-details.html">Félix Lengyel</a></h3>
                                    <h4>Valorant</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets_public/img/team-3.png')}}" alt="thumb">
                                    <div class="shape-wrap">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <span class="whte-shape"></span>
                                    <h3><a href="player-details.html">Sasha Hostyn</a></h3>
                                    <h4>StarCraft II</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets_public/img/team-4.png')}}" alt="thumb">
                                    <div class="shape-wrap">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <span class="whte-shape"></span>
                                    <h3><a href="player-details.html">Zaqueri Black</a></h3>
                                    <h4>Call of Duty</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets_public/img/team-5.png')}}" alt="thumb">
                                    <div class="shape-wrap">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <span class="whte-shape"></span>
                                    <h3><a href="player-details.html">Fredrik Johanson</a></h3>
                                    <h4>Counter Strike</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Arrows -->
                    <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
                </div>
            </div>
        </div>
    </section> <!-- /.team-section -->

    <section class="contact-section padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 sm-padding">
                    <div class="section-heading">
                        <h3>Envíanos un correo</h3>
                        <h2>Únase a nosotros como súper fanáticos y obtenga todo <span>Los beneficios</span></h2>
                        <p>Nuestro éxito en la creación de soluciones empresariales se debe en gran parte
                            <br>a nuestros talentosos y Equipo altamente comprometido.</p>
                        <a href="contact.html" class="default-btn">Únase a nuestro equipo <span></span></a>
                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="contact-form ml-40">
                        <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Tu nombre" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Correo electrónico" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Enviar Mensaje
                                        <span></span></button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.contact-section -->

    <div class="sponsor-section padding-bottom">
        <div class="container">
            <div class="outside-spacing">
                <div class="sponsor-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-1.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-2.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-3.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-4.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-5.png')}}" alt="client">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets_public/img/client-6.png')}}" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.sponsor-section -->

    <section class="shop-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Online Gaming Shop</h3>
                <h2>Explore Our <span>Gears</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
            <div class="outside-spacing">
                <div class="shop-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('assets_public/img/product-1.png')}}" alt="img">
                                    <a href="#" class="badge in-stock">In Stock</a>
                                    <a href="cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="#">Steering</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="shop-details.html">Steering Wheel</a></h3>
                                    <h4 class="price">$69.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('assets_public/img/product-2.png')}}" alt="img">
                                    <a href="#" class="badge hot">Hot</a>
                                    <a href="cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="#">Mouse</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="shop-details.html">Fantech Mouse</a></h3>
                                    <h4 class="price">$49.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('assets_public/img/product-3.png')}}" alt="img">
                                    <a href="#" class="badge sale">-70%</a>
                                    <a href="cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="#">Console</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="shop-details.html">Targus Console</a></h3>
                                    <h4 class="price">$39.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('assets_public/img/product-4.png')}}" alt="img">
                                    <a href="#" class="badge hot">Hot</a>
                                    <a href="cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="#">Controller</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="shop-details.html">Xbox Controller</a></h3>
                                    <h4 class="price">$19.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('assets_public/img/product-5.png')}}" alt="img">
                                    <a href="#" class="badge out-stock">Out Of Stock</a>
                                    <a href="cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="#">Chair</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="shop-details.html">Ergonomic Chair</a></h3>
                                    <h4 class="price">$39.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Arrows -->
                    <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
                </div>
            </div>
        </div>
    </section><!-- /.shop-section -->

    <section class="blog-section">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>What'assets_public on our mind</h3>
                <h2>News and <span>Headlines</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
            <div class="row grid-post">
                <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('assets_public/img/post-1.jpg')}}" alt="post">
                            <a href="blog-classic.html" class="post-category">Business</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3><a href="blog-details.html">How to start initiating an startup in few days.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your
                                    funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('assets_public/img/post-2.jpg')}}" alt="post">
                            <a href="blog-classic.html" class="post-category">Startup</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3><a href="blog-details.html">Financial experts support help you to find out.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your
                                    funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('assets_public/img/post-3.jpg')}}" alt="post">
                            <a href="blog-classic.html" class="post-category">Finance</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3><a href="blog-details.html">Innovative business all over the world.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your
                                    funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog-section-->
@endsection