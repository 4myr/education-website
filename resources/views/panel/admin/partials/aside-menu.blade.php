<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y my-2 py-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin') ? 'active' : '' }}" href="{{ route('panel.admin.index') }}">
                    <span class="menu-icon">
                        <i class="bi bi-grid fs-3"></i>
                    </span>
                    <span class="menu-title">داشبورد ها</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/news*') ? 'active' : '' }}" href={{ route('panel.admin.news.index') }}>
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">اخبار</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/admins*') ? 'active' : '' }}" href={{ route('panel.admin.admins.index') }}>
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">مدیران سیستم</span>
                </a>
            </div>

            <div class="menu-item pt-5">
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">صفحات</span>
                </div>
            </div>


            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-person-lines-fill fs-3"></i>
                    </span>
                    <span class="menu-title">کاربر پروفایل</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo13/dist/pages/user-profile/overview.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">بررسی اجمالی</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
