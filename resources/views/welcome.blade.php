<x-app-layout>
<div id="page" class="Page_page__jLKW_">
    <div class="Page_pageContent__9e_Vu">
        <div class="Home_home__WmrzH">
            @if(null!==($slider = module(6,1)))
            @foreach($slider as $slide)
            <div class="Slider_wrapper__cK0mf">
                <div class="Slider_placeholder__dQ2__"></div>
                <div class="Slider_sliderImage__d__k3 Slider_hidden__btgOf"></div>
                <div class="Slider_sliderImage__d__k3 Slider_hidden__btgOf"></div>
                
                <div class="Slider_paddleRight__HTt5W">
                    <img src="{{asset('images/'.$slide->image)}}" alt="">
                </div>
                
                <img src="{{url('/')}}/images/{{$siteSettings->extra_image_1}}" class="Slider_logo__S5bPf" />
                <h1>{{$slide->title}}</h1>
                <p>{{$slide->extra_field_1}}</p>
            </div>
            @endforeach
            @endif
            <div class="Home_sectionWrapper__oxo9r">
                <div class="Home_assetTypeBanner__pIrzU">
                    @if(null!==($categories = module(4)))
                    @foreach($categories as $category)
                    <div class="Home_subSection__aX9hu undefined">
                        <a href="{{route('courses.list',$category->slug)}}">
                            <div class="Home_assetTypeImage__wiCha">
                                <img src="{{asset('images/'.$category->extra_field_2)}}" /><img src="{{asset('images/'.$category->extra_field_3)}}" class="Home_hover__pPUWu" />
                            </div>
                        </a>
                        <div class="Home_text__ihJ9G">
                            <h2>{{$category->title}}</h2>
                            <p>{{$category->extra_field_1}}</p>
                            <a class="Button_button__GeQ2O Button_blue__bLQC5" href="{{route('courses.list',$category->slug)}}"><div class="Button_inner__63ypl">Browse {{$category->title}}</div></a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                    
                </div>
            </div>
            <?php $widget = widget(4); ?>
            <div class="Home_sectionWrapper__oxo9r Home_windowBannerRend__HNzjD" style="background: url({{asset('images/'.$widget->extra_image_1)}}) no-repeat 50%!important;background-attachment: fixed!important;
    background-size: cover!important;">
                <div class="Home_gradientLeft__dRRR8"></div>
                <div class="Home_section__BntL9">
                    <div class="Home_subSection__aX9hu">
                        <div class="Home_text__ihJ9G">
                            <h2>{{$widget->extra_field_1}}</h2>
                            <p>{!!$widget->description!!}</p>
                        </div>
                    </div>
                    <div class="Home_subSection__aX9hu Home_hideMobileHalf__Djfri"></div>
                </div>
            </div>
            <?php $widget = widget(5); ?>
            <div class="Home_sectionWrapper__oxo9r Home_windowBannerClay__n42gE" style="background: url({{asset('images/'.$widget->extra_image_1)}}) no-repeat 50%!important;background-attachment: fixed!important;
    background-size: cover!important;">
                <div class="Home_gradientRight__hod6m"></div>
                <div class="Home_section__BntL9">
                    <div class="Home_subSection__aX9hu Home_hideMobileHalf__Djfri"></div>
                    <div class="Home_subSection__aX9hu">
                        <div class="Home_text__ihJ9G">
                            <h2>{{$widget->extra_field_1}}</h2>
                            <p>{!!$widget->description!!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $widget = widget(6); ?>
            <div class="Home_sectionWrapper__oxo9r">
                <div class="Home_section__BntL9 Home_sectionHalfMobile___659O">
                    <div class="Home_subSection__aX9hu">
                        <div>
                            <h2>
                                {{$widget->extra_field_1}}
                                
                            </h2>
                            <p>{!!$widget->description!!}</p>
                        </div>
                    </div>
                    <div class="Home_subSection__aX9hu">
                        <a class="Button_button__GeQ2O Button_accent__N9N_t" href="https://www.patreon.com/polyhaven/overview"><div class="Button_inner__63ypl">🚀 Become a Patron</div></a>
                        <a class="Button_button__GeQ2O Button_hollow__DlAZt" href="#"><div class="Button_inner__63ypl">Finance Reports</div></a>
                    </div>
                </div>
            </div>
            <?php $widget = widget(7); ?>
            <div class="Home_sectionWrapper__oxo9r Home_sectionBrowse__WPQyx" style="background: url({{asset('images/'.$widget->extra_image_1)}}) no-repeat 50%!important;background-attachment: fixed!important;
    background-size: cover!important;">
                <div class="Home_btnBrowse__r7Shw Home_btnBrowseAll__DROmn">
                    <a class="Button_button__GeQ2O Button_accent__N9N_t" href="{{route('courses.list','all')}}"><div class="Button_inner__63ypl">Browse All Assets</div></a>
                </div>
                <div class="Home_btnBrowse__r7Shw Home_btnBrowseHDRIs__Tg6P4">
                    <a class="Button_button__GeQ2O Button_blue__bLQC5" href="{{route('courses.list','hdris')}}"><div class="Button_inner__63ypl">Browse HDRIs</div></a>
                </div>
                <div class="Home_btnBrowse__r7Shw Home_btnBrowseTextures__66gZo">
                    <a class="Button_button__GeQ2O Button_orange__zNWiI" href="{{route('courses.list','textures')}}"><div class="Button_inner__63ypl">Browse Textures</div></a>
                </div>
                <div class="Home_btnBrowse__r7Shw Home_btnBrowseModels__YctDL">
                    <a class="Button_button__GeQ2O Button_green__Ci_jE" href="{{route('courses.list','models')}}"><div class="Button_inner__63ypl">Browse Models</div></a>
                </div>
                <div class="Home_hoverBrowseAll__L8AEE"></div>
                <div class="Home_hoverBrowseHDRIs__uO9Oo"></div>
                <div class="Home_hoverBrowseTextures__bQf_k"></div>
                <div class="Home_hoverBrowseModels__hDpla"></div>
            </div>
            <div class="Home_sectionWrapper__oxo9r">
                <div class="Home_section__BntL9 Home_testimonials__U1s2d">
                    @if(null!==($testimonials = module(7)))
                    @foreach($testimonials as $testimonial)
                    <div class="Home_testimonial__S0Sj_">
                        <img src="{{asset('images/'.$testimonial->image)}}" />
                        <p>
                            {!!$testimonial->description!!}<br />
                            <strong>-{{$testimonial->title}}, {{$testimonial->extra_field_1}}</strong>
                        </p>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
            </div>
            <?php $widget = widget(8); ?>
            <div class="Home_sectionWrapper__oxo9r">
                <div class="Home_section__BntL9">
                    <div class="Home_subSection__aX9hu">
                        <div class="Home_text__ihJ9G">
                            <h2 style="text-align: center;">{{$widget->extra_field_1}}</h2>
                            <p>{!!$widget->description!!}</p>
                        </div>
                    </div>
                    <div class="Home_subSection__aX9hu Home_hideMobileStaff__4RBAw">
                        <div class="Home_staff__Y_qIR">
                            <div class="Home_avatarRow__NTP83"><img src="{{asset('images/'.$widget->extra_image_1)}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $widget = widget(9); ?>
            <div class="Home_sectionWrapper__oxo9r">
                <div class="Home_section__BntL9">
                    <div class="Home_subSection__aX9hu">
                        <h2>{{$widget->extra_field_1}}</h2>
                        {!!$widget->description!!}
                    </div>
                    <div class="Home_subSection__aX9hu">
                        <div class="SocialIcons_communityIcons__2sqxp">
                            <a href="{{$widget->extra_field_2}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"
                                    ></path>
                                </svg>
                            </a>
                           
                            <a rel="me" href="{{$widget->extra_field_3}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M23.268 5.313c-.35-2.578-2.617-4.61-5.304-5.004C17.51.242 15.792 0 11.813 0h-.03c-3.98 0-4.835.242-5.288.309C3.882.692 1.496 2.518.917 5.127.64 6.412.61 7.837.661 9.143c.074 1.874.088 3.745.26 5.611.118 1.24.325 2.47.62 3.68.55 2.237 2.777 4.098 4.96 4.857 2.336.792 4.849.923 7.256.38.265-.061.527-.132.786-.213.585-.184 1.27-.39 1.774-.753a.057.057 0 0 0 .023-.043v-1.809a.052.052 0 0 0-.02-.041.053.053 0 0 0-.046-.01 20.282 20.282 0 0 1-4.709.545c-2.73 0-3.463-1.284-3.674-1.818a5.593 5.593 0 0 1-.319-1.433.053.053 0 0 1 .066-.054c1.517.363 3.072.546 4.632.546.376 0 .75 0 1.125-.01 1.57-.044 3.224-.124 4.768-.422.038-.008.077-.015.11-.024 2.435-.464 4.753-1.92 4.989-5.604.008-.145.03-1.52.03-1.67.002-.512.167-3.63-.024-5.545zm-3.748 9.195h-2.561V8.29c0-1.309-.55-1.976-1.67-1.976-1.23 0-1.846.79-1.846 2.35v3.403h-2.546V8.663c0-1.56-.617-2.35-1.848-2.35-1.112 0-1.668.668-1.67 1.977v6.218H4.822V8.102c0-1.31.337-2.35 1.011-3.12.696-.77 1.608-1.164 2.74-1.164 1.311 0 2.302.5 2.962 1.498l.638 1.06.638-1.06c.66-.999 1.65-1.498 2.96-1.498 1.13 0 2.043.395 2.74 1.164.675.77 1.012 1.81 1.012 3.12z"
                                    ></path>
                                </svg>
                            </a>
                            <a href="{{$widget->extra_field_5}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                                    ></path>
                                </svg>
                            </a>
                            <a href="{{$widget->extra_field_6}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                                    ></path>
                                </svg>
                            </a>
                            <a href="{{$widget->extra_field_7}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                                    ></path>
                                </svg>
                            </a>
                            <a href="{{$widget->extra_field_4}}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title></title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@push('js')

@endpush
</x-app-layout>