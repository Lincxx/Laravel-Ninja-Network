<x-layout>
    <form action="{{ route('ninjas.store') }}" method="post">
        @csrf
        <h2>Create a New Ninja</h2>

        <!-- ninja Name -->
        <label for="name">Ninja Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            required 
            class="bg-white rounded"
        >

        <!-- ninja Strength -->
        <label for="skill">Ninja Skill (0-100):</label>
        <input 
            type="number" 
            id="skill" 
            name="skill" 
            value="{{ old('skill') }}"
            required
            class="bg-white rounded"
        >

        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            class="bg-white rounded"
            required
        >{{ old('bio') }}</textarea>

        <!-- select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required class="bg-white rounded">
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($dojos as $dojo)
                <option value="{{ $dojo->id }}"  {{ old('dojo_id') == $dojo->id ? 'selected' : '' }}>{{ $dojo->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Ninja</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error  )
                    <li class="my-2 text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>