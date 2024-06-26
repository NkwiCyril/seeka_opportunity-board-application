<!-- loop through all opportunities and display accordingly -->
<div>

  @if ($opps->count() == 0)
  <h1 class=" font-bold">No Published Opportunities at the moment!</h1>

  @else
  @foreach ($opps as $oop)

  <div class="max-w-xl mx-auto bg-white mb-2 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex h-fit gap-2">
      <div class="md:shrink-0 flex items-start justify-center p-2">
        <img class=" size-16 rounded-full object-cover " src="{{$oop['image_url']}}">
      </div>
      <div>
        <div class="uppercase font-semibold">
          <!-- category badge according to category of the oop -->
          @if ($oop['category_id'] === 1)
          <span class="inline-flex items-center rounded-md bg-green-50 mt-2 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Job</span>
          @elseif ($oop['category_id'] === 2)
          <span class="inline-flex items-center rounded-md bg-blue-50 mt-2 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Internship</span>
          @elseif ($oop['category_id'] === 3)
          <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 mt-2  py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Volunteer</span>
          @endif
        </div>
        <a href="{{route('opportunities.show', $oop['id'])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:no-underline hover:text-customColor">{{$oop->title}}</a>
        <p class="mt-2 text-slate-500">

          <!-- php script to trim the description if very long to conserve space -->
          <!-- rest of the content will be shown in the view_oop page -->
          @php
          $desc = $oop['description'];
          if (($desc) > 100) {
          $desc = substr($desc, 0, 100). '...';
          }
          @endphp
          
          {{$desc}}

        </p>

        <!-- buttons displayed in seeker view only -->
        <button class="my-2">
          <a href="{{route('applications.create', $oop['id'])}}" target="_blank" class="flex gap-1 items-center justify-center px-2 py-1 text-xs font-semibold  text-white bg-customColor ring-1 ring-inset ring-customColor hover:no-underline hover:bg-customColorDark">
            Apply
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>

          </a>
        </button>
        <button class="my-2">
          <a href="{{route('opportunities.show', $oop['id'])}}" class="flex gap-1 items-center justify-center px-2 py-1 text-xs font-semibold  text-white bg-customColor ring-1 ring-inset ring-customColor hover:no-underline hover:bg-customColorDark">
            View
          </a>
        </button>

        <p class="text-[13px] text-gray-500 font-medium pb-2">
          Published {{Carbon\Carbon::parse($oop->published_at)->diffForHumans()}} by 
          <span class="font-bold">{{$oop->user->name}}</span> 
        </p>
        

      </div>
    </div>
  </div>
  @endforeach

  @endif

</div>
