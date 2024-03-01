@extends("layouts.site.app")
@section("title" , "Produtos Karamba")
@section("content")
@include("components.navbar")
@include("components.style")
    <main id="main" class="mt-5">
        <!-- ======= Menu Section ======= -->
          <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <h2>Nosso Menu</h2>
                <p>Menu <span>Karamba</span></p>
              </div>
      
              <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                    <h4>Pequeno Almoço</h4>
                  </a><!-- End tab nav item -->
      
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                    <h4>Almoço</h4>
                  </a>
                </li><!-- End tab nav item -->
      
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                    <h4>Jantar</h4>
                  </a>
                </li><!-- End tab nav item -->
      
              </ul>
      
              <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
      
                <div class="tab-pane fade active show" id="menu-breakfast">
      
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Pequeno Almoço</h3>
                  </div>
      
                  <div class="row gy-5">
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-1.png" class="glightbox"><img src="site/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Magnam Tiste</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-2.png" class="glightbox"><img src="site/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Aut Luia</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-3.png" class="glightbox"><img src="site/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Est Eligendi</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-4.png" class="glightbox"><img src="site/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-5.png" class="glightbox"><img src="site/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-6.png" class="glightbox"><img src="site/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Laboriosam Direva</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                  </div>
                </div><!-- End Breakfast Menu Content -->
      
                <div class="tab-pane fade" id="menu-lunch">
      
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Almoço</h3>
                  </div>
      
                  <div class="row gy-5">
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-1.png" class="glightbox"><img src="site/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Magnam Tiste</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-2.png" class="glightbox"><img src="site/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Aut Luia</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-3.png" class="glightbox"><img src="site/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Est Eligendi</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-4.png" class="glightbox"><img src="site/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-5.png" class="glightbox"><img src="site/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-6.png" class="glightbox"><img src="site/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Laboriosam Direva</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                  </div>
                </div><!-- End Lunch Menu Content -->
      
                <div class="tab-pane fade" id="menu-dinner">
      
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Jantar</h3>
                  </div>
      
                  <div class="row gy-5">
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-1.png" class="glightbox"><img src="site/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Magnam Tiste</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-2.png" class="glightbox"><img src="site/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Aut Luia</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-3.png" class="glightbox"><img src="site/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Est Eligendi</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-4.png" class="glightbox"><img src="site/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="site/assets/img/menu/menu-item-5.png" class="glightbox"><img src="site/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Eos Luibusdam</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                    <div class="col-lg-4 menu-item">
                      <a href="{{asset("site/assets/img/menu/menu-item-6.png")}}" class="glightbox"><img src="site/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                      <h4>Laboriosam Direva</h4>
                      <p class="ingredients">
                        Lorem, deren, trataro, filede, nerada
                      </p>
                      <p class="price">
                        Kz 1.000 
                      </p>
                    </div><!-- Menu Item -->
      
                  </div>
                </div><!-- End Dinner Menu Content -->
      
              </div>
      
            </div>
          </section>
        <!-- End Menu Section -->

      </main><!-- End #main -->
    @include("components.footer")
@endsection