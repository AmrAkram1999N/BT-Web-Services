<x-public-layout>
    <x-slot name="PageName">BT user dashboard</x-slot>
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
    <!-- ======= Breadcrumbs ======= -->
    {{-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="index.html"></a></li>
            <li></li>
          </ol>
        </div>

      </div>
    </section> --}}
    <!-- End Breadcrumbs -->



    <div class="row h-100 ">

        <div class=" col-md-2 h-100 bg-dark " style=" color: white; width: 280px; margin:0;  padding:30px;">

            <a href="/" class="d-flex align-items-center pb-3 mb-3  text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-5 fw-semibold">Collapsible</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Home
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class=" rounded">Overview</a></li>
                            <li><a href="#" class=" rounded">Updates</a></li>
                            <li><a href="#" class=" rounded">Reports</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class=" rounded">Overview</a></li>
                            <li><a href="#" class=" rounded">Weekly</a></li>
                            <li><a href="#" class=" rounded">Monthly</a></li>
                            <li><a href="#" class=" rounded">Annually</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class=" rounded">New</a></li>
                            <li><a href="#" class=" rounded">Processed</a></li>
                            <li><a href="#" class=" rounded">Shipped</a></li>
                            <li><a href="#" class=" rounded">Returned</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1 ">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                        data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class=" rounded">New...</a></li>
                            <li><a href="#" class=" rounded">Profile</a></li>
                            <li><a href="#" class=" rounded">Settings</a></li>
                            <li><a href="#" class=" rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class=" col-md-10 w-100" style="background: rgb(255, 255, 255);">

            <div style=" padding:30px; padding-bottom:0;">
                <h2>Accounts Services</h2>
            </div>

            <div class=" table-responsive text-center" style="padding:30px; padding-top:0;">
                @if (Session::has('warning'))
                    <div class="alert alert-warning text-black">
                        {{ Session::get('warning') }}
                    </div>
                @endif
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Name_Service</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name_Employee</th>
                            <th scope="col">Phone_Number</th>
                            <th scope="col">Show_Service</th>
                            <th scope="col">Deleting</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Services as $Service)
                            <tr scope="row">
                                <td>{{ $Service->id }}</td>
                                <td>{{ $Service->name_service }}</td>
                                <td>{{ $Service->username }}</td>
                                <td>{{ $Service->name_employee }}</td>
                                <td>@if ($Service->phone_number == null)-- @endif {{ $Service->phone_number }}</td>
                                <td><a target="_blank" class="btn btn-sm btn-outline-secondary text-success"
                                        href="{{ route('Chain.Account.Auth.accountDashboard') }}">Show</a></td>
                                <td><a class="btn btn-sm btn-outline-secondary text-danger"
                                        href="{{ route('Chain.User.Auth.Delete_Service', $Service->username) }}">Delete</a>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <x-buyMore></x-buyMore>
            </div>

        </div>

    </div>


    <script src="{{ asset('js/sidebars.js') }}"></script>
</x-public-layout>
