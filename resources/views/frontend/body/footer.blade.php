<section class="footer-area pt-100px">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 responsive-column-half">
              <div class="footer-item">
                  <a href="/">
                      <img src="{{ asset('upload/no_image.jpg') }}" width="80px" height="80px" alt="footer logo" class="footer__logo">
                  </a>
                  <ul class="generic-list-item pt-4">
                      <li><a href="tel:+2348188209063">+234 8188209063</a></li>
                      <li><a href="mailto:asom@projectsaveng.org">asom@projectsaveng.org</a></li>
                      <li></li>
                  </ul>
                  <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">We are on</h3>
                  <ul class="social-icons social-icons-styled">
                      <li class="mr-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                      <li class="mr-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                      <li class="mr-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                      <li class="mr-1"><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                  </ul>
              </div><!-- end footer-item -->
          </div><!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column-half">
              <div class="footer-item">
                  <h3 class="fs-20 font-weight-semi-bold">Company</h3>
                  <span class="section-divider section--divider"></span>
                  <ul class="generic-list-item">
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="{{ route('become.instructor')}}">Become a Teacher</a></li>
                      <li><a href="#">Support</a></li>
                      <li><a href="#">FAQs</a></li>
                      <li><a href="#">Blog</a></li>
                  </ul>
              </div><!-- end footer-item -->
          </div><!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column-half">
              <div class="footer-item">
                  <h3 class="fs-20 font-weight-semi-bold">Courses</h3>
                  <span class="section-divider section--divider"></span>
                  <ul class="generic-list-item">
                      <li><a href="#">Spiritual Gifts and Ministry</a></li>
                      <li><a href="#">Hermeneutics</a></li> 
                      <li><a href="#">Bible Introduction</a></li>
                      <li><a href="#">Biblical Counselling</a></li> 
                      <li><a href="#">Church Planting and Evangelism</a></li> 
                  </ul>
              </div><!-- end footer-item -->
          </div><!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column-half">
              <div class="footer-item">
                  <h3 class="fs-20 font-weight-semi-bold">Download App</h3>
                  <span class="section-divider section--divider"></span>
                  <div class="mobile-app">
                      <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                      <a href="#" class="d-block mb-2 hover-s"><img src="{{ asset('frontend/images/appstore.png') }}" alt="App store" class="img-fluid"></a>
                      <a href="#" class="d-block hover-s"><img src="{{ asset('frontend/images/googleplay.png') }}" alt="Google play store" class="img-fluid"></a>
                  </div>
              </div><!-- end footer-item -->
          </div><!-- end col-lg-3 -->
      </div><!-- end row -->
  </div><!-- end container -->
  <div class="section-block"></div>
  <div class="copyright-content py-4">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6">
                  <p class="copy-desc">&copy; {{date('Y')}}  Archippus School of Ministry. All Rights Reserved. by <a href="https://projectsaveng.org/">Projectsave International</a></p>
              </div><!-- end col-lg-6 -->
              <div class="col-lg-6">
                  <div class="d-flex flex-wrap align-items-center justify-content-end">
                      <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                          <li class="mr-3"><a href="">Terms & Conditions</a></li>
                          <li class="mr-3"><a href="">Privacy Policy</a></li>
                      </ul>
                      <div class="select-container select-container-sm">
                          <select class="select-container-select">
                              <option value="1">English</option>
                             
                          </select>
                      </div>
                  </div>
              </div><!-- end col-lg-6 -->
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end copyright-content -->
</section><!-- end footer-area -->