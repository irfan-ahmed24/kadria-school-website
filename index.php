<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadriya School - Modern Education</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e293b',
                        accent: '#f59e0b',
                        success: '#10b981',
                        danger: '#ef4444'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <?php 
    include 'navbar.php'; // Include the navigation bar
    ?>
    <!-- Hero Section -->
    <section id="home" class="pt-16 min-h-screen gradient-bg relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
            <div class="grid grid-cols-1 gap-12 items-center min-h-[80vh]">
                <div class="text-white space-y-8">
                    <!-- Badge -->
                    <div class="inline-flex items-center glass-effect rounded-full px-4 py-2">
                        <div class="w-2 h-2 bg-accent rounded-full mr-3"></div>
                        <span class="text-sm font-medium">Excellence in Education Since 1999</span>
                    </div>
                    
                    <div class="space-y-6">
                        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                            <span class="block">Shaping</span>
                            <span class="block text-accent">Future Leaders</span>
                        </h1>
                        
                        <p class="text-xl text-blue-100 max-w-lg leading-relaxed">
                            Empowering students with world-class education, innovative teaching methods, and comprehensive development programs.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#admissions" class="bg-accent text-white px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300 text-center hover-lift">
                            <i class="fas fa-rocket mr-2"></i>
                            Start Your Journey
                        </a>
                        <a href="#about" class="glass-effect text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition-all duration-300 text-center">
                            <i class="fas fa-play mr-2"></i>
                            Learn More
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">500+</div>
                            <div class="text-sm text-blue-200">Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">50+</div>
                            <div class="text-sm text-blue-200">Teachers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">98%</div>
                            <div class="text-sm text-blue-200">Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About Kadriya School</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dedicated to nurturing young minds and preparing them for a bright future through innovative education and holistic development.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="bg-white rounded-xl p-8 shadow-md hover-lift">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-target text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Our Mission</h3>
                        </div>
                        <p class="text-gray-600">
                            To provide exceptional education that inspires creativity, critical thinking, and character development, preparing students to become responsible global citizens.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-8 shadow-md hover-lift">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-eye text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Our Vision</h3>
                        </div>
                        <p class="text-gray-600">
                            To be recognized as a premier educational institution that transforms lives through innovative teaching, technology integration, and comprehensive student support.
                        </p>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Students Learning" 
                         class="w-full rounded-2xl shadow-lg">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl"></div>
                    
                    <div class="absolute bottom-6 left-6 text-white">
                        <h4 class="text-2xl font-bold mb-2">Interactive Learning</h4>
                        <p class="text-white/90">Engaging students through modern teaching methods</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We offer comprehensive educational services designed to nurture every aspect of your child's development.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-book-open text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Academic Excellence</h3>
                    <p class="text-gray-600">
                        Rigorous curriculum designed to challenge and inspire students to reach their full potential.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-success rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Faculty</h3>
                    <p class="text-gray-600">
                        Highly qualified and experienced teachers committed to student success and growth.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-accent rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Modern Technology</h3>
                    <p class="text-gray-600">
                        State-of-the-art facilities and digital learning tools to enhance the educational experience.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-running text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Sports & Activities</h3>
                    <p class="text-gray-600">
                        Comprehensive sports programs and extracurricular activities for holistic development.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-pink-500 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Student Support</h3>
                    <p class="text-gray-600">
                        Dedicated counseling and support services to ensure every student's wellbeing.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 bg-indigo-500 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Global Perspective</h3>
                    <p class="text-gray-600">
                        International programs and partnerships to broaden students' worldview.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Programs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive educational programs tailored for different age groups and learning needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover-lift">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white text-center">
                        <i class="fas fa-baby text-3xl mb-4"></i>
                        <h3 class="text-xl font-bold">Early Years</h3>
                        <p class="text-blue-100 mt-2">Ages 3-5</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Play-based learning
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Social development
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Creative expression
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Basic literacy
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover-lift">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 text-white text-center">
                        <i class="fas fa-book text-3xl mb-4"></i>
                        <h3 class="text-xl font-bold">Primary</h3>
                        <p class="text-green-100 mt-2">Ages 6-11</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Core subjects
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                STEM education
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Arts & crafts
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Physical education
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover-lift">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white text-center">
                        <i class="fas fa-microscope text-3xl mb-4"></i>
                        <h3 class="text-xl font-bold">Secondary</h3>
                        <p class="text-purple-100 mt-2">Ages 12-16</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Advanced curriculum
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Laboratory work
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Career guidance
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Leadership programs
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover-lift">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-6 text-white text-center">
                        <i class="fas fa-graduation-cap text-3xl mb-4"></i>
                        <h3 class="text-xl font-bold">Senior</h3>
                        <p class="text-orange-100 mt-2">Ages 17-18</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                University prep
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Specialized tracks
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                Internships
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-success mr-3"></i>
                                College counseling
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
                <p class="text-xl text-blue-100 mb-8">
                    Join thousands of students who have transformed their lives through our exceptional education programs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#admissions" class="bg-accent text-white px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300 hover-lift">
                        <i class="fas fa-rocket mr-2"></i>
                        Apply Now
                    </a>
                    <a href="#contact" class="glass-effect text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-phone mr-2"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Have questions about our programs? We're here to help you find the perfect educational path.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Address</h3>
                            <p class="text-gray-600">123 Education Street, Knowledge City, State 12345</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-success rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600">info@kadriayaschool.edu</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" placeholder="Your first name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" placeholder="Your last name">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" placeholder="your.email@example.com">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                                <option>General Inquiry</option>
                                <option>Admissions</option>
                                <option>Programs</option>
                                <option>Support</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" placeholder="Your message here..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white"></i>
                        </div>
                        <span class="text-xl font-bold">Kadriya School</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Excellence in education since 1999. Shaping future leaders through innovative learning.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#programs" class="hover:text-white transition-colors">Programs</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Programs</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Early Years</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Primary</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Secondary</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Senior</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>123 Education Street</p>
                        <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@kadriayaschool.edu</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 Kadriya School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    mobileMenu.classList.add('hidden');
                }
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
    </script>
</body>
</html>
