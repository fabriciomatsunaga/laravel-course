<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-category-tabs>
                        No categories found.
                    </x-category-tabs>
                </div>
            </div>

            <div class=" mt-4 text-gray-900">
                <div class="">
                    @forelse ($posts as $post)
                       <x-post-item :post="$post" ></x-post-item>
                    @empty
                        <div>
                            <p class="text-gray-900">No Posts found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            {{ $posts->onEachSide(2)->links() }}
        </div>
    </div>
</x-app-layout>