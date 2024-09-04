<div>
  <!-- Hero section -->
  <div class="bg-slate-950">
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto py-32 sm:py-0 lg:py-0">
          <video autoplay controls loop
              class="z-50"> 
              <source src= 
              "/video/trailer.mp4"
                  type="video/mp4"/> 
          </video> 
      </div>
    </div>
  </div>

  <!-- Card section -->
  <div class="bg-slate-950">
    <div class="relative isolate px-6 pt-0 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto py-0 sm:py-0 lg:py-0">

      
      <!-- Content -->
      <div class="mx-auto max-w-2xl px-4 py-0 sm:px-6  sm:py-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-100">Popular Movies</h2>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach($responseData['results'] as $data)
            <div class="group relative">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ $imagepath.$data['poster_path'] }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
              </div>
              <div class="mt-4 flex justify-between">
                <div>
                  <h3 class="text-sm text-gray-50">
                    <a href="#">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      {{ $data['original_title'] }}
                    </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">{{ round($data['vote_average'],1) }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$35</p>
              </div>
            </div>
            <!-- More products... -->
            @endforeach
          </div>
          <div class="flex justify-center mt-6">
            <button wire:click="nextPage" class="bg-blue-600 text-white px-4 py-2 rounded-md">Load More</button>
        </div>
        </div>
      <!-- End Content -->


    </div>
    </div>
  </div>
</div>



