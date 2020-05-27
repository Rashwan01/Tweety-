<x-app>
    <header class="relative">
        <img class="mb-2" src="/img/default-profile-banner.jpg">
        <div class="flex justify-between items-center">
            <div style="max-width:270px">
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
          <x-edit-profile-button :user="$user"></x-edit-profile-button>
               <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <img src="{{ $user->avatar }}" class="rounded-full mr-2 absolute"
            style="width:150px; top:155px; left:calc(50% - 75px);  ">
        <p class="text-sm my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not only five
        </p>
    </header>
    @include("_timeline",[
    "tweets"=>$tweets
    ])
</x-app>
