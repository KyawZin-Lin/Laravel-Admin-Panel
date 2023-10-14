@extends('layouts.master')
@section('content')
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">DMS Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ url('admin/states') }}">States</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row dash-nft">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">

                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">States</h4>
                                        {{-- <div class="dropdown me-2">
                                            <button class="btn  btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Setting
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ url('admin/states/create') }}">Create
                                                        State</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('admin/states/soft/delete/list') }}">Deleted List</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('admin/state/export-state') }}">Export States</a></li>
                                            </ul>
                                        </div> --}}



                                        <div class="live-preview">
                                            <div class="d-flex flex-wrap gap-2">
                                                {{-- <a class="btn btn-success"
                                                    href="{{ url('admin/state/export-state') }}">Export States</a> --}}
                                                <a href="{{ url('admin/states/create') }}">
                                                    <button type="button"
                                                        class="btn btn-success waves-effect waves-light">Create
                                                        States</button>
                                                </a>

                                                <a href="{{ url('admin/states/soft/delete/list') }}">
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">
                                                        Deleted Lists</button>
                                                </a>

                                            </div>
                                        </div>
                                        {{-- <form class="app-search d-none d-md-block ms-2"
                                            action="{{ url('admin/states') }}" method="GET">
                                            @csrf
                                            @method('GET')
                                            <div class=" position-relative d-flex justify-content-end gap-1 ">
                                                <input type="text" class=" form-control " placeholder="Search..."
                                                    autocomplete="off" id="search-options" name="name" value="">
                                                <button class="btn btn-sm btn-info" type="submit">Search</button>
                                                <a href="{{url('admin/states')}}" class="btn btn-info">Clear</a>
                                            </div>


                                        </form> --}}

                                    </div><!-- end card header -->
                                    <div class="float-end  ">

                                        {{-- <form action="{{ url('admin/state/import') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')

                                            <div class="col-lg-12 me-2 ">
                                                <div class="d-flex offset-8">

                                                    <input type="file" name="file"
                                                        class=" form-control me-2  d-inline" id="customFile" required>
                                                    <span class="me-2"><button class="btn  btn-primary">Import
                                                        </button></span>

                                                </div>
                                            </div>


                                        </form> --}}
                                    </div>



                                    <div class="card-body">


                                        <div class="live-preview">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="width: 42px;">
                                                                No.
                                                            </th>
                                                            <th scope="col">Progress</th>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Name 2</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @forelse ($states as $state) --}}
                                                            <tr>
                                                                <th scope="row">
                                                                    {{-- {{$states->firstItem() + $loop->index}} --}}
                                                                </th>
                                                                <td class="">
                                                                    <a
                                                                    {{-- href="{{ url('admin/states/' . $state->id) }}" --}}
                                                                        > <i
                                                                            class="ri-eye-fill fs-16 text-info"></i></a>
                                                                    <a
                                                                        {{-- href="{{ url('admin/states/' . $state->id . '/edit') }}" --}}
                                                                        >
                                                                        <i
                                                                            class="ri-pencil-fill fs-16 text-warning"></i></a>
                                                                    <a
                                                                     {{-- data-href="{{ URL::to('admin/states/softDelete/' . $state->id) }}" --}}

                                                                        class="show_confirm"><i
                                                                            class="ri-delete-bin-5-fill fs-16 text-danger"></i></a>
                                                                </td>
                                                                <td><a href="#"
                                                                        class="fw-medium "></a></td>
                                                                <td></td>
                                                                <td></td>

                                                            </tr>
                                                        {{-- @empty
                                                        @endforelse --}}

                                                    </tbody>

                                                </table>
                                                <!-- end table -->
                                            </div>
                                            <div class="row mt-3">
                                                {{-- {{ $states }} --}}
                                            </div>
                                            <!-- end table responsive -->
                                        </div>

                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                        </div><!-- end col -->
                    </div>
                    <!--end row-->



                </div>
                <!--end col-->


            </div>
            <!--end row-->
        @endsection('content')
