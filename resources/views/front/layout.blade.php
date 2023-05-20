
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
                    <p class="fs-lg mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

                    <!-- Desktop form -->
                    <form class="d-flex flex-wrap gap-2 mb-5">
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            هوش مصنوعی
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            شبیه سازی کامپیوتری
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            ریاضی گسسته
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            مهندسی نرم افزار
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            زبان تخصصی
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            گرافیک کامپیوتری
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            ساختمان داده
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            کارآفرینی
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            پروژه
                        </button>
                        <button class="btn btn-sm btn-primary mb-0 px-3" type="button">
                            کارآموزی
                        </button>
                    </form>

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
                        <span>به جمع <span class="text-primary font-weight-bold">0</span> دانشجوی ما بپیوندید</span>
                    </div>
                </div>
                <div class="col-lg-7 text-center ">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <img src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1481&amp;q=80" class="rounded-circle border border-3 border-white shadow-lg z-index-2" width="300px" alt="Avatar">
                        <img src="https://images.unsplash.com/photo-1534644586429-7681a71bc591?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80" class="rounded-circle border border-3 border-white position-absolute ms-7 me-n12 mb-7 mt-lg-n12 shadow-lg" width="250px" alt="Avatar">
                        <img src="https://images.unsplash.com/photo-1574852859542-1b41217a7815?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dW5pdmVyc2l0eXxlbnwwfDJ8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="rounded-circle border border-3 border-white position-absolute ms-7 me-n11 mb-n6 mt-lg-12 mt-8 shadow-lg" width="200px" alt="Avatar">
                        <img src="https://images.unsplash.com/photo-1499887142886-791eca5918cd?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3R1ZGVudCUyMHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="rounded-circle border border-3 border-white position-absolute me-10 ms-lg-n11 ms-n10 mb-7 mt-lg-n5 mt-9 shadow-lg" width="220px" alt="Avatar">

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-5">آخرین اخبار</h2>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">
                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-6"></span>
                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">
                                    <i class="ni ni-favourite-28"></i>
                                </button>
                                <span class="badge bg-gradient-info mb-3 position-absolute top-10 start-5">جدید</span>
                            </a>
                        </div>
                        <div class="card-body pt-3">
                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">
                                آموزش ثبت نام
                            </a>
                            <p class="text-dark mb-1 line-clamp-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <span class="text-sm mb-3">۴ ساعت پیش</span>
                        </div>
                        <div class="card-footer pt-0">
                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">
                                بیشتر بخوانید
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">
                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-3"></span>
                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">
                                    <i class="ni ni-favourite-28"></i>
                                </button>
                                <span class="badge bg-gradient-danger mb-3 position-absolute top-10 start-5">Sale</span>
                            </a>
                        </div>
                        <div class="card-body pt-3">
                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">
                                آموزش ثبت نام
                            </a>
                            <p class="text-dark mb-1 line-clamp-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <span class="text-sm mb-3">۴ ساعت پیش</span>
                        </div>
                        <div class="card-footer pt-0">
                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">
                                بیشتر بخوانید
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">
                                <img src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" class="img-fluid border-radius-lg">
                                <span class="mask bg-gradient-dark position-absolute top-0 start-0 border-radius-lg opacity-3"></span>
                                <button href="javascript:;" class="btn btn-white btn-icon-only btn-rounded z-index-2 position-absolute end-5 top-7" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to watchlist" data-original-title="">
                                    <i class="ni ni-favourite-28"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body pt-3">
                            <a href="javascript:;" class="card-title h5 d-block text-darker font-weight-bolder">
                                آموزش ثبت نام
                            </a>
                            <p class="text-dark mb-1 line-clamp-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <span class="text-sm mb-3">۴ ساعت پیش</span>
                        </div>
                        <div class="card-footer pt-0">
                            <a href="javascript:;" class="btn btn-outline-info btn-rounded mb-0">
                                بیشتر بخوانید
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <h5 class="mt-2">شرکت در درس ها</h5>
                        <p>به صورت اختیاری می توانید در درس های تعریف شده شرکت کنید.</p>
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
                        <p>می توانید در آزمون های تشریحی و تستی شرکت کنید و نمره بگیرید.</p>
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
                        <h5 class="mt-2">ثبت بازخورد</h5>
                        <p>جهت بهبود سطح عملکرد اساتید می توانید بازخورد ثبت کنید.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="py-4 position-relative">--}}
{{--        <div id="carousel-testimonials" class="carousel slide carousel-team">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-md-5 p-5 ms-lg-auto">--}}
{{--                                <div class="p-3">--}}
{{--                                    <img class="w-100 border-radius-md" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/charles.jpg" alt="First slide">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-5 me-lg-auto position-relative">--}}
{{--                                <p class="text-sm font-weight-bold mb-1">- Customer Story</p>--}}
{{--                                <h3 class="text-dark" spellcheck="false">Excelent courses. You guys are the best!</h3>--}}
{{--                                <p class="my-4">--}}
{{--                                    <i>"Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone.--}}
{{--                                        This is the way to success."</i>--}}
{{--                                </p>--}}
{{--                                <div class="author align-items-center">--}}
{{--                                    <div class="avatar shadow bg-gradient-dark">--}}
{{--                                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/white-logos/logo-spotify-white.svg">--}}
{{--                                    </div>--}}
{{--                                    <div class="name ps-2">--}}
{{--                                        <span>Mathew Glock</span>--}}
{{--                                        <div>--}}
{{--                                            <small>Marketing Manager - Slack</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="w-25 ms-auto opacity-2 mt-n9">--}}
{{--                                    <svg class="opacity-3" width="110px" height="110px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
{{--                                        <title>quote-down</title>--}}
{{--                                        <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                            <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" id="quote-up" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-md-5 p-5 ms-lg-auto">--}}
{{--                                <div class="p-3">--}}
{{--                                    <img class="w-100 border-radius-md shadow" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/ivana.jpg" alt="First slide">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-5 me-lg-auto">--}}
{{--                                <p class="text-sm font-weight-bold mb-1">- Customer Story</p>--}}
{{--                                <h3 class="text-dark">Awesome services! Fast and secure.</h3>--}}
{{--                                <p class="my-4">--}}
{{--                                    <i>"Wealth creation is an evolutionarily recent positive-sum game.--}}
{{--                                        Status is an old zero-sum game. Those attacking wealth creation--}}
{{--                                        are often just seeking status."</i>--}}
{{--                                </p>--}}
{{--                                <div class="author align-items-center">--}}
{{--                                    <div class="avatar shadow bg-gradient-dark">--}}
{{--                                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/white-logos/logo-google-white.svg">--}}
{{--                                    </div>--}}
{{--                                    <div class="name ps-2">--}}
{{--                                        <span>Ivana Gerge</span>--}}
{{--                                        <div>--}}
{{--                                            <small>CFO - Google</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="w-25 ms-auto opacity-2 mt-n9">--}}
{{--                                    <svg class="opacity-3" width="110px" height="110px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
{{--                                        <title>quote-down</title>--}}
{{--                                        <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                            <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" id="quote-up" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev text-dark" href="#carousel-testimonials" role="button" data-bs-slide="prev">--}}
{{--                <i class="fas fa-chevron-left" aria-hidden="true"></i>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next text-dark" href="#carousel-testimonials" role="button" data-bs-slide="next">--}}
{{--                <i class="fas fa-chevron-right" aria-hidden="true"></i>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </section>--}}
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-4">جستجو</h2>
                </div>
            </div>
            <div class="row mt-4">

                    <form class="mb-5 d-flex flex-column flex-lg-row gap-2 w-lg-50 mx-auto">
                        <input type="text" class="form-control form-control-lg" placeholder="نام درس یا دوره آموزشی...">
                        <button class="btn btn-primary w-100 w-lg-20 mb-0" type="button">
                            جستجو
                        </button>
                    </form>
            </div>
        </div>
    </div>
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
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
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
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
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
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    چگونه برای یک استاد ثبت بازخورد کنم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFifth">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                    چگونه میتوانم به عنوان یک استاد درس ارائه دهم؟
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8">
                                   لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
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
                    <h5 class="text-white">به روز باشید</h5>
                    <p class="mb-5 text-white">
                        با عضویت در خبرنامه‌ی {{ env('APP_NAME') }} آخرین اخبار، دوره های آموزشی، درس ها و پیشنهادات ویژه را در ایمیل خود دریافت کنید.
                    </p>
                    <div class="row">
                        <div class="col-sm-8 pe-sm-0 mb-sm-0 mb-2">
                            <div class="input-group">
                                <span class="input-group-text border-end-0"><i class="ni ni-email-83"></i></span>
                                <input class="form-control" placeholder="ایمیل خود را وارد کنید..." type="email">
                            </div>
                        </div>
                        <div class="col-sm-4 ps-sm-0">
                            <button type="button" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">عضویت در خبرنامه</button>
                        </div>
                    </div>
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
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-github" aria-hidden="true"></span>
                    </a>
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
