<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134163690-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-134163690-1');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amarendra Sharma - Web Developer(Laravel and Vue Js) </title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<meta name="description"
    content="A software developer from India with 3 years of experience in crafting things on the web using Laravel and Vue.js." />
<meta name="theme-color" content="#C0C0C0">
<link rel="canonical" href="https://amarendra.dev/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Amarendra Sharma - Crafting web application with Laravel and Vue.js." />
<meta property="og:description"
    content="A software developer from India with 3 years of experience in crafting things on the web using Laravel and Vue.js." />
<meta property="og:url" content="https://amarendra.dev" />
<meta property="og:site_name" content="Amarendra Sharma - Crafting web application with Laravel and Vue.js." />
<meta property="og:image"
    content="https://res.cloudinary.com/amardeveloper/image/upload/v1593255382/amarendrasharma_vzda0h.jpg" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description"
    content="A software developer from India with 3 years of experience in crafting things on the web using Laravel and Vue.js." />
<meta name="twitter:title" content="Amarendra Sharma - Crafting web application with Laravel and Vue.js." />
<meta name="twitter:site" content="@developer_amar" />
<meta name="twitter:creator" content="@developer_amar" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
@yield('stylesection')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div id="app">
        <div class="px-4 md:px-16 py-4 border-t-2 md:border-t-4 border-blue-500">
            <div class="container mx-auto md:w-9/12">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold">Amarendra Sharma</h1>
                    <div class="mb-3">
                        <a href="/"
                            class="no-underline mr-4 font-semibold {{ (\Route::currentRouteName() == 'home') ? 'text-black underline':'text-gray-500'}}">Home</a>
                        <a href="/resume"
                            class="mr-4 font-semibold  no-underline hover:text-black {{ (\Route::currentRouteName() == 'resume') ? 'text-black underline':'text-gray-500'}}">Resume</a>
                        <a href="/contact" class="mr-4 font-semibold no-underline hover:text-black text-black ">Contacts
                        </a>
                        {{-- <a
                            class=" font-semibold no-underline hover:text-black {{ (\Route::currentRouteName() == 'links') ? 'text-black underline':'text-gray-500'}}">Links</a>
                        --}}
                    </div>
                </div>
            </div>
            <div class="container mx-auto  md:w-9/12">
                <div class="tracking-tight md:flex md:flex-col-reverse">
                    <contact-component></contact-component>
                </div>
            </div>
            <div class="container mx-auto md:w-9/12">
                <a href="https://github.com/amarendrasharma">
                    <i class='bx bxl-github mx-2 text-2xl'></i></a>
                <a href="https://www.linkedin.com/in/amarendra-sharma/"> <i
                        class='bx bxl-linkedin-square mx-2 text-2xl'></i></a>
                <a href="https://www.instagram.com/amar_developer/"> <i class='bx bxl-instagram mx-2 text-2xl'></i></a>
                <a href="https://twitter.com/developer_amar"> <i class='bx bxl-twitter mx-2 text-2xl'></i></a>
            </div>
        </div>

    </div>
</body>

</html>