<x-layout>
    <h1 class="font-mono font-bold text-4xl my-4" >Notes</h1>
    <a class="p-2 mt-6 rounded  border-black bg-green-600 text-white" href="{{ route('note.create') }}">Add Note</a>
    @foreach ($notes as $note )
        <div class=" mt-4 p-4 bg-amber-100 pl-3 rounded-2xl">
            <div class=" mb-4 flex gap-4 justify-content-between">
                <a href="{{ route('note.edit', $note) }}" class="p-2 rounded border-black bg-yellow-500">Edit</a>
                
                <form action="{{ route('note.destroy', $note) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="p-2 rounded border-black bg-red-600 text-white">Delete</button>
                </form>
            </div>
            <p class="">
                {{ Str::words($note->note, 30)}} <a class=" text-blue-500 underline" href="{{ route('note.show', $note) }}">views</a>
            </p>
        </div>
    @endforeach

    {{ $notes->links() }}
</x-layout>
