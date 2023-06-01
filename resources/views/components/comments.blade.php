@props(['comments'])
<div class="w-11/12 md:w-8/12 lg:w-7/12 mx-auto text-darkSteelBlue">
  <h3 class="mb-8 text-2xl text-gray-900 font-semibold">({{$comments->count()}}) Comments</h3>
  @foreach ($comments as $comment)
  <x-single-comment :comment="$comment" />
  @endforeach
  {{$comments->links()}}
</div>
<!-- show comment section end -->