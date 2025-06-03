<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="{{url('/img/unwahas.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('/img/unwahas.png')}}" type="image/png">
    <link rel="stylesheet" href="{{url('/template')}}/assets/compiled/css/app.css">
    <link rel="stylesheet" href="{{url('/template')}}/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="{{url('/')}}/template/assets/extensions/choices.js/public/assets/styles/choices.css">
    <link rel="stylesheet" href="{{url('/template')}}/assets/extensions/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/assets/extensions/toastify-js/src/toastify.css">
    <style>
        .loading-bar {
            display: none;
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
    @yield('css')
</head>

<body>
    <script src="{{url('/template')}}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div class="loading-bar align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{url('/img/logo.png')}}" alt="SITAK" style="width: 130px;height:auto"></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar navbar-fixed'>
            <header>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4'></i>
                                        <span class="badge badge-notification bg-danger">7</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end notification-dropdown" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-header">
                                            <h6>Notifications</h6>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-primary">
                                                    <i class="bi bi-cart-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Title</p>
                                                    <p class="notification-subtitle font-thin text-sm">Description</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-success">
                                                    <i class="bi bi-file-earmark-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Title</p>
                                                    <p class="notification-subtitle font-thin text-sm">Description</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="text-center py-2 mb-0"><a href="#">See all
                                                    notification</a></p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3 d-none d-md-block">
                                            <h6 class="mb-0 text-gray-600">{{'email'}}</h6>
                                            <p class="mb-0 text-sm text-gray-600">@if('mahasiswa'){{'nim'}}@else{{'role'}}@endif</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{url('/template')}}/assets/compiled/jpg/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Halo, @if('mahasiswa'){{'nim'}}@else{{'name'}}@endif</h6>
                                    </li>
                                    @if('mahasiswa')
                                    @if('nim')
                                    @if(1 > 1)
                                    <li><a class="dropdown-item" href="#" id="btn-change-nim"><i class="icon-mid bi bi-person-badge-fill me-2"></i> Ganti NIM</a></li>
                                    @endif
                                    @endif
                                    @endif
                                    @if (1 > 1)
                                    @if ('role')
                                    <li><a class="dropdown-item" href="#" id="btn-change-role"><i class="icon-mid bi bi-person-badge-fill me-2"></i> Ganti Role</a></li>
                                    @endif
                                    @endif
                                    <li><a class="dropdown-item" href="{{url('/oauth2/logout')}}"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>{{date('Y')}} &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{url('/template')}}/assets/static/js/components/dark.js"></script>
    <script src="{{url('/template')}}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{url('/template')}}/assets/compiled/js/app.js"></script>
    <script src="{{url('/template')}}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/template/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{url('/template')}}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{url('/')}}/template/assets/extensions/toastify-js/src/toastify.js"></script>
    @include('footer')
    <script>
        $(document).ajaxStart(function() {
            $('.loading-bar').css('display', 'flex');
        })
        $(document).on('ajaxStop ajaxError', function() {
            $('.loading-bar').hide();
        })

        $(function() {
            //inisiasi choice untuk filter dan input
            let choices = document.querySelectorAll(".choice")
            let initChoice
            for (let i = 0; i < choices.length; i++) {
                initChoice = new Choices(choices[i], {
                    allowHTML: false,
                    shouldSort: false,
                    position: 'bottom'
                })
            }

            // script untuk menentukan sidebar aktif atau tidak
            const sidebar = $('.sidebar-item');
            $.each(sidebar, function(i, j) {
                if (j.className == 'sidebar-item') {
                    if (j.innerText == menu) {
                        $(this).attr('class', 'sidebar-item active');
                    }
                } else {
                    if (j.innerText.split('\n')[0] == menu) {
                        $(this).attr('class', 'sidebar-item active has-sub');
                        const ul = $(this).children()[1];
                        ul.className = 'submenu active submenu-open';
                        $.each(ul.children, function(k, l) {
                            if (l.className == 'submenu-item has-sub') {
                                if (l.innerText.split('\n')[0] == submenu) {
                                    l.className = 'submenu-item active has-sub';
                                    const ul2 = l.children[1];
                                    ul2.className = 'submenu submenu-level-2 submenu-open';
                                    $.each(ul2.children, function(m, n) {
                                        if (n.innerText == subsubmenu) {
                                            n.className = 'submenu-item active';
                                        }
                                    })
                                }
                            } else {
                                if (l.innerText == submenu) {
                                    $(this).attr('class', 'submenu-item active');
                                }
                            }
                        })
                    }
                }
            })
        })
    </script>
    @if('mahasiswa')
    @if('nim')
    @if(1 > 1)
    <script>
        $(function() {
            $('#btn-change-nim').click(function() {
                Swal.fire({
                    title: 'Yakin?',
                    text: "Anda akan diarahkan ke halaman Pilih NIM",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `{{url("/")}}/mid/nim`,
                            type: 'DELETE',
                            data: {
                                _token: '{{csrf_token()}}',
                            },
                            success: function(data) {
                                if (data == "sukses") {
                                    Swal.fire({
                                        icon: 'info',
                                        title: 'Sukses',
                                        text: 'Anda akan diarahkan dalam 2 detik',
                                        timer: 2000
                                    })
                                    setTimeout(function() {
                                        window.location.replace(`{{url('/mid/nim')}}`)
                                    }, 2000);
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: JSON.stringify(data)
                                    })
                                }
                            },
                        });
                    }
                })
            })
        })
    </script>
    @endif
    @endif
    @endif

    <!-- middleware role -->
    @if (1 > 1)
    @if ('role')
    <script>
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            $('#btn-change-role').click(function() {
                Swal.fire({
                    title: 'Yakin?',
                    text: "Anda akan diarahkan ke halaman Pilih Role",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `{{url('/')}}/middleware/role`,
                            type: 'DELETE',
                            data: {
                                _token: '{{csrf_token()}}',
                            },
                            success: function(data) {
                                if (data == "sukses") {
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Anda akan diarahkan dalam 1 detik'
                                    })
                                    setTimeout(function() {
                                        window.location.replace(
                                            `{{url('/middleware/role')}}`
                                        )
                                    }, 1000);
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: JSON.stringify(data)
                                    })
                                }
                            },
                        });
                    }
                })
            })
        })
    </script>
    @endif
    @endif
    @yield('js')
</body>

</html>