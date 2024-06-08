<x-layout>
    <h1 class="font-mono font-bold text-4xl text-center my-4">Registration</h1>
    <form class="mx-auto w-64" action="{{route('store')}}" method="post">
        @csrf
        @error('username')
            <p class=" text-red-700" id='errors'>{{$message}}</p>
        @enderror
        @error('password')
            <p class=" text-red-700" id='errors'>{{$message}}</p>
        @enderror
        <p class=" text-red-700" id='errors'></p>
        <label for="name">Username</label>
        <input type="text" required name="username" placeholder="Enter is your name" class=" border-2 border-gray-500 w-full placeholder:text-gray-500 pl-2 py-2 rounded-md">
        <label for="password">Password</label>
        <input type="password" required name="password" id='psw1' placeholder="Enter is your password" class=" border-2 border-gray-500 w-full placeholder:text-gray-500 pl-2 py-2 rounded-md">
        <label for="retrypassword">Retry Password</label>
        <input type="password" required name="password2" id='psw2' placeholder="Enter is your password" class=" border-2 border-gray-500 w-full placeholder:text-gray-500 pl-2 py-2 rounded-md">
        <div class="flex  justify-center" >          
            <button disabled id="sbm" class="p-2 mt-6 rounded border-2  border-gray-500 bg-green-600 text-white" type="submit">Submit</button>
        </div>
    </form>
</x-layout>