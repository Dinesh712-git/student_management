<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            <!-- {{$students}} -->
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center flex-col">

                    <!-- @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                           
                    </div>
                    @endif -->

                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Image Name</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td class="border px-4 py-2">{{$student->id}}</td>
                                <td class="border px-4 py-2">{{$student->name}}</td>
                                <td class="border px-4 py-2"> <img src="{{ GetImage($student->image_name)}}" style="width: 50px;border-radius: 10px; display: block; margin: 0 auto;"></td>
                                <td class="border px-4 py-2">{{$student->age}}</td>
                                <td class="border px-4 py-2">{{$student->status}}</td>
                                <td class="border px-4 py-2">
                                    <a href="/view-student/{{$student->id}}"><i class="fas fa-eye"></i></a>
                                    <a href="/edit-student/{{$student->id}}"><i class="fas fa-edit"></i></a>
                                    <a href="/delete-student/{{$student->id}}"
                                        onclick="return confirm('Are you sure you want to delete this student?')"><i
                                            class="fas fa-trash-alt"></i></a>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>