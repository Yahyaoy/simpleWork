@extends('layout2')

@section('content')
{{--@section('header')--}}
{{--@endsection--}}
    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome, To Elzero World</h1>
                <p>Here Iam gonna share everything about my life. Books Iam reading, Games Iam Playing, Stories and Events</p>
            </div>
            <div class="image">
                <img src="imgs/landing-image.png" alt="" />
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>
    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">Articles</h2>
        <div class="container">
            <div class="box">
                <img src="imgs/cat-01.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-02.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-03.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-04.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-05.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-06.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-07.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/cat-08.jpg" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
    <!-- Start Gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-01.png" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-02.png" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-03.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-04.png" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-05.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/gallery-06.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    <!-- Start Features -->
    <div class="features" id="features">
        <h2 class="main-title">Features</h2>
        <div class="container">
            <div class="box quality">
                <div class="img-holder"><img src="imgs/features-01.jpg" alt="" /></div>
                <h2>Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="#">More</a>
            </div>
            <div class="box time">
                <div class="img-holder"><img src="imgs/features-02.jpg" alt="" /></div>
                <h2>Time</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="#">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img src="imgs/features-03.jpg" alt="" /></div>
                <h2>Passion</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="#">More</a>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Testimonials -->
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">Testimonials</h2>
        <div class="container">
            <div class="box">
                <img src="imgs/avatar-01.png" alt="" />
                <h3>Mohamed Farag</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img src="imgs/avatar-02.png" alt="" />
                <h3>Mohamed Ibrahim</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img src="imgs/avatar-03.png" alt="" />
                <h3>Shady Nabil</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img src="imgs/avatar-04.png" alt="" />
                <h3>Amr Hendawy</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img src="imgs/avatar-05.png" alt="" />
                <h3>Sherief Ashraf</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img src="imgs/avatar-06.png" alt="" />
                <h3>Osama Mohamed</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                    quaerat ducimus
                </p>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Team -->
    <div class="team" id="team">
        <h2 class="main-title">Team Members</h2>
        <div class="container">
            <div class="box">
                <div class="data">
                    <img src="imgs/team-01.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-02.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-03.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-04.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-05.png" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-06.png" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-07.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="imgs/team-08.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>

    <!-- End Discount -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>Elzero</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nulla rem, dignissimos iste aspernatur
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#">Important Link 1</a></li>
                    <li><a href="#">Important Link 2</a></li>
                    <li><a href="#">Important Link 3</a></li>
                    <li><a href="#">Important Link 4</a></li>
                    <li><a href="#">Important Link 5</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Egypt, Giza, Inside The Sphinx, Room Number 220</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+20123456789</span>
                        <span>+20198765432</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="imgs/gallery-01.png" alt="" />
                <img src="imgs/gallery-02.png" alt="" />
                <img src="imgs/gallery-03.jpg" alt="" />
                <img src="imgs/gallery-04.png" alt="" />
                <img src="imgs/gallery-05.jpg" alt="" />
                <img src="imgs/gallery-06.png" alt="" />
            </div>
        </div>
        <p class="copyright">Made With &lt;3 By Elzero</p>
    </div>
@endsection
