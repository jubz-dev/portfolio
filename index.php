<?php
// require 'vendor/autoload.php';
// require_once('src/mailerClass/PHPMailerAutoload.php');
// require_once('src/app/contactMessage.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PORTFOLIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="./src/icons/logo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='./src/output.css'>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body class="bg-background overflow-x-hidden font-poppins">
<!-- header -->
<header class="sticky top-0 right-0 left-0 md:py-1 transition-all duration-300">
    <nav class="max-w-7xl mx-auto bg-green-900 md:bg-transparent p-5">
      <div class="flex items-center justify-between">
          <a href="/" class="text-white font-bold font-medium text-lg flex items-center gap-3"><div data-initials="JS">PORTFOLIO</div></a>
          <!-- only for large device -->
          <div class="hidden md:flex space-x-10">
            <a href="#home" class="text-primary hover:text-gray-300">Home</a>
            <a href="#skills" class="text-white hover:text-gray-300">Skills</a>
            <a href="#resume" class="text-white hover:text-gray-300">Resume</a>
            <a href="#message" class="text-white hover:text-gray-300">Message</a>
          </div>
          <!-- menu btn, only disply on mobile -->
          <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white text-2xl cursor-pointer">
              <span class="toggle block"><i class="bx bx-menu text-5xl"></i></span>
              <span class="toggle hidden"><i class="bx bx-x text-5xl"></i></span>
            </button>
          </div>
      </div>
    </nav>

    <!-- mobile menu -->
    <nav class="absolute bg-green-900 w-full opacity-90">
      <div id="mobile-menu" class="toggle hidden md:hidden p-5">
          <a href="#home" class="block text-white p-2 mt-3 hover:bg-green-800">Home</a>
          <a href="#skills" class="block text-white p-2 hover:bg-green-800">Skills</a>
          <a href="#resume" class="block text-white p-2 hover:bg-green-800">Resume</a>
          <a href="#message" class="block text-white p-2 hover:bg-green-800">Message</a>
      </div>
    </nav>
</header>

<!-- banner section -->
<section class="max-w-7xl mx-auto px-5" id="home">
    <div class="flex md:flex-row flex-col justify-between items-center text-white gap-4 py-10">
      <div class="md:w-1/2">
          <p class="text-xl font-medium mb-4">
            Hello, <span class="text-primary">I'm</span>
          </p>
          <h1 class="font-bold text-4xl tracking-[3.22px] mb-5">Jubail Salamida</h1>
          <p class="text-2xl mb-5">
            Back-End Software Engineer
          </p>
          <p class="text-lg mb-9 md:w-3/4 text-justify leading-8">
            I am passionate about creating impactful web solutions using PHP, web development, and databases, building scalable systems that enhance user experience.
          </p>
          <a href="#message"><button class="flex items-center justify-center px-10 py-4 border border-transparent font-medium rounded-md text-secondary bg-green-250 hover:bg-primary cursor-pointer"><i class="bx bxs-chevrons-down text-3xl text-secondar pr-1"></i>Let's Talk</button></a>
          <div class="mt-9 mb-8 flex gap-4 items-center">
            <div class="flex space-x-3">
              <a href="https://www.linkedin.com/in/rudolfo-salamida-5835101a1/" target="_blank" class="inline-flex items-center justify-center border bg-secondary border-secondary hover:border-green-700 hover:bg-green-700 text-white rounded-full mr-2">
                <i class="bx bxl-linkedin text-2xl p-2"></i>
              </a>
              <a href="tel:+639953389390" class="inline-flex items-center justify-center border bg-secondary border-secondary hover:border-green-700 hover:bg-green-700 text-white rounded-full mr-2">
                <i class="bx bx-mobile text-2xl p-2"></i>
              </a>
              <a href="mailto:rjmsalamida@gmail.com" class="inline-flex items-center justify-center border bg-secondary border-secondary hover:border-green-700 hover:bg-green-700 text-white rounded-full">
                <i class="bx bx-envelope text-2xl p-2"></i>
              </a>
            </div>
          </div>
      </div>
      <div class="md:w-1/2 order-first md:order-none">
          <img src="src/img/profilepic.png" alt="" class="md:ml-20 w-full" />
      </div>
    </div>
</section>

