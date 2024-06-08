<x-layout>
    <h1 class="font-mono font-bold text-4xl my-4">Edit</h1>
    <form action="{{route('note.update', $note)}}" method="POST">
        @csrf
        @method("PUT")
        <textarea class="p-4 border-2 resize-none border-zinc-500 outline-none w-full h-40" placeholder="Input the text" name="note">
            {{$note->note}}
        </textarea>
        <div class="flex flex-row-reverse" >          
            <button class="p-2 mt-6 rounded border-2 inline-block text-right border-black bg-green-600 text-white" type="submit">Add</button>
        </div>
    </form>
</x-layout>
