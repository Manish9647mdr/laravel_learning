@props(['name'])
@error($name)
    <p class="text-xs text-red-500 font-semibold m-1">{{ $message }}</p>
@enderror
