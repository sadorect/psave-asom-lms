@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">
  <!--breadcrumb-->
  <div
      class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"
  >
      
      <div class="ps-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:;"
                          ><i class="bx bx-home-alt"></i
                      ></a>
                  </li>
                  <li
                      class="breadcrumb-item active"
                      aria-current="page"
                  > 
                      All Category
                  </li>
              </ol>
          </nav>
      </div>
      <div class="ms-auto">
          <div class="btn-group">
            <a href="" class="btn btn-primary px-5">
                  Settings
          </a>
              <button
                  type="button"
                  class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown"
              >
                  <span class="visually-hidden"
                      >Toggle Dropdown</span
                  >
              </button>
              <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"
              >
                  <a class="dropdown-item" href="javascript:;"
                      >Action</a
                  >
                  <a class="dropdown-item" href="javascript:;"
                      >Another action</a
                  >
                  <a class="dropdown-item" href="javascript:;"
                      >Something else here</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;"
                      >Separated link</a
                  >
              </div>
          </div>
      </div>
  </div>
  <!--end breadcrumb-->
  <h6 class="mb-0 text-uppercase">DataTable Example</h6>
  <hr />
  <div class="card">
      <div class="card-body">
          <div class="table-responsive">
              <table
                  id="example"
                  class="table table-striped table-bordered"
                  style="width: 100%"
              >
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </div>
  <h6 class="mb-0 text-uppercase">DataTable Import</h6>
  <hr />
  <div class="card">
      <div class="card-body">
          <div class="table-responsive">
              <table
                  id="example2"
                  class="table table-striped table-bordered"
              >
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                     
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </div>
</div>




@endsection