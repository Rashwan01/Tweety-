<?php
$navbar_links = ["Home","Explore","Notifications","Messages","Bookmarks","List","Profile","More"]

?>
<ul>

    <li>
        <a href="{{ route("home") }}" class="font-bold  text-lg mb-4 block">
            Home
        </a>
    </li>

    <li>
        <a href="{{ route("explore") }}" class="font-bold  text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
        <a href="{{ route("profile",current_user()->username) }}" class="font-bold  text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <form method="post" action="/logout">
            @csrf
            <button type="submit" class="font-bold text-lg mb-4 ">Logout</button>
        </form>
    </li>
    <ul>
