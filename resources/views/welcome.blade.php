<x-app-layout>
<div class="th-hero-wrapper hero-3" id="hero">
    @if(null!==($slider = module(2)))
    <div class="hero-slider-2 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true">
        @foreach($slider as $slide)
        <div class="th-hero-slide">
            <div class="th-hero-bg" data-bg-src="{{asset('images/'.$slide->image)}}"></div>
            <div class="th-hero-bg-overlay" data-bg-src="assets/img/hero/hero_overlay_3_1.jpg"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="hero-style3 text-center">
                            <span class="hero-subtitle text-white" data-ani="slideinup" data-ani-delay="0.1s">{{$slide->extra_field_1}}</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.4s">{{$slide->title}}</h1>
                            <div class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                <p>{!!$slide->description!!}</p>
                                <ul class="counter-list cta-countdown" data-offer-date="10/24/2023">
                                    <li>
                                        <div class="day count-number">{{$slide->extra_field_2}}</div>
                                        <span class="count-name">Days</span>
                                    </li>
                                    <li>
                                        <div class="minute count-number">{{$slide->extra_field_3}}</div>
                                        <span class="count-name">Mins</span>
                                    </li>
                                    <li>
                                        <div class="seconds count-number">{{$slide->extra_field_4}}</div>
                                        <span class="count-name">Secs</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                <a href="contact.html" class="th-btn style3">Admission Now<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <div class="hero-shape shape1 movingX d-md-block d-none"><img src="assets/img/hero/shape_3_1.png" alt="shape" /></div>
    <div class="hero-shape shape2 d-sm-block d-none"><img class="spin" src="assets/img/hero/shape_3_2.png" alt="shape" /></div>
    <div class="hero-shape shape3 spin d-sm-block d-none"><img src="assets/img/hero/shape_2_4.png" alt="shape" /></div>
</div>
<div class="bg-smoke client-area-3">
<div class="container">
    @if(null!==($logos = module(4)))
    <div class="row th-carousel" data-slide-show="8" data-md-slide-show="6">
        @foreach($logos as $logo)
        <div class="col-lg-12">
            <a href="blog.html" class="client-thumb"><img src="{{asset('images/'.$logo->image)}}" alt="img" /></a>
        </div>
        @endforeach
    </div>
    @endif
</div>
</div>
@if(null!==($services = module(3)))
<section class="service-sec space">
<div class="container">
    <div class="title-area text-center">
        <span class="sub-title"><i class="fal fa-book me-2"></i> OUR SERVICES</span>
        <h2 class="sec-title">Our Creative Education Services</h2>
    </div>
    <div class="row th-carousel service-slider1 slider-shadow" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
    @foreach($services as $service)
        <div class="col-md-6 col-xl-4">
            <div class="service-card">
                <div class="service-card-icon"><img class="svg-img" src="{{asset('images/'.$service->extra_field_1)}}" alt="icon" /></div>
                <div class="service-card-content">
                    <h3 class="box-title"><a href="service-details.html">{{$service->title}}</a></h3>
                    <p class="service-card-text">{!!$service->description!!}</p>
                    <div class="service-card-img">
                        <img src="{{asset('images/'.$service->image)}}" /> <a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
</section>
@endif
<div class="overflow-hidden" data-bg-src="assets/img/bg/about-3-bg.png" id="about-sec">
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-6">
            <div class="img-box3"><img class="img-1 tilt-active" src="assets/img/normal/about_3_1.png" alt="About" /></div>
        </div>
        <div class="col-xl-6">
            <div class="space">
                <div class="title-area mb-35">
                    <span class="sub-title"><i class="fal fa-book me-1"></i> More About Our Company</span>
                    <h2 class="sec-title">Learn About Edura Education</h2>
                </div>
                <p class="mt-n2 mb-30">
                    Synergistically visualize alternative content before cross functional core Rapidiously administra standardized value via focused benefits. Rapidiously redefine highly efficient niche markets with
                    plug-and-play materials professionally seize client centric solutions
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-grid2">
                            <img src="assets/img/icon/about-grid-icon1.svg" alt="img" />
                            <h3 class="about-grid_title h5">Competitive Rates</h3>
                        </div>
                        <p class="mt-3">Join us on our journey as we continue to innovate & shape the future of education.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="about-grid2">
                            <img src="assets/img/icon/about-grid-icon2.svg" alt="img" />
                            <h3 class="about-grid_title h5">Online Certificates</h3>
                        </div>
                        <p class="mt-3">We believe that education is fundamental right and a catalyst for personal growth.</p>
                    </div>
                </div>
                <div class="btn-group mt-15">
                    <a href="about.html" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a> <a href="about.html" class="th-btn style7">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@if(null!==$courses = module(7))
