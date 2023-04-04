<section>
  <div class="flex-col-center gap-4 py-5 md:py-20">
    <h3 class="text-3xl font-bold text-darkSteelBlue">Blogs You May Like</h3>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-20 text-left mt-12">
      @foreach ($randomBlogs as $blog)
        <x-blog-card :blog="$blog"/>
      @endforeach
    </div>
  </div>
</section>