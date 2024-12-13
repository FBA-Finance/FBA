<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- ========== HEADER ========== -->
        <header class="z-50 flex flex-wrap w-full bg-black md:justify-start md:flex-nowrap py-7">
            <nav class="relative flex flex-wrap items-center w-full px-4 mx-auto max-w-7xl md:grid md:grid-cols-12 basis-full md:px-6">
            <div class="md:col-span-3">
                <!-- Logo -->
                <img src="{{url('/images/fba-logo.png')}}" alt="fba logo" class="w-40">
                <!-- End Logo -->
            </div>
        
            <!-- Button Group -->
            <div class="flex items-center py-1 gap-x-1 md:gap-x-2 ms-auto md:ps-6 md:order-3 md:col-span-3">
                @guest
                <a href="/register" style="background-color: #3D51F4" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white transition border border-transparent gap-x-2 rounded-xl bg-lime-400 hover:bg-lime-500 focus:outline-none focus:bg-lime-500 disabled:opacity-50 disabled:pointer-events-none">
                    Get Started
                </a>
                @endguest
                @auth
                <a href="/dashboard" style="background-color: #3D51F4" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white transition border border-transparent gap-x-2 rounded-xl bg-lime-400 hover:bg-lime-500 focus:outline-none focus:bg-lime-500 disabled:opacity-50 disabled:pointer-events-none">
                    Dashboard
                </a>
                @endauth
        
                <div class="md:hidden">
                <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hidden hs-collapse-open:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
                </div>
            </div>
            <!-- End Button Group -->
        
            <!-- Collapse -->
            <div id="hs-navbar-hcail" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
                <div class="flex flex-col mt-5 gap-y-4 gap-x-0 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">    
                <div>
                    <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">About</a>
                </div>
                <div>
                    <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Features</a>
                </div>
                <div>
                    <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Contact Us</a>
                </div>
                </div>
            </div>
            <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->
        
        <!-- Hero 1 -->
<div class="bg-black rounded-b-3xl">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">
      <!-- Title -->
      <div class="max-w-3xl mx-auto text-center">
        <h1 class="block text-4xl font-medium text-gray-200 sm:text-5xl md:text-6xl lg:text-7xl">
          Building Businesses, One Pool as a Time
        </h1>
      </div>
      <!-- End Title -->
  
      <div class="max-w-3xl mx-auto text-center">
        <p class="text-lg text-white/90">Discover alternative funding solutions tailored for your business needs.
            Save smarter for long-term projects while accessing flexible, cost-effective financing.</p>
      </div>
  
      <!-- Buttons -->
      <div class="text-center">
        <a class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-center text-white border border-transparent rounded-full shadow-lg gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 shadow-transparent hover:shadow-blue-700/50 focus:outline-none focus:shadow-blue-700/50" href="/login">
          Start Building Today
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
      </div>
      <!-- End Buttons -->
    </div>
    <div>
        <img src="{{url('/images/globe.png')}}" alt="globe" class="w-full h-auto">
    </div>
  </div>
  <!-- End Hero 1 -->
  


  <!-- Hero 2 -->
<div style="background-color: #fcecec;">
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 " style="background-color: #fcecec">
    <!-- Grid -->
    <div class="grid gap-4 pt-40 md:grid-cols-2 md:gap-8 xl:gap-20 md:items-center">
      <div>
        <p class="font-bold" style="color: #172677">WHO ARE WE?</p>
        <h1 class="block text-3xl font-bold sm:text-4xl lg:text-6xl lg:leading-tight" style="color: #172672">We are FBA Finance!</span></h1>
        <p class="mt-3 text-lg text-black dark:text-black">At FBA Finance, our mission is to <span class="italic font-bold" style="color: #3D51F4">revolutionize</span> the way businesses access funding. We believe that every entrepreneur <span class="italic font-bold" style="color: #3D51F4">deserves a chance to thrive</span>, and we're dedicated to providing innovative, accessible, and collaborative funding solutions that empower businesses to <span class="italic font-bold" style="color: #3D51F4">achieve their full potential</span></p>
  
        <!-- Buttons -->
        <div class="grid w-full gap-3 mt-7 sm:inline-flex">
          <a class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Learn More
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
        </div>
        <!-- End Buttons -->
      </div>
      <!-- End Col -->
  
      <div class="relative ms-4">
        <img class="w-full rounded-md" src="{{url('/images/frame.png')}}" alt="Hero Image">
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->



<div class="pb-24 mt-40">
        <!-- Title -->
  <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
    <h2 class="text-3xl font-bold md:text-4xl md:leading-tight" style="color: #172672">Why Choose FBA Finance ?</h2>
    <p class="mt-1 text-black">Why Choose FBA Finance?
        Unlock growth opportunities, amplify your impact, and connect with a supportive network
    </p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
    <!-- Card -->
    <a class="flex flex-col h-full p-5 transition duration-300 bg-white group hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40" href="#">
      <div>
        <img src="{{url('/images/icons/md-library.png')}}" alt="house" class="h-auto pb-8 w-30">
      </div>
      <div class="my-6">
        <h2 class="text-3xl font-medium text-gray-800 dark:text-neutral-300 dark:group-hover:text-white" style="color: #172672">
          Access to flexible funding
        </h2>
        <p class="mt-5 text-black">
            Access capital without traditional banking hurdles.
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="flex flex-col h-full p-5 transition duration-300 bg-white hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40" href="#">
        <div>
            <img src="{{url('/images/icons/user-group.png')}}" alt="house" class="h-auto pb-8 w-30">
          </div>
      <div class="my-6">
        <h2 class="text-3xl font-medium text-black dark:group-hover:text-white" style="color: #172672">
          Collaborative Community
        </h2>
        <p class="mt-5 text-black">
            Leverage the power of community funding through our innovative ROSCA model.
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="flex flex-col h-full p-5 transition duration-300 bg-white group hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40" href="#">
        <div>
            <img src="{{url('/images/icons/sparkles.png')}}" alt="house" class="h-auto pb-8 w-30">
          </div>
      <div class="my-6">
        <h3 class="text-3xl font-medium dark:group-hover:text-white" style="color: #172672">
          Tailored Solutions
        </h3>
        <p class="mt-5 text-black">
            Benefit from personalized funding options, designed to meet your unique business needs.
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="flex flex-col h-full p-5 transition duration-300 bg-white group hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40" href="#">
        <div>
            <img src="{{url('/images/icons/scale.png')}}" alt="house" class="h-auto pb-8 w-30">
          </div>
        <div class="my-6">
          <h3 class="text-xl font-semibold dark:group-hover:text-white" style="color: #172672">
            0% Interest Growth Loans
          </h3>
          <p class="mt-5 text-black">
            Empowering SMEs to reach their full potential through affordable funding and collaboration opportunities.
          </p>
        </div>
      </a>
      <!-- End Card -->
  </div>
  <!-- End Grid -->
    </div>    
  </div>
