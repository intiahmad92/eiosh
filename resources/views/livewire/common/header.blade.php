<div>
  <div class="Header_header__eebUp" id="mainheader">
                    <a class="Header_logo__7oskx" href="{{url('/')}}">
                        <div class="Header_logo_image__IenQx"><img src="{{url('/')}}/images/{{$siteSettings->extra_image_1}}" /></div>
                        {{$siteSettings->extra_field_1}}
                    </a>
                    <div class="Header_spacer__pGvDU"></div>
                    <div class="Header_assetHeader__jyaJc">
                        <h2 id="header-path"></h2>
                        <h1 id="header-title"></h1>
                    </div>
                    <div style="display: none;" id="header-frompath"></div>
                    <div class="Header_spacer__pGvDU"></div>
                    <div class="Nav_nav__tx_4H Nav_hiddenMobile__AfUR0">
                        <div class="Nav_navItemWrapper__s0LCh Nav_navItemMenuFlag__iRqWc">
                            <a class="Nav_navItem__pOvhG" href="all.html">Assets</a>
                            <div class="Nav_subNav__cIIEg">
                                @if(null!==($categories = module(4)))
                                @foreach($categories as $category)
                                <div class="Nav_navItemWrapper__s0LCh">
                                    <a class="Nav_navItem__pOvhG" href="{{route('courses.list',$category->slug)}}">
                                        <span class="Nav_assetType__bDyPO">
                                            <img src="{{asset('images/'.$category->extra_field_2)}}" />
                                            <!-- -->{{$category->title}}
                                        </span>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                                
                                
                                <hr />
                                <div class="Nav_navItemWrapper__s0LCh">
                                    <a class="Nav_navItem__pOvhG" href="{{route('courses.list','all')}}">
                                        <span class="Nav_assetType__bDyPO">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path>
                                            </svg>
                                            Collections
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="Nav_navItemWrapper__s0LCh">
                            <a class="Nav_navItem__pOvhG" href="plugins/blender.html">
                                <svg width="1em" height="1em" viewBox="0 0 2146 1743" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            fill="currentColor"
                                            d="M1118.46,979.951c4.011,-71.561 39.054,-134.607 91.92,-179.3c51.845,-43.897 121.627,-70.728 197.767,-70.728c76.065,0 145.847,26.831 197.73,70.728c52.828,44.693 87.871,107.739 91.92,179.224c4.012,73.529 -25.544,141.835 -77.389,192.469c-52.866,51.504 -128.06,83.822 -212.261,83.822c-84.2,0 -159.545,-32.318 -212.374,-83.822c-51.883,-50.634 -81.362,-118.94 -77.313,-192.393Z"
                                        ></path>
                                        <path
                                            fill="currentColor"
                                            d="M657.157,1124.55c0.492,28.003 9.423,82.421 22.82,124.919c28.155,89.953 75.913,173.169 142.365,246.509c68.193,75.383 152.166,135.931 249.158,178.921c101.949,45.146 212.412,68.155 327.152,67.966c114.55,-0.152 225.014,-23.614 326.963,-69.102c96.991,-43.405 180.889,-104.219 248.968,-179.64c66.415,-73.642 114.097,-157.01 142.328,-246.962c14.191,-45.45 23.16,-91.58 26.755,-137.862c3.519,-45.601 2.043,-91.277 -4.428,-136.916c-12.64,-88.93 -43.406,-172.374 -90.785,-248.438c-43.33,-69.896 -99.187,-131.088 -165.601,-182.592l0.151,-0.114l-670.236,-514.625c-0.605,-0.454 -1.097,-0.946 -1.74,-1.362c-43.974,-33.756 -117.919,-33.643 -166.282,0.189c-48.893,34.21 -54.494,90.785 -10.975,126.471l-0.189,0.189l279.546,227.322l-852.034,0.909l-1.135,-0c-70.426,0.075 -138.127,46.281 -151.523,104.673c-13.775,59.489 34.058,108.836 107.285,109.101l-0.114,0.265l431.864,-0.833l-770.634,591.522c-0.984,0.719 -2.043,1.476 -2.952,2.195c-72.696,55.667 -96.196,148.231 -50.406,206.812c46.471,59.564 145.279,59.678 218.732,0.34l420.586,-344.219c0,0 -6.131,46.471 -5.639,74.362Zm1080.76,155.61c-86.661,88.287 -207.985,138.353 -339.262,138.618c-131.467,0.227 -252.791,-49.385 -339.451,-137.521c-42.347,-42.952 -73.453,-92.374 -92.64,-145.014c-18.808,-51.731 -26.111,-106.641 -21.268,-162.043c4.579,-54.153 20.701,-105.809 46.434,-152.545c25.279,-45.941 60.094,-87.455 103.084,-122.573c84.238,-68.647 191.485,-105.809 303.652,-105.96c112.28,-0.151 219.451,36.67 303.765,105.09c42.914,34.967 77.691,76.329 102.97,122.194c25.847,46.699 41.855,98.165 46.623,152.469c4.768,55.327 -2.536,110.161 -21.344,161.93c-19.224,52.791 -50.217,102.214 -92.563,145.355Z"
                                        ></path>
                                    </g>
                                </svg>
                                <!-- -->Add-on
                            </a>
                        </div>
                        <div class="Nav_navItemWrapper__s0LCh"><a class="Nav_navItem__pOvhG" href="gallery.html">Gallery</a></div>
                        <div class="Nav_navItemWrapper__s0LCh">
                            <a class="Nav_navItem__pOvhG" href="https://www.patreon.com/polyhaven/overview">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path
                                        fill="#F96854"
                                        d="M9.5 19c-0.084 0-0.167-0.021-0.243-0.063-0.094-0.052-2.326-1.301-4.592-3.347-1.341-1.21-2.411-2.448-3.183-3.68-0.984-1.571-1.482-3.139-1.482-4.66 0-2.895 2.355-5.25 5.25-5.25 0.98 0 2.021 0.367 2.931 1.034 0.532 0.39 0.985 0.86 1.319 1.359 0.334-0.499 0.787-0.969 1.319-1.359 0.91-0.667 1.951-1.034 2.931-1.034 2.895 0 5.25 2.355 5.25 5.25 0 1.521-0.499 3.089-1.482 4.66-0.771 1.232-1.842 2.47-3.182 3.68-2.266 2.046-4.498 3.295-4.592 3.347-0.076 0.042-0.159 0.063-0.243 0.063z"
                                    ></path>
                                </svg>
                                <!-- -->Support Us
                            </a>
                        </div>
                        <div class="Nav_navItemWrapper__s0LCh"><a class="Nav_navItem__pOvhG" href="https://blog.polyhaven.com/">Blog</a></div>
                        <div class="Nav_navItemWrapper__s0LCh Nav_navItemMenuFlag__iRqWc">
                            <a class="Nav_navItem__pOvhG" href="about-contact.html">About/Contact</a>
                            <div class="Nav_subNav__cIIEg">
                                <div class="Nav_navItemWrapper__s0LCh"><a class="Nav_navItem__pOvhG" href="https://docs.polyhaven.com/en/faq">FAQ</a></div>
                                <div class="Nav_navItemWrapper__s0LCh"><a class="Nav_navItem__pOvhG" href="license.html">License</a></div>
                                <div class="Nav_navItemWrapper__s0LCh"><a class="Nav_navItem__pOvhG" href="https://www.patreon.com/polyhaven/posts?public=true">News</a></div>
                            </div>
                        </div>
                        <div class="Nav_navItemWrapper__s0LCh">
                            <a class="Nav_navItem__pOvhG" href="account6263.html?returnTo=/">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48c-42.9 0-84.2 13-119.2 37.5-34.2 24-60.2 57.2-75.1 96.1L58 192h45.7l1.9-5c8.2-17.8 19.4-33.9 33.5-48 31.2-31.2 72.7-48.4 116.9-48.4s85.7 17.2 116.9 48.4c31.2 31.2 48.4 72.7 48.4 116.9 0 44.1-17.2 85.7-48.4 116.9-31.2 31.2-72.7 48.4-116.9 48.4-44.1 0-85.6-17.2-116.9-48.4-14-14-25.3-30.1-33.5-47.9l-1.9-5H58l3.6 10.4c14.9 38.9 40.9 72.1 75.1 96.1C171.8 451.1 213 464 256 464c114.7 0 208-93.3 208-208S370.7 48 256 48z"
                                    ></path>
                                    <path d="M48 277.4h189.7l-43.6 44.7L224 352l96-96-96-96-31 29.9 44.7 44.7H48v42.8z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div style="height: 100%; display: flex;">
                        <div class="Nav_navItemWrapper__s0LCh Nav_compactNavItemWrapper__SB984 Nav_navItemMenuFlag__iRqWc">
                            <span class="Nav_navItem__pOvhG"><img src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/gb.svg" style="display: inline-block; width: inherit; height: 1em; vertical-align: middle;" /></span>
                            <div class="Nav_subNav__cIIEg"></div>
                        </div>
                    </div>
                    <div class="Nav_menuToggle__CRsOr">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                        </svg>
                    </div>
                </div>
</div>