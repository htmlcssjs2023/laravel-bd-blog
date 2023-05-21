<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.includes.head')
  </head>

  <body>

    <!-- Header -->
    <header class="">
     @include('frontend.includes.nav')
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @section('banner')
      <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h4>Post Details</h4>
                  <h2>Single blog post</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    @endsection
    <!-- Banner End Here -->
    @yield('banner');
    <!-- Banner Ends Here -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              @yield('content')
              @yield('single-post')
              </div>
            </div>
          </div>
          <!-- Right sidebar -->
          @include('frontend.includes.sidebar')
        </div>
      </div>
    </section>

    
  <!-- Footer start -->
    @include('frontend.includes.footer')
  <!-- Footer end -->

    <!-- Bootstrap core JavaScript -->
   @include('frontend.includes.scripts')
  </body>
</html>