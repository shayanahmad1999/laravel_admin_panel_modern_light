@include('layouts.head')
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
@include('layouts.header')

<body class="alt-menu sidebar-noneoverflow">
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


        <!--  BEGIN CONTENT PART  -->

        @include('layouts.navbar')


    </div>
    <!-- END MAIN CONTAINER -->
</body>
@yield('content')
@include('layouts.footer')
