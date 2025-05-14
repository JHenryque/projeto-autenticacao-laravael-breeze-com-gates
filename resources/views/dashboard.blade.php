<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-10">
        {{-- create post --}}
        @can('post.create')
            <div class="max-w-7xl mx-auto mb-6 px-8">
                <a href="{{ route('post.create') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded">Create Post</a>
            </div>
        @endcan

        @foreach($posts as $post)
            <x-post-component :post="$post" />
        @endforeach

{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</x-app-layout>
