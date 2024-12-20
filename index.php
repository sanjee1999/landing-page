<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccountPro UK</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-50 pt-20">

    <!-- Navbar -->
    <!-- <nav class="bg-white shadow-md"> -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-10">

        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#" class="text-yellow-600 text-xl font-bold flex items-center">
            <img src="assets/logo.png" alt="AccountPro UK Logo" class="w-25 h-10 mr-2">
                 business solutions
            </a>
            <ul class="flex space-x-6 text-gray-600">
                <li><a href="#" class="hover:text-yellow-600">Services</a></li>
                <li><a href="#" class="hover:text-yellow-600">About</a></li>
                <li><a href="#" class="hover:text-yellow-600">Testimonials</a></li>
                <li><a href="#" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-500">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="text-center py-20 bg-gray-100">
        <h1 class="text-4xl font-bold text-gray-800">Expert Accountancy Services for UK Businesses</h1>
        <p class="text-gray-600 mt-4">Transform your financial management with our comprehensive accounting solutions.<br>We help businesses across the UK streamline their finances and achieve growth.</p>
        <div class="mt-8">
            <a href="#" class="bg-yellow-600 text-white px-6 py-3 rounded hover:bg-yellow-500">Get Started</a>
            <a href="#" class="text-yellow-600 ml-4 hover:underline">Learn more →</a>
        </div>
    </header>

    <!-- Our Services Section -->
    
    <section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800">Our Services</h2>
        <p class="text-gray-600 mt-4">Comprehensive accounting solutions tailored to your business needs.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

            <!-- Service Card 1 - Tax Planning -->
            <a href="/tax-planning" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
                <div class="text-yellow-600 mb-4">
                    <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M392 32H120c-13.3 0-24 10.7-24 24v400c0 13.3 10.7 24 24 24h272c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24zM176 408c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm64-64c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40zm0-80c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Tax Planning</h3>
                <p class="text-gray-600 mt-2 text-center">Strategic tax planning and compliance services for businesses of all sizes.</p>
            </a>
            
            <!-- Service Card 2 - Financial Analysis -->
            <a href="/financial-analysis" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
                <div class="text-yellow-600 mb-4">
                    <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M440 64H72c-13.3 0-24 10.7-24 24v336c0 13.3 10.7 24 24 24h368c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zm-24 336H144c-13.3 0-24-10.7-24-24s10.7-24 24-24h272c13.3 0 24 10.7 24 24s-10.7 24-24 24zm0-80H144c-13.3 0-24-10.7-24-24s10.7-24 24-24h272c13.3 0 24 10.7 24 24s-10.7 24-24 24z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Financial Analysis</h3>
                <p class="text-gray-600 mt-2 text-center">Comprehensive financial analysis and reporting for informed decision-making.</p>
            </a>
            
            <!-- Service Card 3 - Bookkeeping -->
            <a href="/bookkeeping" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
                <div class="text-yellow-600 mb-4">
                    <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M432 64H80c-13.3 0-24 10.7-24 24v336c0 13.3 10.7 24 24 24h352c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM176 408c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Bookkeeping</h3>
                <p class="text-gray-600 mt-2 text-center">Accurate and timely bookkeeping services to keep your finances organized.</p>
            </a>

            <!-- Service Card 4 - Business Advisory -->
      <a href="/business-advisory" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M480 352l-96-96 96-96v192zM32 256l96 96 96-96H32z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Business Advisory</h3>
        <p class="text-gray-600 mt-2 text-center">Expert business advice to help your company grow and succeed.</p>
      </a>

      <!-- Service Card 5 - Payroll Services -->
      <a href="/payroll-services" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M384 256h32v112h-32zM96 256h32v112H96z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Payroll Services</h3>
        <p class="text-gray-600 mt-2 text-center">Efficient payroll management and processing for your employees.</p>
      </a>

      <!-- Service Card 6 - Growth Strategy -->
      <a href="/growth-strategy" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M512 128l-64-64-128 128v288h192V128z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Growth Strategy</h3>
        <p class="text-gray-600 mt-2 text-center">Strategic planning and guidance for sustainable business growth.</p>
      </a>

      <!-- Service Card 7 - Investment Planning -->
      <a href="/investment-planning" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M400 32H112c-13.3 0-24 10.7-24 24v400c0 13.3 10.7 24 24 24h288c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24zM152 408c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Investment Planning</h3>
        <p class="text-gray-600 mt-2 text-center">Expert financial guidance for making strategic investment decisions.</p>
      </a>

      <!-- Service Card 8 - Risk Management -->
      <a href="/risk-management" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M256 32c-115.3 0-208 92.7-208 208s92.7 208 208 208 208-92.7 208-208-92.7-208-208-208zm0 368c-88.4 0-160-71.6-160-160s71.6-160 160-160 160 71.6 160 160-71.6 160-160 160z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Risk Management</h3>
        <p class="text-gray-600 mt-2 text-center">Strategic solutions to minimize risks and ensure financial security.</p>
      </a>

      <!-- Service Card 9 - Wealth Management -->
      <a href="/wealth-management" class="block bg-white border border-gray-200 rounded-lg shadow-md p-6 hover:scale-105 hover:shadow-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out transform">
        <div class="text-yellow-600 mb-4">
          <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
            <path d="M256 32c-115.3 0-208 92.7-208 208s92.7 208 208 208 208-92.7 208-208-92.7-208-208-208zm0 368c-88.4 0-160-71.6-160-160s71.6-160 160-160 160 71.6 160 160-71.6 160-160 160z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center">Wealth Management</h3>
        <p class="text-gray-600 mt-2 text-center">Comprehensive strategies to manage and grow your wealth sustainably.</p>
      </a>
        </div>
    </div>
