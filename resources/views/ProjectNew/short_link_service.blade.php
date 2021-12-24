<x-public-layout>
    <x-slot name="PageName">BT short link</x-slot>

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
            <h2 class="mb-2 mt-4"><span class="text-danger">{{ $account->name }}:</span> Short_Link_Service
            </h2>
            <div class="table-responsive">
                <div>
                    @error('url_request')
                        <small class="text-danger fw-bold" style="font-size: 15px;">
                            {{ $message }}</small>
                    @enderror
                </div>

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th scope="col">Web_site_name</th>
                            <th scope="col">Url_old</th>
                            <th scope="col">Url_new</th>
                            <th scope="col">Clicks_Number</th>
                            <th scope="col">Editting</th>
                            <th scope="col">Result</th>
                            <th scope="col">Deleting</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ShortLink as $link)
                            <tr scope="row">
                                <td>{{ $link->id }}</td>
                                <td>{{ $link->web_site_name }}</td>
                                <td>{{ $link->url_old }}</td>
                                <td><a target="_blank"
                                        href="{{ route('Redirect_Short_Link', $link->id) }}">{{ $link->url_new }}</a>
                                </td>
                                <td> {{ $link->clicks }} </td>
                                <td style="text-align: left">
                                    <x-editButton link="{{ $link->id }}"></x-editButton>
                                </td>
                                <td><a target="_blank" class="btn btn-sm btn-outline-secondary text-success"
                                        href="{{ route('Redirect_Short_Link', $link->id) }}">Show</a></td>
                                <td><a class="btn btn-sm btn-outline-secondary text-danger"
                                        href="{{ route('Chain.Account.Auth.deleteShortLink', $link->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <x-addButton></x-addButton>
            </div>
        </div>

    </div>



    <script src="{{ asset('js/sidebars.js') }}"></script>
</x-public-layout>
