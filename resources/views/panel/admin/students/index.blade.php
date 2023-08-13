@extends('panel.admin.panel-layout')

@section('css')
    <link href="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="جستجو دانشجویان">
                </div>
            </div>
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{ route('panel.admin.students.create') }}" class="btn btn-primary">ایجاد دانشجو</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-40px">#</th>
                            <th class="min-w-300px" >نام</th>
                            <th class="min-w-40px">نام خانوادگی</th>
                            <th class="min-w-40px">شماره دانشجویی</th>
                            <th class="min-w-40px">موبایل</th>
                            <th class="min-w-40px">تایید شده</th>
                            <th class="min-w-40px">تاریخ ایجاد</th>
                            <th class="text-end min-w-70px">عملیات</th>
                        </tr>

                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                        @foreach($students as $key => $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->first_name }}
                                </td>
                                <td>
                                    {{ $item->last_name }}
                                </td>
                                <td>
                                    {{ $item->student_id }}
                                </td>
                                <td>
                                    {{ $item->mobile }}
                                </td>
                                <td>
                                    {{ $item->approved ? 'تایید شده' : 'در انتظار تایید' }}
                                </td>
                                <td style="direction: ltr; text-align: right">
                                    {{ \Morilog\Jalali\Jalalian::fromCarbon($item->created_at)->format('Y/m/d H:i') }}
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="{{ route('panel.admin.students.edit', $item) }}" class="menu-link px-3">ویرایش</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('panel.admin.students.destroy', $item) }}" class="menu-link px-3">حذف</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
@section('js')
    <script src="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
    <script type="text/javascript">
        "use strict";

        // Class definition
        var KTCustomersList = function () {
            // Define shared variables
            var datatable;
            var filterMonth;
            var filterPayment;
            var table

            // Private functions
            var initCustomerList = function () {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                });

                // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
                datatable.on('draw', function () {
                    initToggleToolbar();
                    toggleToolbars();
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-customer-table-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }


            // Init toggle toolbar
            var initToggleToolbar = () => {
                // Toggle selected action toolbar
                // Select all checkboxes
                const checkboxes = table.querySelectorAll('[type="checkbox"]');

                // Select elements
                const deleteSelected = document.querySelector('[data-kt-customer-table-select="delete_selected"]');

                // Toggle delete selected toolbar
                checkboxes.forEach(c => {
                    // Checkbox on click event
                    c.addEventListener('click', function () {
                        setTimeout(function () {
                            toggleToolbars();
                        }, 50);
                    });
                });

                // Deleted selected rows
                deleteSelected.addEventListener('click', function () {
                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete selected customers?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // Remove all selected customers
                                checkboxes.forEach(c => {
                                    if (c.checked) {
                                        datatable.row($(c.closest('tbody tr'))).remove().draw();
                                    }
                                });

                                // Remove header checked box
                                const headerCheckbox = table.querySelectorAll('[type="checkbox"]')[0];
                                headerCheckbox.checked = false;
                            });
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: "Selected customers was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                });
            }

            // Toggle toolbars
            const toggleToolbars = () => {
                // Define variables
                const toolbarBase = document.querySelector('[data-kt-customer-table-toolbar="base"]');
                const toolbarSelected = document.querySelector('[data-kt-customer-table-toolbar="selected"]');
                const selectedCount = document.querySelector('[data-kt-customer-table-select="selected_count"]');

                // Select refreshed checkbox DOM elements
                const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');

                // Detect checkboxes state & count
                let checkedState = false;
                let count = 0;

                // Count checked boxes
                allCheckboxes.forEach(c => {
                    if (c.checked) {
                        checkedState = true;
                        count++;
                    }
                });

                // Toggle toolbars
                if (checkedState) {
                    selectedCount.innerHTML = count;
                    toolbarBase.classList.add('d-none');
                    toolbarSelected.classList.remove('d-none');
                } else {
                    toolbarBase.classList.remove('d-none');
                    toolbarSelected.classList.add('d-none');
                }
            }

            // Public methods
            return {
                init: function () {
                    table = document.querySelector('#kt_customers_table');

                    if (!table) {
                        return;
                    }

                    initCustomerList();
                    handleSearchDatatable();
                }
            }
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTCustomersList.init();
        });
    </script>
@endsection
