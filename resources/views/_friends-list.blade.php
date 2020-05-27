<h3 class="font-bold text-xl mb-4">Follows</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li>

            <a href="{{ $user->path() }}" class="flex items-center text-sm mb-4">
                <img src="{{ $user->avatar }}" class="rounded-full mr-2"  width="40" height="40">
                <p>{{ $user->name }}</p>
                <a />


        </li>
        @empty
        <p>no Friend Yet!</p>
    @endforelse

</ul>
