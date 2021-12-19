
@extends('layouts.app')
  
@section('content')

  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>


  @foreach( $banners as $banner )
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Digital Media Agency</h6>
                    <h2>{{ $banner->title_uz }}</h2>
                    <p> {{ $banner->text_uz }}</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('storage/' . $banner->image) }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
          @foreach( $aboutsus as $abouts )
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('storage/' . $abouts->image) }}" alt="">
              </div>
            </div>
            @endforeach
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
              @foreach( $aboutsus as $abouts )
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>{{ $abouts-> title_ru}}</h4>
                  <div class="line-dec"></div>
                </div>
                <p>{!! $abouts->text_uz !!}</p>
          
               @endforeach
                  <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Photoshop</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Animation</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our Agency <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                  @foreach( $services as $service )

                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="{{ asset('storage/' . $service->image_uz) }}" alt=""></span>
                        {{ $service-> title_1_ }}
                      </div>
                    </div>
                    @endforeach

                    
                  </div>
                </div> 
                <div class="col-lg-12">

                  <ul class="nacc">
                  @foreach( $services as $service )

                    <li class="{{ $loop->first ? 'active' : '' }}">
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>{{ $service->title_2_uz }}</h4>
                                <p> {!! $service->text_uz !!}</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('storage/' . $service->image_ru) }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>


                    </li>
                    @endforeach
                  
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Get Your Free Quote</h6>
            <h4>Grow With Us Now</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="search" action="{{ route('contact.send') }}" method="POST">
          @csrf
            <div class="row">

            <div class="col-lg-4">
                              <label>
                                 <span ><input name="Name" type="name"  placeholder="name"></span>
                                 <span><input data-inputmask="'mask': '+\\9\\9\\8 (99) 999-99-99'" name="phone" type="text"  placeholder="Tel:." required="required"></span>
                                 <span><input name="email" type="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="required"></span>
                               </label>
                          </div>
                          
              
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <button type="submit" class="main-button">Get Quote Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h4>See Our Recent <em>Projects</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
          @foreach( $projects as $project )
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ asset('storage/' . $project->image) }}" alt="">
                </div>
                <div class="down-content">
                  <h4>{{ $project->title_uz }}</h4>
                  <span>{{ $project->text_uz }}</span>
                </div>
              </div>
              </a>  
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">

          <div class="blog-post">
          @foreach( $posts as $post )

            <div class="thumb">
              <a href="#"><img src="{{ asset('storage/' . $post->image) }}" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">SEO Analysis</span>
              <span class="date">{{ $post->data_uz }}</span>
              <a href="#"><h4>{{ $post->title_uz }} </h4></a>
              <p>{{ $post->text_uz }}</p>
              <span class="author"><img src="{{ asset('storage/' . $post->image) }}" alt="">By: Andrea Mentuzi</span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          @endforeach
          </div>
          
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              @foreach( $blogs as $blog )

              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ asset('storage/' . $blog->image) }}" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category"> SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>{{ $blog->title_uz }}</h4></a>
                    <p>{{ $blog->text_uz }}.</p>
                  </div>
                </div>
              </div>
              @endforeach
           
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('contact.send') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
              <div class="map-wrapper">
                <div id="map-content"></div>
 
<div id="map" style="position:relative;overflow:hidden; width: 100%; height: 636px; "></div>
        <script>

            var placemarks = [
                 @foreach($showrooms as $showroom)
                {
                    latitude: {{$showroom->map_lat}},
                    longitude: {{$showroom->map_lng}},
                    hintContent: '{{ $showroom->address_ru }}',
                    balloonContent:'{{ $showroom->phone }}',
                    balloonContent:'{{ $showroom->address_uz }}',
                },
                @endforeach
            ];

            ymaps.ready(init);
            function init(){
                var Map = new ymaps.Map("map", {
                        center: [41.316096, 69.263496],
                    zoom: 10,
                    controls: ['zoomControl', 'geolocationControl', 'routeEditor', 'fullscreenControl']
                });
                placemarks.forEach(function (obj) {
                    var placemark = new ymaps.Placemark([obj.latitude, obj.longitude], {
                            hintContent: obj.hintContent,
                            balloonContent: obj.balloonContent,
                            balloonContent: obj.balloonContent,

                        },
                        {
                            preset: 'islands#redIcon',
                        });
                    Map.geoObjects.add(placemark);
                });

            }
        </script>
   </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                  @foreach( $contacts as $contact )
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('storage/' . $contact->image) }}" alt="">
                          <a href="#">{{ $contact->number }}</a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                             
                      <div class="row">
                         <div class="col-lg-6">
                              <label>
                                 <span ><input name="Name" type="name"  placeholder="name"></span>
                                 <span><input data-inputmask="'mask': '+\\9\\9\\8 (99) 999-99-99'" name="phone" type="text"  placeholder="Tel:." required="required"></span>
                                 <span><input name="email" type="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="required"></span>
                               </label>
                          </div>
                          <div class="col-lg-6">
                            <label>
                                <span><textarea name="message" cols="40" placeholder="message" required="required"></textarea></span>
                            </label>
                          </div>
                          <div class="col-lg-12">
                            <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                          </div>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection



