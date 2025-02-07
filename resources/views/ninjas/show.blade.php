<x-layout>
    <h2>Ninja Profile - {{ $ninja->name }}</h2>

    <div class="bg-red-100 p-4 rounded">
        <h3>Ninja Profile</h3>
        <p><strong>Name:</strong> {{ $ninja->name }}</p>
        <p><strong>Skill level:</strong> {{ $ninja->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{ $ninja->dojo->description }}</p>
    </div>

    <div class="p-0 m-0">
        <a href="{{ route('ninjas.edit', $ninja->id) }}" class="btn-update my-4">Update Ninja</a>

        <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST" class="inline-block" style="padding: 0 !important; margin: 0 !important;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn my-4" style="padding: 6px !important;">Delete Ninja</button>
        </form>
    </div>

</x-layout>