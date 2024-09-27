@php
    $stylesBody = "class='bg-gray-100 text-gray-900 flex flex-col min-h-screen'";
@endphp
<x-app-layout :styles="$stylesBody">

    <!-- Header -->
    <header class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">My Portfolio</h1>
            <p class="mt-2 text-lg">A showcase of my work and projects</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-10 px-4">
        <!-- About Section -->
        <section class="mb-10">
            <h2 class="text-3xl font-semibold mb-4">About Me</h2>
            <p class="text-gray-700">
                I am a web developer with a passion for creating dynamic and responsive web applications.
                I love coding, design, and exploring new technologies.
            </p>
        </section>

        <!-- Projects Section -->
        <section>
            <h2 class="text-3xl font-semibold mb-4">Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Project 1" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Project 1</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">View Project</a>
                    </div>
                </div>

                <!-- Project Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Project 2" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Project 2</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">View Project</a>
                    </div>
                </div>

                <!-- Project Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Project 3" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Project 3</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">View Project</a>
                    </div>
                </div>

                <!-- Add more project cards as needed -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-footer />

</x-app-layout>
