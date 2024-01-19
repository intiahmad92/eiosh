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
                                <li role="presentation" class="active"><a href="#channelvideos" id="channelvideos-tab" aria-controls="channelvideos" role="tab" data-toggle="tab">Case Studies</a></li>
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
                                            
                                            <div class="et_pb_section et_pb_section_0 et_section_regular">
        
        
        
        
        
        
                                                <div class="et_pb_row et_pb_row_0">
                                                <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                
                                                
                                                
                                                
                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
                                                
                                                
                                                
                                                
                                                <div class="et_pb_text_inner"><h2>{{$service->extra_field_2}}</h2></div>
                                              </div><div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
                                                
                                                
                                                
                                                
                                                <div class="et_pb_text_inner">{!!$service->description!!}</div>
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
            <div class="mb20"></div><!-- space -->
                        
            <div class="mb20"></div><!-- space -->
                                </div>
</x-app-layout>