<div class="space">
    <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-8">
            <div class="title-area text-lg-start text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Our Course Categories</span>
                <h2 class="sec-title">Top Most Unique Category</h2>
            </div>
        </div>
        <div class="col-lg-auto mb-40 text-center">
            <a href="course.html" class="th-btn">View All Category<i class="fa-regular fa-arrow-right ms-2"></i></a>
        </div>
    </div>
    
    <div class="row gy-4">
    @foreach($courses as $course)
        <div class="col-lg-4 col-xl-3 col-md-6">
            <div class="category-list">
                <div class="category-list_icon"><img src="{{asset('images/'.$course->image)}}" alt="icon" /></div>
                <div class="category-list_content">
                    <h3 class="category-list_title"><a href="course.html">{{$course->title}}</a></h3>
                    <span class="category-list_text">{{$course->extra_field_1}} Courses</span> <a href="course.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endif
<section class="position-relative overflow-hidden space">
<div class="cta-bg-img" data-bg-src="assets/img/bg/cta-bg2.png"></div>
<div class="cta-bg-img2" data-bg-src="assets/img/bg/cta-bg2-shape.png"></div>
<div class="shape-mockup cta-shape1 jump d-md-block d-none" data-left="-2%" data-bottom="-7%"><img src="assets/img/normal/cta_2_shape1.png" alt="img" /></div>
<div class="shape-mockup cta-shape2 jump-reverse d-md-block d-none" data-right="-1%" data-top="-3%"><img src="assets/img/normal/cta_2_shape2.png" alt="img" /></div>
<div class="shape-mockup cta-shape3 spin d-md-block d-none" data-right="20%" data-top="30%"><img src="assets/img/normal/cta_2_shape3.png" alt="img" /></div>
<div class="container text-center">
    <div class="cta-wrap2">
        <div class="title-area text-center mb-35">
            <span class="sub-title"><i class="fal fa-book me-2"></i>Are You Ready For This Offer</span>
            <h2 class="sec-title text-white">
                40% Offer First <span class="text-theme2">100 Student’s</span> For Featured<br />
                <span class="fw-normal">Topics by Education Category</span>
            </h2>
            <p class="cta-text">Get unlimited access to 6,000+ of Udemy’s top courses for your team. Learn and improve skills across business, tec, design, and more.</p>
        </div>
        <div class="btn-group justify-content-center">
            <a href="about.html" class="th-btn style3">Join With Us<i class="fas fa-arrow-right ms-2"></i></a> <a href="contact.html" class="th-btn style2">Become A Teacher<i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</div>
</section>
@if(null!==$courses = module(19))
<section class="space" id="course-sec">
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6">
            <div class="title-area mb-xl-5">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Popular Courses</span>
                <h2 class="sec-title">Our Popular Online Courses</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="course-tab-2 tab-menu1 filter-menu-active">
                <button data-filter="*" class="filter-btn active">All Categories</button> <button data-filter=".cat1" class="filter-btn">Business</button> <button data-filter=".cat2" class="filter-btn">Development</button>
                <button data-filter=".cat3" class="filter-btn">Marketing</button> <button data-filter=".cat4" class="filter-btn">Finance</button>
            </div>
        </div>
    </div>
    <div class="row gy-4 filter-active mb-60">
        @foreach($courses as $course)
        <div class="col-md-6 col-xxl-3 col-lg-4 filter-item cat4">
            <div class="course-box style2">
                <div class="course-img">
                    <img src="{{asset('images/'.$course->image)}}" alt="img" /> <span class="tag"><i class="fas fa-clock"></i> {{$course->textra_field_1}} WEEKS</span>
                </div>
                <div class="course-content">
                    <div class="course-rating">
                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                            <span style="width: 79%;">Rated <strong class="rating">4.00</strong> out of 5</span>
                        </div>
                        (4.7)
                    </div>
                    <h3 class="course-title"><a href="course-details.html">{{$course->title}}</a></h3>
                    <div class="course-meta">
                        <span><i class="fal fa-file"></i>Lesson {{$course->textra_field_2}}</span> <span><i class="fal fa-user"></i>Students {{$course->textra_field_3}}</span> <span><i class="fal fa-chart-simple"></i>{{$course->extra_field_6}}</span>
                    </div>
                    <div class="course-author">
                        <div class="author-info"><img src="{{asset('images/'.$course->extra_field_5)}}" alt="author" /> <a href="course.html" class="author-name">{{$course->extra_field_4}}</a></div>
                        <div class="offer-tag">Free</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="course.html" class="th-btn">View All Courses<i class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>
