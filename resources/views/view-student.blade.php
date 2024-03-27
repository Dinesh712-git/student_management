<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center flex-col">
                    <br>
                    <img src="{{ GetImage($students->image_name)}}"
                        style="width: 200px; border-radius: 20px; display: block; margin: 0 auto;">
                    <br>
                    <h1>Name : {{$students->name}}</h1>

                    <h1>Age : {{$students->age}}</h1>
                    <h1>Status : {{$students->status}}</h1>
                    <br>
                    <a type="button" href="/dashboard"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Back
                    </a>
                </div>





            </div>
        </div>
    </div>
    </div>
</x-app-layout>