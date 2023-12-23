<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($member as $data)
        @if ($data->harga == 100000)
            <div
                class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-yellow-800 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            @elseif($data->harga == 200000)
                <div
                    class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-gray-300 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                @else
                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-yellow-400 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
        @endif
        <h2 class="text-4xl font-bold dark:text-white mb-4">{{ $data->judul }}</h2>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best for large scale uses and
            extended redistribution rights.</p>
        <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">Rp {{ number_format($data->harga) }}</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <!-- List -->
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Individual configuration</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>No setup, or hidden fees</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Team size: <span class="font-semibold">100+ developers</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Premium support: <span class="font-semibold">36 months</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Free updates: <span class="font-semibold">36 months</span></span>
            </li>
        </ul>
        <a href="#" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
            started</a>
</div>
@endforeach
</div>
