@extends('panel.admin.panel-layout')

@section('body')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="جستجو مشتریان">
                </div>
            </div>
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
                        </svg>
                    </span>
                        فیلتر</button>
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                        <div class="px-7 py-5">
                            <div class="fs-4 text-dark fw-bold">فیلتر تنظیمات</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <div class="px-7 py-5">
                            <div class="mb-10">
                                <label class="form-label fs-5 fw-semibold mb-3">ماه:</label>
                                <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter" data-select2-id="select2-data-10-rkd2" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-12-yehl"></option>
                                    <option value="aug">مرداد</option>
                                    <option value="sep">شهریور</option>
                                    <option value="oct">مهر</option>
                                    <option value="nov">آبان</option>
                                    <option value="dec">آذر</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-11-liu6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-iuvn-container" aria-controls="select2-iuvn-container"><span class="select2-selection__rendered" id="select2-iuvn-container" role="textbox" aria-readonly="true" title="انتخاب گزینه"><span class="select2-selection__placeholder">انتخاب گزینه</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-5 fw-semibold mb-3">پرداخت نوع:</label>
                                <div class="d-flex flex-column flex-wrap fw-semibold" data-kt-customer-table-filter="payment_type">
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked">
                                        <span class="form-check-label text-gray-600">همه</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="payment_type" value="visa">
                                        <span class="form-check-label text-gray-600">ویزا</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                        <input class="form-check-input" type="radio" name="payment_type" value="mastercard">
                                        <span class="form-check-label text-gray-600">مستر کارت</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="payment_type" value="american_express">
                                        <span class="form-check-label text-gray-600">اکسپرس</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">ریست</button>
                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">تایید</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor"></rect>
                            <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor"></path>
                            <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor"></path>
                        </svg>
                    </span>
                        خروجی</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">افزودن خبر</button>
                </div>
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5">
                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>انتخاب شده</div>
                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">حذف انتخاب شده</button>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                <thead>

                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="



                        " style="width: 29.8984px;">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                            </div>
                        </th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="مشتری نام: activate to sort column ascending" style="width: 171.453px;">مشتری نام</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="ایمیل: activate to sort column ascending" style="width: 212.242px;">ایمیل</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="کمپانی: activate to sort column ascending" style="width: 192.977px;">کمپانی</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="روش پرداخت: activate to sort column ascending" style="width: 171.453px;">روش پرداخت</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="زمان ایجاد تاریخ: activate to sort column ascending" style="width: 238.992px;">زمان ایجاد تاریخ</th><th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="عملیات" style="width: 119.484px;">عملیات</th></tr>

                </thead>
                <tbody class="fw-semibold text-gray-600">
                <tr class="odd">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">مرادی نیا</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                        </td>


                        <td>-</td>


                        <td data-filter="mastercard">
                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="">**** 4009</td>


                        <td data-order="Invalid date">14 آذر 2020, 8:43 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="even">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">میلاد مرادی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                        </td>


                        <td>گوگل</td>


                        <td data-filter="visa">
                        <img src="assets/media/svg/card-logos/visa.svg" class="w-35px me-3" alt="">**** 6370</td>


                        <td data-order="Invalid date">01 آذر 2020, 10:12 am</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="odd">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">جلالی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                        </td>


                        <td>اتحادیه بیسترو</td>


                        <td data-filter="mastercard">
                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="">**** 8024</td>


                        <td data-order="Invalid date">12 آبان 2020, 2:01 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="even">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                        </td>


                        <td>آسترو</td>


                        <td data-filter="american_express">
                        <img src="assets/media/svg/card-logos/american-express.svg" class="w-35px me-3" alt="">**** 2956</td>


                        <td data-order="Invalid date">21 مهر 2020, 5:54 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="odd">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">احمد موسوی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                        </td>


                        <td>-</td>


                        <td data-filter="visa">
                        <img src="assets/media/svg/card-logos/visa.svg" class="w-35px me-3" alt="">**** 9984</td>


                        <td data-order="Invalid date">19 مهر 2020, 7:32 am</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="even">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">میکائیل کرمانی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                        </td>


                        <td>Keenthemes</td>


                        <td data-filter="american_express">
                        <img src="assets/media/svg/card-logos/american-express.svg" class="w-35px me-3" alt="">**** 4520</td>


                        <td data-order="Invalid date">23 شهریور 2020, 12:37 am</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="odd">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">محمد رصایی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                        </td>


                        <td>پی پال</td>


                        <td data-filter="mastercard">
                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="">**** 5335</td>


                        <td data-order="Invalid date">11 شهریور 2020, 3:15 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="even">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">امید وحیدی</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                        </td>


                        <td>-</td>


                        <td data-filter="american_express">
                        <img src="assets/media/svg/card-logos/american-express.svg" class="w-35px me-3" alt="">**** 7915</td>


                        <td data-order="Invalid date">03 شهریور 2020, 1:08 am</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="odd">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                        </td>


                        <td>پارامونت</td>


                        <td data-filter="visa">
                        <img src="assets/media/svg/card-logos/visa.svg" class="w-35px me-3" alt="">**** 2293</td>


                        <td data-order="Invalid date">01 شهریور 2020, 4:58 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr><tr class="even">

                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>


                        <td>
                            <a href="../../demo13/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">علی کاربر</a>
                        </td>


                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                        </td>


                        <td>استودیو</td>


                        <td data-filter="visa">
                        <img src="assets/media/svg/card-logos/visa.svg" class="w-35px me-3" alt="">**** 8403</td>


                        <td data-order="Invalid date">18 مرداد 2020, 3:34 pm</td>


                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo13/dist/apps/customers/view.html" class="menu-link px-3">نمایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                                </div>
                            </div>
                        </td>

                    </tr></tbody>
            </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_customers_table_length"><label><select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customers_table_previous"><a href="#" aria-controls="kt_customers_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customers_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="kt_customers_table_next"><a href="#" aria-controls="kt_customers_table" data-dt-idx="5" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
        </div>
        </div>
@endsection
