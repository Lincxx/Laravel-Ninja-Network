<x-layout>
    <h2>{{ $ninja->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill: {{ $ninja->skill }}</strong></p>
        <p><strong>About:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>
</x-layout>