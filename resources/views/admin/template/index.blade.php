@extends('layouts.app')
@section('title','Template')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Templates</li>
   </ol>
   <h6 class="mt-0">Templates</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div
       style="
         background-image: url('{{ asset('assets/images/service-details.png') }}');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         text-align: center;
         padding: 2.3rem;
         position: relative;
       "
    >
       <h5 style="margin: 0; font-size: 1.5rem; color: white;">Templates</h5>
       <img src="{{ asset('assets/images/edit-green-icon.png') }}" alt="" style="position: absolute; right: 16px; top: 50%; bottom: 50%; transform: translateY(-50%); cursor: pointer;" onclick="window.location.href = 'templates.html'" />
    </div>
 
    <div class="row mt-3">
       <div class="col-12">
          <div class="card">
             <div class="card-body">
                <h6 class="mb-2">Creating Template</h6>
 
                <div class="container-fluid p-0">
                   <div class="row">
                      <div class="col-12 col-md-6">
                         <label>Departure Date <span style="color: #f94343;">*</span> </label>
                         <input type="date" placeholder="Departure Date" class="form-control" />
                      </div>
                      <div class="col-12 col-md-6">
                         <label>Departure Day <span style="color: #f94343;">*</span> </label>
                         <input type="date" placeholder="Departure Date" class="form-control" />
                      </div>
                   </div>
                </div>
                <h6 class="mb-2 mt-3">Service Details</h6>
                <div class="row">
                   <div class="col-12 col-md-6">
                      <label>Service Date</label>
                      <input type="date" class="form-control" />
                   </div>
                   <div class="col-12 col-md-6">
                      <label>Service Time</label>
                      <input type="time" class="form-control" />
                   </div>
                </div>
 
                <div class="container-fluid p-0 mt-3">
                   <div class="row">
                      <div class="col-12 col-md-10">
                         <label>Service</label>
                         <input type="text" placeholder="Service" class="form-control" />
                      </div>
                      <div class="col-12 col-md-2">
                         <label>Price</label>
                         <input type="text" placeholder="Price" class="form-control" disabled />
                      </div>
                   </div>
                </div>
 
                <div class="custom-description-area" id="desc-1">
                   <div class="description-item">
                      <label>Description</label>
                      <div class="d-flex align-items-center">
                         <textarea name="" id="" placeholder="Description" class="form-control"></textarea>
                         <div class="action-icons">
                            <img src="{{ asset('assets/images/drag-icon.png') }}" class="cursor-pointer drag-handle" />
                            <img src="{{ asset('assets/images/subtract-circle-icon.png') }}" class="cursor-pointer subtract-icon" />
                         </div>
                      </div>
                   </div>
                </div>
 
                <div class="row mt-3">
                   <div class="col-12 col-md-6">
                      <label>Service Date</label>
                      <input type="date" class="form-control" />
                   </div>
                   <div class="col-12 col-md-6">
                      <label>Service Time</label>
                      <input type="time" class="form-control" />
                   </div>
                </div>
 
                <div class="container-fluid p-0 mt-3">
                   <div class="row">
                      <div class="col-12 col-md-10">
                         <label>Service</label>
                         <input type="text" placeholder="Service" class="form-control" />
                      </div>
                      <div class="col-12 col-md-2">
                         <label>Price</label>
                         <input type="text" placeholder="Price" class="form-control" disabled />
                      </div>
                   </div>
                </div>
 
                <div class="custom-description-area" id="desc-2">
                   <div class="description-item">
                      <label>Description</label>
                      <div class="d-flex align-items-center">
                         <textarea name="" id="" placeholder="Description" class="form-control"></textarea>
                         <div class="action-icons">
                            <img src="{{ asset('assets/images/drag-icon.png') }}" class="cursor-pointer drag-handle" />
                            <img src="{{ asset('assets/images/subtract-circle-icon.png') }}" class="cursor-pointer subtract-icon" />
                         </div>
                      </div>
                   </div>
                </div>
 
                <div class="row mt-3">
                   <div class="col-12 col-md-6">
                      <label>Service Date</label>
                      <input type="date" class="form-control" />
                   </div>
                   <div class="col-12 col-md-6">
                      <label>Service Time</label>
                      <input type="time" class="form-control" />
                   </div>
                </div>
 
                <div class="container-fluid p-0 mt-3">
                   <div class="row">
                      <div class="col-12 col-md-10">
                         <label>Service</label>
                         <input type="text" placeholder="Service" class="form-control" />
                      </div>
                      <div class="col-12 col-md-2">
                         <label>Price</label>
                         <input type="text" placeholder="Price" class="form-control" disabled />
                      </div>
                   </div>
                </div>
 
                <div class="custom-description-area" id="desc-3">
                   <div class="description-item">
                      <label>Description</label>
                      <div class="d-flex align-items-center">
                         <textarea name="" id="" placeholder="Description" class="form-control"></textarea>
                         <div class="action-icons">
                            <img src="{{ asset('assets/images/drag-icon.png') }}" class="cursor-pointer drag-handle" />
                            <img src="{{ asset('assets/images/add-circle-green-icon.png') }}" class="cursor-pointer add-icon" />
                            <img src="{{ asset('assets/images/subtract-circle-icon.png') }}" class="cursor-pointer subtract-icon" />
                         </div>
                      </div>
                   </div>
                </div>
 
                <div class="d-flex justify-content-end gap-2 flex-wrap mt-3">
                   <button class="btn" style="background-color: #2e5492; color: white;" onclick="window.location.href = 'download-template.html'">
                      SAVE
                   </button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div> 
