<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>
    <!-- Fonts -->
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />--}}

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex">
<!-- Sidebar -->
<div class="w-64 bg-gray-800 text-white h-screen fixed flex flex-col">
    <div class="px-4 py-6 text-2xl font-semibold border-b border-gray-700">
        MyBrand
    </div>
    <nav class="flex-1 px-4 py-6 space-y-4">

        @foreach(["Home" => "/home","Student" => "/student", "Teacher"=> "/teacher", "Enrollment" => "enrollment", "Courses" => "courses"] as $key => $value)
            <a href="{{$value}}" class="block py-2.5 px-4  rounded transition duration-200 hover:bg-gray-700
            {{ request()->is(ltrim($value, '/')) ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700' }}
          ">
                {{ $key  }}
            </a>
        @endforeach
    </nav>
    <div class="px-4 py-6 border-t border-gray-700">
        <button class="w-full bg-blue-500 py-2.5 rounded text-white transition duration-200 hover:bg-blue-400">
            Sign Up
        </button>
    </div>
</div>

<!-- Main content -->
<div class="flex-1 ml-64">
    <!-- Navbar -->
    <div class="bg-white shadow-md fixed w-full flex justify-between px-6 py-4 z-10">
        <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/40" class="rounded-full" alt="Profile Image">
            <span class="text-lg font-semibold">Welcome, User!</span>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-700 transition duration-200 hover:text-blue-500">Students</a>
            <a href="#" class="text-gray-700 transition duration-200 hover:text-blue-500">Teachers</a>
            <a href="#" class="text-gray-700 transition duration-200 hover:text-blue-500">Logout</a>
        </div>
    </div>

    <!-- Content area -->
    <div class="pt-24 px-6">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        <p class="mb-4">Welcome to your dashboard! Here you can find the latest updates and manage your content.</p>
        <!-- Your content goes here -->
        @yield('content')
    </div>
</div>
</body>
</html>
