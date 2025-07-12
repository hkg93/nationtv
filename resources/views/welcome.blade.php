<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home | Nation TV</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-orange-500 text-white h-24">
  <div class="container mx-auto flex items-center px-4 h-full">
   <!-- Hamburger -->
    <div class="md:hidden">
      <button id="menu-toggle" class="focus:outline-none">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
    <!-- Logo Box with crop effect -->
    <div class="h-full w-[350px] overflow-hidden flex items-center px-2">
      <img src="{{asset('/logo-10.png')}}"
           alt="Logo"
           class="h-[200px] w-auto object-cover mx-auto" />
    </div>
	
	<div class="md:hidden">
      <button id="menu-toggle" class="mx-8 focus:outline-none bg-white text-gray-800 px-2 py-1 inline rounded">
      <svg xmlns="http://www.w3.org/2000/svg" class="inline" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M336-144v-96H168q-29.7 0-50.85-21.16Q96-282.32 96-312.04v-432.24Q96-774 117.15-795T168-816h624q29.7 0 50.85 21.16Q864-773.68 864-743.96v432.24Q864-282 842.85-261T792-240H624v96H336ZM168-312h624v-432H168v432Zm0 0v-432 432Z"/></svg> LIVE TV
      </button>
    </div>


 

    <!-- Desktop Menu -->
    <ul id="menu" class="mx-8 hidden md:flex gap-6 text-sm font-semibold">
      <li><a href="#" class="hover:underline">होम</a></li>

      <!-- Dropdown -->
      <li class="relative group">
        <button class="hover:underline focus:outline-none text-white font-semibold">
          राष्ट्रीय
          <svg class="w-3 h-3 inline-block ml-1" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.25 8.29a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <ul class="absolute hidden group-hover:block bg-white text-black w-48 mt-2 py-2 rounded shadow-lg z-50 max-h-96 overflow-y-auto">
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">उत्तर प्रदेश</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">उत्तराखंड</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">मध्य प्रदेश</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">छत्तीसगढ़</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">बिहार</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">झारखंड</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">महाराष्ट्र</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">गुजरात</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">कर्नाटका</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">दिल्ली</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">राजस्थान</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">पंजाब</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">हरियाणा</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">हिमाचल प्रदेश</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">गोवा</a></li>
        </ul>
      </li>

      <li><a href="#" class="hover:underline">अंतर्राष्ट्रीय</a></li>
      <li><a href="#" class="hover:underline">सोशल ट्रेंड</a></li>
      <li><a href="#" class="hover:underline">मनोरंजन</a></li>
      <li><a href="#" class="hover:underline">शिक्षा</a></li>
      <li><a href="#" class="hover:underline">खेल</a></li>
      <li><a href="#" class="hover:underline">राजनीति</a></li>
      <li><a href="#" class="hover:underline">स्वास्थ्य</a></li>
      <li><a href="#" class="hover:underline">क्राइम</a></li>
      <li><a href="#" class="hover:underline">धर्म</a></li>
      <li><a href="#" class="hover:underline">बिज़नेस</a></li>
      <li><a href="#" class="hover:underline">ई-पेपर</a></li>
      <li><button class="hover:underline focus:outline-none text-white font-semibold bg-orange-600 p-1 rounded">
         <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z"/></svg>
        </button></li>
    </ul>
  </div>

  <!-- Mobile Sidebar Menu -->
  <div id="mobile-menu" class="fixed top-0 left-0 w-64 h-full bg-orange-600 text-white z-50 transform -translate-x-full transition-transform duration-300 md:hidden">
    <div class="p-4 flex justify-between items-center border-b border-orange-300">
      <span class="text-lg font-bold">मेनू</span>
      <button onclick="toggleMenu()" class="text-white">
        ✕
      </button>
    </div>
    <ul class="p-4 space-y-2 font-semibold">
      <li><a href="#" class="block">होम</a></li>
      <li>
        <details class="bg-orange-500 rounded">
          <summary class="px-2 py-2 cursor-pointer">राष्ट्रीय</summary>
          <ul class="pl-4 pb-2 text-sm">
            <li><a href="#" class="block py-1">उत्तर प्रदेश</a></li>
            <li><a href="#" class="block py-1">उत्तराखंड</a></li>
            <li><a href="#" class="block py-1">मध्य प्रदेश</a></li>
            <li><a href="#" class="block py-1">छत्तीसगढ़</a></li>
            <li><a href="#" class="block py-1">बिहार</a></li>
            <li><a href="#" class="block py-1">राजस्थान</a></li>
          </ul>
        </details>
      </li>
      <li><a href="#" class="block">अंतर्राष्ट्रीय</a></li>
      <li><a href="#" class="block">सोशल ट्रेंड</a></li>
      <li><a href="#" class="block">मनोरंजन</a></li>
      <li><a href="#" class="block">शिक्षा</a></li>
      <li><a href="#" class="block">खेल</a></li>
      <li><a href="#" class="block">राजनीति</a></li>
      <li><a href="#" class="block">स्वास्थ्य</a></li>
      <li><a href="#" class="block">क्राइम</a></li>
      <li><a href="#" class="block">धर्म</a></li>
      <li><a href="#" class="block">बिज़नेस</a></li>
      <li><a href="#" class="block">ई-पेपर</a></li>
    </ul>
  </div>
