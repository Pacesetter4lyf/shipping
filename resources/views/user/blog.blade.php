
@extends('user.master')

@section('content')
    
      <!--  breadcrumb start  -->
      <div class="breadcrumb-area blog-breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="breadcrumb-txt">
                     <span>Latest Blog</span>
                     <h1>FROM THE LATEST NEWS AND BLOG</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  breadcrumb end  -->


      <!--    blog lists start   -->
      <div class="blog-lists">
         <div class="container">
            <div class="row">
               <div class="col-xl-7 col-lg-8">
                  <div class="row">
                     <div class="col-lg-12">
                        @forEach($posts as $post)
                        <div class="single-blog">
                           <div class="blog-img-wrapper">
                              <img src="./images/{{$post->imageName}}" alt="">
                           </div>
                           <div class="blog-txt">
                              <p class="date">{{$post->updated_at}}  -  {{$post->editedBy}}</p>
                              <h3 class="blog-title"><a href="">{{$post->title}}</a></h3>
                              <p class="blog-summary">{{substr($post->content, 0, 300)}}...</p>
                              <a href="/blog?id={{$post->id}}" class="readmore">Read More</a>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
                  <!-- substr("Hello world",6) -->
                  <div class="row">
                     <div class="col-lg-12">
                        <nav class="pagination-nav">
                           <ul class="pagination justify-content-center">
                           {{ $posts ->links('vendor.pagination.bootstrap-4') }}
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <!--    blog sidebar section start   -->
               <div class="col-xl-4 offset-xl-1 col-lg-4">
                  <div class="sidebar">
                     <div class="blog-sidebar-widgets">
                        <div class="searchbar-form-section">
                           <form action="https://kreativdev.com/transpix/transpix/blogs.html">
                              <div class="searchbar">
                                 <input name="term" type="text" placeholder="Search">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="blog-sidebar-widgets post-widget">
                        <div class="popular-posts-lists">
                           <h4>Popular Posts</h4>

                           @foreach($populars as $popular)
                           <div class="single-popular-post">
                              <div class="popular-post-img-wrapper">
                                 <img src="./images/{{$popular->imageName}}" alt="">
                              </div>
                              <div class="popular-post-txt">
                                 <h5 class="popular-post-title"><a href="blog-details.html">{{$popular->title}}</a></h5>
                                 <small class="time">2 days ago</small>
                              </div>
                           </div>
                           @endforeach
                           
                        </div>
                     </div>
                     <div class="blog-sidebar-widgets category-widget">
                        <div class="category-lists">
                           <h4>Categories</h4>
                           <ul>
                              <li class="single-category"><a href="blogs.html">Cargo</a></li>
                              <li class="single-category"><a href="blogs.html">Delivery service</a></li>
                              <li class="single-category"><a href="blogs.html">Freight</a></li>
                              <li class="single-category"><a href="blogs.html">Logistic</a></li>
                              <li class="single-category"><a href="blogs.html">Shipping</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="subscribe-section">
                        <span>SUBSCRIBE</span>
                        <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                        <form class="subscribe-form" action="https://kreativdev.com/transpix/transpix/blogs.html">
                           <div class="form-element"><input type="email" placeholder="Email"></div>
                           <div class="form-element"><button type="submit"><span>Subscribe</span></button></div>
                        </form>
                     </div>
                  </div>
               </div>
               <!--    blog sidebar section end   -->
            </div>
         </div>
      </div>
      <!--    blog lists end   -->


      <!--   cta section start    -->
      <div class="cta-section cta-bg">
         <div class="container">
            <div class="cta-container">
               <div class="row align-items-center">
                  <div class="col-lg-9">
                     <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
                  </div>
                  <div class="col-lg-3 text-center text-lg-right">
                     <a href="contact.html" class="boxed-btn"><span>Contact Us</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-overlay"></div>
      </div>
      <!--   cta section end    -->  

    
@endsection