{{-- @props - refer to the index to see prop --}}
@props(['highlight' => false])

{{-- this will only have the class of highlight if highlight is true and it will have the class of card all the time --}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>