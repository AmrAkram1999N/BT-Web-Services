<x-public-layout>
    <x-slot name="PageName">BT bank service</x-slot>
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
            <h2 class="mb-2 mt-4"><span class="text-danger">{{ $account->name }}:</span> Bank_card_Service
            </h2>
            <div class="table-responsive text-center">
                @if (Session::has('status'))
                    <div class="alert alert-warning text-black">
                        {{ Session::get('status') }}
                    </div>
                @endif

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">clientname</th>
                            <th scope="col">clientnumber</th>
                            <th scope="col">Telegram Username</th>
                            <th scope="col">Telegram_Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Cards as $Card)
                            <tr scope="row">
                                <td> {{ $Card->id }} </td>
                                <td> {{ $Card->clientname }} </td>
                                <td> {{ $Card->clientnumber }} </td>
                                <td> {{ $Card->telegramUsername }} </td>
                                <td> {{ $Card->telegram_id }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('Chain.Account.Auth.getClient') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-outline-secondary w-100 font-weight-bold text-black" type="submit"
                        role="button">
                        Get a Client
                    </button>
                </form>
            </div>
        </div>
    </div>



 <script src="{{ asset('js/sidebars.js') }}"></script>
</x-public-layout>
