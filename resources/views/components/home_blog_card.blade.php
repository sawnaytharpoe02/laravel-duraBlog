@props(['blog','condition'])
<div
  class="blog flex flex-col lg:flex-row lg:h-[90vh] {{ !$condition ? 'flex-row-reverse bg-darkSteelBlue text-white' : 'text-darkSteelBlue' }}">
  <!-- blog img -->
  <div class="blog-img lg:basis-1/2" data-aos="zoom-in-up" data-aos-duration="600">
    <img class="w-full h-[500px] lg:w-full lg:h-full object-cover"
      src="{{$blog->thumbnail ? asset('storage/'.$blog->thumbnail) : 'https://img.freepik.com/free-vector/wall-post-concept-illustration_114360-1022.jpg?t=st=1716792888~exp=1716796488~hmac=2c5de35359ba34083a7dabbfdab65fc75b70a79edd94f7b58cc0956d86d840d2&w=740'}}"
      alt="blog image" />
  </div>
  <!-- blog content -->
  <div class="flex flex-col justify-center h-[350px] md:h-[500px] lg:basis-1/2 lg:h-full" data-aos="zoom-in-up"
    data-aos-delay="200">
    <div class="blog-content pl-4 md:pl-12">
      <div class="text-lightBlue font-semibold text-sm">
        <i class="bx bx-calendar"></i>
        <span>{{$blog->created_at->format("F j, Y, g:i a")}}</span>
        <span class="bg-gray-100 text-darkSteelBlue text-sm font-medium ml-2 px-2.5 py-0.5 rounded"><a
            href="/blogs/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></span>
      </div>
      <h2 class="text-2xl md:text-5xl leading-snug my-4 font-extrabold"><a
          href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h2>
      <div class="w-fit flex items-center justify-between space-x-4">
        <img class="w-[50px] h-[50px] md:w-[70px] md:h-[70px] rounded-full" src="{{$blog->author->avatar}}" alt="" />
        <div class="space-y-2">
          <p class="font-semibold">{{$blog->author->name}}</p>
          <p class="text-lightBlue text-uppercase text-sm">CEO, SOFTWARE ENGINEER</p>
        </div>
      </div>
    </div>
  </div>
</div>