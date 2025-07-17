<x-layout>
    <h2>Currently Available Ninjas</h2>

    @if ($greeting === "hello")
        <p>Hi</p>
    @endif

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p>{{ $ninja["name"] }}</p>
                <a href="/ninjas/{{ $ninja["id"] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>
