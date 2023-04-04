@props(['blogs'])
<section id="home-blogs-section">
  <div class="my-12 mx-7">
    @foreach($blogs as $blog)
      @if ($loop->index == 5)
      @break   
      @else
        <x-home_blog_card :blog="$blog" :condition="$loop->index % 2 == 0"/>   
      @endif
    @endforeach
  </div>
  <div class="flex items-center w-fit mx-auto my-20"><a href="/blogs" class="text-2xl text-steelBlue font-medium">View All Articles</a> <i class="bx bx-chevron-right text-[50px] text-steelBlue"></i></div>
</section>