</section>


<!-- Services Section Ends Here -->

<!-- Testimonials Section -->
<section id="testimonials" class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-center text-gray-900">What Our Clients Say</h2>
    <p class="mt-4 text-center text-gray-600">Don't just take our word for it - hear from some of our satisfied clients</p>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center">
        <img src="assets/photo1.png" alt="Sarah Thompson" class="mx-auto rounded-full h-24 w-24">
        <h3 class="mt-4 text-lg font-semibold text-gray-900">Sarah Thompson</h3>
        <p class="text-sm text-gray-500">CEO, Tech Innovations Ltd</p>
        <p class="mt-2 text-yellow-400">★★★★★</p>
        <p class="mt-4 text-gray-700">Working with AccountPro UK has transformed our financial operations. Their expertise and attention to detail are unmatched.</p>
      </div>
      <!-- Testimonial 2 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center">
        <img src="assets/photo2.png" alt="James Wilson" class="mx-auto rounded-full h-24 w-24">
        <h3 class="mt-4 text-lg font-semibold text-gray-900">James Wilson</h3>
        <p class="text-sm text-gray-500">Director, Wilson Manufacturing</p>
        <p class="mt-2 text-yellow-400">★★★★★</p>
        <p class="mt-4 text-gray-700">The team's proactive approach to tax planning has saved us thousands of pounds. Highly recommended!</p>
      </div>
      <!-- Testimonial 3 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center">
        <img src="assets/photo4.png" alt="Emily Roberts" class="mx-auto rounded-full h-24 w-24">
        <h3 class="mt-4 text-lg font-semibold text-gray-900">Emily Roberts</h3>
        <p class="text-sm text-gray-500">Founder, Digital Solutions</p>
        <p class="mt-2 text-yellow-400">★★★★★</p>
        <p class="mt-4 text-gray-700">Exceptional service! They've been instrumental in our company's growth and financial success.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-center text-gray-900">Get in Touch</h2>
    <p class="mt-4 text-center text-gray-600">Ready to transform your business finances? Contact us today for a free consultation.</p>
    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Contact Details -->
      <div class="space-y-4">
        <p class="text-lg text-gray-700"><strong>Phone:</strong> +44 (0) 20 7993 8112 <br>&emsp;&emsp;&emsp;&ensp;+44 (0) 79 7969 6666</p>
        <p class="text-lg text-gray-700"><strong>Email:</strong> info@amberbusinesssolutions.net</p>
        <p class="text-lg text-gray-700"><strong>Address:</strong> Amber Business Solutions (London) Ltd.<br> &emsp;&emsp;&emsp;&emsp;&nbsp;UK, Sri Lanka India.</p>
      </div>
      <!-- Contact Form -->
      <form action="contact-form.php" method="POST" class="bg-gray-50 shadow-lg rounded-lg p-6">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
          <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
          <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>
        <button type="submit" class="w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-500">Send Message</button>
      </form>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="bg-gray-900 text-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- About -->
      <div>
        <h3 class="text-lg font-semibold">Amber Business Solutions</h3>
        <p class="mt-2 text-gray-400">Professional accounting services for businesses across the United Kingdom.</p>
      </div>
      <!-- Quick Links -->
      <div>
        <h4 class="text-lg font-semibold">Quick Links</h4>
        <ul class="mt-2 space-y-2">
          <li><a href="#services" class="text-gray-400 hover:text-white">Services</a></li>
          <li><a href="#about" class="text-gray-400 hover:text-white">About Us</a></li>
          <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimonials</a></li>
          <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
        </ul>
      </div>
      <!-- Legal Links -->
      <div>
        <h4 class="text-lg font-semibold">Legal</h4>
        <ul class="mt-2 space-y-2">
          <li><a href="#privacy-policy" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
          <li><a href="#terms-of-service" class="text-gray-400 hover:text-white">Terms of Service</a></li>
          <li><a href="#cookie-policy" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
    <!-- <p class="mt-8 text-center text-gray-500">© 2024 AccountPro UK. All rights reserved.</p> -->
  </div>
</footer>
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2024 Amber Business Solutions. All Rights Reserved.</p>
</footer>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-10"></div>

    <!-- Popup -->
<div id="popup" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg shadow-lg hidden z-20 text-center">
    <p id="popup-message" class="text-lg text-gray-800 mb-4"></p>
    <button onclick="closePopup()" class="mx-auto mt-4 bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
        Close
    </button>
</div>

    <script>
        // Function to close the popup
        function closePopup() {
            document.getElementById('overlay').classList.add('hidden');
            document.getElementById('popup').classList.add('hidden');
        }

        // Display the popup if there's a query parameter
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const message = urlParams.get('message');

        if (status) {
            const popup = document.getElementById('popup');
            const overlay = document.getElementById('overlay');
            const popupMessage = document.getElementById('popup-message');

            if (status === 'success') {
                popupMessage.textContent = 'Your message has been sent successfully!';
            } else if (status === 'error') {
                popupMessage.textContent = `Failed to send your message. ${decodeURIComponent(message)}`;
            }

            overlay.classList.remove('hidden');
            popup.classList.remove('hidden');
        }
    </script>
</body>
</html>
