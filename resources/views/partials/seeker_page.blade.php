<body class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between px-6 py-3 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="{{route('pages.home')}}" class="-m-1.5 p-1.5">
          <span class="sr-only">Seeka</span>
          <img class="h-12 w-auto" src="/seeka_logo.png" alt="seeka logo">
        </a>
      </div>
      <!-- <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div> -->
      <div class="{{--hidden--}} gap-2 lg:flex items-center lg:flex-1 lg:justify-end sm:flex">
        <a href="{{route('pages.applications')}}" title="My Applications" class="text-xl font-semibold leading-6 text-gray-900 transition ease-in-out hover:text-[#4ba198]">My Seeks</a>
        @include('partials.profile')
      </div>
    </nav>
  </header>
  <div class="intro text-center prose lg:prose-xl mx-auto mt-20 p-10">
    <h1>all opps will display here for {{Auth::user()->name}}</h1>
  </div>
</body>