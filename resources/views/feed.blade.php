<x-layouts.app>
    <x-filters></x-filters>
    <div class="max-w-6xl mx-auto">
        @if(Session::has('success'))
            <div class="z-20 absolute inset-y-0 right-0">
                <div class="max-w-lg rounded-lg px-5 shadow-md border border-gray-300 z-10 bg-white mt-24 mr-10 text-center py-4 flex items-center">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-full bg-green-200 mr-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 13L9 17L19 7" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="text-md font-semibold">Your shot has been uploaded!</span>
                    <button class="text">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4 text-gray-600 ml-4"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        @endif
        @foreach($shots as $key => $shot)
            <div class="grid grid-cols-1 lg:grid-cols-6 row-span-4 col-gap-8 row-gap-4 mb-10 lg:mb-24">
                <div class="col-span-1 lg:col-span-4 row-start-2 lg:row-start-auto">
                    <div class="w-full h-full flex">
                        <img src="{{ Storage::url($shot->image[0]->url) }}" class="w-full h-full rounded-lg" />
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-2 row-start-1 lg:row-start-auto">
                    <div class="flex flex-row lg:flex-col justify-between w-full h-full">
                        <div class="">
                            <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" class="h-10 w-10 rounded-full">
                                <div class="font-medium text-lg ml-5">
                                    <p>{{ $shot->user->name }} {{ $shot->user->surname }}</p>
                                    <p class="font-medium text-xs">
                                        {{ $shot->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 hidden lg:block">
                                <p>
                                    {{ $shot->description }}
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <span class="font-medium text-xs lg:text-sm text-gray-700">
                                Made with
                            </span>
                            <img src="{{ $shot->framework->logo }}" class="h-4 lg:h-6">
                        </div>
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-6">
                    <div class="flex items-center">
                        <div class="inline-flex">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <span class="ml-1">26</span>
                        </div>
                        <div class="inline-flex ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            <span class="ml-1">4</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.app>
