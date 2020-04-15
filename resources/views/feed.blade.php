<x-layouts.app>
    <div class="max-w-6xl mx-auto">
        @foreach($shots as $key => $shot)
            <div class="grid grid-cols-1 lg:grid-cols-6 row-span-4 col-gap-8 row-gap-4 mb-10 lg:mb-24">
                <div class="col-span-1 lg:col-span-4 row-start-2 lg:row-start-auto">
                    <div class="w-full h-full flex">
                        <img src="{{ $shot->image[0]->url }}" class="w-full h-full rounded-lg" />
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
                            <img src="{{ $shot->framework->logo }}" class="h-4 lg:h-8">
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
