@extends('layouts.app')
@section('title', 'Settings')
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
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: #2e5492; color: white;" onclick="window.location.href = '{{ route('settings') }}'">
          Update Profile
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings.update-password') }}'">
          Update Password
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings.staff-member') }}'">
          Staff Members
       </button>
    </div>

    <div class="card mt-4">
       <div class="card-body pt-0">
          <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;">
             <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                <div class="d-flex gap-3 align-items-center">
                   <img src="../assets/images/team-2.jpg" alt="" class="avatar avatar-xl rounded-circle" />
                   <div>
                      <h6 class="mb-0">John Doe</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <img src="../assets/images/edit-green-icon.png" alt="Edit Profile" class="edit-icon" style="cursor: pointer;" />
             </div>
          </div>

          <div class="mt-3" style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;">
             <h6 class="mb-3">Update Profile</h6>
             <div class="container-fluid px-0 custom-data-profile">
                <div class="row">
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Name</p>
                      <h6 class="mb-0">John Doe</h6>
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Email</p>
                      <h6 class="mb-0">john@gmail.com</h6>
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Contact no</p>
                      <h6 class="mb-0">123 456 7890</h6>
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-12 col-md-4">
                      <p class="mb-0">City</p>
                      <h6 class="mb-0">123 Main St rd</h6>
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">State</p>
                      <h6 class="mb-0">123 Main St rd</h6>
                   </div>
                </div>
             </div>

             <div class="container-fluid px-0 custom-edit-profile" style="display: none;">
                <div class="row">
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Name</p>
                      <input type="text" class="form-control" placeholder="Name" />
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Email</p>
                      <input type="text" class="form-control" placeholder="Email" />
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">Contact no</p>
                      <input type="text" class="form-control" placeholder="Contact no" />
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-12 col-md-4">
                      <p class="mb-0">City</p>
                      <input type="text" class="form-control" placeholder="City" />
                   </div>
                   <div class="col-12 col-md-4">
                      <p class="mb-0">State</p>
                      <input type="text" class="form-control" placeholder="State" />
                   </div>
                </div>
             </div>
          </div>

          <div class="justify-content-end mt-3 custom-edit-profile-btn" style="display: none;">
             <button class="btn" style="background-color: #004d73; color: white;">
                Update
             </button>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('custom-js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
       const editIcon = document.querySelector(".edit-icon");
       const editProfileDiv = document.querySelector(".custom-edit-profile");
       const dataProfileDiv = document.querySelector(".custom-data-profile");
       const editProfileBtn = document.querySelector(".custom-edit-profile-btn");

       if (editIcon && editProfileDiv) {
          editIcon.addEventListener("click", function () {
             if (editProfileDiv.style.display === "none") {
                editProfileDiv.style.display = "block";
                editProfileBtn.style.display = "flex";
                dataProfileDiv.style.display = "none";
                editIcon.style.display = "none";
             } else {
                editProfileDiv.style.display = "none";
             }
          });
       }
    });
 </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
       const dynamicRowsContainer = document.getElementById("dynamic-rows");

       function updateIcons() {
          const rows = dynamicRowsContainer.querySelectorAll(".row");
          rows.forEach((row, index) => {
             const addIcon = row.querySelector(".add-icon");
             const subtractIcon = row.querySelector(".subtract-icon");

             if (index === rows.length - 1) {
                addIcon.style.display = "block";
                subtractIcon.style.display = "none";
             } else {
                addIcon.style.display = "none";
                subtractIcon.style.display = "block";
             }
          });
       }

       updateIcons();

       dynamicRowsContainer.addEventListener("click", function (e) {
          if (e.target && e.target.classList.contains("add-icon")) {
             const newRow = e.target.closest(".row").cloneNode(true);

             const addIcon = newRow.querySelector(".add-icon");
             const subtractIcon = newRow.querySelector(".subtract-icon");
             addIcon.style.display = "none";
             subtractIcon.style.display = "block";

             dynamicRowsContainer.appendChild(newRow);

             updateIcons();
          }

          if (e.target && e.target.classList.contains("subtract-icon")) {
             const rowToRemove = e.target.closest(".row");
             if (dynamicRowsContainer.children.length > 1) {
                rowToRemove.remove();
             }

             updateIcons();
          }
       });
    });
 </script>
@endpush