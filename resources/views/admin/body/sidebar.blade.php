

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
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Manage Instructors</div>
      </a>
      <ul>
        <li> <a href="{{ route('all.instructors')}}"><i class='bx bx-radio-circle'></i>All Instructor</a>
        </li>
        <li> <a href=""><i class='bx bx-radio-circle'></i>Add Instructor</a>
        </li>
        
      </ul>
    </li>

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Manage Students</div>
      </a>
      <ul>
        <li> <a href="{{ route('all.students')}}"><i class='bx bx-radio-circle'></i>All Students</a>
        </li>
        <li> <a href=""><i class='bx bx-radio-circle'></i>Add Student</a>
        </li>
        
      </ul>
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
        <li> <a href=""><i class='bx bx-radio-circle'></i>Add Category</a>
        </li>
       
        </li>
      </ul>
    </li>
  

    <li>
      <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
          </div>
          <div class="menu-title">Manage Setting</div>
      </a>
      <ul>
          <li> <a href="{{ route('settings.smtp') }}"><i class='bx bx-radio-circle'></i>Manage SMTP</a>
          </li>
      </ul>
  </li>

  <li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
        </div>
        <div class="menu-title">Manage Blog </div>
    </a>
    <ul>
        <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Blog Category </a>
        </li>
        <li> <a href="{{ route('blog.devotional') }}"><i class='bx bx-radio-circle'></i>Blog Post</a>
      
    </ul>
</li>
   

<li>
  <a class="has-arrow" href="javascript:;">
      <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
      </div>
      <div class="menu-title">Manage Homepage </div>
  </a>
  <ul>
      <li> <a href="{{ route('edit.home') }}"><i class='bx bx-radio-circle'></i>Edit Homepage </a>
      </li>
      <li> <a href="{{ route('show.home') }}"><i class='bx bx-radio-circle'></i>Blog Post</a>
    
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

