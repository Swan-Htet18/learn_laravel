<x-layout>
    <x-setting heading="Publish New Post">
        <form method="post" action="/admin/posts" class="border border-gray-200 p-6 rounded-xl "
            enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />


            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />



            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @php
                    $categories = App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                    <option {{ old('category_id')==$category->id ? 'selected' : '' }} value="{{ $category->id }}">{{
                        ucwords($category->name)}}</option>
                    @endforeach

                </select>

                @error('category')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-form.button>Submit</x-form.button>
        </form>
    </x-setting>
</x-layout>