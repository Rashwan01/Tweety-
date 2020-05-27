 @unless(current_user()->is($user))
 <form method="post" action="/profiles/{{ $user->username }}/follow">
     @csrf
     <button type="subnit"
         class="bg-blue-500 rounded-full   py-2 px-4   text-xs text-white">{{ auth()->user()->following($user)? "unfollow":"follow" }}</button>
 </form>
@endunless 