<template>
  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex-shrink-0">
      <div class="p-6 text-center text-lg font-semibold border-b border-gray-700">Edu Dev</div>
      <nav class="mt-6">
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Home</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Profile</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Messages</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
      </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 p-6 overflow-y-auto">
      <header class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        <Link href="logout"
          class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition">Logout</Link>
      </header>

      <main class="mt-6">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-900">Feature 1</h2>
            <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-900">Feature 2</h2>
            <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-900">Feature 3</h2>
            <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </main>

      <main class="container mx-auto mt-4">
        <section class="mb-8">
          <h2 class="text-lg font-semibold mb-2">Profile Information</h2>
          <div class="bg-white rounded-lg shadow-md p-4">
            <p><strong>ID:</strong> {{ user.id }}</p>
            <p><strong>Name:</strong> {{ user.name }}</p>
            <p><strong>Email:</strong> {{ user.email }}</p>
            <!-- Add more fields as needed -->
          </div>
        </section>

        <!-- Example section: List of Recent Orders -->
        <section class="mb-8">
          <h2 class="text-lg font-semibold mb-2">Recent Orders</h2>
          <div class="bg-white rounded-lg shadow-md p-4">
            <!-- Example: Loop through recent orders -->
            <ul>
              <li v-for="(order, index) in recentOrders" :key="index">
                <p><strong>Order ID:</strong> {{ order.id }}</p>
                <p><strong>Product:</strong> {{ order.product }}</p>
                <p><strong>Amount:</strong> {{ order.amount }}</p>
                <!-- Add more order details as needed -->
              </li>
            </ul>
            <p v-if="recentOrders.length === 0">No recent orders found.</p>
          </div>
        </section>

        <!-- Example section: Account Settings -->
        <section>
          <h2 class="text-lg font-semibold mb-2">Account Settings</h2>
          <div class="bg-white rounded-lg shadow-md p-4">
            <p><strong>Username:</strong> {{ user.username }}</p>
            <p><strong>Role:</strong> {{ user.role }}</p>
            <!-- Add more account settings as needed -->
          </div>
        </section>
      </main>






    </div>
  </div>




</template>

<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
  user: Object
})
const recentOrders = [
  { id: 1, product: 'Product A', amount: '$100' },
  { id: 2, product: 'Product B', amount: '$150' },
  { id: 3, product: 'Product C', amount: '$80' },
];

</script>

<style scoped>
/* Additional styling if needed */
</style>