@endsection
@push('custom-js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
      let draggedItem = null;
      let originalParent = null;

      function enableDragAndDrop() {
        document.querySelectorAll(".drag-handle").forEach((handle) => {
          handle.addEventListener("dragstart", (e) => {
            draggedItem = e.target.closest(".description-item");
            originalParent = draggedItem.parentElement;
            e.dataTransfer.effectAllowed = "move";
            setTimeout(() => draggedItem.classList.add("hidden"), 0);
          });

          handle.addEventListener("dragend", () => {
            draggedItem.classList.remove("hidden");
            draggedItem = null;
            originalParent = null;
            removeDropZoneHighlight();
          });
        });

        document
          .querySelectorAll(".custom-description-area")
          .forEach((area) => {
            area.addEventListener("dragover", (e) => {
              e.preventDefault();
              e.dataTransfer.dropEffect = "move";
            });

            area.addEventListener("dragenter", (e) => {
              if (draggedItem && area !== draggedItem.parentElement) {
                area.classList.add("highlight-dropzone");
              }
            });

            area.addEventListener("dragleave", () => {
              area.classList.remove("highlight-dropzone");
            });

            area.addEventListener("drop", (e) => {
              e.preventDefault();
              if (draggedItem && area !== draggedItem.parentElement) {
                area.appendChild(draggedItem);
              }
              removeDropZoneHighlight();
            });
          });
      }

      function removeDropZoneHighlight() {
        document
          .querySelectorAll(".custom-description-area")
          .forEach((area) => {
            area.classList.remove("highlight-dropzone");
          });
      }

      enableDragAndDrop();

      document
        .getElementById("desc-3")
        .addEventListener("click", function (e) {
          if (e.target.classList.contains("add-icon")) {
            const originalItem = e.target.closest(".description-item");
            const clone = originalItem.cloneNode(true);

            const addIcon = originalItem.querySelector(".add-icon");
            if (addIcon) addIcon.remove();

            clone.querySelector(".action-icons").innerHTML = `
                      <img src="../assets/images/drag-icon.png" class="cursor-pointer drag-handle" draggable="true">
                      <img src="../assets/images/add-circle-green-icon.png" class="cursor-pointer add-icon">
                      <img src="../assets/images/subtract-circle-icon.png" class="cursor-pointer subtract-icon">
                  `;

            this.appendChild(clone);

            enableDragAndDrop();
          }
        });

      document.addEventListener("click", function (e) {
        if (e.target.classList.contains("subtract-icon")) {
          const item = e.target.closest(".description-item");
          if (item && item.parentElement.children.length > 1) {
            item.remove();
          }
        }
      });
    });
  </script>
  <script>
    const dataTableBasic = new simpleDatatables.DataTable(
      "#datatable-basic",
      {
        searchable: false,
        fixedHeight: true,
      }
    );

    const dataTableBasic2 = new simpleDatatables.DataTable(
      "#datatable-basic2",
      {
        searchable: false,
        fixedHeight: true,
      }
    );

    const dataTableBasic3 = new simpleDatatables.DataTable(
      "#datatable-basic3",
      {
        searchable: false,
        fixedHeight: true,
      }
    );

    const dataTableBasic4 = new simpleDatatables.DataTable(
      "#datatable-basic4",
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