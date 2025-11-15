<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-96 bg-gradient-to-r from-blue-600 via-cyan-600 to-blue-600 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="relative text-center max-w-4xl">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white drop-shadow-lg mb-6">Get In Touch</h1>
            <p class="text-xl sm:text-2xl text-blue-100 mb-4">We're here to help and answer any question you might have</p>
            <p class="text-lg text-blue-50">Connect with our team and start planning your unforgettable Bangladesh adventure</p>
        </div>
    </section>

    <!-- Contact Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 mb-16">
            <!-- Contact Info Cards -->
            <div class="group relative bg-gradient-to-br from-white to-slate-50 rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-blue-400">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">📍</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Our Location</h3>
                <p class="text-slate-600 leading-relaxed">Sector #07, Road #02<br>Uttara, Dhaka 1213<br>Bangladesh</p>
            </div>

            <div class="group relative bg-gradient-to-br from-white to-slate-50 rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-blue-400">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">📱</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Call Us</h3>
                <p class="text-slate-600 leading-relaxed">
                    <a href="tel:+8801705712769" class="hover:text-blue-600 font-semibold transition-colors duration-300">+88 01705 712 769</a><br>
                    <span class="text-sm">Available 9AM - 6PM (Sat-Thu)</span>
                </p>
            </div>

            <div class="group relative bg-gradient-to-br from-white to-slate-50 rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-blue-400">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">✉️</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Email Us</h3>
                <p class="text-slate-600 leading-relaxed">
                    <a href="mailto:jarifrahman444@gmail.com" class="hover:text-blue-600 font-semibold transition-colors duration-300">jarifrahman444@gmail.com</a><br>
                    <span class="text-sm">We'll reply within 24 hours</span>
                </p>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-2">Send us a Message</h2>
                <p class="text-slate-600 mb-8">Fill out the form below and we'll get back to you shortly.</p>

                <form class="space-y-6">
                    <!-- Name & Email Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2.5">Full Name</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2.5">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com" class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Phone & Subject Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2.5">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880 1..." class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2.5">Subject</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 bg-white text-slate-900">
                                <option value="">Select a subject...</option>
                                <option value="general">General Inquiry</option>
                                <option value="booking">Booking Question</option>
                                <option value="feedback">Feedback</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-2.5">Message</label>
                        <textarea id="message" name="message" required rows="6" placeholder="Tell us what's on your mind..." class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-2">Why Connect With Us?</h2>
                <p class="text-slate-600 mb-8">We're passionate about helping travellers discover Bangladesh and making their journey unforgettable.</p>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">⚡</div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Quick Response</h4>
                            <p class="text-slate-600 text-sm">We respond to all inquiries within 24 hours</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">🎯</div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Expert Team</h4>
                            <p class="text-slate-600 text-sm">Our travel experts are here to help with any question</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">🤝</div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Personalized Service</h4>
                            <p class="text-slate-600 text-sm">Custom travel plans tailored to your preferences</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">📍</div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Local Knowledge</h4>
                            <p class="text-slate-600 text-sm">Deep knowledge of Bangladesh's hidden gems</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="mt-12 pt-8 border-t border-slate-200">
                    <p class="text-slate-600 font-semibold mb-4">Follow Us</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">f</a>
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">𝕏</a>
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">📷</a>
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">▶️</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>