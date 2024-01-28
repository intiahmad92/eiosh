<x-app-layout>
   <div>
    <style>
       .GridItem_blur__30m7f .GridItem_thumb__M8icc {
    filter: none !important;
    transition: all .15s ease;
}
.Grid_optionsBar__sIAVv {
    position: relative !important;
    z-index: 0;
    width: calc(100% - 100px - 1rem) !important;
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    padding: 51px 7px 0px 69px !important;
    background: rgba(45,45,45,.8);
}
.GridItem_thumb__M8icc img {
    height: 278px;
    display: block;
    width: 100%;
}
    </style>
<div class="Sidebar_sidebarToggle__p26QX">
    <div class="IconButton_wrapper__oOa2E">
        <div class="IconButton_button__RSJAG">
            <div class="IconButton_icon__s11cP">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="Page_pageContent__9e_Vu">
        <div></div>
        <div class="Grid_optionsBar__sIAVv">
            <div class="Grid_gridHeaderWrapper__yFCh_">
                <div class="Grid_gridHeader__PXET0">
                    <div class="Grid_gridTitle__QQq_T"><h1>{{$category->title}}</h1></div>
                    <div class="Grid_options__72Gzf">
                        <div class="Grid_advWrapper__bYgNm">
                            <div class="Grid_advButton__Ufypr">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path
                                        d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 00.12-.61l-1.92-3.32a.488.488 0 00-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 00-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 00-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="Grid_search__JnUId">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="Grid_searchIcon__BMEqb" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                ></path>
                            </svg>
                            <form><input type="text" placeholder="Search..." value="" /></form>
                        </div>
                        <p class="Grid_numResults__pJyUp">
                             {{__('Showing Pages')}} : {{ $courses->firstItem() }} - {{ $courses->lastItem() }} {{__('Total')}} {{ $courses->total() }}
                        </p>
                    </div>
                </div>
                <div class="Grid_adGridTop__YTVNE">
                    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" data-ad-client="ca-pub-2284751191864068" data-ad-slot="9488083725" style="display: inline-block; width: 728px; height: 90px;" data-adsbygoogle-status="done">
                        <div id="aswift_1_host" style="border: none; height: 90px; width: 728px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"></div>
                    </ins>
                </div>
            </div>
        </div>
        <div class="Grid_grid___F5WY">

          @if(null!==($courses))
          @foreach($courses as $course)
          <div class="LazyLoad is-visible">
                <a class="GridItem_gridItem__0cuEz GridItem_blur__30m7f" href="{{route('courses.detail',[$category->slug,$course->slug])}}">
                    
                    <div class="GridItem_thumb__M8icc">
                     <img src="{{asset('images/'.$course->image)}}?width=371&amp;height=278" alt="{{$course->title}}" />
                    </div>
                    <div class="GridItem_text__HzSp8">
                        <h3>{{$course->title}}</h3>
                        <p>{{Carbon\Carbon::parse($course->created_at)->diffForHumans()}}</p>
                    </div>
                    <div class="GridItem_badge__o1VhV GridItem_soon__xmWuE" title="$3+ Patrons can log in to download early">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 180">
                            <path
                                fill="#f96753"
                                d="M108.8135992 26.06720125c-26.468266 0-48.00213212 21.53066613-48.00213212 47.99733213 0 26.38653268 21.53386613 47.85426547 48.00213213 47.85426547 26.38639937 0 47.8530655-21.4677328 47.8530655-47.85426547 0-26.466666-21.46666613-47.99733213-47.85306547-47.99733213"
                            ></path>
                            <path fill="#052a49" d="M23.333335 153.93333178V26.0666679h23.46666576v127.8666639z"></path>
                        </svg>
                        Early Access
                    </div>
                    <div class="GridItem_indicators__QSdju"></div>
                </a>
            </div>
            @endforeach
            @endif



            

            
        </div>
    </div>
</x-app-layout>