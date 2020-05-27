<x-app>
    <form method="post" action="{{ $user->path("update") }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="name"> Name</label>
            <input class="border border-gray-400 p-2 w-full" name="name" type="text" id="name"
                value="{{ $user->name }}" requried>
            @error("name")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="username"> username</label>
            <input class="border border-gray-400 p-2 w-full" name="username" type="text" id="username"
                value="{{ $user->username }}" requried>
            @error("username")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
                <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="avatar"> Avatar</label>
            <div class="flex">
        
            <input class="border border-gray-400 p-2 w-full" name="avatar" type="file" id="avatar"
                value="{{ $user->avatar }}" requried>
                <img src="{{ $user->avatar }}" height="40" width="40">
            @error("avatar")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
                </div>
        </div>
        <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="email"> email</label>
            <input class="border border-gray-400 p-2 w-full" name="email" type="email" id="email"
                value="{{ $user->email }}" requried>
            @error("email")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="password"> password</label>
            <input class="border border-gray-400 p-2 w-full" name="password" type="password" id="password" requried>
            @error("password")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2  uppercase font-bold  text-xs text-gray-700" for="password"> password
                Confirmation</label>
            <input class="border border-gray-400 p-2 w-full" name="password_confirmation" type="password" id="password"
                requried>
            @error("password_confirmation")
                <p class="text-red-800 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-800 mr-4">Update</button>
            <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>