</div>
</section>
@endif
<div class="why-sec-v2 overflow-hidden space" data-bg-src="assets/img/bg/why-bg-2.png">
<div class="shape-mockup why2-shape-1 spin" data-top="40%" data-right="6%"><img src="assets/img/normal/wcu_2_shape1.png" alt="img" /></div>
<div class="shape-mockup why2-shape-2 jump" data-bottom="25%" data-left="3%"><img src="assets/img/normal/blog-3-bg-shape.png" alt="img" /></div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-6 align-self-end order-xl-2">
            <div class="wcu-img-2 mb-50 mb-xl-0"><img src="assets/img/normal/wcu_2_1.png" alt="img" /></div>
        </div>
        <div class="col-xl-6 order-xl-1">
            <div class="wcu-wrap2">
                <div class="title-area mb-xl-5">
                    <span class="sub-title"><i class="fal fa-book me-1"></i> WHY CHOOSE US</span>
                    <h2 class="sec-title">Transform Education Your Life, Change the World</h2>
                </div>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="wcu-box style2">
                            <div class="wcu-box_icon"><img src="assets/img/icon/wcu-icon-2-1.svg" alt="img" /></div>
                            <div class="wcu-box_details">
                                <h3 class="h5 wcu-box_title"><a href="service-details.html">Expert Instruction</a></h3>
                                <p class="wcu-box_text">We offer a wide range of educational products and services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wcu-box style2">
                            <div class="wcu-box_icon"><img src="assets/img/icon/wcu-icon-2-2.svg" alt="img" /></div>
                            <div class="wcu-box_details">
                                <h3 class="h5 wcu-box_title"><a href="service-details.html">Find Video Courses</a></h3>
                                <p class="wcu-box_text">Online education offers a wide range of courses & programs, covering.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wcu-box style2">
                            <div class="wcu-box_icon"><img src="assets/img/icon/wcu-icon-2-3.svg" alt="img" /></div>
                            <div class="wcu-box_details">
                                <h3 class="h5 wcu-box_title"><a href="service-details.html">Online Courses</a></h3>
                                <p class="wcu-box_text">Innovative market without extensive coordinate stand alone catalysts for.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wcu-box style2">
                            <div class="wcu-box_icon"><img src="assets/img/icon/wcu-icon-2-4.svg" alt="img" /></div>
                            <div class="wcu-box_details">
                                <h3 class="h5 wcu-box_title"><a href="service-details.html">Learn Anywhere</a></h3>
                                <p class="wcu-box_text">Online education often allows learners to study at their own pace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="counter-area-2" data-bg-src="assets/img/bg/counter-bg_1.png">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
                <h2 class="counter-card_number"><span class="counter-number">3.9</span>k<span class="fw-normal">+</span></h2>
                <p class="counter-card_text"><strong>Successfully</strong> Trained</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
                <h2 class="counter-card_number"><span class="counter-number">15.8</span>k<span class="fw-normal">+</span></h2>
                <p class="counter-card_text"><strong>Classes</strong> Completed</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
                <h2 class="counter-card_number"><span class="counter-number">97.5</span>k<span class="fw-normal">+</span></h2>
                <p class="counter-card_text"><strong>Satisfaction</strong> Rate</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
                <h2 class="counter-card_number"><span class="counter-number">100.2</span>k<span class="fw-normal">+</span></h2>
                <p class="counter-card_text"><strong>Students</strong> Community</p>
            </div>
        </div>
    </div>
