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
                    <span class="menu-icon">
                        <i class="bi bi-newspaper fs-3"></i>
                    </span>
                    <span class="menu-title">اخبار</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/students*') ? 'active' : '' }}" href={{ route('panel.admin.students.index') }}>
                    <span class="menu-icon">
                        <i class="las la-user-graduate fs-3"></i>
                    </span>
                    <span class="menu-title">دانشجویان</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/teachers*') ? 'active' : '' }}" href={{ route('panel.admin.teachers.index') }}>
                    <span class="menu-icon">
                        <i class="las la-chalkboard-teacher fs-3"></i>
                    </span>
                    <span class="menu-title">اساتید</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/admins*') ? 'active' : '' }}" href={{ route('panel.admin.admins.index') }}>
                    <span class="menu-icon">
                        <i class="las la-user-tie fs-3"></i>
                    </span>
                    <span class="menu-title">مدیران سیستم</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/terms*') ? 'active' : '' }}" href={{ route('panel.admin.terms.index') }}>
                    <span class="menu-icon">
                        <i class="las la-folder-open fs-3"></i>
                    </span>
                    <span class="menu-title">ترم‌ها</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/fields*') ? 'active' : '' }}" href={{ route('panel.admin.fields.index') }}>
                    <span class="menu-icon">
                        <i class="las la-graduation-cap fs-3"></i>
                    </span>
                    <span class="menu-title">رشته‌ها</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/lecture-groups*') ? 'active' : '' }}" href={{ route('panel.admin.lecture-groups.index') }}>
                    <span class="menu-icon">
                        <i class="las la-book fs-3"></i>
                    </span>
                    <span class="menu-title">گروه‌های درسی</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/lectures*') ? 'active' : '' }}" href={{ route('panel.admin.lectures.index') }}>
                    <span class="menu-icon">
                        <i class="las la-book-reader fs-3"></i>
                    </span>
                    <span class="menu-title">درس‌ها</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/admin/settings*') ? 'active' : '' }}" href={{ route('panel.admin.settings.index') }}>
                    <span class="menu-icon">
                        <i class="las la-tools fs-3"></i>
                    </span>
                    <span class="menu-title">تنظیمات</span>
                </a>
            </div>
        </div>
    </div>
</div>
