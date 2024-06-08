<x-layout>
    <h1 class="font-mono font-bold text-4xl my-4 text-center">Login</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error )
            <p class=" text-red-700 text-center" id='errors'>{{$error}}</p>
        @endforeach
    @endif
    <form class="mx-auto w-64" action="{{route('auth')}}" method="post">
        @csrf
        <p class=" text-red-700" id='errors'></p>
        <label for="name">Username</label>
        <input type="text" required name="name" placeholder="Enter is your name" class=" border-2 border-gray-500 w-full placeholder:text-gray-500 pl-2 py-2 rounded-md">
        <label for="password">Password</label>
        <input type="password" required name="password"  placeholder="Enter is your password" class=" border-2 border-gray-500 w-full placeholder:text-gray-500 pl-2 py-2 rounded-md">
        <div class="flex  justify-center" >          
            <button id="sbm" class="p-2 mt-6 rounded border-2  border-gray-500 bg-green-600 text-white" type="submit">Submit</button>
        </div>
    </form>
</x-layout>