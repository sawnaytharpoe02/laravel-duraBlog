<x-layout>
  <section>
    <!-- breadcrumb-sec -->
    <div class="breadcrumb-sec flex-col-center gap-2 py-10 md:py-20">
      <h3 class="text-5xl font-semibold text-darkSteelBlue">Our Blog</h3>
      <div class="breadcrumb mt-4">
        <ol class="flex">
          <li class="text-gray-400"><a href="/" class="flex-row-center hover:text-lightBlue">HOME <i class="bx bxs-chevron-right"></i></a></li>
          <li class="text-gray-400"><a href="/blogs" class="flex-row-center hover:text-lightBlue">BLOG <i class="bx bxs-chevron-right"></i></a></li>
          <li class="text-gray-400 flex-row-center">BLOG DETAILS <i class="bx bxs-chevron-right"></i></li>
        </ol>
      </div> 
    </div>
    
    <main class="detail-page">
      <div class="my-12 mx-7">
        <div class="blog flex flex-row h-[90vh]">
         <!-- blog img -->
         <div class="blog-img basis-1/2" data-aos="zoom-in-up">
           <img class="w-full h-full object-cover" src="/storage/{{$blog->thumbnail}}" alt="" />
         </div>
         <!-- blog content -->
         <div class="flex flex-col justify-center basis-1/2" data-aos="zoom-in-up" data-aos-delay="200">
           <div class="blog-content pl-12">
             <div class="text-lightBlue font-semibold text-sm">
               <i class="bx bx-calendar"></i>
               <span>{{$blog->created_at->diffForHumans()}}</span>
               <span class="bg-gray-100 text-darkSteelBlue text-sm font-medium ml-2 px-2.5 py-0.5 rounded"><a href="/blogs/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></span>
             </div>
             <h1 class="text-5xl leading-snug my-4 font-extrabold text-darkSteelBlue">{{$blog->title}}</h1>
             <div class="w-fit flex items-center justify-between space-x-4">
               <img class="w-[70px] h-[70px] rounded-full" src="https://images.unsplash.com/photo-1548964095-b9a292144866?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGJ1c3NpbmVzcyUyMG1hbnxlbnwwfDJ8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
               <div class="space-y-2">
                 <p class="text-darkSteelBlue font-semibold"><a href="/blogs/?username={{$blog->author->username}}">Author - {{$blog->author->name}}</a></p>
                 <p class="text-lightBlue text-uppercase text-sm">CEO, PRODUCT DESIGNER</p>
               </div>
             </div>
           </div>
         </div> 
        </div>
        <!-- blog body text -->
        <div class="detail-content w-7/12 mx-auto my-16 leading-relaxed text-[17px] tracking-wide text-darkSteelBlue">
          <span class="bg-thickBlue text-gray-100 uppercase text-xs font-medium mr-2 px-4 py-2 rounded">
            <a href="/blogs/?category={{$blog->category->slug}}">{{$blog->category->name}}</a>
          </span>
          <p class="mt-4">{!!$blog->body!!}</p>
          <div class="flex justify-center mt-6">
              <form action="/blogs/{{$blog->slug}}/subscription" method="POST">
                @csrf
                @auth
                  @if (auth()->user()->isSubscribed($blog))
                    <button type="submit" class="inline-flex items-center my-6 px-5 py-2.5 text-sm font-medium text-center text-darkSteelBlue border-2 border-darkSteelBlue rounded-lg focus:ring-4 focus:ring-gray-200">
                      <svg class="w-5 h-5 mr-2 text-darkSteelBlue" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                      Unsubscribe
                    </button>
                  @else
                    <button type="submit" class="inline-flex items-center my-6 px-5 py-2.5 text-sm font-medium text-center text-white bg-darkSteelBlue rounded-lg focus:ring-4 focus:ring-gray-200">
                      <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                      Subscribe
                    </button>  
                  @endif
                @endauth
              </form> 
          </div>
        </div>

        <!-- comment form -->
        <div class="w-7/12 mx-auto my-16">
          @auth
            <x-comment-form :blog="$blog"/>
          @else
          <p class="text-center">Please <a href="/login" class="text-lightBlue underline">login</a> to participate in this discussion.</p>
          @endauth
        </div>
        <!-- comment messages -->
        @if ($blog->comments->count())
          <x-comments :comments="$blog->comments()->latest()->paginate(3)"/> 
        @endif
        <x-blogs_you_may_like :randomBlogs="$randomBlogs"/>
      </div>
    </main>
  </section>
</x-layout>



