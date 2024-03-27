<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center flex-col">

                    <form class="w-full max-w-lg" action="/update-student/{{$students->id}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-light-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="name" type="text" placeholder="Jane" value="{{$students->name}}">

                            </div>
                            <div class="w-full  px-3">
                                <label class="block uppercase tracking-wide text-light-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Image
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="image" type="file" placeholder="Doe" accept="image"
                                    value="{{$students->name}}">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full  px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-light-700 text-xs font-bold mb-2"
                                    for="grid-city">
                                    Age
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="age" type="text" placeholder="Albuquerque" value="{{$students->age}}">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">

                            </div>
                            <div class="w-full  px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-state">
                                    Status
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-light-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        name="status">
                                        <option value="Active" {{$students->status == "Active"?"selected":""}}>Active
                                        </option>
                                        <option value="Inactive" {{$students->status == "Inactive"?"selected":""}}>
                                            Inactive</option>

                                    </select>

                                </div>

                            </div>
                        </div>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-light-700">{{ $error }}</div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="mt-6 flex items-center justify-end gap-x-6">

                            @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !</strong> {{ session('success') }}
                                   
                            </div>
                            @endif

                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
                                
                        </div>


                    </form>
                </div>




            </div>
        </div>
    </div>
    </div>
</x-app-layout>