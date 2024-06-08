<x-layout>


    <h1 class="font-mono font-bold text-4xl my-4" >Notes {{ $note->created_at }}</h1>
  
    @session('message')
        <p class=" text-green-500">{{ session('message') }}</p>
    @endsession
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
            {{ $note->note }} </a>
        </p>
    </div>

</x-layout>
