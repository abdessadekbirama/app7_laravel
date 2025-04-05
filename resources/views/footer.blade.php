<footer class="py-12 bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="mt-8 md:mt-0">
                <p class="text-sm text-gray-500">
                    &copy; {{ date('Y') }} Your Company. All rights reserved.
                </p>
            </div>
            <div class="flex flex-col md:flex-row md:justify-end md:items-center mt-4 md:mt-0">
                <a href="#" class="text-sm text-gray-500 hover:text-white mr-4">Terms of Service</a>
                <a href="#" class="text-sm text-gray-500 hover:text-white">Privacy Policy</a>
            </div>
        </div>
        <div class="mt-8">
            <form action="#" method="POST">
                @csrf
                <div class="flex flex-col md:flex-row md:items-center">
                    <input type="email" name="email" placeholder="Enter your email address" class="p-2 rounded-lg mr-4" required>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</footer>