</div>
<!-- End Hero -->
  
  <!-- Begin how it works -->
    <div class="pt-8 bg-black rounded-t-4xl">
      <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
        <h2 class="font-bold text-white text-8xl md:text-4xl md:leading-tight">How It Works?</h2>
        <p class="pt-2 mt-1 text-gray-200">Our platform combines innovative funding with comprehensive business support, addressing the unique challenges faced by SMEs and startups. It's flexible, transparent, and designed for your growth.
        </p>
      </div>
          
      <div class="grid mx-32 gap-x-32 gap-y-14 sm:grid-cols-2 lg:grid-cols-4">
        
        <!-- Card -->
        <div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
          <div class="p-6">
            <div class="flex justify-between">
              <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
              <img src="{{url('/images/icons/Layer_1.png')}}" alt="one">
            </div>
            <div class="my-6">
              <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
                Sign up and create your profile
              </h2>
              <p class="mt-5 text-white ">
                Register on our platform and set up your business profile with essential details. Join a community of like-minded entrepreneurs.
              </p>
            </div>
          </div>
        </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
        <div class="p-6">
          <div class="flex justify-between">
            <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
            <img src="{{url('/images/icons/two.png')}}" alt="one">
          </div>
          <div class="my-6">
            <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
              Contribute to the funding pool
            </h2>
            <p class="mt-5 text-white ">
              Participate in our collaborative funding model by contributing to the pool, supporting other businesses while positioning yours for funding.
            </p>
          </div>
        </div>
      </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
      <div class="p-6">
        <div class="flex justify-between">
          <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
          <img src="{{url('/images/icons/three.png')}}" alt="one">
        </div>
        <div class="my-6">
          <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
            Take turns receiving funds
          </h2>
          <p class="mt-5 text-white ">
            Register on our platform and set up your business profile with essential details. Join a community of like-minded entrepreneurs.
          </p>
        </div>
      </div>
    </div>
  <!-- End Card -->

  <!-- Card -->
  <div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
    <div class="p-6">
      <div class="flex justify-between">
        <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
        <img src="{{url('/images/icons/four.png')}}" alt="one">
      </div>
      <div class="my-6">
        <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
          Implement growth strategies
        </h2>
        <p class="mt-5 text-white ">
          Register on our platform and set up your business profile with essential details. Join a community of like-minded entrepreneurs.
        </p>
      </div>
    </div>
  </div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
  <div class="p-6">
    <div class="flex justify-between">
      <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
      <img src="{{url('/images/icons/five.png')}}" alt="one">
    </div>
    <div class="my-6">
      <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
        Build credit and credibility
      </h2>
      <p class="mt-5 text-white ">
        Participate in our collaborative funding model by contributing to the pool, supporting other businesses while positioning yours for funding.
      </p>
    </div>
  </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
  <div class="p-6">
    <div class="flex justify-between">
      <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
      <img src="{{url('/images/icons/six.png')}}" alt="one">
    </div>
    <div class="my-6">
      <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
        Accelerate tech integration
      </h2>
      <p class="mt-5 text-white ">
        Register on our platform and set up your business profile with essential details. Join a community of like-minded entrepreneurs.
      </p>
    </div>
  </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
  <div class="p-6">
    <div class="flex justify-between">
      <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
      <img src="{{url('/images/icons/seven.png')}}" alt="one">
    </div>
    <div class="my-6">
      <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
        Grow without losing ownership
      </h2>
      <p class="mt-5 text-white ">
        Access personalized mentorship, financial advice, and operational strategies tailored to your business needs.
      </p>
    </div>
  </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col h-full px-2 py-6 transition duration-300 border border-gray-500 w-72 rounded-3xl hover:border-indigo-600 hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg" href="#">
  <div class="p-6">
    <div class="flex justify-between">
      <img src="{{url('/images/icons/black-user.png')}}" alt="house" class="h-auto pb-8 w-30">
      <img src="{{url('/images/icons/eight.png')}}" alt="one">
    </div>
    <div class="my-6">
      <h2 class="text-3xl font-medium text-white dark:text-neutral-300 dark:group-hover:text-white">
        Sign up and create your profile
      </h2>
      <p class="mt-5 text-white ">
        Register on our platform and set up your business profile with essential details. Join a community of like-minded entrepreneurs.
      </p>
    </div>
  </div>
</div>
<!-- End Card -->
  
      </div>
    </div>
  <!-- End how it works -->
</body>
</html>