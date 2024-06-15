<template>
  <div>
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
      <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">Edu Dev</div>
        <div>
          <a href="#" class="text-white mx-2">Features</a>
          <a href="#" class="text-white mx-2">About</a>
          <a href="#" class="text-white mx-2">Contact</a>
          <a href="#" class="text-white mx-2">Login</a>
          <a href="#" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-blue-200 transition duration-300 mx-2">Signup</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section (Jumbotron) -->
    <header class="bg-gray-900 text-white py-24">
      <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to Edu Dev</h1>
        <p class="text-xl mb-6">Transforming Education with Innovation</p>
        <div>
          <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded mr-4 hover:bg-blue-700 transition duration-300">Get Started</a>
          <a href="#" class="bg-transparent border-2 border-blue-500 text-blue-500 px-6 py-3 rounded hover:bg-blue-500 hover:text-white transition duration-300">Learn More</a>
        </div>
      </div>
    </header>

    <!-- Features Section -->
    <section class="bg-white py-16">
      <div class="container mx-auto">
        <h2 class="text-3xl text-center font-bold mb-8">Key Features</h2>
        <div class="flex flex-wrap justify-center">
          <!-- Feature 1 -->
          <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-4">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Personalized Learning Paths</div>
              <p class="text-gray-700 text-base">
                Tailored learning experiences to meet individual student needs.
              </p>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-4">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Real-Time Analytics</div>
              <p class="text-gray-700 text-base">
                Monitor student progress and performance instantly.
              </p>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-4">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Interactive Learning Modules</div>
              <p class="text-gray-700 text-base">
                Engaging modules to enhance student learning experiences.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
// No script logic is needed for this sample component.
</script>

<style scoped>
/* Scoped styles specific to this component */
</style>