</nav>
<!-- JS for Toggle -->
<script>
  const menu = document.getElementById('mobile-menu');
  const toggleButton = document.getElementById('menu-toggle');

  function toggleMenu() {
    menu.classList.toggle('-translate-x-full');
  }

  toggleButton.addEventListener('click', toggleMenu);
</script>

<!-- Trending Now Section -->
<section class="bg-white py-2 border-t border-b border-orange-300">
  <div class="flex px-4 gap-4 overflow-hidden font-bold whitespace-nowrap">    

    <!-- Trending Label -->
    <div class="shrink-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="inline" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="m147-209-51-51 281-281 152 152 212-211H624v-72h240v240h-72v-117L529-287 377-439 147-209Z"/></svg> Trending Now
    </div>
    
    <!-- Scrolling Text -->
    <div class="relative w-full overflow-hidden">
      <div class="animate-marquee text-sm text-gray-700 inline-block min-w-full">
	  <marquee>
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान,&nbsp;&nbsp; मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </marquee>
	  </div>
    </div>

  </div>
</section>

<section class="px-4 py-6 bg-white">
  <!-- Top Main News -->
  <div class="grid md:grid-cols-2 gap-4 border-b pb-6">
    <!-- Text Content -->
    <div>
      <h2 class="text-3xl font-bold text-gray-900 leading-snug">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग,<br />
      </h2>
      <p class="text-sm text-gray-500 mt-1">July 5, 2025 || No Comments</p>
      <p class="text-gray-700 mt-4">
        नई दिल्ली: राजधानी दिल्ली के व्यस्त करोल बाग इलाके में शुक्रवार शाम एक बड़ा हादसा हो गया। यहां स्थित विशाल मेगा मार्ट के एक चार...
      </p>
      <a href="#" class="inline-block mt-4 text-orange-600 hover:underline font-semibold">Read More »</a>
    </div>

    <!-- Main Image -->
    <div>
      <img src="your-main-news-image.jpg" alt="Main News" class="w-full h-64 object-cover rounded shadow" />
    </div>
  </div>
<!-- Sub News Cards -->
<div class="flex flex-wrap justify-center gap-4 mt-2 overflow-x-auto">
  <!-- Card 1 -->
  <div class="flex items-start bg-white shadow-sm flex-shrink-0 min-w-[280px] max-w-sm w-full">
    <div class="p-2 w-2/3">
      <h3 class="text-sm font-bold line-clamp-3">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान
      </h3>
    </div>
    <img src="your-image1.jpg" alt="News" class="w-1/3 h-24 object-cover rounded-r" />
  </div>

  <!-- Card 2 -->
  <div class="flex items-start bg-white border-l-2 border-gray-800 shadow-sm flex-shrink-0 min-w-[280px] max-w-sm w-full">
    <div class="p-2 w-2/3">
      <h3 class="text-sm font-bold line-clamp-3">
        मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </h3>
    </div>
    <img src="your-image2.jpg" alt="News" class="w-1/3 h-24 object-cover rounded-r" />
  </div>

  <!-- Card 3 -->
  <div class="flex items-start bg-white border-l-2 border-gray-800 shadow-sm flex-shrink-0 min-w-[280px] max-w-sm w-full">
    <div class="p-2 w-2/3">
      <h3 class="text-sm font-bold line-clamp-3">
        लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त
      </h3>
    </div>
    <img src="your-image3.jpg" alt="News" class="w-1/3 h-24 object-cover rounded-r" />
  </div>
