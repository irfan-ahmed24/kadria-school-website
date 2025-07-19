<section id="apply" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Apply for Admission</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Join our vibrant learning community. Complete the application form below to start your journey with Kadriya School.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Left Side - Information Cards -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Admission Process Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-clipboard-list text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Admission Process</h3>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">1</span>
                            Submit online application
                        </li>
                        <li class="flex items-start">
                            <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">2</span>
                            Document verification
                        </li>
                        <li class="flex items-start">
                            <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">3</span>
                            Entrance assessment
                        </li>
                        <li class="flex items-start">
                            <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">4</span>
                            Parent interview
                        </li>
                        <li class="flex items-start">
                            <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">5</span>
                            Admission confirmation
                        </li>
                    </ul>
                </div>

                <!-- Important Dates Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-success rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Important Dates</h3>
                    </div>
                    <div class="space-y-3 text-gray-600">
                        <div class="flex justify-between items-center">
                            <span>Application Opens:</span>
                            <span class="font-semibold text-primary">Jan 15, 2025</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Application Deadline:</span>
                            <span class="font-semibold text-red-600">Mar 31, 2025</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Entrance Test:</span>
                            <span class="font-semibold text-primary">Apr 15, 2025</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Result Declaration:</span>
                            <span class="font-semibold text-primary">May 1, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Required Documents Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-file-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Required Documents</h3>
                    </div>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-success mr-2"></i>
                            Birth Certificate
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-success mr-2"></i>
                            Previous School Records
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-success mr-2"></i>
                            Passport Size Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-success mr-2"></i>
                            Medical Certificate
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-success mr-2"></i>
                            Parent ID Documents
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Side - Application Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Application Form</h3>
                    
                    <form id="admissionForm" class="space-y-6">
                        <!-- Student Information Section -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-user text-primary mr-2"></i>
                                Student Information
                            </h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                    <input type="text" name="firstName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                    <input type="text" name="lastName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth *</label>
                                    <input type="date" name="dateOfBirth" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Gender *</label>
                                    <select name="gender" required 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Grade Applying For *</label>
                                    <select name="grade" required 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                        <option value="">Select Grade</option>
                                        <option value="pre-k">Pre-K</option>
                                        <option value="kindergarten">Kindergarten</option>
                                        <option value="grade-1">Grade 1</option>
                                        <option value="grade-2">Grade 2</option>
                                        <option value="grade-3">Grade 3</option>
                                        <option value="grade-4">Grade 4</option>
                                        <option value="grade-5">Grade 5</option>
                                        <option value="grade-6">Grade 6</option>
                                        <option value="grade-7">Grade 7</option>
                                        <option value="grade-8">Grade 8</option>
                                        <option value="grade-9">Grade 9</option>
                                        <option value="grade-10">Grade 10</option>
                                        <option value="grade-11">Grade 11</option>
                                        <option value="grade-12">Grade 12</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Previous School</label>
                                    <input type="text" name="previousSchool" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Parent/Guardian Information Section -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-users text-primary mr-2"></i>
                                Parent/Guardian Information
                            </h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Father's Name *</label>
                                    <input type="text" name="fatherName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Mother's Name *</label>
                                    <input type="text" name="motherName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Father's Occupation</label>
                                    <input type="text" name="fatherOccupation" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Mother's Occupation</label>
                                    <input type="text" name="motherOccupation" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-phone text-primary mr-2"></i>
                                Contact Information
                            </h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Primary Phone *</label>
                                    <input type="tel" name="primaryPhone" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" name="email" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Home Address *</label>
                                    <textarea name="address" rows="3" required 
                                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">City *</label>
                                    <input type="text" name="city" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Postal Code *</label>
                                    <input type="text" name="postalCode" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6">
                            <button type="submit" 
                                    class="flex-1 bg-primary text-white py-4 px-8 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Submit Application
                            </button>
                            <button type="button" 
                                    class="flex-1 bg-gray-500 text-white py-4 px-8 rounded-lg font-semibold hover:bg-gray-600 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <i class="fas fa-save mr-2"></i>
                                Save as Draft
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information Footer -->
        <div class="mt-16 text-center">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Need Help with Your Application?</h3>
                <p class="text-gray-600 mb-6">Our admissions team is here to assist you throughout the application process.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="tel:+1234567890" class="flex items-center text-primary hover:text-blue-700 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        +1 (234) 567-8900
                    </a>
                    <a href="mailto:admissions@kadriayaschool.edu" class="flex items-center text-primary hover:text-blue-700 transition-colors">
                        <i class="fas fa-envelope mr-2"></i>
                        admissions@kadriayaschool.edu
                    </a>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-clock mr-2"></i>
                        Mon-Fri: 9AM-5PM
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Validation JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('admissionForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic form validation
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('border-red-500');
                isValid = false;
            } else {
                field.classList.remove('border-red-500');
            }
        });
        
        if (isValid) {
            // Show success message
            showNotification('Application submitted successfully!', 'success');
            
            // Here you would typically send the data to your server
            console.log('Form data:', new FormData(form));
        } else {
            showNotification('Please fill in all required fields.', 'error');
        }
    });
    
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
            type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
        }`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }
});
</script>
