<x-public-layout>
    <x-slot name="PageName">BT file manager</x-slot>
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


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="">
                    <span class="text-danger">{{ $account->name }}:</span>
                    <span class="fs-5">File_Manager_Service</span>
                </h2>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        {{-- <a type="button" class="btn btn-sm btn-outline-secondary"
                            href="#">Upload Files</a> --}}

                            <x-Upload_Button path="{{ $Folder_Path }}"></x-Upload_Button>

                            <x-Create_Button folder="{{ $Folder_Path }}"></x-Create_Button>
                        {{-- <x-Create_File_Button folder="{{$Root}}"></x-Create_File_Button> --}}
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>


                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button> --}}
                </div>
            </div>

            <div class="table-responsive text-left">

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>

                            <th><input type="checkbox"></th>
                            <th>Folder_Name</th>
                            <th>Folder_Size</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Sub_Folders as $Sub_Folder)

                            <tr scope="row">
                                <td><input type="checkbox"></td>
                                <td>
                                    <a href="{{ route('Chain.Account.Auth.Open_Folder', $Sub_Folder->folder_path) }}"
                                        class="ms-1 text-warning " style="text-decoration: none; color:black;">
                                        <span data-feather="folder"></span>
                                    </a>
                                    <a href="{{ route('Chain.Account.Auth.Open_Folder', $Sub_Folder->folder_path) }}"
                                        class="ms-1" style="text-decoration: none; color:black;">
                                        {{ $Sub_Folder->folder_name }}
                                    </a>
                                </td>
                                <td>
                                    <a href=""
                                        style="text-decoration: none; color:black; ">{{ $Sub_Folder->folder_size }}</a>
                                </td>
                                <td>
                                    <a href=""
                                        style="text-decoration: none; color:black; ">{{ $Sub_Folder->created_at }}</a>
                                </td>
                            </tr>
                        @endforeach

                        @foreach ($Files as $File)
                            <tr scope="row">
                                <td><input type="checkbox"></td>
                                <td>
                                    <a target="_blank" href="{{ $File->file_path_directory }}"
                                        class="ms-1 text-warning" style="text-decoration: none; color:black;">
                                        <i class="{{ $File->icon }}"></i>

                                    </a>
                                    <a target="_blank" href="{{ $File->file_path_directory }}" class="ms-1"
                                        style="text-decoration: none; color:black;">
                                        {{ $File->file_name }}
                                    </a>
                                </td>
                                <td>
                                    <a href=""
                                        style="text-decoration: none; color:black; ">{{ $File->file_size }}</a>
                                </td>
                                <td>
                                    <a href=""
                                        style="text-decoration: none; color:black; ">{{ $File->created_at }}</a>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @error('folder_name')

                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Error!</strong> {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @enderror

                <div>
                    @error('file_request')
                        <small class="text-danger fw-bold" style="font-size: 15px;">
                            {{ $message }}</small>
                    @enderror

                </div>

                <div>
                    @error('file_name')
                        <small class="text-danger fw-bold" style="font-size: 15px;">
                            {{ $message }}</small>
                    @enderror
                </div>
                @if (Session::has('warning'))
                    <div class="alert alert-warning text-black">
                        {{ Session::get('warning') }}
                    </div>
                @endif

            </div>

        </div>
    </div>
    <script src="{{ asset('js/sidebars.js') }}"></script>
</x-public-layout>
