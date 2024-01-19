<x-app-layout>
     <style>
            .navbar-transparent {
    background-color: #2a2a2a !important;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 299;
    transition: all 0.25s;
    -webkit-transition: all 0.25s;
}
        </style>
    <div class="container mt-5" style="margin-top: 70px;">

            <div class="row">
                <div class="col-md-12">
                    <div class="wow fadeInUp"> <!-- service  -->

                        <div class="mb60"></div><!-- space -->

                        <!-- tab container -->
                        <div id="tabcontainer">

                            <!-- Nav tabs -->
                            <ul id="myTabs" class="nav nav-tabs no-padding" role="tablist">
                                <li role="presentation" class="active"><a href="#channelvideos" id="channelvideos-tab" aria-controls="channelvideos" role="tab" data-toggle="tab">Blog</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="channelvideos" aria-labelledBy="channelvideos-tab">
                                    <div class="form-inline form-group">
                                        <div class="input-group">
                                            <div class="mb10"></div><!-- space -->
                                                                    
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul id="IMLSpagination" class="IMLSpagination pagination-sm"></ul>
                                                </div>
                                                <!-- <div class="col-md-4">
                                                    <form class="navbar-form navbar-right" role="search" action="live-games.php" method="get">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="" placeholder="Search" name="search" id="search">
                                                        </div>
                                                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                                    </form>
                                                </div>  -->
                                            </div>
                                            <div class="mb30"></div><!--space -->
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    @if(null!==($blogs))
                                                    @foreach($blogs as $service)
                                                    <article class="entry entry-box entry-box-blockquote bg-lightergray wow fadeInUp" style="width:270px; height:513px; float:left; margin-right:15px; margin-top:3px;">
                                                        <div class="entry-content" style="padding:20px;">
                                                            <blockquote>
                                                                <p>
                                                                    <a href="{{route('blogs.detail',$service->slug)}}" class="pageLnks">{{$service->title}}</a>
                                                                </p>
                                                            </blockquote>
                                                        </div>
                                                        <div class="entry-media" style="margin-left:20px; width:227px !important; height:127px !important;">
                                                            
                                                            <figure class="about-widget-box">
                                                                <a href="{{route('blogs.detail',$service->slug)}}" title="{{$service->title}}"><img alt="{{$service->title}}" src="{{asset('images/'.$service->image)}}" style="width:225px; height:125px; border:0px; padding:4px; vertical-align:middle;"></a>
                                                            </figure>

                                                        </div>
                                                        <table class="table table-condensed borderless">
                                                            <body>
                                                                <tr><td style="text-align:center;">{{$service->extra_field_1}}
                                                                </td></tr>
                                                            </body>
                                                        </table>
                                                    </article>
                                                    @endforeach
                                                    @endif

                                                    

                                                    

                                                    

                                                    
                                                    
                                                    
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
            <div class="mb20"></div><!-- space -->
                        
            <div class="mb20"></div><!-- space -->
                                </div>
</x-app-layout>