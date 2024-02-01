@props(['destination'])
<div class="space-x-2">
    <a href="{{ $destination->slug }}"
       class="px-3 py-1 border border-[#515F08] rounded-full text-[#515F08] text-xs uppercase font-semibold"
       style="font-size: 10px">{{ $destination->name }}</a>

</div>
