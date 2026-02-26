@props(['user','size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{($user->imageUrl())}}" alt="{{ $user->name }}"class="{{ $size }} rounded-full">
@else
    <img src="https://freesvg.org/img/abstract-user-flat-4.png" alt="placeholder avatar" class="{{ $size }} rounded-full">
@endif
