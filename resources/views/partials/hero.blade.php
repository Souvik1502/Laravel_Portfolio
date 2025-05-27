<section id="hero" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
        <div data-aos="fade-up" data-aos-delay="100">
            <!-- Profile Image -->
            <div class="relative w-48 h-48 mx-auto mb-8">
                <div class="absolute inset-0 bg-blue-600 rounded-full animate-pulse"></div>
                <img 
                    src="{{ asset('images/profile.jpg') }}" 
                    alt="Shadow Developer Profile Picture" 
                    class="relative w-full h-full object-cover rounded-full border-4 border-white dark:border-gray-800 shadow-lg transform hover:scale-105 transition duration-300"
                    onError="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Shadow+Developer&size=200&background=3B82F6&color=fff'"
                >
            </div>
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                <span id="typing-prefix"></span><span class="text-blue-600 dark:text-blue-400" id="typing-main"></span><span class="typing-cursor">|</span>
            </h1>
            <h2 class="text-xl sm:text-2xl md:text-3xl text-gray-600 dark:text-gray-300 mb-8">
                Full Stack Web Developer
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-12">
                I create beautiful, responsive, and user-friendly web applications using modern technologies.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#projects" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-150">
                    View My Work
                </a>
                <a href="#contact" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-700 text-base font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150">
                    Contact Me
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>

    <style>
        .typing-cursor {
            display: inline-block;
            width: 3px;
            animation: blink 1s infinite;
            margin-left: 2px;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phrases = [
                { prefix: "Hi, I'm ", main: "Shadow Developer" },
                { prefix: "I'm a ", main: "Problem Solver" },
                { prefix: "I'm a ", main: "Web Developer" }
            ];
            
            const typingPrefix = document.getElementById('typing-prefix');
            const typingMain = document.getElementById('typing-main');
            let phraseIndex = 0;
            let isDeleting = false;
            let currentText = '';
            let currentPhrase = phrases[phraseIndex];

            function type() {
                // Get current phrase
                currentPhrase = phrases[phraseIndex];
                const fullText = currentPhrase.prefix + currentPhrase.main;

                // Update text based on whether we're deleting or typing
                if (isDeleting) {
                    currentText = fullText.substring(0, currentText.length - 1);
                } else {
                    currentText = fullText.substring(0, currentText.length + 1);
                }

                // Split and update the display
                if (currentText.length <= currentPhrase.prefix.length) {
                    typingPrefix.textContent = currentText;
                    typingMain.textContent = '';
                } else {
                    typingPrefix.textContent = currentPhrase.prefix;
                    typingMain.textContent = currentText.substring(currentPhrase.prefix.length);
                }

                // Typing speed
                let typeSpeed = isDeleting ? 50 : 100;

                // Check if complete
                if (!isDeleting && currentText === fullText) {
                    typeSpeed = 2000; // Pause at end
                    isDeleting = true;
                } else if (isDeleting && currentText === '') {
                    isDeleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    typeSpeed = 500; // Pause before next phrase
                }

                setTimeout(type, typeSpeed);
            }

            // Start typing
            setTimeout(type, 1000);
        });
    </script>
</section> 