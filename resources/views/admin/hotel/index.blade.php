@extends('layouts.app')
@section('title','Hotels')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Hotels</li>
   </ol>
   <h6 class="mt-0">Hotels</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="row g-3">
       <div class="col-lg-3 col-sm-6">
          <div class="card cursor-pointer">
             <div class="card-body p-3">
                <p class="mb-5 text-capitalize font-weight-bold" style="font-size: 18px;">
                   Total Hotels
                </p>
                <div class="row">
                   <div class="col-8 d-flex align-items-end">
                      <div class="numbers">
                         <h5 class="font-weight-bolder mb-0" style="font-size: 30px;">
                            65
                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                         </h5>
                      </div>
                   </div>
                   <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                      <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 64px; height: 64px; display: flex; justify-content: center; align-items: center;">
                         <img src="{{ asset('assets/images/hotels-white-icon.png') }}" alt="" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-sm-6">
          <div class="card cursor-pointer">
             <div class="card-body p-3">
                <p class="mb-5 text-capitalize font-weight-bold" style="font-size: 18px;">
                   Active Hotels
                </p>
                <div class="row">
                   <div class="col-8 d-flex align-items-end">
                      <div class="numbers">
                         <h5 class="font-weight-bolder mb-0" style="font-size: 30px;">
                            10
                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                         </h5>
                      </div>
                   </div>
                   <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                      <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2e924c; width: 64px; height: 64px; display: flex; justify-content: center; align-items: center;">
                         <img src="{{ asset('assets/images/hotels-white-icon.png') }}" alt="" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-sm-6">
          <div class="card cursor-pointer">
             <div class="card-body p-3">
                <p class="mb-5 text-capitalize font-weight-bold" style="font-size: 18px;">
                   Inactive Hotels
                </p>
                <div class="row">
                   <div class="col-8 d-flex align-items-end">
                      <div class="numbers">
                         <h5 class="font-weight-bolder mb-0" style="font-size: 30px;">
                            10
                            <span class="text-danger text-sm font-weight-bolder">-3%</span>
                         </h5>
                      </div>
                   </div>
                   <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                      <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #d45765; width: 64px; height: 64px; display: flex; justify-content: center; align-items: center;">
                         <img src="{{ asset('assets/images/hotels-white-icon.png') }}" alt="" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 
    <div class="card mt-3">
       <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
          <h5 class="mb-0 col-12 col-md-3">Hotels</h5>
          <div class="d-flex flex-wrap justify-content-end align-items-center col-12 col-md-9 gap-2">
             <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 150px;">
                <select class="form-select">
                   <option>Hotel</option>
                   <option>Hotel 1</option>
                   <option>Hotel 2</option>
                   <option>Hotel 3</option>
                   <option>Hotel 4</option>
                </select>
             </div>
             <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 150px;">
                <select class="form-select">
                   <option>City</option>
                   <option>City 1</option>
                   <option>City 2</option>
                   <option>City 3</option>
                   <option>City 4</option>
                </select>
             </div>
             <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 150px;">
                <select class="form-select">
                   <option>Status</option>
                   <option>Active</option>
                   <option>Inactive</option>
                </select>
             </div>
             <div class="input-group me-2 w-100 w-md-auto">
                <span class="input-group-text" id="basic-addon1">
                   <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search" />
             </div>
             <a href="{{ route('hotels.create') }}" class="btn mb-0 w-100 w-md-auto" style="background-color: #2e5492; color: white;">
                ADD NEW
             </a>
          </div>
       </div>
       <div class="card-body pt-0">
          <div class="table-responsive custom-table-header" style="overflow-y: hidden;">
             <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                   <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         ID
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         HOTEL NAME
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         ADVANCE PAYMENT
                      </th>
                      <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                         CITY
                      </th>
                      <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                         STATUS
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                         ACTION
                      </th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td class="text-sm font-weight-bold">01</td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">
                            <img src="{{ asset('assets/images/hotel-1.png') }}" alt="" />
                            <span style="color: #0000ee; font-weight: bold; text-decoration: underline;">Luxury Hotel</span>
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">Yes</td>
                      <td class="text-sm font-weight-normal">Amazonas</td>
                      <td class="text-sm font-weight-normal">
                         <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" />
                         </div>
                      </td>
                      <td class="text-sm font-weight-normal">
                         <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/edit-icon.png') }}" alt="" />
                            <img src="{{ asset('assets/images/delete-icon.png') }}" alt="" />
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
<div class="modal fade" id="viewHotelModal" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
       <div class="modal-content">
          <div class="modal-header d-flex justify-content-between align-items-center">
             <h5 class="modal-title" id="addContentModalLabel">
                Luxury Hotel
             </h5>
             <img src="../assets/images/close-icon.png" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;" alt="" />
          </div>
          <div class="modal-body">
             <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                <h6 class="mb-0 text-sm">Room Category 1</h6>
                <img src="../assets/images/close.png" alt="" />
             </div>
 
             <div class="d-flex flex-column flex-md-row gap-1 p-3 align-items-start mt-2" style="background-color: rgba(0, 77, 115, 0.03);">
                <img src="../assets/images/hotel.png" alt="Hotel Image" class="img-fluid hotel-image" style="max-width: 100%; height: auto;" />
                <div class="container-fluid p-0">
                   <div class="row">
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Room Category</h6>
                         <p class="mb-0 text-sm">Category 1</p>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Check-In</h6>
                         <p class="mb-0 text-sm">12/28/2024</p>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Check-Out</h6>
                         <p class="mb-0 text-sm">12/28/2024</p>
                      </div>
                   </div>
                   <div class="row mt-2">
                      <div class="col-sm-12">
                         <h6 class="mb-0">Details</h6>
                         <p class="mb-0 text-sm">
                            John Doe : Standard : Single Room
                         </p>
                         <p class="mb-0 text-sm">
                            Ronnie & Louis : King Size : Double Room
                         </p>
                      </div>
                   </div>
                </div>
             </div>
 
             <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-3">
                <h6 class="mb-0 text-sm">Room Category 2</h6>
                <img src="../assets/images/close.png" alt="" />
             </div>
 
             <div class="d-flex flex-column flex-md-row gap-1 p-3 align-items-start mt-2" style="background-color: rgba(0, 77, 115, 0.03);">
                <img src="../assets/images/hotel.png" alt="Hotel Image" class="img-fluid hotel-image" style="max-width: 100%; height: auto;" />
                <div class="container-fluid p-0">
                   <div class="row">
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Room Category</h6>
                         <p class="mb-0 text-sm">Category 2</p>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Check-In</h6>
                         <p class="mb-0 text-sm">12/28/2024</p>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <h6 class="mb-0">Check-Out</h6>
                         <p class="mb-0 text-sm">12/28/2024</p>
                      </div>
                   </div>
                   <div class="row mt-2">
                      <div class="col-sm-12">
                         <h6 class="mb-0">Details</h6>
                         <p class="mb-0 text-sm">
                            John Doe : Standard : Single Room
                         </p>
                         <p class="mb-0 text-sm">
                            Ronnie & Louis : King Size : Double Room
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div> 
@endsection
@push('custom-js')
<script>
    const datePicker = document.getElementById("datePicker");
    const assignedDateInput = document.getElementById("assignedDate");
    const currentMonthLabel = document.getElementById("currentMonth");
    const calendarDays = document.getElementById("calendarDays");
    const cancelButton = document.getElementById("cancelButton");
    const okButton = document.getElementById("okButton");
    const prevMonthButton = document.getElementById("prevMonth");
    const nextMonthButton = document.getElementById("nextMonth");
 
    let selectedDate = null;
    let currentDate = new Date();
 
    function renderCalendar() {
       const year = currentDate.getFullYear();
       const month = currentDate.getMonth();
 
       const firstDay = new Date(year, month, 1).getDay();
       const daysInMonth = new Date(year, month + 1, 0).getDate();
 
       currentMonthLabel.textContent = currentDate.toLocaleString("default", {
          month: "long",
          year: "numeric",
       });
 
       calendarDays.innerHTML = "";
 
       for (let i = 0; i < firstDay; i++) {
          const emptyCell = document.createElement("div");
          calendarDays.appendChild(emptyCell);
       }
 
       for (let day = 1; day <= daysInMonth; day++) {
          const dayCell = document.createElement("div");
          dayCell.textContent = day;
          dayCell.style.padding = "8px";
          dayCell.style.cursor = "pointer";
          dayCell.style.borderRadius = "50%";
          dayCell.style.transition = "background 0.2s";
          dayCell.addEventListener("click", () => {
             selectedDate = new Date(year, month, day);
             Array.from(calendarDays.children).forEach((cell) => (cell.style.background = ""));
             dayCell.style.background = "#007bff";
             dayCell.style.color = "white";
          });
          calendarDays.appendChild(dayCell);
       }
    }
 
    function positionDatePicker(input) {
       const rect = input.getBoundingClientRect();
       datePicker.style.top = `${50}px`;
       datePicker.style.left = `${50}px`;
    }
 
    assignedDateInput.addEventListener("click", () => {
       positionDatePicker(assignedDateInput);
       datePicker.style.display = "block";
       renderCalendar();
    });
 
    cancelButton.addEventListener("click", () => {
       datePicker.style.display = "none";
       selectedDate = null;
    });
 
    okButton.addEventListener("click", () => {
       if (selectedDate) {
          assignedDateInput.value = selectedDate.toDateString();
       }
       datePicker.style.display = "none";
    });
 
    prevMonthButton.addEventListener("click", () => {
       currentDate.setMonth(currentDate.getMonth() - 1);
       renderCalendar();
    });
 
    nextMonthButton.addEventListener("click", () => {
       currentDate.setMonth(currentDate.getMonth() + 1);
       renderCalendar();
    });
 
    document.addEventListener("click", (e) => {
       if (!datePicker.contains(e.target) && e.target !== assignedDateInput) {
          datePicker.style.display = "none";
       }
    });
 </script>
 
 <script>
    const endDatePicker = document.getElementById("endDatePicker");
    const endDateInput = document.getElementById("endDateInput");
    const endCurrentMonthLabel = document.getElementById("endCurrentMonth");
    const endCalendarDays = document.getElementById("endCalendarDays");
    const endCancelButton = document.getElementById("endCancelButton");
    const endOkButton = document.getElementById("endOkButton");
    const prevEndMonthButton = document.getElementById("prevEndMonth");
    const nextEndMonthButton = document.getElementById("nextEndMonth");
 
    let selectedEndDate = null;
    let currentEndDate = new Date();
 
    function renderEndCalendar() {
       const year = currentEndDate.getFullYear();
       const month = currentEndDate.getMonth();
 
       const firstDay = new Date(year, month, 1).getDay();
       const daysInMonth = new Date(year, month + 1, 0).getDate();
 
       endCurrentMonthLabel.textContent = currentEndDate.toLocaleString("default", {
          month: "long",
          year: "numeric",
       });
 
       endCalendarDays.innerHTML = "";
 
       for (let i = 0; i < firstDay; i++) {
          const emptyCell = document.createElement("div");
          endCalendarDays.appendChild(emptyCell);
       }
 
       for (let day = 1; day <= daysInMonth; day++) {
          const dayCell = document.createElement("div");
          dayCell.textContent = day;
          dayCell.style.padding = "8px";
          dayCell.style.cursor = "pointer";
          dayCell.style.borderRadius = "50%";
          dayCell.style.transition = "background 0.2s";
          dayCell.addEventListener("click", () => {
             selectedEndDate = new Date(year, month, day);
             Array.from(endCalendarDays.children).forEach((cell) => (cell.style.background = ""));
             dayCell.style.background = "#007bff";
             dayCell.style.color = "white";
          });
          endCalendarDays.appendChild(dayCell);
       }
    }
 
    function positionEndDatePicker(input) {
       const rect = input.getBoundingClientRect();
       endDatePicker.style.top = `${50}px`;
       endDatePicker.style.left = `${50}px`;
    }
 
    endDateInput.addEventListener("click", () => {
       positionEndDatePicker(endDateInput);
       endDatePicker.style.display = "block";
       renderEndCalendar();
    });
 
    endCancelButton.addEventListener("click", () => {
       endDatePicker.style.display = "none";
       selectedEndDate = null;
    });
 
    endOkButton.addEventListener("click", () => {
       if (selectedEndDate) {
          endDateInput.value = selectedEndDate.toDateString();
       }
       endDatePicker.style.display = "none";
    });
 
    prevEndMonthButton.addEventListener("click", () => {
       currentEndDate.setMonth(currentEndDate.getMonth() - 1);
       renderEndCalendar();
    });
 
    nextEndMonthButton.addEventListener("click", () => {
       currentEndDate.setMonth(currentEndDate.getMonth() + 1);
       renderEndCalendar();
    });
 
    document.addEventListener("click", (e) => {
       if (!endDatePicker.contains(e.target) && e.target !== endDateInput) {
          endDatePicker.style.display = "none";
       }
    });
 </script>
 <script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
       searchable: false,
       fixedHeight: true,
    });
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
    var ctx1 = document.getElementById("chart-consumption").getContext("2d");
 
    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
 
    gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
    gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
    gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
 
    new Chart(ctx1, {
       type: "doughnut",
       data: {
          labels: ["Done", "Stuck", "Worked On", "Garage", "Basement"],
          datasets: [
             {
                label: "Consumption",
                weight: 9,
                cutout: 90,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ["#5AA94A", "#EF191F", "#F1D604"],
                data: [15, 20, 13],
                fill: false,
             },
          ],
       },
       options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
             legend: {
                display: false,
             },
          },
          interaction: {
             intersect: false,
             mode: "index",
          },
          scales: {
             y: {
                grid: {
                   drawBorder: false,
                   display: false,
                   drawOnChartArea: false,
                   drawTicks: false,
                },
                ticks: {
                   display: false,
                },
             },
             x: {
                grid: {
                   drawBorder: false,
                   display: false,
                   drawOnChartArea: false,
                   drawTicks: false,
                },
                ticks: {
                   display: false,
                },
             },
          },
       },
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