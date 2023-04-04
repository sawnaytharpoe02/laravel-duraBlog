<x-admin-layout>
  <div class="mb-8">
    <h3 class="text-2xl font-semibold text-darkSteelBlue">All Blogs</h3>
  </div>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
      <thead class="text-xs text-white uppercase bg-darkSteelBlue">
        <tr>
          <th scope="col" class="px-6 py-5">
            Title
          </th>
          <th scope="col" class="px-6 py-5">
            Intro
          </th>
          <th scope="col" class="px-6 py-5" colspan="2">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blogs as $blog)
        <tr class="bg-white border-b">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900">
            <a href="/blogs/{{$blog->slug}}"
              class="underline underline-offset-2 decoration-lightBlue">{{$blog->title}}</a>
          </th>
          <td class="px-6 py-4">
            {{$blog->intro}}
          </td>
          <td class="px-6 py-4">
            <form action="/admin/blogs/{{$blog->slug}}/edit">
              @csrf
              @method('')
              <button type="submit"
                class="font-medium text-thickBlue hover:underline hover:text-yellow-400">Edit</button>
            </form>
          </td>
          <td class="px-6 py-4">
            <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit"
                class="font-medium text-thickBlue hover:underline hover:text-red-600">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="mt-8">
    {{$blogs->links()}}
  </div>
</x-admin-layout>