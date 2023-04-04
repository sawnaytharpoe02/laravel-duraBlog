@props(['blog','condition'])
<div
  class="blog flex flex-row h-[90vh] {{ !$condition ? 'flex-row-reverse bg-darkSteelBlue text-white' : 'text-darkSteelBlue' }}">
  <!-- blog img -->
  <div class="blog-img basis-1/2" data-aos="zoom-in-up" data-aos-duration="600">
    <img class="w-full h-full object-cover" src="storage/{{$blog->thumbnail}}" alt="" />
  </div>
  <!-- blog content -->
  <div class="flex flex-col justify-center basis-1/2" data-aos="zoom-in-up" data-aos-delay="200">
    <div class="blog-content pl-12">
      <div class="text-lightBlue font-semibold text-sm">
        <i class="bx bx-calendar"></i>
        <span>{{$blog->created_at->format("F j, Y, g:i a")}}</span>
        <span class="bg-gray-100 text-darkSteelBlue text-sm font-medium ml-2 px-2.5 py-0.5 rounded"><a
            href="/blogs/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></span>
      </div>
      <h2 class="text-5xl leading-snug my-4 font-extrabold"><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h2>
      <div class="w-fit flex items-center justify-between space-x-4">
        <img class="w-[70px] h-[70px] rounded-full" src="{{$blog->author->avatar}}" alt="" />
        <div class="space-y-2">
          <p class="font-semibold">{{$blog->author->name}}</p>
          <p class="text-lightBlue text-uppercase text-sm">CEO, PRODUCT DESIGNER</p>
        </div>
      </div>
    </div>
  </div>
</div>