</div>

</section>


<section class="container main mx-auto px-4 py-6">
  <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
    
    <!-- Left: Latest News -->
    <div class="md:col-span-3 bg-white rounded shadow p-4 space-y-4">
      <h2 class="text-xl font-bold border-b pb-2">
        <span class="text-blue-600">हिन्दी</span> <span class="text-gray-700">English</span>
      </h2>
      <h3 class="text-lg font-bold border-b pb-1">लेटेस्ट न्यूज़</h3>

      <!-- News Item 1 -->
      <div class="border-b pb-2">
        <p class="text-sm font-medium">लखनऊ में हकीम सलाउद्दीन के घर मिली अवैध असलहों की फैक्ट्री, अवैध हथियारों का जखीरा बरामद</p>
        <p class="text-xs text-red-600 mt-1 font-semibold">₹19.82 ▼</p>
        <p class="text-xs text-gray-500">June 29, 2025 /// 7:44 pm</p>
      </div>

      <!-- News Item 2 -->
      <div class="border-b pb-2">
        <p class="text-sm font-medium">शाहदरा में 19 साल के युवक की चाकू घोंपकर हत्या</p>
        <p class="text-xs text-red-600 mt-1 font-semibold">₹8.78 ▼</p>
        <p class="text-xs text-gray-500">June 28, 2025 /// 10:02 am</p>
      </div>

      <!-- News Item 3 -->
      <div>
        <p class="text-sm font-medium">हिसार की मॉडल शीतल की गला रेतकर हत्या, सोनीपत नहर में मिली लाश</p>
      </div>
    </div>

    <!-- Center: Top News -->
    <div class="md:col-span-6 bg-white rounded shadow p-4">
	
     <!-- Top News Section -->
	 <section class="top_news">
<div class="flex items-center justify-center my-6">
  <!-- Left Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>

  <!-- Heading Text -->
  <h2 class="mx-4 text-2xl font-bold text-gray-800 whitespace-nowrap">टॉप न्यूज़</h2>

  <!-- Right Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>
</div>

      <img src="your-top-news-image.jpg" alt="Top News" class="w-full h-60 object-cover rounded mt-4" />
	  <h4 class="text-2xl font-bold text-gray-900">करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान</h4>
	  <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
	  <hr>
	  <!-- Sub News Cards Section -->
<div class="mt-6 space-y-4">

  <!-- Sub News Card 1 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:28 pm</div>
    </div>
    <img src="your-image1.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 2 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug text-blue-900">
        मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:23 pm</div>
    </div>
    <img src="your-image2.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 3 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
    </div>
    <img src="your-image3.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

</div>
    <div class="flex justify-center">
	<button class="bg-blue-700 text-white font-bold rounded px-2 py-1 m-2">VIEW ALL</button>
	</div>
</section>

<!-- Web Stories Section -->
<div class="mt-8">
  <h2 class="text-xl font-bold mb-4 px-2">वेब स्टोरीज़</h2>

  <div class="flex gap-4 overflow-x-auto px-2 pb-4 scroll-smooth">
    
    <!-- Web Story 4 -->
    <div class="min-w-[180px] h-64 rounded-lg overflow-hidden relative flex-shrink-0 shadow-md">
      <img src="story4.jpg" alt="Web Story 4" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/40 flex flex-col justify-end p-3 text-white">
        <h3 class="text-lg font-semibold">Web Story – 4</h3>
        <p class="text-sm">By News Portal</p>
      </div>
    </div>

    <!-- Web Story 3 -->
    <div class="min-w-[180px] h-64 rounded-lg overflow-hidden relative flex-shrink-0 shadow-md">
      <img src="story3.jpg" alt="Web Story 3" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/40 flex flex-col justify-end p-3 text-white">
        <h3 class="text-lg font-semibold">Web Story – 3</h3>
        <p class="text-sm">By News Portal</p>
      </div>
    </div>

    <!-- Web Story 2 -->
    <div class="min-w-[180px] h-64 rounded-lg overflow-hidden relative flex-shrink-0 shadow-md">
      <img src="story2.jpg" alt="Web Story 2" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/40 flex flex-col justify-end p-3 text-white">
        <h3 class="text-lg font-semibold">Web Story – 2</h3>
        <p class="text-sm">By News Portal</p>
      </div>
    </div>

    <!-- Web Story 1 -->
    <div class="min-w-[180px] h-64 rounded-lg overflow-hidden relative flex-shrink-0 shadow-md">
      <img src="story1.jpg" alt="Web Story 1" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/40 flex flex-col justify-end p-3 text-white">
        <h3 class="text-lg font-semibold">Web Story – 1</h3>
        <p class="text-sm">By News Portal</p>
      </div>
    </div>

  </div>
