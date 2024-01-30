@props(["name"])

@if($name = "down-arrow")
    <svg {{ $attributes(["class" => "h-5 w-5 inline-block" ]) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
@endif