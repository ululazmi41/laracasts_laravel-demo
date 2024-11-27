@props(['name'])

@error('title')
    <p class="text-sm text-red-500 font-semibold mt-1">
        {{ $message }}
    </p>
@enderror