</div>

     <!-- National News Section -->
	 <section class="national_news">
<div class="flex items-center justify-center my-6">
  <!-- Left Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>

  <!-- Heading Text -->
  <h2 class="mx-4 text-2xl font-bold text-gray-800 whitespace-nowrap">राष्ट्रीय</h2>

  <!-- Right Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>
</div>

      <img src="your-top-news-image.jpg" alt="Top News" class="w-full h-60 object-cover rounded mt-4" />
	  <h4 class="text-2xl font-bold text-gray-900">करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान</h4>
	  <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
	  <hr>
	  <!-- Sub News Cards Section -->
<div class="mt-6 space-y-4">

  <!-- Sub News Card 1 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:28 pm</div>
    </div>
    <img src="your-image1.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 2 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug text-blue-900">
        मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:23 pm</div>
    </div>
    <img src="your-image2.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 3 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
    </div>
    <img src="your-image3.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

</div>
  <div class="flex justify-center">
	<button class="bg-blue-700 text-white font-bold rounded px-2 py-1 m-2">VIEW ALL</button>
	</div>
</section>

  <!-- International News Section -->
	 <section class="national_news">
<div class="flex items-center justify-center my-6">
  <!-- Left Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>

  <!-- Heading Text -->
  <h2 class="mx-4 text-2xl font-bold text-gray-800 whitespace-nowrap">अंतर्राष्ट्रीय</h2>

  <!-- Right Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>
</div>

      <img src="your-top-news-image.jpg" alt="Top News" class="w-full h-60 object-cover rounded mt-4" />
	  <h4 class="text-2xl font-bold text-gray-900">करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान</h4>
	  <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
	  <hr>
	  <!-- Sub News Cards Section -->
<div class="mt-6 space-y-4">

  <!-- Sub News Card 1 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:28 pm</div>
    </div>
    <img src="your-image1.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 2 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug text-blue-900">
        मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:23 pm</div>
    </div>
    <img src="your-image2.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 3 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
    </div>
    <img src="your-image3.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

</div>
  <div class="flex justify-center">
	<button class="bg-blue-700 text-white font-bold rounded px-2 py-1 m-2">VIEW ALL</button>
	</div>
</section>

 <!-- Entertainment News Section -->
	 <section class="national_news">
<div class="flex items-center justify-center my-6">
  <!-- Left Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>

  <!-- Heading Text -->
  <h2 class="mx-4 text-2xl font-bold text-gray-800 whitespace-nowrap">मनोरंजन</h2>

  <!-- Right Double Line -->
  <div class="flex flex-col gap-1 w-full max-w-xs">
    <div class="border-t border-blue-900 w-full"></div>
    <div class="border-t border-blue-900 w-full"></div>
  </div>
</div>

      <img src="your-top-news-image.jpg" alt="Top News" class="w-full h-60 object-cover rounded mt-4" />
	  <h4 class="text-2xl font-bold text-gray-900">करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान</h4>
	  <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
	  <hr>
	  <!-- Sub News Cards Section -->
<div class="mt-6 space-y-4">

  <!-- Sub News Card 1 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:28 pm</div>
    </div>
    <img src="your-image1.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 2 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug text-blue-900">
        मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:23 pm</div>
    </div>
    <img src="your-image2.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

  <!-- Sub News Card 3 -->
  <div class="flex flex-col md:flex-row items-start gap-4 bg-white p-4 rounded shadow-sm">
    <div class="flex-1">
      <h3 class="text-md font-semibold leading-snug">
        लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त
      </h3>
      <div class="text-xs text-gray-500 mt-1">July 5, 2025 /// 8:18 pm</div>
    </div>
    <img src="your-image3.jpg" alt="News" class="w-32 h-24 object-cover rounded-md" />
  </div>

