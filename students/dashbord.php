<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Kadriya School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e293b',
                        accent: '#f59e0b',
                        success: '#10b981',
                    }
                }
            }
        }
    </script>
    <style>
        .simple-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .simple-card:hover {
            transform: translateY(-2px);
        }
        .simple-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .sidebar-bg {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="simple-bg min-h-screen">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 sidebar-bg" id="sidebar">
        <!-- Logo -->
        <div class="flex items-center justify-center h-16 border-b border-white border-opacity-20">
            <h1 class="text-white text-xl font-bold">
                <i class="fas fa-graduation-cap mr-2"></i>
                Kadriya School
            </h1>
        </div>

        <!-- User Profile -->
        <div class="p-6 border-b border-white border-opacity-20">
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&q=80" 
                     alt="Student" class="w-12 h-12 rounded-full border-2 border-white">
                <div class="ml-3">
                    <p class="text-white font-semibold">John Smith</p>
                    <p class="text-white text-opacity-80 text-sm">Grade 10-A</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="mt-6 px-4 space-y-2">
            <a href="#profile" class="flex items-center px-4 py-3 text-white bg-white bg-opacity-20 rounded-lg">
                <i class="fas fa-user mr-3"></i>
                <span>My Profile</span>
            </a>
            <a href="#results" class="flex items-center px-4 py-3 text-white text-opacity-80 hover:bg-white hover:bg-opacity-10 rounded-lg transition-colors">
                <i class="fas fa-chart-line mr-3"></i>
                <span>My Results</span>
            </a>
            <a href="#notices" class="flex items-center px-4 py-3 text-white text-opacity-80 hover:bg-white hover:bg-opacity-10 rounded-lg transition-colors">
                <i class="fas fa-bell mr-3"></i>
                <span>Notices</span>
            </a>
        </nav>

        <!-- Logout Button -->
        <div class="absolute bottom-6 left-4 right-4">
            <a href="#logout" class="flex items-center px-4 py-3 text-white bg-red-500 bg-opacity-80 rounded-lg hover:bg-opacity-100 transition-colors">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">
        <!-- Header -->
        <header class="bg-white bg-opacity-95 backdrop-blur-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Student Portal</h1>
                        <p class="text-gray-600">Monday, July 19, 2025</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-3 bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-colors">
                                <i class="fas fa-bell text-lg"></i>
                                <span class="absolute -top-1 -right-1 h-5 w-5 bg-red-500 text-white rounded-full text-xs flex items-center justify-center">2</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="max-w-7xl mx-auto px-6 py-8">
            <!-- Student Profile Card -->
            <div class="simple-card p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-user text-blue-600 text-xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">My Profile</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Student Information -->
                    <div>
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&q=80" 
                                 alt="John Smith" class="w-24 h-24 rounded-full border-4 border-blue-200 mr-6">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">John Smith</h3>
                                <p class="text-gray-600 text-lg">Student ID: STD-2025-001</p>
                                <p class="text-blue-600 font-semibold">Grade 10-A</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Email:</span>
                                <span class="text-gray-900">john.smith@student.kadriya.edu</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Phone:</span>
                                <span class="text-gray-900">+1 (555) 123-4567</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Date of Birth:</span>
                                <span class="text-gray-900">March 15, 2008</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Address:</span>
                                <span class="text-gray-900">123 Main St, City, State</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Parent Information -->
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-4">Parent/Guardian Information</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Father's Name:</span>
                                <span class="text-gray-900">Michael Smith</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Mother's Name:</span>
                                <span class="text-gray-900">Sarah Smith</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Contact Number:</span>
                                <span class="text-gray-900">+1 (555) 987-6543</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Emergency Contact:</span>
                                <span class="text-gray-900">+1 (555) 111-2222</span>
                            </div>
                        </div>
                        
                        <!-- Academic Info -->
                        <h4 class="text-xl font-bold text-gray-800 mb-4 mt-8">Academic Information</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Class Teacher:</span>
                                <span class="text-gray-900">Ms. Sarah Johnson</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Roll Number:</span>
                                <span class="text-gray-900">15</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 font-medium">Academic Year:</span>
                                <span class="text-gray-900">2024-2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Academic Results -->
                <div class="simple-card p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-chart-line text-green-600"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">My Results</h2>
                    </div>
                    
                    <!-- Overall Performance -->
                    <div class="bg-blue-50 rounded-lg p-4 mb-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-700 font-semibold">Overall Grade</span>
                            <span class="text-2xl font-bold text-blue-600">A-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">GPA</span>
                            <span class="text-lg font-semibold text-blue-600">3.7/4.0</span>
                        </div>
                    </div>
                    
                    <!-- Subject-wise Results -->
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Mathematics</span>
                                <span class="text-blue-600 font-bold">92%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-blue-500 h-3 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Physics</span>
                                <span class="text-green-600 font-bold">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Chemistry</span>
                                <span class="text-purple-600 font-bold">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-purple-500 h-3 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">English</span>
                                <span class="text-orange-600 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-orange-500 h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">History</span>
                                <span class="text-indigo-600 font-bold">87%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-indigo-500 h-3 rounded-full" style="width: 87%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attendance & Performance -->
                <div class="space-y-6">
                    <!-- Attendance Card -->
                    <div class="simple-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-calendar-check text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Attendance</h3>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">95%</div>
                            <p class="text-gray-600">19 out of 20 days present</p>
                            <div class="mt-4 bg-green-50 rounded-lg p-3">
                                <p class="text-sm text-green-700">Excellent attendance record!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Achievement -->
                    <div class="simple-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-star text-yellow-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Recent Achievement</h3>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-600 mb-2">🏆 Honor Roll</div>
                            <p class="text-gray-600">Achieved in Quarter 2</p>
                            <div class="mt-4 bg-yellow-50 rounded-lg p-3">
                                <p class="text-sm text-yellow-700">Keep up the excellent work!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notices from Principal -->
            <div class="simple-card p-6">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-bell text-red-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Notices from Principal</h2>
                </div>
                
                <div class="space-y-4">
                    <!-- Notice 1 -->
                    <div class="border-l-4 border-red-500 bg-red-50 p-4 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-red-800">Parent-Teacher Conference</h3>
                            <span class="text-sm text-red-600 bg-red-100 px-2 py-1 rounded">Important</span>
                        </div>
                        <p class="text-red-700 mb-2">
                            Dear students and parents, the quarterly parent-teacher conference is scheduled for July 25, 2025. 
                            Please inform your parents to attend the meeting with your class teacher.
                        </p>
                        <div class="text-sm text-red-600">
                            <i class="fas fa-calendar mr-1"></i>
                            Posted: July 18, 2025 | By: Dr. Ahmed Hassan (Principal)
                        </div>
                    </div>

                    <!-- Notice 2 -->
                    <div class="border-l-4 border-blue-500 bg-blue-50 p-4 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-blue-800">Annual Science Fair 2025</h3>
                            <span class="text-sm text-blue-600 bg-blue-100 px-2 py-1 rounded">Event</span>
                        </div>
                        <p class="text-blue-700 mb-2">
                            We are excited to announce the Annual Science Fair 2025. Registration will open on August 1st. 
                            Start preparing your innovative projects and showcase your scientific talents!
                        </p>
                        <div class="text-sm text-blue-600">
                            <i class="fas fa-calendar mr-1"></i>
                            Posted: July 15, 2025 | By: Dr. Ahmed Hassan (Principal)
                        </div>
                    </div>

                    <!-- Notice 3 -->
                    <div class="border-l-4 border-green-500 bg-green-50 p-4 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-green-800">Mid-term Examination Results</h3>
                            <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded">Results</span>
                        </div>
                        <p class="text-green-700 mb-2">
                            Congratulations to all students on their excellent performance in the mid-term examinations. 
                            Individual result cards will be distributed on July 22, 2025.
                        </p>
                        <div class="text-sm text-green-600">
                            <i class="fas fa-calendar mr-1"></i>
                            Posted: July 10, 2025 | By: Dr. Ahmed Hassan (Principal)
                        </div>
                    </div>

                    <!-- Notice 4 -->
                    <div class="border-l-4 border-yellow-500 bg-yellow-50 p-4 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-yellow-800">Library Extended Hours</h3>
                            <span class="text-sm text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Information</span>
                        </div>
                        <p class="text-yellow-700 mb-2">
                            The school library will now remain open until 6:00 PM on weekdays to provide students 
                            with more study time and access to resources.
                        </p>
                        <div class="text-sm text-yellow-600">
                            <i class="fas fa-calendar mr-1"></i>
                            Posted: July 8, 2025 | By: Dr. Ahmed Hassan (Principal)
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Simple JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Simple Dashboard Loaded!');
        });
    </script>
</body>
</html>