@php
    $authenticated = false;
    $guardLabel = '';
    $type = '';

    if (auth()->guard('admin')->check()) {
        $authenticated = true;
        $guardLabel = 'ادمین';
        $type = 'admin';
    } elseif (auth()->guard('teacher')->check()) {
        $authenticated = true;
        $guardLabel = 'استاد';
        $type = 'teacher';
    } elseif (auth()->guard('student')->check()) {
        $authenticated = true;
        $guardLabel = 'دانشجو';
        $type = 'student';
    }
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/loopple/loopple.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css') }}">
    @yield('css')
</head>

<body>
    @include('front.partials.navbar')
    <section class="position-relative pt-5 pb-5 overflow-hidden">
        <span class="mask bg-gradient-info opacity-1"></span>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-5 d-flex flex-column pt-lg-4 pt-xl-5">
                    <h5 class="mb-2 font-weight-bolder">{{ env('APP_NAME') }}</h5>
                    <h1 class="display-3 font-weight-bolder mb-4"><span class="text-primary text-gradient">آزمون آنلاین</span> <br> تشریحی و تستی</h1>
                    <p class="fs-lg mb-5">این سامانه آموزشی شامل امکاناتی نظیر آزمون آنلاین تشریحی و تستی، ورود به کلاس آنلاین و... می‌باشد.</p>

                    <!-- Desktop form -->
{{--                    <form class="d-flex flex-wrap gap-2 mb-5">--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            هوش مصنوعی--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            شبیه سازی کامپیوتری--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            ریاضی گسسته--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            مهندسی نرم افزار--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            زبان تخصصی--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            گرافیک کامپیوتری--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            ساختمان داده--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            کارآفرینی--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            پروژه--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">--}}
{{--                            کارآموزی--}}
{{--                        </button>--}}
{{--                    </form>--}}

                    <div class="d-flex align-items-center mt-auto mb-3 mb-lg-0 pb-4 pb-lg-0 pb-xl-5">
                        <div class="d-flex me-3">
                            <div class="rounded-circle">
                                <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/team-1.jpg" class="rounded-circle avatar-sm border border-white" alt="Avatar">
                            </div>
                            <div class="ms-n3">
                                <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/team-3.jpg" class="rounded-circle avatar-sm border border-white" alt="Avatar">
                            </div>
                            <div class="ms-n3">
                                <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/team-4.jpg" class="rounded-circle avatar-sm border border-white" alt="Avatar">
                            </div>
                        </div>
                        <span>به جمع <span class="text-primary font-weight-bold">{{ \App\Models\Student::all()->count() }}</span> دانشجوی ما بپیوندید</span>
                    </div>
                </div>
                <div class="col-lg-7 text-center ">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <img src="{{ asset('/assets/front/images/wp4.png') }}" class="rounded-circle border border-3 border-white shadow-lg z-index-2" width="300px" alt="Avatar">
                        <img src="{{ asset('/assets/front/images/wp1.png') }}" class="rounded-circle border border-3 border-white position-absolute ms-7 me-n12 mb-7 mt-lg-n12 shadow-lg" width="250px"
                             alt="Avatar">
                        <img src="{{ asset('/assets/front/images/wp3.jpeg') }}" class="rounded-circle border border-3 border-white position-absolute ms-7 me-n11 mb-n6 mt-lg-12 mt-8 shadow-lg"
                             width="200px" alt="Avatar">
                        <img src="{{ asset('/assets/front/images/wp2.png') }}" class="rounded-circle border border-3 border-white position-absolute me-10 ms-lg-n11 ms-n10 mb-7 mt-lg-n5 mt-9
                        shadow-lg" width="220px" alt="Avatar">

                    </div>
                </div>
            </div>
        </div>
    </section>



{{--    <section class="py-7">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 text-center">--}}
{{--                    <h2 class="mb-5">آخرین اخبار</h2>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-lg-0 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">--}}
{{--                            <a href="javascript:;" class="d-block">--}}
{{--                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">--}}
{{--                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-6"></span>--}}
{{--                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">--}}
{{--                                    <i class="ni ni-favourite-28"></i>--}}
{{--                                </button>--}}
{{--                                <span class="badge bg-gradient-info mb-3 position-absolute top-10 start-5">جدید</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="card-body pt-3">--}}
{{--                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">--}}
{{--                                آموزش ثبت نام--}}
{{--                            </a>--}}
{{--                            <p class="text-dark mb-1 line-clamp-3">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.--}}
{{--                            </p>--}}
{{--                            <span class="text-sm mb-3">۴ ساعت پیش</span>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer pt-0">--}}
{{--                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">--}}
{{--                                بیشتر بخوانید--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-lg-0 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">--}}
{{--                            <a href="javascript:;" class="d-block">--}}
{{--                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">--}}
{{--                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-3"></span>--}}
{{--                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">--}}
{{--                                    <i class="ni ni-favourite-28"></i>--}}
{{--                                </button>--}}
{{--                                <span class="badge bg-gradient-danger mb-3 position-absolute top-10 start-5">Sale</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="card-body pt-3">--}}
{{--                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">--}}
{{--                                آموزش ثبت نام--}}
{{--                            </a>--}}
{{--                            <p class="text-dark mb-1 line-clamp-3">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.--}}
{{--                            </p>--}}
{{--                            <span class="text-sm mb-3">۴ ساعت پیش</span>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer pt-0">--}}
{{--                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">--}}
{{--                                بیشتر بخوانید--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-lg-0 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">--}}
{{--                            <a href="javascript:;" class="d-block">--}}
{{--                                <img src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">--}}
{{--                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-3"></span>--}}
{{--                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">--}}
{{--                                    <i class="ni ni-favourite-28"></i>--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="card-body pt-3">--}}
{{--                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">--}}
{{--                                آموزش ثبت نام--}}
{{--                            </a>--}}
{{--                            <p class="text-dark mb-1 line-clamp-3">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.--}}
{{--                            </p>--}}
{{--                            <span class="text-sm mb-3">۴ ساعت پیش</span>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer pt-0">--}}
{{--                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">--}}
{{--                                بیشتر بخوانید--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 text-center">
                    <h2 class="mb-5">خدمات ما</h2>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="info">
                        <div class="icon icon-shape mx-auto">
                            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>box-3d-50</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                <path class="color-foreground" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h5 class="mt-2">تفکیک جلسات</h5>
                        <p>می‌توانید فایل‌های هر جلسه را به تفکیک مشاهده کنید.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="info">
                        <div class="icon icon-shape mx-auto">
                            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                                                <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                                <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h5 class="mt-2">شرکت در آزمون</h5>
                        <p>می توانید در آزمون های آنلاین شرکت کنید و نمره بگیرید.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="info">
                        <div class="icon icon-shape mx-auto">
                            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="credit-card" transform="translate(453.000000, 454.000000)">
                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743">
                                                </path>
                                                <path class="color-foreground" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h5 class="mt-2">کلاس آنلاین</h5>
                        <p>می‌توانید بصورت مستقیم به کلاس درس آنلاین وارد شوید.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2>سوالات پرتکرار شما</h2>
                    <p>فهرستی از پرسش ها و پاسخ های پرتکرار که ممکن است به شما کمک کند.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="accordion" id="accordionRental">
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    چگونه ثبت نام کنم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    برای ثبت نام می توانید از قسمت ورود / ثبت نام در بالای صفحه استفاده کنید. شما می‌توانید به عنوان استاد یا دانشجو ثبت نام کنید و پس از تایید مدیریت، به کلاس درس خود وارد شوید.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    چگونه در یک درس شرکت کنم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    شما می‌توانید در پنل کاربری خود، به کلاس درس خود وارد شوید و فایل‌های درس های خود را به تفکیک جلسات مشاهده کنید.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    چگونه وارد آزمون درس شوم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    در بخش پنل کاربری خود، می‌توانید به آزمون های درس خود وارد شوید و آزمون های خود را مشاهده کنید و در زمان مقرر در آن‌ها شرکت کنید و نسبت به پاسخ دادن به سوالات
                                    اقدام کنید.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    چگونه در یک کلاس درس تدریس کنم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    شما می‌توانید با ثبت نام به عنوان استاد، تایید توسط مدیریت و تعریف درس توسط مدیریت برای شما تدریس خود را آغاز کنید.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFifth">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                    چگونه می‌توانم درس جدیدی را تعریف کنم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    دروس توسط مدیریت سامانه تعریف می‌شوند و شما می‌توانید درخواست تعریف درس جدید را به مدیریت اعلام کنید و پس از تعریف درس، تدریس خود را آغاز کنید.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5 bg-gradient-primary position-relative overflow-hidden">
        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-0 w-100 opacity-6">
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto text-center">
                    <h5 class="text-white">{{ auth('teacher')->check() || auth('admin')->check() || auth('student')->check() ? 'ورود به پنل' : 'ورود / ثبت نام' }}</h5>
                    <p class="mb-5 text-white">
                        {{ auth('teacher')->check() || auth('admin')->check() || auth('student')->check() ? 'برای ورود به پنل کاربری خود، روی دکمه زیر کلیک کنید.' : 'برای ورود به سامانه یا ثبت نام در سامانه، روی دکمه زیر کلیک کنید.' }}
                    </p>

                    @if ($authenticated)
                        <a href="{{ route('panel.' . $type . '.index') }}" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block" style="max-width: 300px;margin-left: auto !important;margin-right: auto !important;">پنل {{ $guardLabel  }}</a>
                    @else
                        <div class="row justify-content-center">
                            <div class="col-sm-4 ps-sm-0">
                                <a href="{{ route('login', ['type' => 'student']) }}" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">ورود به عنوان دانشجو</a>
                            </div>
                            <div class="col-sm-4 ps-sm-0">
                                <a href="{{ route('login', ['type' => 'teacher']) }}" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">ورود به عنوان استاد</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-2">{{ env('APP_NAME') }}</h6>
                    <p class="mb-4 pb-2">
                        آموزش و یادگیری نیرومندترین سلاحی است که می توان با آن جهان را دگرگون کرد.
                        <br />
                        <span class="text-secondary text-sm">«نلسون ماندلا»</span>
                    </p>
{{--                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">--}}
{{--                        <span class="text-lg fab fa-facebook" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">--}}
{{--                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">--}}
{{--                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">--}}
{{--                        <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">--}}
{{--                        <span class="text-lg fab fa-github" aria-hidden="true"></span>--}}
{{--                    </a>--}}
                </div>
                <div class="col-md-2 col-4 ms-lg-auto mb-md-0 mb-4">
                    <h6 class="text-sm">{{ env('APP_NAME') }}</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:void(0);">
                                درباره ما
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                سوالات متداول
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                ارتباط با ما
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-4 mb-md-0 mb-4">
                    <h6 class="text-sm">صفحات</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                درس ها
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                آموزش ها
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                آزمون ها
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-4 mb-md-0 mb-4">
                    <h6 class="text-sm">لینک های دیگر</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="https://shamsipour.tvu.ac.ir/">
                                آموزشکده شمسی پور
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="http://www.leader.ir/">
                                دفتر مقام معظم رهبری
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="https://bustan.tvu.ac.ir/">
                                سامانه بوستان
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">
            <div class="row">
                <div class="col-8 mx-lg-auto text-lg-center">
                    <p class="text-sm text-secondary">
                        کلیه حقوق متعلق به دانشگاه فنی و حرفه ای می باشد.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://loopple.s3.eu-west-3.amazonaws.com/soft-ui-design-system/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js"></script>
    <script>
        if (document.getElementById("state1")) {
                    const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
                    if (!countUp.error) {
                      countUp.start();
                    } else {
                      console.error(countUp.error);
                    }
                  }
                  if (document.getElementById("state2")) {
                    const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
                    if (!countUp1.error) {
                      countUp1.start();
                    } else {
                      console.error(countUp1.error);
                    }
                  }
                  if (document.getElementById("state3")) {
                    const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
                    if (!countUp2.error) {
                      countUp2.start();
                    } else {
                      console.error(countUp2.error);
                    };
                  }

         if (document.querySelector('.datepicker-1')) {
              flatpickr('.datepicker-1', {
              }); // flatpickr
            }

         if (document.querySelector('.datepicker-2')) {
              flatpickr('.datepicker-2', {
              }); // flatpickr
            }
    </script>
</body>
