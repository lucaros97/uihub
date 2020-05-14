@section('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <style>
        .filepond--panel-root {
            background: #fff;
            border: 2px solid #e2e8f0;
        }

        .filepond--image-preview {
            background-color: #fff;
        }

        .filepond--file-info {
            color: #000;
        }

        .filepond--image-preview-overlay-idle {
            color: inherit;
        }
    </style>
@endsection()
@section('scripts')
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
        );
        
        FilePond.setOptions({
            server: {
                url: '/shots/uploadimage',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });

        pond.on('processfile', (error, file) => {
            if (error) {
                console.log('Oh no');
                return;
            }
            document.getElementById("work-image").value = file.serverId;
        });

    </script>
@endsection()

<x-layouts.app>
    <form method="POST" action="{{ route('shots.store') }}">
        @csrf
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
                                    <label for="name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Work name</label>
                                    <input required="required" id="name" name="name" type="text" placeholder="" autocomplete="false" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="w-full mt-6 md:mb-0">
                                    <label for="name" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Description</label>
                                    <textarea required="required" id="description" name="description" type="text" rows="5" placeholder="" class="appearance-none block w-full text-gray-700 border-2 border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                                </div>
                                <div class="w-full mt-6 md:mb-0"">
                                    <label for="framework" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Framework</label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full border-2 border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="framework" name="framework">
                                            @foreach($frameworks as $key => $framework)
                                                <option value="{{ $framework->id }}">{{ $framework->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-7/12 pl-6">
                            <div class="flex flex-wrap w-full mt-16">
                                <div class="w-full md:mb-0">
                                    <label for="work-image" class="block capitalize tracking-wide text-gray-800 text-sm font-medium mb-2">Image</label>
                                    <input type="hidden" id="work-image" name="work-image">
                                    <input type="file">
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
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">
                    Upload this work
                </button>
            </div>
        </div>
    </form>
</x-layouts.app>