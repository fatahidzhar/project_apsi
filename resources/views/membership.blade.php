@extends('layouts/main')
@section('title')
    Membership
@endsection
@section('content')
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Membership</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Sekarang Tak Perlu Antri</p>
                </div>
                <livewire:data-member />

            </div>
        </section>
    </div>
@endsection
