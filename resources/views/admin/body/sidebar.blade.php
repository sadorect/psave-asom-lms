

<div class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">ASOM</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
    </div>
   </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="{{route('admin.dashboard')}}" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-home-alt'></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
     
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i>
        </div>
        <div class="menu-title">Application</div>
      </a>
      <ul>
        <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
        </li>
        <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
        </li>
        <li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
        </li>
        <li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
        </li>
        <li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
        </li>
        <li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
        </li>
        <li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
        </li>
      </ul>
    </li>
    <li class="menu-label">UI Elements</li>
    <li>
      <a href="widgets.html">
        <div class="parent-icon"><i class='bx bx-cookie'></i>
        </div>
        <div class="menu-title">Widgets</div>
      </a>
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Manage Category</div>
      </a>
      <ul>
        <li> <a href="{{ route('all.category')}}"><i class='bx bx-radio-circle'></i>All Category</a>
        </li>
        <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Add Category</a>
        </li>
        <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
        </li>
        <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
        </li>
      </ul>
    </li>
  
   
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="bx bx-map-alt"></i>
        </div>
        <div class="menu-title">Maps</div>
      </a>
      <ul>
        <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
        </li>
        <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
        </li>
      </ul>
    </li>
    <li class="menu-label">Others</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="bx bx-menu"></i>
        </div>
        <div class="menu-title">Menu Levels</div>
      </a>
      <ul>
        <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
          <ul>
            <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
              <ul>
                <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <a href="https://codervent.com/rocker/documentation/index.html" target="_blank">
        <div class="parent-icon"><i class="bx bx-folder"></i>
        </div>
        <div class="menu-title">Documentation</div>
      </a>
    </li>
    <li>
      <a href="https://themeforest.net/user/codervent" target="_blank">
        <div class="parent-icon"><i class="bx bx-support"></i>
        </div>
        <div class="menu-title">Support</div>
      </a>
    </li>
  </ul>
  <!--end navigation-->
</div>

