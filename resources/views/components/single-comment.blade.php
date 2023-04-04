@props(['comment'])
<div class="flex gap-x-6 shadow rounded-lg p-5 mb-8">
  <img src="{{$comment->author->avatar}}" class="w-14 h-14 rounded-full" alt="">
  <div class="flex flex-col gap-4">
    <h5 class="font-semibold">{{$comment->author->name}}</h5>
    <p class="text-thickBlue text-sm uppercase">{{$comment->created_at->format("F j, Y, g:i a")}}</p>
    <p class="leading-loose">{{$comment->body}}</p>
    {{--<button class="bg-thickBlue text-white text-xs font-medium py-1.5 px-2 rounded w-fit tracking-widest">REPLY</button>--}}
  </div>
</div>