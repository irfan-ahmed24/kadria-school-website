<section id="gallery" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">School Gallery</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore our vibrant school community through photos of our students, activities, and beautiful campus.
                </p>
            </div>

            <!-- Gallery Filter Tabs -->
            <div class="flex flex-wrap justify-center mb-12 gap-4">
                <button class="gallery-filter-btn active bg-primary text-white px-6 py-3 rounded-lg font-semibold transition-all hover:bg-blue-700" data-filter="all">
                    All Photos
                </button>
                <button class="gallery-filter-btn bg-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all hover:bg-gray-50" data-filter="students">
                    Students
                </button>
                <button class="gallery-filter-btn bg-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all hover:bg-gray-50" data-filter="activities">
                    Activities
                </button>
                <button class="gallery-filter-btn bg-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all hover:bg-gray-50" data-filter="campus">
                    Campus
                </button>
                <button class="gallery-filter-btn bg-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all hover:bg-gray-50" data-filter="events">
                    Events
                </button>
            </div>
            
            
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="gallery-grid">
                
                <!-- Students Photos -->
                <div class="gallery-item students group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Happy students in classroom" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Students Learning</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item activities group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Science laboratory activity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Science Lab</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item campus group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="School campus building" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">School Building</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item students group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Students collaborating" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Team Work</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item activities group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Sports activity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Sports Activities</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item campus group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Library facility" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Library</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item events group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="School graduation ceremony" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Graduation Day</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item activities group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Art class activity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Art Class</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item students group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Students reading together" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Reading Time</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item campus group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="School playground" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Playground</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item events group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="School annual day performance" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Annual Day</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item activities group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Computer lab session" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                            <i class="fas fa-search-plus text-2xl mb-2"></i>
                            <p class="font-semibold">Computer Lab</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-images mr-2"></i>
                    Load More Photos
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Filter JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.gallery-filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Update active button
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-primary', 'text-white');
                        btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });
                    this.classList.add('active', 'bg-primary', 'text-white');
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');

                    // Filter gallery items
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 100);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>