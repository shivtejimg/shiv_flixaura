@php
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    } else {
        $type = '';
    }
    if (isset($_GET['category'])) {
        $categoryid = $_GET['category'];
    } else {
        $categoryid = '';
    }
@endphp
@extends('admin.main')
@section('title')
    Portfolio
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Portfolio Manager</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('portfolio.createportfolio') }}">
                        <i class="bi-plus"></i> Add Portfolio
                    </a>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-md-between">
                <div class="mb-2 mb-md-0">
                    <h4 class="card-header-title">View Portfolio</h4>
                </div>
                <div class="mb-2 mb-md-0">
                    <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input id="datatableSearch" type="search" class="form-control" placeholder="Search"
                                aria-label="Search">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>

                <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none;">
                        <div class="d-flex align-items-center">
                            <span class="fs-5 me-3">
                                <span id="datatableCounter">0</span>
                                Selected
                            </span>
                            <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                                <i class="bi-trash"></i> Delete
                            </a>
                        </div>
                    </div>
                    <!-- End Datatable Info -->
                    <div class="tom-select-custom">
                        <select class="js-select form-select" name="fantasy_type" id="type-select" onchange="updateURL()"
                            data-hs-tom-select-options='{
                                          "searchInDropdown": false,
                                          "hideSearch": true
                                        }'
                            required>
                            <option <?php if ($type == 'image') {
                                echo 'selected';
                            } ?> value="image"
                                data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Image</span></span>'>
                                Image</option>
                            <option <?php if ($type == 'video') {
                                echo 'selected';
                            } ?> value="video"
                                data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Video</span></span>'>
                                Video</option>
                        </select>
                    </div>
                    <div class="tom-select-custom">
                        <select class="js-select form-select" name="fantasy_type" id="category-select"
                            onchange="updateURL()"
                            data-hs-tom-select-options='{
                                          "searchInDropdown": false,
                                          "hideSearch": true
                                        }'
                            required>
                            <option value=""
                                data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Select Category</span></span>'>
                                Select Category</option>
                            @foreach ($category as $val)
                                <option <?php if ($categoryid == $val->id) {
                                    echo 'selected';
                                } ?> value="{{ $val->id }}"
                                    data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">{{ $val->name }}</span></span>'>
                                    {{ $val->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Options</span>
                            <a id="export-copy" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('public/assets/svg/illustrations/copy-icon.svg') }}"
                                    alt="Image Description">
                                Copy
                            </a>
                            <a id="export-print" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('public/assets/svg/illustrations/print-icon.svg') }}"
                                    alt="Image Description">
                                Print
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('public/assets/svg/brands/excel-icon.svg') }}" alt="Image Description">
                                Excel
                            </a>
                            <a id="export-csv" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('public/assets/svg/components/placeholder-csv-format.svg') }}"
                                    alt="Image Description">
                                .CSV
                            </a>
                            <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('public/assets/svg/brands/pdf-icon.svg') }}" alt="Image Description">
                                PDF
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom position-relative">
                <table id="datatable"
                    class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                       "columnDefs": [{
                          "targets": [0, 3],
                          "orderable": false
                        }],
                       "order": [],
                       "info": {
                         "totalQty": "#datatableWithPaginationInfoTotalQty"
                       },
                       "search": "#datatableSearch",
                       "entries": "#datatableEntries",
                       "pageLength": 10,
                       "isResponsive": false,
                       "isShowPaging": false,
                       "pagination": "datatablePagination"
                     }'>
                    <thead class="thead-light">
                        <tr>
                            <th class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="datatableCheckAll">
                                    <label class="form-check-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th>Action</th>
                            <th class="table-column-ps-0">Category Name</th>
                            <th class="table-column-ps-0">Book Now</th>
                            <th>Image/Video</th>
                            <th class="table-column-ps-0">Title</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($collection as $item)
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll1">
                                        <label class="form-check-label" for="datatableCheckAll1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('portfolio.editportfolio', $item->id) }}" type="button"
                                        class="btn btn-success btn-sm">
                                        <i class="bi-pencil-fill me-1"></i> Edit
                                    </a>
                                    <a href="{{ route('portfolio.deleportfolio', $item->id) }}" type="button"
                                        class="btn btn-danger btn-sm">
                                        <i class="bi-trash-fill me-1"></i> Delete
                                    </a>
                                    @if ($item->status == 0)
                                        <a href="{{ route('portfolio.enbdisbportfolio', $item->id) }}" type="button"
                                            class="btn btn-danger btn-sm">
                                            Enable
                                        </a>
                                    @else
                                        <a href="{{ route('portfolio.enbdisbportfolio', $item->id) }}" type="button"
                                            class="btn btn-success btn-sm">
                                            Disable
                                        </a>
                                    @endif
                                </td>
                                <td class="table-column-ps-0">
                                    <div class="ms-3">
                                        <span class="d-block h5 text-inherit mb-0">{{ $item->categoryname }}</span>
                                    </div>
                                </td>
                                <td class="table-column-ps-0">

                                    <div class="ms-3">
                                        @if ($item->book_now == 1)
                                            <input type="checkbox" id="port_status{{ $item->id }}"
                                                onClick="load({{ $item->id }})" checked>
                                        @else
                                            <input type="checkbox" id="port_status{{ $item->id }}"
                                                onClick="load({{ $item->id }})">
                                        @endif
                                    </div>

                                </td>
                                <td>
                                    <img class="avatar-img" src="{{ asset('public/' . $item->image) }}" height="50px"
                                        width="50px">
                                </td>
                                <td class="table-column-ps-0">
                                    <div class="ms-3">
                                        <span class="d-block h5 text-inherit mb-0">{{ $item->title }}</span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="me-2">Showing:</span>

                            <!-- Select -->
                            <div class="tom-select-custom">
                                <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                                    autocomplete="off"
                                    data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                                    <option value="10" selected>10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                            <!-- End Select -->

                            <span class="text-secondary me-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Stats -->

    </div>
    <script>
        function load(id) {
            $.ajax({
                'type': 'POST',
                'url': '<?php echo asset('/my-admin/book-now'); ?>',
                'data': {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                'success': function(data) {},
            });
        }
    </script>
    <script>
        function updateURL() {
            var url = "{{ route('portfolio.viewportfolio') }}";
            var typeValue = document.getElementById("type-select").value;
            var categoryValue = document.getElementById("category-select").value;

            if (typeValue) {
                url += "?type=" + typeValue;
            }

            if (categoryValue) {
                url += (typeValue ? "&" : "?") + "category=" + categoryValue;
            }

            window.location.href = url;
        }
    </script>
@endsection
