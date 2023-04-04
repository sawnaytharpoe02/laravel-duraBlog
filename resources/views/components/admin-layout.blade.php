<x-layout>
  <main class="px-5 md:px-40 my-20">
    <div class="flex flex-col lg:flex-row gap-8">
      <div class="left-blk basis-2/12">
        <div class="w-48 text-gray-900 bg-white border border-gray-200 rounded-lg">
          <button type="button" class="relative inline-flex items-center w-full p-4 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-lightBlue focus:z-10 focus:ring-2 focus:ring-lightBlue focus:text-lightBlue ">
              <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
              <a href="/admin/blogs">Dashboard</a>
          </button>
          <button type="button" class="relative inline-flex items-center w-full p-4 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-lightBlue focus:z-10 focus:ring-2 focus:ring-lightBlue focus:text-lightBlue ">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path>
              </svg>
              <a href="/admin/blogs/create">Create Blog</a>
          </button>
        </div>
      </div>
      <div class="right-blk basis-10/12">
        {{$slot}}
      </div>
    </div>
  </main>
</x-layout>