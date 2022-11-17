<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info">
      <div class="profile">
        <img src="http://via.placeholder.com/47x47" alt="">
      </div>
      <div class="details">
        <p class="user-name">Dave Mattew</p>
        <p class="designation">Developer</p>
      </div>
    </div>
    <ul class="nav">
      <!--main pages start-->
      <li class="nav-item nav-category">
        <span class="nav-link">Main</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-gauge menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/widgets.html">
          <i class="mdi mdi-puzzle menu-icon"></i>
          <span class="menu-title">Widget</span>
          <span class="badge badge-danger badge-pill ml-auto">New</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
          <i class="mdi mdi-arrow-expand-all menu-icon"></i>
          <span class="menu-title">Category</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="layoutsSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('view_category') }}">Create Category</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span class="menu-title">Product</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="sidebar_layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('create_product') }}">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('index_product') }}">All Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('show_product') }}">Show Product</a>
            </li>
          </ul>
        </div>
      </li>
      <!--main pages end-->
      <!--sample pages start-->
      <li class="nav-item nav-category">
        <span class="nav-link">Sample pages</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
          <i class="mdi mdi-lock-outline menu-icon"></i>
          <span class="menu-title">Authentication</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="authSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/login.html">
                Login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/register.html">
                Register
              </a>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
          <i class="mdi mdi-alert-circle-outline menu-icon"></i>
          <span class="menu-title">Error pages</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="errorSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-404.html">
                404
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-500.html">
                500
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
          <i class="mdi mdi-google-pages menu-icon"></i>
          <span class="menu-title">General Pages</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="generalSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/blank-page.html">
                Blank Page
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/landing-page.html">
                Landing Page
              </a>
            </li>  
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ecommerceSubmenu" aria-expanded="false" aria-controls="ecommerceSubmenu">
          <i class="mdi mdi-cart-outline menu-icon"></i>
          <span class="menu-title">E-commerce</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="ecommerceSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/pricing.html">
                Pricing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/invoice.html">
                Invoice
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!--sample pages end-->
      <!--ui features start-->
      <li class="nav-item nav-category">
        <span class="nav-link">UI Features</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#uiAdvancedSubmenu" aria-expanded="false" aria-controls="uiAdvancedSubmenu">
          <i class="mdi mdi-cube-outline menu-icon"></i>
          <span class="menu-title">Advanced Elements</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
      </li>
      <!-- ui end -->
      <!-- data rep start-->
      <li class="nav-item nav-category">
        <span class="nav-link">Data representation</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#chartsSubmenu" aria-expanded="false" aria-controls="chartsSubmenu">
          <i class="mdi mdi-chart-donut menu-icon"></i>
          <span class="menu-title">Charts</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="chartsSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/morris.html">Morris</a>
            </li>
          </ul>
        </div>
      </li>
      <!--data rep end-->
      <!--forms start-->
      <li class="nav-item nav-category">
        <span class="nav-link">Forms</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#validationSubmenu" aria-expanded="false" aria-controls="validationSubmenu">
          <i class="mdi mdi-flag-outline menu-icon"></i>
          <span class="menu-title">Validation</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="validationSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/form-validation.html">Form validation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/bt-maxlength.html">Maxlength</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#fileUploadSubmenu" aria-expanded="false" aria-controls="fileUploadSubmenu">
          <i class="mdi mdi-attachment menu-icon"></i>
          <span class="menu-title">File upload</span>
          <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="fileUploadSubmenu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/dropify.html">Dropify</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/dropzone.html">Dropzone</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/jquery-file-upload.html">Jquery upload</a>
            </li>
          </ul>
        </div>
      </li>
      <!--forms end-->
      <!--Apps start-->
      <li class="nav-item nav-category">
        <span class="nav-link">Applications</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/email.html">
          <i class="mdi mdi-email-outline menu-icon"></i>
          <span class="menu-title">E-mail</span>
        </a>
      
    </ul>
  </nav>