<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    {{-- remix icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- ajax --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .ml9 {
            position: relative;
            font-weight: 500;
            font-size: 3.7vw;
        }

        .ml9 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml9 .letter {
            transform-origin: 50% 100%;
            display: inline-block;
            line-height: 1em;
        }
    </style>
    <title>TaskFlux</title>
</head>

<body>
    <x-navbar />
    <main>
        <section
            class="w-full h-full flex flex-wrap lg:flex-nowrap items-center justify-center lg:justify-between p-8 lg:p-16">
            <!-- Left Content -->
            <div
                class="w-full lg:w-1/2 flex flex-col justify-center items-center lg:items-start text-center lg:text-left leading-5">

                <h1 class="ml9 font-bold text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;" id="animated-text">
                    <span class="text-warpper"><span class="letters">
                    Organize Your Notes Easily with <span class="text-gray-500">All-in-one Platform!</span></span></span>
                </h1>


                <p class="text-gray-600 font-semibold lg:w-4/5 mt-5">
                    Say goodbye to scattered notes and hello to organized productivity with our all-in-one platform.
                    Easily manage tasks, projects, and ideas in one place for efficient collaboration and streamlined
                    success.
                </p>
                <a class="py-2 px-6 bg-blue-500 hover:bg-blue-600 text-base border-2 border-blue-500 text-white font-bold rounded-full transition duration-200 mt-5"
                    href="#">
                    Get Started
                </a>
            </div>
            <!-- Right Content -->
            <div class="w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img src="{{ asset('images/h1.png') }}" alt="Organized Notes" class="w-full lg:w-4/5">
            </div>
        </section>

        <section id="inverse-rounded-edge" class="w-full bg-black h-screen flex flex-col justify-start items-center">
            <div class="flex flex-col items-center text-center justify-center mt-44 mb-10">
                <h1 class="font-bold text-white text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;">
                    We can help manage your work more efficiently
                </h1>
                <p class="text-gray-300 font-semibold lg:w-4/5 mt-5">
                    Many features can help your work. Stay updated with new technology and enjoy a friendly experience.
                </p>
            </div>

            <div class="flex flex-wrap relative lg:flex-nowrap items-center justify-center lg:justify-between lg:p-16">
                <!-- Left Content (Image) -->
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-start mt-8 lg:mt-0">
                    <img src="{{ asset('images/h2.png') }}" data-aos="fade-right" alt="Organized Notes" class="w-full max-w-xl">
                </div>
                <!-- Right Content (Cards) -->
                <div class="w-full lg:w-1/2  flex-col justify-center items-center lg:items-start text-center lg:text-left mt-8 lg:mt-0 hidden lg:flex">
                    <div class="text-white py-10">
                        <div class="max-w-4xl mx-auto space-y-8" data-aos="fade-left">
                            <!-- Card 1 -->
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-600 p-3 rounded-lg">
                                    <i class="ri-heart-fill text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">Efficient Task Management</h2>
                                    <p class="text-gray-400">
                                        Assign and track tasks seamlessly to boost productivity.
                                    </p>
                                    <hr class="w-full border-gray-300 mt-3">
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-600 p-3 rounded-lg">
                                    <i class="ri-layout-grid-fill text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">Streamlined Priority Setting</h2>
                                    <p class="text-gray-400">
                                        Set priorities effectively for optimal task execution.
                                    </p>
                                    <hr class="w-full border-gray-300 mt-3">
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-600 p-3 rounded-lg">
                                    <i class="ri-flashlight-fill text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">Integrated Calendar Support</h2>
                                    <p class="text-gray-400">
                                        Sync schedules effortlessly for fast and reliable planning.
                                    </p>
                                    <hr class="w-full border-gray-300 mt-3">
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-600 p-3 rounded-lg">
                                    <i class="ri-cloud-fill text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">Collaborative Cloud Tools</h2>
                                    <p class="text-gray-400">
                                        Save and share your work securely in the cloud.
                                    </p>
                                    <hr class="w-full border-gray-300 mt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section
            class="w-full h-4/6 flex flex-wrap lg:flex-nowrap items-center justify-center lg:justify-between p-8 lg:p-16 lg:py-32">
            <!-- Left Content -->
            <div
                class="w-full lg:w-1/2 flex flex-col justify-center items-center lg:items-start text-center lg:text-left leading-5">
                <h1 class="font-bold text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;">
                    Find your <span class="text-gray-500">productivity</span> happy place
                </h1>
                <p class="text-gray-600 font-semibold lg:w-4/5 mt-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur iure, veritatis molestias
                    optio ratione molestiae et quidem quasi voluptas excepturi eligendi animi ea, iusto maiores deleniti
                    architecto explicabo similique saepe. Itaque minima neque quidem consectetur deserunt facilis ullam
                    nisi repellat obcaecati, delectus corporis, nostrum at natus excepturi illum animi sunt.
                </p>
                <a class="py-2 px-6 bg-blue-500 hover:bg-blue-600 text-base border-2 border-blue-500 text-white font-bold rounded-full transition duration-200 mt-5"
                    href="#">
                    Learn More
                </a>
            </div>
            <!-- Right Content -->
            <div class="w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img src="{{ asset('images/h3.webp') }}" alt="Organized Notes"
                    class="w-full rounded-full">
            </div>
        </section>

        <section class="w-full h-full mb-20 p-8 px-4 sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-24">
            <div class="flex flex-col justify-center items-center py-10">
                <h1 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-black">Testimonials</h1>
                <p class="text-gray-600 pt-6 font-semibold text-sm sm:text-base lg:text-xl text-center md:text-left">
                    Meet our client to see how we can help with our services from feedback below!
                </p>
            </div>

            <swiper-container class="mySwiper" navigation="true">
                <swiper-slide>
                    <div class="swiper-slide flex flex-col md:flex-row items-center bg-gray-900 text-white p-8 md:p-10 rounded-lg">
                        <div class="p-6 mb-4 md:mb-0">
                            <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTAwfHxtYW5hZ2VyfGVufDB8MHwwfHx8MA%3D%3D"
                                alt="Client Image" class="rounded-lg w-full max-w-xs md:max-w-sm lg:max-w-md" />
                        </div>
                        <div class="w-full md:w-3/4 pl-0 md:pl-10">
                            <i class="ri-double-quotes-l text-blue-500 text-4xl sm:text-5xl lg:text-6xl"></i>
                            <p class="mt-4 text-xl sm:text-2xl lg:text-3xl font-semibold">
                                This platform revolutionized the way my team collaborates. The seamless task management features are a game changer!
                            </p>
                            <div class="mt-4">
                                <span class="text-blue-400 font-bold">John Doe</span> /
                                <span class="text-gray-400">Team Leader</span>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper-slide flex flex-col md:flex-row items-center bg-gray-900 text-white p-8 md:p-10 rounded-lg">
                        <div class="p-6 mb-4 md:mb-0">
                            <img src="https://plus.unsplash.com/premium_photo-1661266851970-7f2bf75fdc40?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fG1hbmFnZXJ8ZW58MHwwfDB8fHww"
                                alt="Client Image" class="rounded-lg w-full max-w-xs md:max-w-sm lg:max-w-md" />
                        </div>
                        <div class="w-full md:w-3/4 pl-0 md:pl-10">
                            <i class="ri-double-quotes-l text-blue-500 text-4xl sm:text-5xl lg:text-6xl"></i>
                            <p class="mt-4 text-xl sm:text-2xl lg:text-3xl font-semibold">
                                The calendar integration has made scheduling so much easier for our team. Highly recommend!
                            </p>
                            <div class="mt-4">
                                <span class="text-blue-500 font-bold">Emily Smith</span> /
                                <span class="text-gray-400">Project Manager</span>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper-slide flex flex-col md:flex-row items-center bg-gray-900 text-white p-8 md:p-10 rounded-lg">
                        <div class="p-6 mb-4 md:mb-0">
                            <img src="https://images.unsplash.com/photo-1637684666451-423047d6bf5e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fG1hbmFnZXJ8ZW58MHwwfDB8fHww"
                                alt="Client Image" class="rounded-lg w-full max-w-xs md:max-w-sm lg:max-w-md" />
                        </div>
                        <div class="w-full md:w-3/4 pl-0 md:pl-10">
                            <i class="ri-double-quotes-l text-blue-500 text-4xl sm:text-5xl lg:text-6xl"></i>
                            <p class="mt-4 text-xl sm:text-2xl lg:text-3xl font-semibold">
                                The ability to prioritize tasks and visualize progress has drastically improved our efficiency.
                            </p>
                            <div class="mt-4">
                                <span class="text-blue-400 font-bold">Michael Brown</span> /
                                <span class="text-gray-400">Operations Manager</span>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </section>


        <section class="w-full h-4/6 flex flex-wrap lg:flex-nowrap items-center justify-center lg:justify-between p-8 lg:p-20 xl:p-32 2xl:px-24">
            <!-- Left Content -->
            <div data-aos="fade-down-right" class="w-full pl-8 lg:pl-28 lg:w-1/2 flex flex-col justify-center items-center lg:items-start text-center lg:text-left leading-5">
                <h1 class="font-bold text-2xl sm:text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;">
                    Straight into your existing <span class="text-gray-500">workflows</span>
                </h1>
                <p class="text-gray-600 font-semibold text-base sm:text-lg lg:text-xl lg:w-4/5 mt-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur iure, veritatis molestias optio ratione molestiae et quidem quasi voluptas excepturi eligendi animi ea, iusto maiores deleniti architecto explicabo similique saepe.
                </p>
                <a class="py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm sm:text-base border-2 border-blue-500 text-white font-bold rounded-full transition duration-200 mt-5" href="#">
                    Get Started
                </a>
            </div>
            <!-- Right Content -->
            <div class="w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img data-aos="fade-down-left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGZsvXsFOIaiygL3Jqbn0zQRE659LTFP9IwQ&s" alt="Organized Notes" class="w-[250px] sm:w-[300px] md:w-[375px] lg:w-[450px] xl:w-[500px] h-auto object-cover" />
            </div>
        </section>



    </main>
        <x-footer />
    <script>
        AOS.init({
            duration: 1000, // Animation duration (in ms)
            once: true, // Whether animation should happen only once
            offset: 150, // Offset (in px) from the original trigger point
        });

        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml9 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml9 .letter',
                scale: [0, 1],
                duration: 1500,
                elasticity: 600,
                delay: (el, i) => 45 * (i + 1)
            })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
