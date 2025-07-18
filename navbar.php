<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary to-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-900">Kadriya School</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition-colors font-medium">About</a>
                    <a href="#services" class="text-gray-700 hover:text-primary transition-colors font-medium">Services</a>
                    <a href="#programs" class="text-gray-700 hover:text-primary transition-colors font-medium">Programs</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors font-medium">Contact</a>
                    
                    <!-- Login Dropdown -->
                    <div class="relative">
                        <button id="login-dropdown-btn" class="bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors font-medium flex items-center">
                            Login
                            <i class="fas fa-chevron-down ml-2 text-sm"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div id="login-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                            <div class="py-2">
                                <a href="administrator/login.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">
                                    <i class="fas fa-user-shield mr-2"></i>Administrator
                                </a>
                                <a href="principal/login.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">
                                    <i class="fas fa-user-tie mr-2"></i>Principal
                                </a>
                                <a href="teacher/login.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i>Teacher
                                </a>
                                <a href="student/login.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">
                                    <i class="fas fa-user-graduate mr-2"></i>Student
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-primary">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-4 py-2 space-y-1">
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">Home</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">About</a>
                <a href="#services" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">Services</a>
                <a href="#programs" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">Programs</a>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">Contact</a>
                
                <!-- Mobile Login Options -->
                <div class="border-t border-gray-200 pt-2 mt-2">
                    <p class="px-3 py-2 text-sm font-medium text-gray-500 uppercase tracking-wider">Login As</p>
                    <a href="administrator/login.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
                        <i class="fas fa-user-shield mr-2"></i>Administrator
                    </a>
                    <a href="principal/login.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
                        <i class="fas fa-user-tie mr-2"></i>Principal
                    </a>
                    <a href="teacher/login.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
                        <i class="fas fa-chalkboard-teacher mr-2"></i>Teacher
                    </a>
                    <a href="student/login.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
                        <i class="fas fa-user-graduate mr-2"></i>Student
                    </a>
                </div>
            </div>
        </div>
</nav>

<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Login dropdown toggle
    const loginDropdownBtn = document.getElementById('login-dropdown-btn');
    const loginDropdown = document.getElementById('login-dropdown');
    
    if (loginDropdownBtn) {
        loginDropdownBtn.addEventListener('click', (e) => {
            e.preventDefault();
            loginDropdown.classList.toggle('hidden');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!loginDropdownBtn.contains(e.target) && !loginDropdown.contains(e.target)) {
                loginDropdown.classList.add('hidden');
            }
        });
    }
</script>