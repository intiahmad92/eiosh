<x-app-layout>
    
<section class="space-top space-extra-bottom">
@if(null!== $courses)
         <div class="container">
            <div class="th-sort-bar">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-auto"><span class="course-result-count">We found <span class="text-theme">12 courses</span> available for you</span></div>
               </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-course-grid">
                  <div class="row gy-4 mb-30">
                    @foreach($courses as $course)
                     <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat3">
                        <div class="course-box2 style2">
                           <div class="course-img"><img src="{{asset('images/'.$course->image)}}" alt="course"> <span class="tag">{{$course->extra_field_7}}</span></div>
                           <div class="course-content">
                              <div class="course-author">
                                 <div class="author-info"><img src="{{asset('images/'.$course->extra_field_5)}}" alt="author"> <a href="course.html" class="author-name">{{$course->extra_field_4}}</a></div>
                                 <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span></div>
                                    (4.00)
                                 </div>
                              </div>
                              <h3 class="course-title"><a href="course-details.html">{{$course->title}}s</a></h3>
                              <div class="course-meta"><span><i class="fal fa-file"></i>Lesson {{$course->extra_field_2}}</span> <span><i class="fal fa-user"></i>Students {{$course->extra_field_3}}</span> <span><i class="fal fa-eye"></i>View: {{$course->extra_field_8}}</span></div>
                           </div>
                        </div>
                        </div>
                        @endforeach
            <div class="th-pagination text-center pt-20">
               <ul>
                  <li><a href="blog.html">01</a></li>
                  <li><a href="blog.html">02</a></li>
                  <li><a href="blog.html">03</a></li>
                  <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
               </ul>
            </div>
         </div>
         @endif
      </section>
</x-app-layout>