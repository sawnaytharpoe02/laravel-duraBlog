@props(['blogs'])
<section>
  <!-- .breadcrumb-sec -->
  <div class="breadcrumb-sec flex-col-center gap-2 py-10 md:py-20">
    <h3 class="text-5xl font-semibold text-darkSteelBlue">Our Blog</h3>
    <div class="breadcrumb mt-4">
      <ol class="flex">
        <li class="text-gray-400"><a href="/" class="flex-row-center hover:text-lightBlue">HOME <i class="bx bxs-chevron-right"></i></a></li>
        <li class="text-gray-400 flex-row-center">BLOG <i class="bx bxs-chevron-right"></i></li>
      </ol>
    </div> 
  </div>
  <!-- search form -->
  <main class="our-article px-12 text-center">
    <x-category-dropdown />
    <form action="">   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </div>
          @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
          @endif
          @if (request('username'))
            <input type="hidden" name="username" value="{{request('username')}}">
          @endif
          <input type="search" name="search" value="{{request('search')}}" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-thickBlue focus:border-thickBlue" placeholder="Search Frontend, DevOps, Backend, ..." required>
          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-thickBlue hover:bg-thickBlue focus:ring-4 focus:outline-none focus:ring-steelBlue font-medium rounded-lg text-sm px-4 py-2">Search</button>
      </div>
    </form>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-20 text-left mt-12">
      @forelse ($blogs as $blog)
        <x-blog-card :blog="$blog"/>
      @empty
        <p class="text-3xl font-bold text-darkSteelBlue col-span-full text-center">No Blogs Found ...</p>
      @endforelse
    </div>
    <nav aria-label="Page navigation" class="my-32">
      {{$blogs->links()}}
    </nav>
    <!-- pagination -->
  </main>
  <!-- .our-articles -->
</section>