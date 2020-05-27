    <div class="border border-blue-700 rounded-lg px-8 py-6 mb-8">
        <form method="post" action="{{ route('tweets') }}">
            @csrf
            <textarea class=" w-full" name="body" placeholder="what's up doc ?"></textarea>
            <hr class="my-4">
            <footer class="flex justify-between items-center">
                <img src="{{ auth()->user()->avatar }}" class="rounded-full mr-2" width="50" height="50">
                <button class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow h-10 px-10 text-white text-sm"
                    type="submit">Submit</button>
            </footer>
        </form>
        @error("body")
            <p class="text-red-500 text-sm ml-2 font-bold">{{ $message }}</p>
        @enderror
    </div>
