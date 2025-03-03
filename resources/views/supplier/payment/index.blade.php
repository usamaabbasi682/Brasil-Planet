@extends('layouts.app')
@section('title','Payments')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Payments</li>
   </ol>
   <h6 class="mt-0">Payments</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="row g-3">
       <div class="col-lg-3 col-sm-6">
          <div class="card cursor-pointer" onclick="toggleCard(this, 'custom-confirmed-table')">
             <div class="card-body p-3">
                <p class="text-sm mb-5 text-capitalize font-weight-bold">
                   Confirmed Payments
                </p>
                <div class="row">
                   <div class="col-8 d-flex align-items-end">
                      <div class="numbers">
                         <h5 class="font-weight-bolder mb-0">
                            10
                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                         </h5>
                      </div>
                   </div>
                   <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                      <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                         <img src="{{ asset('assets/images/payments-white-icon.png') }}" alt="Confirmed Services" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>

       <div class="col-lg-3 col-sm-6">
          <div class="card cursor-pointer" onclick="toggleCard(this, 'custom-upcoming-table')">
             <div class="card-body p-3">
                <p class="text-sm mb-5 text-capitalize font-weight-bold">
                   Upcoming Payments
                </p>
                <div class="row">
                   <div class="col-8 d-flex align-items-end">
                      <div class="numbers">
                         <h5 class="font-weight-bolder mb-0">
                            65
                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                         </h5>
                      </div>
                   </div>
                   <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                      <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                         <img src="{{ asset('assets/images/payments-white-icon.png') }}" alt="Upcoming Services" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="row mt-3">
       <div class="card mt-3">
          <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
             <h5 class="mb-0 col-12 col-md-3">Payments</h5>
             <div class="d-flex flex-wrap justify-content-end align-items-center col-12 col-md-9 gap-2">
                <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 180px;">
                   <select class="form-select">
                      <option>Date</option>
                      <option>Date 1</option>
                      <option>Date 2</option>
                      <option>Date 3</option>
                      <option>Date 4</option>
                   </select>
                </div>
                <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 180px;">
                   <select class="form-select">
                      <option>Services</option>
                      <option>Service 1</option>
                      <option>Service 2</option>
                      <option>Service 3</option>
                      <option>Service 4</option>
                   </select>
                </div>
                <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 150px;">
                   <select class="form-select">
                      <option>Status</option>
                      <option>All</option>
                      <option>Confirmed</option>
                      <option>Pending</option>
                   </select>
                </div>
                <div class="input-group me-2 w-100 w-md-auto">
                   <span class="input-group-text" id="basic-addon1">
                      <i class="bi bi-search"></i>
                   </span>
                   <input type="text" class="form-control" placeholder="Search" />
                </div>
             </div>
          </div>
          <div class="card-body pt-0">
             <div class="table-responsive custom-table-header custom-confirmed-table" style="overflow-y: hidden; display: none; height: 500px;">
                <table class="table table-flush" id="datatable-basic">
                   <thead class="thead-light">
                      <tr>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            DATE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            SERVICE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            CUSTOMER <br />
                            NAME
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            PEOPLE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            COST
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            NOTES FOR <br />
                            SUPPLIER
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            NOTES FOR <br />
                            BRASIL PLANET
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            COST
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            PAYMENT STATUS
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ACTION
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-green-status">
                               CONFIRMED
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-green-status">
                               CONFIRMED
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-green-status">
                               CONFIRMED
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
             <div class="table-responsive custom-table-header custom-upcoming-table" style="overflow-y: hidden; display: block; height: 500px;">
                <table class="table table-flush" id="datatable-basic2">
                   <thead class="thead-light">
                      <tr>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            DATE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            SERVICE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            CUSTOMER <br />
                            NAME
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            PEOPLE
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            COST
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            NOTES FOR <br />
                            SUPPLIER
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            NOTES FOR <br />
                            BRASIL PLANET
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            COST
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            PAYMENT STATUS
                         </th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ACTION
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-purple-status">
                               PENDING
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-purple-status">
                               PENDING
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-sm font-weight-bold">01/12/2024</td>
                         <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                            SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                         </td>
                         <td class="text-sm font-weight-normal">Larry Murphy</td>
                         <td class="text-sm font-weight-normal">
                            2
                            <br />
                            <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                         </td>
                         <td class="text-sm font-weight-normal">
                            180
                            <br />
                            (90 x 2)
                         </td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">Lorem ipsum is a dummy text</td>
                         <td class="text-sm font-weight-normal">180 (90)</td>
                         <td class="text-sm font-weight-normal">
                            <div class="custom-status custom-purple-status">
                               PENDING
                            </div>
                         </td>
                         <td class="text-sm font-weight-normal">
                            <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('supplier.payments.view') }}'">
                               <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                            </div>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('custom-js')
<script>
    function toggleCard(card, tableClass) {
       document.querySelectorAll(".card").forEach((otherCard) => {
          if (otherCard !== card) {
             resetCardStyles(otherCard);
          }
       });
       hideAllTables();

       const isActive = card.style.backgroundColor === "rgb(46, 84, 146)";

       if (!isActive) {
          activateCard(card);
          showTable(tableClass);
       } else {
          deactivateCard(card);
       }
    }

    function resetCardStyles(card) {
       card.style.backgroundColor = "";
       card.style.color = "";
       card.querySelectorAll("p, h5, span").forEach((textElement) => {
          textElement.style.color = "";
       });
       const icon = card.querySelector(".icon");
       if (icon) icon.style.backgroundColor = "#2a4885";
       const img = card.querySelector("img");
       if (img) img.src = img.src.replace("payments-colored-icon.png", "payments-white-icon.png");
    }

    function activateCard(card) {
       card.style.backgroundColor = "#2e5492";
       card.style.color = "white";
       card.querySelectorAll("p, h5, span").forEach((textElement) => {
          textElement.style.color = "white";
       });
       const icon = card.querySelector(".icon");
       if (icon) icon.style.backgroundColor = "white";
       const img = card.querySelector("img");
       if (img) img.src = img.src.replace("payments-white-icon.png", "payments-colored-icon.png");
    }

    function hideAllTables() {
       document.querySelectorAll(".table-responsive").forEach((table) => {
          table.style.display = "none";
       });
    }

    function showTable(tableClass) {
       const table = document.querySelector(`.${tableClass}`);
       if (table) {
          table.style.display = "block";
       }
    }
 </script>
 <script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
       searchable: false,
       fixedHeight: true,
    });
    const dataTableBasic2 = new simpleDatatables.DataTable("#datatable-basic2", {
       searchable: false,
       fixedHeight: true,
    });
    const dataTableBasic3 = new simpleDatatables.DataTable("#datatable-basic3", {
       searchable: false,
       fixedHeight: true,
    });
    const dataTableBasic4 = new simpleDatatables.DataTable("#datatable-basic4", {
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