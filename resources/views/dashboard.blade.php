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
        /* CSS Document */

        .profile-thum-wrapper {
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .thum-holder {
            text-align: center;
            position: relative;
            border-radius: 10px;
            width: 230px;
            height: 90px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            /*margin-bottom: 20px;*/
        }

        .thum-holder .thum {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .thum-holder .upload-file-block,
        .thum-holder .upload-loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(90, 92, 105, 0.7);
            color: #f8f9fc;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .thum-holder .upload-file-block {
            cursor: pointer;
        }

        .thum-holder:hover .upload-file-block,
        .uploadProfileInput:focus ~ .upload-file-block {
            opacity: 1;
        }

        .thum-holder.uploadInProgress .upload-file-block {
            display: none;
        }

        .thum-holder.uploadInProgress .upload-loader {
            opacity: 1;
        }
    </style>
    
    <div class="container" style="    margin-top: 145px;">
        <div class="row">
            <aside class="col-md-12 sidebar" role="complementary">
                <h1 class="entry-content">
                    <blockquote>
                        Paul Jennings Analysis / Team Channel
                    </blockquote>
                </h1>
                <!-- End .entry-content -->
            </aside>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <!-- service  -->

                    <div class="mb20"></div>
                    <!-- space -->

                    <!-- tab container -->
                    <div id="tabcontainer">
                        <!-- Nav tabs -->
                        <ul id="myTabs" class="nav nav-tabs no-padding" role="tablist">
                            <li role="presentation" class="active"><a href="#channelvideos" id="channelvideos-tab" aria-controls="channelvideos" role="tab" data-toggle="tab">Videos</a></li>
                            <li role="presentation"><a href="#channeldonwloads" id="channeldonwloads-tab" aria-controls="channeldonwloads" role="tab" data-toggle="tab">Documents</a></li>
                        </ul>
                        <?php $videos = App\Models\ModulesData::where('module_id',12)->paginate(10); ?>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="channelvideos" aria-labelledby="channelvideos-tab">
                                <div class="form-inline form-group">
                                    <div class="input-group">
                                        <div class="mb10"></div>
                                        <!-- space -->

                                        <!-- <div class="container"> -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul id="IMLSpaginationTop" class="IMLSpagination pagination-sm pagination">
                                                    <{{ $videos->links() }}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb30"></div>
                                        <!--space -->
                                        <!-- presentations row -->
                                        @if(null!==($videos))
                                        @foreach($videos as $video)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <article class="entry entry-box entry-box-blockquote bg-lightergray" style="width: 270px; height: auto; float: left; margin-right: 15px;">
                                                    <div class="entry-content" style="padding: 20px;">
                                                        <blockquote>
                                                            <p>
                                                                <a
                                                                    href="{{route('video_detail',$video->slug)}}"
                                                                    title="{{$video->title}}"
                                                                    class="pageLnks"
                                                                >
                                                                    {{$video->title}}
                                                                </a>
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <!-- End .entry-content -->

                                                    <div class="entry-media" style="margin-left: 20px; width: 92px !important; height: 90px !important;">
                                                        <figure class="thum-holder">
                                                            <a
                                                                href="{{route('video_detail',$video->slug)}}"
                                                                title="{{$video->title}}"
                                                            >
                                                                <video controls width="640" height="360" autoplay="false">
                                                                    <source src="{{ asset('images/'.$video->image) }}" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            </a>
                                                        </figure>
                                                    </div>

                                                    <table class="table table-condensed borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <i class="fa fa-calendar greenBG" aria-hidden="true" style="font-size: 18px; color: #000041 !important;"></i>
                                                                </td>
                                                                <td class="greenBG" style="color: #000041 !important;">
                                                                    {{date('m/d/Y',strtotime($video->created_at))}}
                                                                </td>
                                                            </tr>

                                                            <tr style="border-bottom: none !important;">
                                                                <td style="text-align: center;">
                                                                    <i class="fa fa-bar-chart greenBG" aria-hidden="true" style="font-size: 18px; color: #000041 !important;"></i>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{route('video_detail',$video->slug)}}"
                                                                        title="{{$video->title}}"
                                                                        class="pageLnks"
                                                                    >
                                                                    {{Carbon\Carbon::parse($video->created_at)->format('D dS M Y')}}
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </article>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="mb20"></div>
                                        <!--space -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul id="IMLSpaginationBtm" class="IMLSpagination pagination-sm pagination">
                                                    {{ $videos->links() }}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb50"></div>
                                        <!--space -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="channeldonwloads" aria-labelledby="channeldonwloads-tab">
                                <div class="form-inline form-group">
                                    <div class="input-group">
                                        <div class="mb10"></div>
                                        <!-- space -->

                                        <article class="entry entry-box entry-box-blockquote bg-lightergray fadeInUp" style="width: 270px; height: auto; float: left; margin-right: 15px;">
                                            <div class="entry-content" style="padding: 20px;">
                                                <blockquote>
                                                    <p title="westport report">
                                                        westport report
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <!-- End .entry-content -->

                                            <div class="entry-media">
                                                <!-- <figure class="about-widget-box"> -->
                                                <img
                                                    alt="BALLINTUBBERVDAVITTS.pdf"
                                                    src="https://s3-eu-west-1.amazonaws.com/web.imedialibrarysports.com/images/ChannelDownloadThumbs/PDF.png"
                                                    style="width: auto; height: 90px; border: 0px; padding: 4px; vertical-align: middle; margin: 0 auto;"
                                                />
                                                <!-- </figure> -->
                                            </div>

                                            <div class="entry-media">
                                                <div style="width: 180px; padding: 20px 0px 10px 0px; margin: 0 auto;">
                                                    <a
                                                        href="https://s3.eu-west-1.amazonaws.com/uploads.imedialibrarysports.com/ChannelDownloadFiles/32-851/38bd1a6d372fad57fd09e088ea22ac15/BALLINTUBBERVDAVITTS.pdf?AWSAccessKeyId=AKIAIPWYHN6SOZHXHQRQ&amp;Expires=1698174010&amp;Signature=pZ6ij9Wc2pXgyYaqlSs056Gh%2FIw%3D"
                                                        title="Download PDF"
                                                        class="btn btn-success btn-sm"
                                                        target="_blank"
                                                    >
                                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download PDF
                                                    </a>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="entry entry-box entry-box-blockquote bg-lightergray fadeInUp" style="width: 270px; height: auto; float: left; margin-right: 15px;">
                                            <div class="entry-content" style="padding: 20px;">
                                                <blockquote>
                                                    <p title="MeathvsGalway.pdf">
                                                        MeathvsGalway.pdf
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <!-- End .entry-content -->

                                            <div class="entry-media">
                                                <!-- <figure class="about-widget-box"> -->
                                                <img
                                                    alt="MeathvsGalway.pdf"
                                                    src="https://s3-eu-west-1.amazonaws.com/web.imedialibrarysports.com/images/ChannelDownloadThumbs/PDF.png"
                                                    style="width: auto; height: 90px; border: 0px; padding: 4px; vertical-align: middle; margin: 0 auto;"
                                                />
                                                <!-- </figure> -->
                                            </div>

                                            <div class="entry-media">
                                                <div style="width: 180px; padding: 20px 0px 10px 0px; margin: 0 auto;">
                                                    <a
                                                        href="https://s3.eu-west-1.amazonaws.com/uploads.imedialibrarysports.com/ChannelDownloadFiles/32-851/17b92070d6d31047c429ca8cf3c5e74f/MeathvsGalway.pdf?AWSAccessKeyId=AKIAIPWYHN6SOZHXHQRQ&amp;Expires=1698174010&amp;Signature=2t5C%2Fv6%2FmbxArcwnBtvhFgkjDik%3D"
                                                        title="Download PDF"
                                                        class="btn btn-success btn-sm"
                                                        target="_blank"
                                                    >
                                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download PDF
                                                    </a>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="entry entry-box entry-box-blockquote bg-lightergray fadeInUp" style="width: 270px; height: auto; float: left; margin-right: 15px;">
                                            <div class="entry-content" style="padding: 20px;">
                                                <blockquote>
                                                    <p title="Football">
                                                        Football
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <!-- End .entry-content -->

                                            <div class="entry-media">
                                                <!-- <figure class="about-widget-box"> -->
                                                <img
                                                    alt="practicematchdetails.xlsx"
                                                    src="https://s3-eu-west-1.amazonaws.com/web.imedialibrarysports.com/images/ChannelDownloadThumbs/Microsoft_Office_Excel.png"
                                                    style="width: auto; height: 90px; border: 0px; padding: 4px; vertical-align: middle; margin: 0 auto;"
                                                />
                                                <!-- </figure> -->
                                            </div>

                                            <div class="entry-media">
                                                <div style="width: 180px; padding: 20px 0px 10px 0px; margin: 0 auto;">
                                                    <a
                                                        href="https://s3.eu-west-1.amazonaws.com/uploads.imedialibrarysports.com/ChannelDownloadFiles/32-851/d925bb74a12baf75744060503819383e/practicematchdetails.xlsx?AWSAccessKeyId=AKIAIPWYHN6SOZHXHQRQ&amp;Expires=1698174010&amp;Signature=d7Na7%2BhoQW34qRhwjmA2m6cR54A%3D"
                                                        title="Download Excel"
                                                        class="btn btn-success btn-sm"
                                                        target="_blank"
                                                    >
                                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download Excel
                                                    </a>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="entry entry-box entry-box-blockquote bg-lightergray fadeInUp" style="width: 270px; height: auto; float: left; margin-right: 15px;">
                                            <div class="entry-content" style="padding: 20px;">
                                                <blockquote>
                                                    <p title="DAVITTS V KILTANE kickouts.pdf">
                                                        DAVITTS V KILTANE ki...
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <!-- End .entry-content -->

                                            <div class="entry-media">
                                                <!-- <figure class="about-widget-box"> -->
                                                <img
                                                    alt="DAVITTSVKILTANEkickouts.pdf"
                                                    src="https://s3-eu-west-1.amazonaws.com/web.imedialibrarysports.com/images/ChannelDownloadThumbs/PDF.png"
                                                    style="width: auto; height: 90px; border: 0px; padding: 4px; vertical-align: middle; margin: 0 auto;"
                                                />
                                                <!-- </figure> -->
                                            </div>

                                            <div class="entry-media">
                                                <div style="width: 180px; padding: 20px 0px 10px 0px; margin: 0 auto;">
                                                    <a
                                                        href="https://s3.eu-west-1.amazonaws.com/uploads.imedialibrarysports.com/ChannelDownloadFiles/32-851/ddf8431ad001f16f6f0cb72a716f1375/DAVITTSVKILTANEkickouts.pdf?AWSAccessKeyId=AKIAIPWYHN6SOZHXHQRQ&amp;Expires=1698174010&amp;Signature=p8bzf5oeG1Wa5Ek6SvNF3lD9dOQ%3D"
                                                        title="Download PDF"
                                                        class="btn btn-success btn-sm"
                                                        target="_blank"
                                                    >
                                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download PDF
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- added spaces to display good on all devices for preview -->
        <div class="mb150"></div>
        <!-- space -->
    </div>
</x-app-layout>
