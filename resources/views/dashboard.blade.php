<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<<<<<<< HEAD
            Posts
=======
            {{ __('Dashboard') }}
>>>>>>> 4b3e48158447039e1cb72165fa86a2095ad11b10
        </h2>
    </x-slot>

    <div class="py-12">
<<<<<<< HEAD
        @foreach($posts as $post)
            <div class="mt-3">
                <div class="max-w-w7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray 800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-500 me-100">

                            <div class="flex justify-between">
                                <div>
                                    <span class="text-gray-500 me-3">Author:</span>
                                    <span class="text-blue-600">{{ $post->user->name }}</span>
                                </div>
                                <div>
                                    <span class="text-gray-500 me-3">Created at:</span>
                                    <span class="text-blue-600">{{ $post->created_at }}</span>
                                </div>
                            </div>

                            <div class="mt-3 ps-5">
                                <h1 class="text-xl front-bold">{{ $post->title }}</h1>
                                <p class="mt-3">{{ $post->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
=======
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
>>>>>>> 4b3e48158447039e1cb72165fa86a2095ad11b10
    </div>
</x-app-layout>
