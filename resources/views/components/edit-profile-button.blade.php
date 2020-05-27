@can("edit",$user)
    <a href="{{ current_user()->path("edit") }}" class=" rounded-full  py-2 px-2 border border-gray-300  text-xs">Edit Profile</a>
@endcan
