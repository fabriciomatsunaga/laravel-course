<ul class="flex flex-wrap text-sm font-medium text-center text-body justify-center">
    <li class="me-2">
        <a href="{{ route('dashboard') }}"
            class="{{ request('category') ?  'inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' 
            : 'inline-block px-4 py-2 hover:text-heading text-white rounded-lg bg-blue-600 active'}}">All</a>
    </li>
    @forelse ($categories as $category)
        <li class="me-2">
            <a href="{{ route('post.byCategory', $category) }}"
            class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id ? 
            'inline-block px-4 py-2 hover:text-heading text-white rounded-lg bg-blue-600 active'
            : 
            'inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white'  }}">
                {{ $category->name }}</a>
        </li>
    @empty
        {{ $slot }}
    @endforelse

</ul>