<x-layout>
    <h1 class="font-mono font-bold text-4xl my-4">Create</h1>
    <form action="{{route('note.store')}}" method="post">
        @csrf
        <textarea class="p-4 border-2 resize-none border-zinc-500 outline-none w-full h-40" placeholder="Input the text" name="note"></textarea>
        <div class="flex flex-row-reverse" >          
            <button class="p-2 mt-6 rounded border-2 inline-block text-right border-black bg-green-600 text-white" type="submit">Add</button>
        </div>
    </form>
</x-layout>
