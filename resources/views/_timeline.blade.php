<div class="border border-gray-300 rounded-lg px-2 py-2">
    @forelse($tweets as $tweet)
        @include("_tweet")
       
        @empty
        <p class="px-8 py-4">No Tweet Yet</p>
    @endforelse
     {{ $tweets->links() }}
</div>