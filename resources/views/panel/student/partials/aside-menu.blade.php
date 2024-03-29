<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y my-2 py-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item">
                <a class="menu-link {{ request()->is('panel/student') ? 'active' : '' }}" href="{{ route('panel.student.index') }}">
                    <span class="menu-icon">
                        <i class="bi bi-grid fs-3"></i>
                    </span>
                    <span class="menu-title">داشبورد</span>
                </a>
            </div>


            @if (auth()->guard('student')->user()->approved)
                <div class="menu-item">
                    <a class="menu-link {{ request()->is('panel/student/lectures*') ? 'active' : '' }}" href={{ route('panel.student.lectures.index') }}>
                        <span class="menu-icon">
                            <i class="las la-book-reader fs-3"></i>
                        </span>
                        <span class="menu-title">درس‌ها</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->is('panel/student/exam*') ? 'active' : '' }}" href={{ route('panel.student.exam.all') }}>
                        <span class="menu-icon">
                            <i class="las la-question-circle fs-3"></i>
                        </span>
                        <span class="menu-title">آزمون</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
