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
              <span class="toggle block"><i class="bx bx-menu text-3xl"></i></span>
              <span class="toggle hidden"><i class="bx bx-x text-3xl"></i></span>
            </button>
          </div>
      </div>
    </nav>

    <!-- mobile menu -->
    <nav class="bg-green-900">
      <div id="mobile-menu" class="toggle hidden md:hidden p-2 px-5">
          <a href="#home" class="block text-white py-2 mt-3 hover:bg-green-800">Home</a>
          <a href="#skills" class="block text-white py-2 hover:bg-green-800">Skills</a>
          <a href="#resume" class="block text-white py-2 hover:bg-green-800">Resume</a>
          <a href="#message" class="block text-white py-2 hover:bg-green-800">Message</a>
      </div>
    </nav>
</header>

<!-- script tags -->
<script src="src/app.js"></script>
</body>
</html>