<!-- skills section -->
<section class="px-5 my-16 mx-auto max-w-7xl text-white" id="skills">
    <div class="h-8 md:hidden"></div>
    <div class="text-center">
      <h3 class="text-3xl font-bold mb-5">
          My <span class="text-primary">Skills</span>
      </h3>
    </div>
    <!-- skills cards -->
    <div class="my-6 grid-cols-2 gap-8 grid lg:grid-cols-4 lg:gap-12 md:grid-cols-4 md:gap-12 justify-around items-center">
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="php-container">
          <img src="src/icons/skills/php.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="php-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="sql-container">
          <img src="src/icons/skills/sql.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="sql-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="redis-container">
          <img src="src/icons/skills/redis.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="redis-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="git-container">
            <img src="src/icons/skills/git.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="git-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="wordpress-container">
            <img src="src/icons/skills/wordpress.png" alt="" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="wordpress-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="html5-container">
            <img src="src/icons/skills/html5.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="html5-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="css3-container">
            <img src="src/icons/skills/css3.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="css3-default"/>
        </div>
        <div class="w-full px-5 py-8 rounded-lg border border-primary shadow-green-400/30 cursor-pointer shadow-xl relative flex justify-center items-center h-0 opacity-0 scale-95 overflow-hidden transition-all duration-700" id="javascript-container">
            <img src="src/icons/skills/javascript.png" alt="Default" class="w-[196px] mx-auto hidden grayscale hover:grayscale-0 transition duration-300" id="javascript-default"/>
        </div>
    </div>
</section>

<!-- resume section -->
<section class="px-5 my-32 mx-auto max-w-7xl" id="resume">
    <div class="h-8 md:hidden"></div>
    <div class="text-white">
        <h3 class="text-3xl font-bold mb-5 text-center">
            My <span class="text-primary">Resume</span>
        </h3>
        <div class="border border-primary shadow-xl shadow-green-400/30 rounded-2xl max-w-4xl mx-auto py-10 px-4 sm:px-6 sm:py-6 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-4xl font-extrabold tracking-tight text-neutral-900 sm:text-4xl">
                <span class="block text-2xl font-medium mb-4 text-white">Let’s connect!</span>
                <span class="block bg-primary bg-clip-text text-transparent">Grab my resume here</span>
            </h2>
            <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
                <a href="/src/app/download.php"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary bg-green-250 hover:bg-primary md:py-4 md:text-lg md:px-10"><i class="bx bxs-download text-3xl pr-1 animate-bounce"></i>Download
                </a>
            </div>
        </div>
    </div>
</section>

<!-- message section -->
<section class="my-16 max-w-7xl mx-auto px-5" id="message">
  <div class="h-8 md:hidden"></div>
  <div class="text-center text-white">
    <h3 class="text-3xl font-bold mb-5">
        <span class="text-primary">Message</span> Me
    </h3>
    <p class="text-2xl text-center text-white font-medium mb-4">
      Looking forward to hearing from you!
    </p>
  </div>
  <form id="contactForm" method="POST">
    <div class="container mx-auto">
      <div class="mx-auto md:w-2/3">
        <!-- success message -->
        <div id="successMessage" class="mb-7 p-4 border-l-4 border-primary -6 rounded border-green-800; bg-green-800 bg-opacity-40 hidden">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div class="ml-3">
              <div class="text-sm text-primary">
                <p>Your message has been sent successfully!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- failed message -->
        <div id="failedMessage" class="mb-7 p-4 border-l-4 border-red-500 -6 rounded border-gray-700 bg-white bg-opacity-40 hidden">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg viewBox="0 0 24 24" class="w-5 h-5 text-red-500 stroke-current" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8V12V8ZM12 16H12.01H12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
            <div class="ml-3">
              <div class="text-sm text-red-500">
                <p>Failed to send your message. Please try again later.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="-m-2 flex flex-wrap">
            <div class="w-full md:w-1/2 p-2">
              <div class="relative">
                <input type="text" id="name" name="name" 
                  class="peer w-full rounded border border-primary bg-background bg-opacity-40 py-3 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-background focus:ring-2 focus:ring-primary-900" 
                  placeholder="Name" required />
                <label for="name" 
                  class="absolute left-3 -top-4 pt-1 px-2 bg-background text-sm leading-6 text-primary transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:pl-[0] peer-placeholder-shown:top-3 peer-placeholder-shown:bg-background peer-placeholder-shown:text-white peer-focus:pl-[9px] peer-focus:left-3 peer-focus:-top-4 peer-focus:text-sm peer-focus:px-2 peer-focus:bg-background peer-focus:text-white inline-block">
                  Name
                </label>
              </div>
            </div>
            <div class="w-full md:w-1/2 p-2">
              <div class="relative">
                <input type="email" id="email" name="email"
                  class="peer w-full rounded border border-primary bg-background bg-opacity-40 py-3 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-background focus:ring-2 focus:ring-primary-900" 
                  placeholder="Email" required />
                <label for="email"
                  class="absolute left-3 -top-4 pt-1 px-2 bg-background text-sm leading-6 text-primary transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:pl-[0] peer-placeholder-shown:top-3 peer-placeholder-shown:bg-background peer-placeholder-shown:text-white peer-focus:pl-[9px] peer-focus:left-3 peer-focus:-top-4 peer-focus:text-sm peer-focus:px-2 peer-focus:bg-background peer-focus:text-white inline-block">
                  Email
                </label>
              </div>
            </div>
            <div class="w-full p-2">
              <div class="relative">
                <textarea id="message" name="message" class="peer h-32 w-full resize-none rounded border border-primary bg-background bg-opacity-40 py-3 px-3 text-base leading-6 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-background focus:ring-2 focus:ring-primary-900" placeholder="Message" required></textarea>
                <label for="message" class="absolute left-3 -top-4 pt-1 px-2 bg-background text-sm leading-6 text-primary transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:pl-[0] peer-placeholder-shown:top-3 peer-placeholder-shown:bg-background peer-placeholder-shown:text-white peer-focus:pl-[9px] peer-focus:left-3 peer-focus:-top-4 peer-focus:text-sm peer-focus:px-2 peer-focus:bg-background peer-focus:text-white inline-block">
                  Message
                </label>
              </div>
            </div>
            <div class="w-full p-2">
              <button type="submit" id="sendButton" class="w-full flex items-center justify-center px-8 py-3 border border-transparent font-medium rounded-md text-secondary bg-green-250 hover:bg-primary md:py-4 md:text-lg md:px-10 cursor-pointer" name="submit"><i class="bx bxs-paper-plane text-3xl"></i><span class="pl-1">Send</span></button>
              <!-- <button class="w-full flex items-center justify-center px-8 py-3 border border-transparent font-medium rounded-md text-secondary bg-green-250 hover:bg-primary md:py-4 md:text-lg md:px-10 cursor-pointer" name="submit"><i class="bx bx-loader-alt text-3xl animate-spin"></i><span class="pl-1">Processing...<span></button> -->
            </div>
        </div>
      </div>
    </div>
  </form>
