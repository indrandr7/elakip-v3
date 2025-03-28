<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/star-admin-2-pro/themes/horizontal-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 22:08:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 Pro Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('staradmin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('staradmin/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('staradmin/css/horizontal-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('staradmin/images/favicon.png" ') }}/>
</head>

<body>
    {{ asset('') }}
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
  <nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="container">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start me-lg-3">
        <div>
          <a class="navbar-brand brand-logo" href="index-2.html">
            <img src="https://demo.bootstrapdash.com/star-admin-2-pro/themes/assets/images/logo-light.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index-2.html">
            <img src="https://demo.bootstrapdash.com/star-admin-2-pro/themes/assets/images/logo-mini-reverse.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown  d-none d-lg-flex">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="selectDropdown" href="#"
              data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="selectDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 fw-medium float-start">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item  d-none d-lg-flex">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item  d-none d-lg-flex">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-end">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-end">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="./assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="./assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="./assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown  d-none d-lg-flex user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('staradmin/images/faces/face8.jpg') }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('staradmin/images/faces/face8.jpg') }}" alt="Profile image">
                <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                Messages</a>
              <a class="dropdown-item"><i
                  class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="horizontal-menu-toggle">
          <span class="ti-menu"></span>
        </button>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
      <ul class="nav page-navigation">
        <li class="nav-item">
          <a class="nav-link" href="index-2.html">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/widgets/widgets.html">
            <i class="icon-cog menu-icon"></i>
            <span class="menu-title">Widgets</span>
          </a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link">
            <i class="icon-layoutmenu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-4">
                <div class="row">
                  <div class="col-12">
                    <p class="category-heading">Basic Elements</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/accordions.html">Accordion</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/buttons.html">Buttons</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress
                                bar</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/tooltips.html">Tooltip</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-group col-md-4">
                <div class="row">
                  <div class="col-12">
                    <p class="category-heading">Advanced Elements</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/dragula.html">Dragula</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/carousel.html">Carousel</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/context-menu.html">Context
                                Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                href="pages/ui-features/notifications.html">Notification</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-group col-md-4">
                <p class="category-heading">Icons</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line
                      Icons</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="icon-columns menu-icon"></i>
            <span class="menu-title">Forms</span>
            <i class="menu-arrow"></i></a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced
                  Elements</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link">
            <i class="icon-bar-graph menu-icon"></i>
            <span class="menu-title">Data</span>
            <i class="menu-arrow"></i></a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-6">
                <p class="category-heading">Charts</p>
                <div class="submenu-item">
                  <div class="row">
                    <div class="col-md-6">
                      <ul>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google
                            Chart</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Table</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a>
                  </li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Maps</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Sample Pages</span>
            <i class="menu-arrow"></i></a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-3">
                <p class="category-heading">User Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Error Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">E-commerce</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">General</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search
                      Results</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="icon-ban menu-icon"></i>
            <span class="menu-title">Apps</span>
            <i class="menu-arrow"></i></a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="https://demo.bootstrapdash.com/star-admin-2-pro/docs/documentation.html" class="nav-link">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Documentation</span></a>
        </li>
      </ul>
    </div>
  </nav>
</div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
                          aria-controls="overview" aria-selected="true">Overview</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab"
                          aria-selected="false">Audiences</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab"
                          aria-selected="false">Demographics</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab"
                          aria-selected="false">More</a>
                      </li>
                    </ul>
                    <div>
                      <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark"><i class="icon-share"></i> Share</a>
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Bounce Rate</p>
                              <h3 class="rate-percentage">32.53%</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Page Views</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of
                                        the printing</h5>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                              <div class="card bg-primary card-rounded">
                                <div class="card-body pb-0">
                                  <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <p class="status-summary-ight-white mb-1">Closed Value</p>
                                      <h2 class="text-info">357</h2>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="status-summary-chart-wrapper pb-4">
                                        <canvas id="status-summary"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                        <div class="circle-progress-width">
                                          <div id="totalVisitors" class="progressbar-js-circle pe-2"></div>
                                        </div>
                                        <div>
                                          <p class="text-small mb-2">Total Visitors</p>
                                          <h4 class="mb-0 fw-bold">26.80%</h4>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="circle-progress-width">
                                          <div id="visitperday" class="progressbar-js-circle pe-2"></div>
                                        </div>
                                        <div>
                                          <p class="text-small mb-2">Visits per day</p>
                                          <h4 class="mb-0 fw-bold">9065</h4>
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
                      <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Market Overview</h4>
                                      <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                    </div>
                                    <div>
                                      <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                          type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false"> This month </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                          <h6 class="dropdown-header">Settings</h6>
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                      <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                      <h4 class="me-2">USD</h4>
                                      <h4 class="text-success">(+1.37%)</h4>
                                    </div>
                                    <div class="me-3">
                                      <div id="marketingOverview-legend"></div>
                                    </div>
                                  </div>
                                  <div class="chartjs-bar-wrapper mt-3">
                                    <canvas id="marketingOverview"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded table-darkBGImg">
                                <div class="card-body">
                                  <div class="col-sm-8">
                                    <h3 class="text-white upgrade-info mb-0">
                                      Enhance your <span class="fw-bold">Campaign</span> for better outreach
                                    </h3>
                                    <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Pending Requests</h4>
                                      <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                    </div>
                                    <div>
                                      <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                          class="mdi mdi-account-plus"></i>Add new member</button>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"
                                                  id="check-all"><i class="input-helper"></i></label>
                                            </div>
                                          </th>
                                          <th>Customer</th>
                                          <th>Company</th>
                                          <th>Progress</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                  class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex ">
                                              <img src="./assets/images/faces/face1.jpg" alt="">
                                              <div>
                                                <h6>Brandon Washington</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div
                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 85%" aria-valuenow="25" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                  class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="./assets/images/faces/face2.jpg" alt="">
                                              <div>
                                                <h6>Laura Brooks</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div
                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                  class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="./assets/images/faces/face3.jpg" alt="">
                                              <div>
                                                <h6>Wayne Murphy</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div
                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                  style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                  class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="./assets/images/faces/face4.jpg" alt="">
                                              <div>
                                                <h6>Matthew Bailey</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div
                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                  style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-danger">Pending</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                  class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="./assets/images/faces/face5.jpg" alt="">
                                              <div>
                                                <h6>Katherine Butler</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div
                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-success">Completed</div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body card-rounded">
                                  <h4 class="card-title  card-title-dash">Recent Events</h4>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium">
                                        Change in Directors
                                      </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium">
                                        Other Events
                                      </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium">
                                        Quarterly Report
                                      </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium">
                                        Change in Directors
                                      </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="list align-items-center pt-3">
                                    <div class="wrapper w-100">
                                      <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show all <i
                                            class="mdi mdi-arrow-right ms-2"></i></a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h4 class="card-title card-title-dash">Activities</h4>
                                    <p class="mb-0">20 finished, 5 remaining</p>
                                  </div>
                                  <ul class="bullet-line-list">
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>Just now</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                  </ul>
                                  <div class="list align-items-center pt-3">
                                    <div class="wrapper w-100">
                                      <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show all <i
                                            class="mdi mdi-arrow-right ms-2"></i></a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-title card-title-dash">Todo list</h4>
                                        <div class="add-items d-flex mb-0">
                                          <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                          <button
                                            class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 ps-12p"><i
                                              class="mdi mdi-plus"></i></button>
                                        </div>
                                      </div>
                                      <div class="list-wrapper">
                                        <ul class="todo-list todo-list-rounded">
                                          <li class="d-block">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy
                                                text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                <i class="mdi mdi-flag ms-2 flag-color"></i>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="d-block">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy
                                                text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">23 June 2020</div>
                                                <div class="badge badge-opacity-success me-3">Done</div>
                                              </div>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy
                                                text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-success me-3">Done</div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="border-bottom-0">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy
                                                text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-danger me-3">Expired</div>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title card-title-dash">Type By Amount</h4>
                                      </div>
                                      <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                      <div id="doughnutChart-legend" class="mt-5 text-center"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                          <h4 class="card-title card-title-dash">Leave Report</h4>
                                        </div>
                                        <div>
                                          <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                              type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                              aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                              <h6 class="dropdown-header">week Wise</h6>
                                              <a class="dropdown-item" href="#">Year Wise</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <canvas id="leaveReport"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                          <h4 class="card-title card-title-dash">Top Performer</h4>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <div
                                          class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('staradmin/images/faces/face1.jpg') }}"
                                              alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small">
                                            1h ago
                                          </div>
                                        </div>
                                        <div
                                          class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('staradmin/images/faces/face2.jpg') }}"
                                              alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small">
                                            1h ago
                                          </div>
                                        </div>
                                        <div
                                          class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('staradmin/images/faces/face3.jpg') }}"
                                              alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small">
                                            1h ago
                                          </div>
                                        </div>
                                        <div
                                          class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('staradmin/images/faces/face4.jpg') }}"
                                              alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small">
                                            1h ago
                                          </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('staradmin/images/faces/face5.jpg') }}"
                                              alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                              <small class="text-muted mb-0">Alaska, USA</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small">
                                            1h ago
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
  </div>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('staradmin/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('staradmin/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.html') }}"></script>
  <script src="{{ asset('staradmin/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('staradmin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('staradmin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('staradmin/js/template.js') }}"></script>
  <script src="{{ asset('staradmin/js/settings.js') }}"></script>
  <script src="{{ asset('staradmin/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('staradmin/js/jquery.cookie.js" type="text/javascript') }}"></script>
  <script src="{{ asset('staradmin/js/dashboard.js') }}"></script>
  <!-- <script src="./assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from demo.bootstrapdash.com/star-admin-2-pro/themes/horizontal-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 22:09:25 GMT -->
</html>