@extends('Admin.DashboardAdmin')
@section('content')




<div class="px-4 py-6 sm:px-0">
    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
        <p class="text-2xl font-semibold pb-4 flex items-center justify-start">
            <i class="fas fa-list mr-3 text-blue-500"></i> Les Events
        </p>
        <div class="relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">ID</th>
                        <th scope="col" class="py-3 px-6">Titre</th>
                        <th scope="col" class="py-3 px-6">Lieu</th>
                        <th scope="col" class="py-3 px-6">Date</th>
                        <th scope="col" class="py-3 px-6">User</th>
                        <th scope="col" class="py-3 px-6">Actions</th>
                    </tr>
                </thead>


@endsection