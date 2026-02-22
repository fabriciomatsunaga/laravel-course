<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <!-- User avatar section -->
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{($post->user->imageUrl())}}" alt="{{ $post->user->name }}"
                            class="w-12 h-12 rounded-full">
                    @else
                        <img src="https://freesvg.org/img/abstract-user-flat-4.png" alt="placeholder avatar"
                            class="w-12 h-12 rounded-full">
                    @endif
                    <div>
                        <div class="flex gap-2">
                            <h3>{{ $post->user->name }}</h3>
                            &middot;
                            <a href="#" class="text-emerald-600">Follow</a>
                        </div>

                        <div class="flex gap-2 text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y')}}
                        </div>
                    </div>
                </div>
                <!-- User avatar section -->

                <!-- Clap Section -->
                <x-clap-button />
                <!-- Clap Section -->

                <!-- Content Section -->
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>
                <!-- Content Section -->

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-xl">{{ $post->category->name }}</span>
                </div>
                <!-- Clap Section endpage -->
                <x-clap-button />
                <!-- Clap Section endpage -->

            </div>
        </div> 
    </div>
</x-app-layout>