</div>
</div>
<section class="space overflow-hidden">
<div class="process-bg-shape1 spin shape-mockup d-xl-block d-none" data-left="7%" data-top="15%"><img src="assets/img/process/process-bg-shape-1-1.png" alt="img" /></div>
<div class="process-bg-shape2 jump shape-mockup" data-right="-1%" data-bottom="15%"><img src="assets/img/process/process-bg-shape-1-2.png" alt="img" /></div>
<div class="container">
    <div class="title-area text-center">
        <span class="sub-title"><i class="fal fa-book me-1"></i> WHAT WE OFFER</span>
        <h2 class="sec-title">How Does Edura Work Process?</h2>
    </div>
    <div class="process-card-area">
        <div class="row gy-50 justify-content-center">
            <div class="col-md-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/process/process-1-1.png" alt="img" /></div>
                    <div class="process-card_icon"><img src="assets/img/icon/process-icon-1-1.svg" alt="icon" /></div>
                    <h2 class="box-title">Choose Any Courses</h2>
                    <p class="process-card_text">Standards in leadership skills synergize optimal expertise rather than innovative leadership skills and better learning.</p>
                </div>
                <div class="process-arrow"><img src="assets/img/icon/process-arrow.svg" alt="line" /></div>
            </div>
            <div class="col-md-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/process/process-1-2.png" alt="img" /></div>
                    <div class="process-card_icon"><img src="assets/img/icon/process-icon-1-2.svg" alt="icon" /></div>
                    <h2 class="box-title">Purchase Your Course</h2>
                    <p class="process-card_text">We provide online learning program that enable learners to access high-quality education remotely.</p>
                </div>
                <div class="process-arrow"><img src="assets/img/icon/process-arrow.svg" alt="line" /></div>
            </div>
            <div class="col-md-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="assets/img/process/process-1-3.png" alt="img" /></div>
                    <div class="process-card_icon"><img src="assets/img/icon/process-icon-1-3.svg" alt="icon" /></div>
                    <h2 class="box-title">Great! Start Learn</h2>
                    <p class="process-card_text">These programs cover a wide range of subjects and can be customized for individual learners or delivered to schools.</p>
                </div>
                <div class="process-arrow"><img src="assets/img/icon/process-arrow.svg" alt="line" /></div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="testi-area-3 bg-smoke overflow-hidden space">
    @if(null!== $testimonials = module(5))
<div class="shape-mockup testi2-bg-shape2 spin d-xl-block d-none" data-right="0" data-bottom="5%"><img src="assets/img/testimonial/testi-bg-shape_1_2.png" alt="img" /></div>
<div class="shape-mockup testi2-bg-shape2 spin d-xl-block d-none" data-left="0" data-top="30%"><img src="assets/img/testimonial/testi-bg-shape_1_2.png" alt="img" /></div>
<div class="shape-mockup testi2-bg-shape3 jump d-lg-block d-none" data-left="5%" data-top="45%"><img src="assets/img/testimonial/testi-bg-shape_2_1.png" alt="img" /></div>

<div class="container">
    <div class="title-area text-lg-start text-center">
        <span class="sub-title"><i class="fal fa-book me-2"></i> Our Students Testimonials</span>
        <h2 class="sec-title">Students Say’s About Us!</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="row slider-shadow th-carousel testi-slider-3" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="2" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        @foreach($testimonials as $testimonial)
        <div class="col-lg-6">
            <div class="testi-box style2">
                <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> (4.7)
                </div>
                <div class="testi-box-bg-shape">
                    <svg width="78" height="111" viewBox="0 0 78 111" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0L78 30V71C78 93.0914 60.0914 111 38 111H10C4.47715 111 0 106.523 0 101V0Z" fill="#0D5EF4" /></svg>
                </div>
                <div class="testi-box_content">
                    <p class="testi-box_text">
                        {!!$testimonial->description!!}
                    </p>
                </div>
                <div class="testi-box_bottom">
                    <div class="testi-box_img"><img src="{{asset('images/'.$testimonial->image)}}" alt="Avater" /></div>
                    <div class="testi-box-author-details">
                        <h3 class="testi-box_name">{!!$testimonial->title!!}</h3>
                        <span class="testi-box_desig">{{$testimonial->extra_field_1}}</span>
                    </div>
                    <div class="testi-box_quote"><img src="assets/img/icon/testi-quote2.svg" alt="quote" /></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
