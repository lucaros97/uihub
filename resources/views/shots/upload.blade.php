<x-layouts.app>
    <div class="max-w-6xl mx-auto flex items-center my-16">
        <div class="grid grid-cols-1 w-full">
            <div class="col-span-1">
                <h2 class="text-xl font-medium mb-2">Upload new work</h2>
                <h4 class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisi odio, malesuada id varius quis, lacinia vel tortor.</h4>
            </div>
            <div class="col-span-1">
                <div class="flex flex-wrap w-full">
                    <div class="flex w-5/12 pr-6">
                        <div class="flex flex-wrap w-full mt-16">
                            <div class="w-full md:mb-0">
                                <label for="work-name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Work name</label>
                                <input required="required" id="work-name" name="name" type="text" placeholder="" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full mt-6 md:mb-0">
                                <label for="work-name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Description</label>
                                <textarea required="required" id="work-name" name="name" type="text" rows="5" placeholder="" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                            </div>
                            <div class="w-full mt-6 md:mb-0">
                                <label for="work-name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Framework</label>
                                <textarea required="required" id="work-name" name="name" type="text" rows="5" placeholder="" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-7/12 pl-6">
                        <div class="flex flex-wrap w-full mt-16">
                            <div class="w-full md:mb-0">
                                <label for="work-name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Image</label>
                                <input required="required" id="work-name" name="name" type="text" placeholder="" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Subnavbar with actions buttons --}}
    <div class="w-full bg-gray-100 py-16 fixed bottom-0">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <button class="px-4 py-2 bg-white border border-gray-400 rounded">
                Cancel
            </button>
            <button class="px-4 py-2 bg-indigo-600 text-white rounded">
                Upload this work
            </button>
        </div>
    </div>
</x-layouts.app>