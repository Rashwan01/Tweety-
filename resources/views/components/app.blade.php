<x-master>

     <section class="px-8 py-8">

            <main class="mx-auto container">
                <div class="lg:flex justify-between lg:mx-10">
                    <div class="lg:w-32">@include("_sidebar-links")</div>
                    <div class="lg:flex-1 lg:mx-10">

                       {{ $slot }}  


                    </div>
                    <div class="lg:w-1/6 bg-blue-100 border border-gray-300 rounded-lg p-4" style='height: max-content;'>
                        @include("_friends-list")
                    </div>
                </div>
            </main>
        </section>
</x-master>