@extends('layouts/dashboard-owner')
@section('title')
    User
@endsection
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-4xl font-extrabold dark:text-white pb-2">Daftar User</h2>



            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->email }}
                                </td>
                                {{-- <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td> --}}

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
