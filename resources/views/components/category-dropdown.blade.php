<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="mb-6 text-white bg-thickBlue focus:ring-2 focus:ring-gray-300 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
    {{isset($currentCategory) ? $currentCategory->name : ' Filter By Category '}}
     <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
</button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
    <li>
      <a href="/blogs" class="block px-4 py-2 hover:bg-gray-100">All</a>
    </li>
      @foreach ($categories as $category)
        <li>
          <a href="/blogs/?category={{$category->slug}}{{request('search')?'&search='.request('search') : ''}}{{request('username')?'&username='.request('username') : ''}}" class="block px-4 py-2 hover:bg-gray-100">{{$category->name}}</a>
        </li>
      @endforeach
    </ul>
</div>