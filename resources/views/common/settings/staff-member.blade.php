@extends('layouts.app')
@section('title', 'Update Password')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
       <li class="breadcrumb-item">
          <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
       </li>
       <li class="breadcrumb-item text-dark mt-1">Settings</li>
    </ol>
    <h6 class="mt-0">Settings</h6>
 </nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div style="background-color: white; padding: 16px; border-radius: 8px;" class="d-inline-flex flex-column flex-md-row gap-2">
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings') }}'">
          Update Profile
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings.update-password') }}'">
          Update Password
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: #2e5492; color: white;" onclick="window.location.href = '{{ route('settings.staff-member') }}'">
          Staff Members
       </button>
    </div>
 
    <div class="card mt-4">
       <div class="card-header">
          <div class="card-header">
             <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                <div class="d-flex gap-2 align-items-center">
                   <h5 class="mb-0">Staff Members</h5>
                </div>
                <div class="d-flex gap-2 align-items-center">
                   <div class="input-group me-2 w-100">
                      <span class="input-group-text" id="basic-addon1">
                         <i class="bi bi-search"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Search" />
                   </div>
                   <button type="button" class="btn mb-0 w-100" style="background-color: #2e5492; color: white;" data-bs-toggle="modal" data-bs-target="#addNewStaffMemberModal">
                      ADD NEW
                   </button>
                </div>
             </div>
          </div>
       </div>
       <div class="card-body pt-0">
          <div class="table-responsive">
             <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                   <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         ID
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         NAME
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         EMAIL
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         CONTACT
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         PASSWORD
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         STATUS
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         ACTION
                      </th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-normal">01</td>
                      <td class="text-sm font-weight-normal">
                         Will Hoffman
                      </td>
                      <td class="text-sm font-weight-normal">WillHoffman@gmail.com</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">12345678</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex gap-3 align-items-center">
                            <img src="../assets/images/edit-icon.png" alt="" class="cursor-pointer" />
                            <img src="../assets/images/delete-icon.png" alt="" class="cursor-pointer" />
                         </div>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 
 <!-- TODO: MODALS  -->
 <div class="modal fade" id="addNewStaffMemberModal" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-header d-flex justify-content-between align-items-center">
             <h5 class="modal-title" id="addContentModalLabel">
                Add New Staff Member
             </h5>
             <img src="../assets/images/close-icon.png" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;" alt="" />
          </div>
          <div class="modal-body">
             <div class="row">
                <div class="col-12 mt-3">
                   <label class="form-label">Name <span style="color: #f94343;">*</span></label>
                   <input type="text" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="col-12 mt-3">
                   <label class="form-label">Email <span style="color: #f94343;">*</span></label>
                   <input type="email" class="form-control" placeholder="Enter Email" />
                </div>
                <div class="col-12 mt-3">
                   <label class="form-label">Contact <span style="color: #f94343;">*</span></label>
                   <input type="text" class="form-control" placeholder="Enter Contact" />
                </div>
                <div class="col-12 mt-3">
                   <label class="form-label">Password <span style="color: #f94343;">*</span></label>
                   <input type="password" class="form-control" placeholder="Enter Password" />
                </div>
                <div class="col-12 mt-3">
                   <label class="form-label">Status <span style="color: #f94343;">*</span></label>
                   <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                   </div>
                </div>
             </div>
          </div>
          <div class="modal-footer" style="border-top: 0;">
             <button type="button" class="btn" style="background-color: #2e5492; color: white;">
                ADD
             </button>
          </div>
       </div>
    </div>
 </div>
 
@endsection
@push('custom-js')
<script>
    const dataTableBasic = new simpleDatatables.DataTable(
      "#datatable-basic",
      {
        searchable: false,
        fixedHeight: true,
      }
    );
  </script>
  <script>
    const openButton = document.getElementById("custom-sidenav-toggler");
    const body = document.body;

    openButton.addEventListener("click", () => {
      body.classList.add("g-sidenav-pinned");
    });
  </script>
  <script>
    const closeButton = document.getElementById("closeSidebar");
    const bodyContainer = document.body;

    closeButton.addEventListener("click", () => {
      bodyContainer.classList.remove("g-sidenav-pinned");
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
@endpush