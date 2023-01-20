@props(['name','type' => 'text'])
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
        {{ ucwords($name)}}
    </label>
    <input type="{{ $type }}" {{ $attributes(['value'=> old($name)]) }}
    class="border border-gray-200 p-2 w-full rounded-md " name="{{ $name }}" id="{{ $name }}" >
    @error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>