</section>
<section class="space">
<div class="container">
    <div class="title-area text-center">
        <span class="sub-title"><i class="fal fa-book me-1"></i> Pricing Table</span>
        <h2 class="sec-title">Our Membership Price Plan</h2>
    </div>
    <div class="row gy-4 justify-content-center">
        <div class="col-xl-4 col-md-6">
            <div class="price-card">
                <div class="price-card_top">
                    <h3 class="price-card_title">Basic Plan</h3>
                    <h4 class="price-card_price">$156.00 <span class="duration">/PER MONTHLY</span></h4>
                </div>
                <div class="price-card_content">
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i> Access to all courses</li>
                            <li><i class="far fa-check-circle"></i> Example code available</li>
                            <li><i class="far fa-check-circle"></i> High resolution videos</li>
                            <li class="unavailable"><i class="fa-regular fa-circle-xmark"></i> Certificate after completion</li>
                            <li class="unavailable"><i class="fa-regular fa-circle-xmark"></i> Private sessions</li>
                        </ul>
                    </div>
                    <a href="pricing.html" class="th-btn style10">CHOOSE THE PLAN<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="price-card active">
                <div class="price-card_top">
                    <h3 class="price-card_title">Standard Plan</h3>
                    <h4 class="price-card_price">$176.00 <span class="duration">/PER MONTHLY</span></h4>
                </div>
                <div class="price-card_content">
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i> Access to all courses</li>
                            <li><i class="far fa-check-circle"></i> Example code available</li>
                            <li><i class="far fa-check-circle"></i> High resolution videos</li>
                            <li><i class="fa-regular fa-circle-xmark"></i> Certificate after completion</li>
                            <li class="unavailable"><i class="fa-regular fa-circle-xmark"></i> Private sessions</li>
                        </ul>
                    </div>
                    <a href="pricing.html" class="th-btn style10">CHOOSE THE PLAN<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="price-card">
                <div class="price-card_top">
                    <h3 class="price-card_title">Premium Plan</h3>
                    <h4 class="price-card_price">$196.00 <span class="duration">/PER MONTHLY</span></h4>
                </div>
                <div class="price-card_content">
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i> Access to all courses</li>
                            <li><i class="far fa-check-circle"></i> Example code available</li>
                            <li><i class="far fa-check-circle"></i> High resolution videos</li>
                            <li><i class="fa-regular fa-circle-xmark"></i> Certificate after completion</li>
                            <li><i class="fa-regular fa-circle-xmark"></i> Private sessions</li>
                        </ul>
                    </div>
                    <a href="pricing.html" class="th-btn style10">CHOOSE THE PLAN<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="blog-area-3 space-top" data-bg-src="assets/img/bg/blog-3-bg.png" id="blog-sec">
@if(null!==($blogs = module(10)))
<div class="shape-mockup blog-3-bg-shape1 jump" data-left="3%" data-bottom="10%"><img src="assets/img/normal/blog-3-bg-shape.png" alt="img" /></div>
<div class="container">
    <div class="mb-35 text-center text-md-start">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-8">
                <div class="title-area mb-md-0">
                    <span class="sub-title"><i class="fal fa-book me-2"></i> Our News & Blogs</span>
                    <h2 class="sec-title">Latests News & Blogs</h2>
                </div>
            </div>
            <div class="col-md-auto">
                <a href="blog.html" class="th-btn">View All Posts<i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
    <div class="row th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1" data-arrows="true">
       @foreach($blogs as $blog)
        <div class="col-md-6 col-xl-4">
            <div class="th-blog blog-single style4">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-3-1.jpg" alt="Blog Image" /></a>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by {{$blog->extra_field_1}}</a> <a href="blog.html"><i class="fa-light fa-clock"></i>{{$blog->extra_field_2}} {{$blog->extra_field_4}}, {{$blog->extra_field_3}}</a>
                    </div>
                    <h4 class="box-title"><a href="blog-details.html">{{$blog->title}}</a></h4>
                    <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
</section>
<div class="container">
<div class="newsletter-area-1" data-bg-src="assets/img/bg/newsletter-1-bg.png">
    <div class="newsletter-thumb shape-mockup d-lg-block d-none" data-top="0" data-left="0"><img src="assets/img/normal/newsletter-thumb1.png" alt="img" /></div>
    <div class="row justify-content-end align-items-center">
        <div class="col-xl-4 col-lg-8 col-md-12">
            <div class="title-area mb-0 me-xxl-5 text-md-start text-center"><h2 class="sec-title h4 text-white">Subscribe Our Newsletter For Latest Updates</h2></div>
        </div>
        <div class="col-xl-5 col-lg-8 col-md-12 mt-40 mt-xl-0 text-end">
            <div class="widget newsletter-widget footer-widget mb-0">
                <form class="newsletter-form">
                    <div class="form-group"><input class="form-control" type="email" placeholder="Email Address" required="" /> <i class="far fa-envelope"></i></div>
                    <button type="submit" class="th-btn style9">Subscribe Now<i class="far fa-arrow-right ms-2"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>