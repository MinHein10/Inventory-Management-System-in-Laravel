@extends('adminpanel/homepage')

@section('content')

<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                        <!--==== Portfolio Filters ====-->
                        <div class="categories">
                          <ul>
                            <li class="active">
                              <a href="#" data-filter="*">All Categories</a>
                            </li>
                            {{-- <li>
                              <a href="#" data-filter=".web-design">Hot Inventory</a>
                            </li>
                            <li>
                              <a href="#" data-filter=".apps"></a>
                            </li>
                            <li>
                              <a href="#" data-filter=".psd">PSD</a>
                            </li> --}}
                          </ul>
                        </div>
                        <!-- ======= Portfolio items ===-->
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0EpjtdjAaUrdcboY1HU3sBXxPZuslsJT0PQ&usqp=CAU" alt="">
                                  <span class="project-title">Title 1</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                    class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIg03oMe36wh7l7hSZNcK3heCJOugJ0gonqA&usqp=CAU" alt="">
                                  <span class="project-title">Title 2</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ29Qhx-6i9Nu-PtYYKxP2h3sS8XzqT5rkAFg&usqp=CAU" alt="">
                                  <span class="project-title">Title 3</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="#" title="Get Colored"><i
                                    class="fa fa-expand fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://yangonlife.com.mm/sites/yangonlife.com.mm/files/article_images/Sun-Myanmar-Elephant-House1.jpg" alt="">
                                  <span class="project-title">Title 4</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge cboxElement" href="#" title="Holiday Selector"><i
                                    class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://i.pinimg.com/originals/44/61/3a/44613a12b6b01e8f100c6fc1ae4298ec.png" alt="">
                                  <span class="project-title">Title 5</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge cboxElement" href="#" title="Scavenger Hunt"><i
                                    class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://i.pinimg.com/originals/c3/16/ee/c316ee4f526751d66e66b6a4b41919d3.jpg" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge cboxElement" href="#" title="Sonor"><i
                                    class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRCSxGglccJJNUf5HL9KxodFIA9xlXz6RXUaA&usqp=CAU" alt="">
                                  <span class="project-title">Title 7</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                    class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://myanmartoursasia.files.wordpress.com/2013/02/5673639108_08e848aa88_b.jpg" alt="">
                                  <span class="project-title">Title 8</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="#"><i class="fa fa-eye fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="#" class="main-link">
                                  <img class="img-responsive img-center" src="https://i.pinimg.com/originals/bf/58/ff/bf58ff7f4ae5d6dd94ac9ce1805ad765.jpg" alt="">
                                  <span class="project-title">Title 9</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="#" title="Get Colored"><i
                                    class="fa fa-expand fa-fw"></i></a>
                              </div>
                            </article>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/portfolio.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  
@endsection