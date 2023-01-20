<x-layout>
    <x-setting :heading="'Edit Post : ' . $post->title">
        <form method="post" action="/admin/posts/{{ $post->id }}" class="border border-gray-200 p-6 rounded-xl "
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title',$post->title)" />
            <x-form.input name="slug" :value="old('slug',$post->slug)" />
            <div class=" flex gap-6 justify-between">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)" />
                </div>

                <img src="{{ asset('storage/'. $post->thumbnail) }}" alt="" class="rounded-xl w-32" />
            </div>


            <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>




            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @php
                    $categories = App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                    <option {{ old('category_id', $post->category_id)==$category->id ? 'selected' : '' }} value="{{
                        $category->id }}">{{
                        ucwords($category->name)}}</option>
                    @endforeach

                </select>

                @error('category')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>