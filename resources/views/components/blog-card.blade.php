<article data-aos="zoom-in" data-aos-duration="1000">
  <div class="w-full h-[400px]">
    <img
      src="{{$blog->thumbnail ? asset('storage/'.$blog->thumbnail) : 'https://img.freepik.com/free-vector/wall-post-concept-illustration_114360-1022.jpg?t=st=1716792888~exp=1716796488~hmac=2c5de35359ba34083a7dabbfdab65fc75b70a79edd94f7b58cc0956d86d840d2&w=740'}}"
      class="w-full h-full object-cover" alt="">
  </div>
  <div class="text-lightBlue font-normal text-sm mt-6">
    <i class="bx bx-calendar"></i>
    <span>{{$blog->created_at->format("F j, Y, g:i a")}}</span>
    <span class="bg-gray-100 text-darkSteelBlue text-sm font-medium ml-2 px-2.5 py-0.5 rounded"><a
        href="/blogs/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></span>
  </div>
  <div class="w-5/6">
    <h3 class="text-3xl leading-snug my-4 font-semibold text-darkSteelBlue"><a
        href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h3>
  </div>
  <div class="w-fit flex items-center justify-between space-x-4">
    <img class="w-[60px] h-[60px] rounded-full" src="{{$blog->author->avatar}}" alt="" />
    <div class="space-y-2">
      <p class="text-darkSteelBlue font-semibold"><a
          href="/blogs/?username={{$blog->author->username}}">{{$blog->author->name}}</a></p>
      <p class="text-lightBlue text-uppercase text-sm">CEO, SOFTWARE ENGINEER</p>
    </div>
  </div>
</article>