<nav id="navbar">
  <div class="px-5 xl:px-52 py-5 h-fit mx-auto flex justify-between items-center">
    <div class="blog text-darkSteelBlue text-2xl font-bold">BLOG</div>
    <div class="flex justify-between items-center">
      <ul id="nav-menu" class="nav-items hidden flex-col flex-wrap md:flex md:flex-row items-center gap-7">
        <li><a href="/" class="nav-item active">Home</a></li>
        <li><a href="/blogs" class="nav-item">Articles</a></li>
        <li><a href="/about" class="nav-item">About</a></li>
        <li><a href="/contact" class="nav-item">Contact</a></li>
        @guest
        <li><a href="/register" class="nav-item">Register</a></li>
        <li><a href="/login"
            class="nav-item hover:text-gray-200 bg-lightBlue focus:ring-2 focus:ring-gray-300 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center">LogIn</a>
        </li>
        @else
        @can('admin')
        <li><a href="/admin/blogs" class="nav-item">Dashboard</a></li>
        @endcan
        <div class="flex items-center space-x-3">
          <li><img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-200" src="{{auth()->user()->avatar}}"
              alt="avatar">
          </li>
          <li class="text-white uppercase md:text-darkSteelBlue md:capitalize"><span>{{auth()->user()->name}}</span>
          </li>
        </div>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit"
            class="nav-item hover:text-gray-200 bg-lightBlue focus:ring-2 focus:ring-gray-300 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center">Logout</button>
        </form>
        @endguest
      </ul>

      <div id="hamburger-menu" class="block md:hidden cursor-pointer">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </div>
    </div>
  </div>
  <div id="menu-bg" class="menu-bg block md:hidden"></div>
</nav>