@props(['blog'])
<form action="/blogs/{{$blog->slug}}/comments" method="POST">
  @csrf
  <label for="message" class="block mb-5 text-2xl font-semibold text-gray-900">Leave a comment</label>
  <textarea id="message" name="body" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-thickBlue focus:border-thickBlue" placeholder="Write your thoughts here..." required></textarea>
  <x-error name="body" />
  <button type="submit" class="inline-flex items-center my-6 px-5 py-2.5 text-sm font-medium text-center text-white bg-thickBlue rounded-lg focus:ring-4 focus:ring-blue-200">
    Post Comment
  </button>
</form>