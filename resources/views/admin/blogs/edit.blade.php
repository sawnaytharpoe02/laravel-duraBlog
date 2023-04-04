<x-admin-layout>
    <form enctype="multipart/form-data" action="/admin/blogs/{{$blog->slug}}/update" method="POST"
        class="sign-form-gps grid grid-cols-1 gap-8">
        @csrf
        @method('patch')
        <div class="space-y-5">
            <h3 class="text-2xl font-semibold text-darkSteelBlue">Edit your blog article</h3>
        </div>
        <x-form.input name="title" value="{{$blog->title}}" />
        <x-form.input name="slug" value="{{$blog->slug}}" />
        <x-form.input name="intro" value="{{$blog->intro}}" />
        <x-form.textarea name="body" value="{{$blog->body}}" />
        <x-form.input name="thumbnail" type="file" />
        <img src="/storage/{{$blog->thumbnail}}" class="w-[200px] h-[100px]" alt="">

        <x-form.input-wrapper>
            <x-form.label name="category" />
            <select name="category_id" id="category" class="p-3 focus:ring-0 focus:border-transparent">
                @foreach ($categories as $category)
                <option {{$category->id == old('category_id', $blog->category->id) ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <x-error name="category_id" />
        </x-form.input-wrapper>

        <button type="submit" class="py-3 rounded-lg bg-gray-900 text-white cursor-pointer">Edit</button>
    </form>
</x-admin-layout>