</section>

<!-- footer -->
<footer>
  <div class="mt-28 max-w-7xl mx-auto pt-7 text-white px-5">
      <div class="flex flex-wrap justify-between">
        <div class="my-4 w-full md:w-1/3">
          <a href="/" class="text-white font-bold font-medium text-lg flex items-center gap-3"><div data-initials="JS">PORTFOLIO</div></a>
          <h1 class="font-bold text-2xl tracking-[3.22px] py-2">Jubail Salamida</h1>
          <p class="text-1xl mb-2">
              Back-End Software Engineer
          </p>
        </div>
        <div class="my-4 w-full sm:w-auto md:w-1/3 md:pl-25">
          <div>
            <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-secondary">Links</h2>
          </div>
          <ul class="leading-8">
            <li><a href="#home" class="block text-slate-300 hover:text-primary">Home</a></li>
            <li><a href="#skills" class="block text-slate-300 hover:text-primary">Skills</a></li>
            <li><a href="#resume" class="block text-slate-300 hover:text-primary">Resume</a></li>
            <li><a href="#message" class="block text-slate-300 hover:text-primary">Message</a></li>
          </ul>
        </div>
        <div class="my-4 w-full sm:w-auto md:w-1/3 md:pl-25">
          <div>
            <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-secondary">Connect With Me</h2>
          </div>

          <a href="https://www.linkedin.com/in/rudolfo-salamida-5835101a1/" target="_blank" class="inline-flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:text-primary rounded-full mt-2 mr-1">
            <i class="bx bxl-linkedin text-2xl p-2"></i>
          </a>
          <a href="tel:+639953389390" class="inline-flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:text-primary rounded-full mt-2 mr-1">
            <i class="bx bx-mobile text-2xl p-2"></i>
          </a>
          <a href="mailto:rjmsalamida@gmail.com" class="inline-flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:text-primary rounded-full mt-2">
            <i class="bx bx-envelope text-2xl p-2"></i>
          </a>
        </div>
      </div>
  </div>
  <div class="py-4 text-gray-300 max-w-7xl mx-auto px-5">
      <div class="flex flex-wrap justify-between">
        <div class="w-full sm:w-auto sm:text-left">
          Copyright © 2025 JS Portfolio. All Rights Reserved.
        </div>
        <div class="w-full sm:w-auto sm:text-left">
          Made by JS.
        </div>
      </div>
  </div>
  <div class="h-15 md:hidden"></div>
</footer>

<!-- script tags -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="src/app.js"></script>
</body>
</html>