</div>
  <div class="flex justify-center">
	<button class="bg-blue-700 text-white font-bold rounded px-2 py-1 m-2">VIEW ALL</button>
	</div>
</section>

<!---  Same Section for मनोरंजन, शिक्षा, खेल, राजनीति, स्वास्थ्य, लाइफस्टाइल, क्राइम, धर्म, बिज़नेस -->


    </div>
	

    <!-- Right: Advertisement + Live Score -->
    <div class="md:col-span-3 bg-white rounded shadow p-4 space-y-4">
      <h2 class="text-lg font-bold border-b pb-2 text-center">विज्ञापन</h2>
      <img src="your-ad-image.jpg" alt="Ad" class="w-full rounded" />
      <h2 class="text-lg font-bold border-b pb-2 text-center">लाइव क्रिकेट स्कोर</h2>

      <!-- Replace with embed or score box -->
      <div class="bg-blue-100 rounded p-3 text-center text-sm">
        <p>1st Test, India tour of...</p>
        <p class="font-semibold">LIVE • 3rd Day</p>
        <p>India - 210/4 (78 overs)</p>
      </div>
    </div>

  </div>
</section>
<!-- Footer -->
  <footer class="bg-gray-900 text-white text-sm mt-10">
    <div class="max-w-7xl mx-auto px-4 py-6 grid md:grid-cols-3 gap-6">
      <div>
        <h4 class="text-orange-500 font-semibold mb-2">Nation TV</h4>
        <p>भारत का भरोसेमंद डिजिटल न्यूज़ पोर्टल</p>
      </div>
      <div>
        <h4 class="font-semibold mb-2">महत्वपूर्ण लिंक्स</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">हमारे बारे में</a></li>
          <li><a href="#" class="hover:underline">संपर्क करें</a></li>
          <li><a href="#" class="hover:underline">गोपनीयता नीति</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-2">सोशल मीडिया</h4>
        <div class="space-x-3">
          <a href="#"><img src="fb-icon.svg" class="inline w-5" /></a>
          <a href="#"><img src="yt-icon.svg" class="inline w-5" /></a>
        </div>
      </div>
    </div>
	<hr class="text-gray-800 m-4">
	<div class="p-2 m-2">
	<h3  class="text-2xl font-bold">
	LATEST STORIES 
	</h3>
	</div>
	
	<div class="max-w-7xl mx-auto px-4 py-6 grid md:grid-cols-3 gap-2">
	    <div>
		    <ul>
			<li class="my-4">करोल बाग के विशाल मेगा मार्ट में भीषण आग, UPSC की तैयारी कर रहे युवक समेत दो की मौत, लाखों का नुकसान</li>
			<li class="my-8">लखनऊ: अवैध धर्मांतरण मामले में जमालुद्दीन उर्फ छांगुर बाबा गिरफ्तार, चौंकाने वाली हकीकत आई सामने</li>
			<li class="my-8">हिमाचल में कहर बरपाती बारिश: जान और माल का भारी नुकसान</li>
			</ul>
		</div>
		<div>
		 <ul>
			<li class="my-4">मिर्जापुर: विंध्याचल मंदिर का गर्भगृह बना अखाड़ा, मुख्य पुजारी और बेटे से मारपीट</li>
			<li class="my-8">संभल में भीषण सड़क हादसा: दूल्हे समेत पांच की मौत, बारात की खुशियां मातम में बदलीं</li>
			<li class="my-8">उत्तराखंड में धामी सरकार के चार साल: समझिये कैसा रहा सफर</li>
			</ul>
		</div>
		<div>
		 <ul>
			<li class="my-4">लखनऊ: बीबीडी ग्रुप पर आयकर विभाग की बड़ी कार्रवाई, ₹100 करोड़ की बेनामी संपत्ति जब्त</li>
			<li class="my-8">टोल टैक्स में 50 फीसदी की कटौती का ऐलान! आम लोगों पर क्या होगा असर</li>
			<li class="my-8">कांवड़ यात्रा 2025: पहचान विवाद के बाद मुजफ्फरनगर का एक ढाबा बंद</li>
			</ul>
		</div>
	</div>
	
	
    <div class="bg-gray-800 text-center py-4 justify-center align-center text-xs">
      &copy; 2025 Nation TV. सभी अधिकार सुरक्षित हैं।
    </div>
  </footer>



</body>
</html>
