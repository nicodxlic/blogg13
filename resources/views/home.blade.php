<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-center relative">
            @if(Auth::user())
            <div class="absolute left-0">
                <a href="/category/create" class="text-blue-400">
                    <h2 class="font-semibold text-xl leading-tight">
                        {{ __('Crear Post') }}
                    </h2>
                </a>
            </div>
            @endif
            <div>
                <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('blogg13') }}
                </h2>
            </div>
        </div>
    </x-slot>
    <div className="posts">
        @foreach ($posts as $post)
            <div class="mt-10 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
            overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <div class="text-3xl">
                    <h3>{{$post->title}}</h3>
                </div>
                <div className="botones">
                    <a href="/category/show/{{$post->id}}" class="inline-flex text-blue-400 
                    px-4 py-2">
                        <p>Ver post</p>
                    </a>
                    @if(Auth::check() && Auth::user()->id == $post->user_id)
                        <a href="/category/edit/{{$post->id}}" class="inline-flex text-blue-400 
                        px-4 py-2">
                            <p>Editar post</p>
                        </a>
                    @endif
                </div>
                <div class="text-gray-500">
                    <p>{{$post->created_at}}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>