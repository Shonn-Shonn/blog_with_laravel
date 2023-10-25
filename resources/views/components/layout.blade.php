<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="{{ mix('js/app.js') }}">
    <style>
        @media only screen and (max-width: 600px) {
            .b-section{
                display: block;
            }

            .b-section > * {
                width: 100%;
                margin: 0 auto;
                margin-bottom: .5rem;
            }
}
    </style>
</head>
<body>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
		<a class="leading-none" href="#">
			<img class="inline" src="{{ asset('/images/reading.jpg')}}" width="60"/>
            <span class="text-blue-900 text-2xl font-bold">Readie-Blog</span>
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-800 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">About Us</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Pricing</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
		</ul>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">Sign In</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-blue-900 hover:bg-blue-500 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Sign up</a>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
					<img class="inline" src="{{ asset('/images/reading.jpg')}}" width="60"/>
                    <span class="text-blue-900 text-2xl font-bold">Readie-Blog</span>
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Pricing</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-900 hover:bg-blue-500  rounded-xl" href="#">Sign Up</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2023</span>
				</p>
			</div>
		</nav>
	</div>

	<!--carousel-->
	<!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

<article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
    <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
        <span x-text="currentIndex"></span>/
        <span x-text="images.length"></span>
    </div>

    <template x-for="(image, index) in images">
        <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
        {{-- <figcaption class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">

        </figcaption> --}}
        </figure>
    </template>

    <button @click="back()"
        class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>9
        </svg>
    </button>

    <button @click="next()"
    class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>

{{-- <section>
    <div class="mr-0 ml-0 mt-6 flex justify-around mt-5">
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Food</a></div>
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Health</a></div>
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Food</a></div>
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Travel</a></div>
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Work Life</a></div>
        <div class="font-bold"><a class="text-blue-900 border rounded px-3 py-1">Business</a></div>
    </div>
</section> --}}


<section class="m-6 b-section mt-8 flex justify-around flex-wrap b-section">
    <div class="w-4/12 max-w-sm rounded overflow-hidden shadow-lg">
        <img class="rounded" src="https://images.unsplash.com/photo-1493770348161-369560ae357d?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGZvb2R8ZW58MHx8MHx8fDA%3D"/>
        <h6 class="font-bold flex mt-2 p-2">
            <svg class="w-6 h-6 text-yellow-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"/>
            </svg>
            <span class="ml-3">Food</span>
        </h6>
        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente qui dolore rem possimus optio numquam illum eius fugiat mollitia alias.</p>
        <div class="flex items-center p-2">
            <img class="w-10 h-10 rounded-full mr-4" src="https://tse4.mm.bing.net/th?id=OIP.B0kTH0ojcn-ZX2sZ6H47UwHaFf&pid=Api&P=0&h=220" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Jonathan Reinink</p>
              <p class="text-gray-600">Aug 18</p>
            </div>
        </div>
    </div>
    <div class="w-4/12 max-w-sm rounded overflow-hidden shadow-lg">
        <img class="rounded" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGV2ZW50c3xlbnwwfHwwfHx8MA%3D%3D"/>
        <h6 class="font-bold flex mt-2 p-2">
            <svg class="w-6 h-6 text-yellow-400 dark:text-white d-inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"/>
            </svg>
            <span class="ml-3">Events</span>
        </h6>
        <p class="p-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro distinctio doloribus beatae aperiam unde odit quidem at aspernatur nam sed?</p>
        <div class="flex items-center p-2">
            <img class="w-10 h-10 rounded-full mr-4" src="https://tse4.mm.bing.net/th?id=OIP.iQkwJQRVjAlEJCoBgHkwSQHaE5&pid=Api&P=0&h=220" alt="Avatar of Taylor Swift">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Jonathan Reinink</p>
              <p class="text-gray-600">Sep 2</p>
            </div>
        </div>
    </div>
    <div class="w-4/12 max-w-sm rounded overflow-hidden shadow-lg">
            <img class="rounded" src="https://images.unsplash.com/photo-1486218119243-13883505764c?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fGhlYWx0aHxlbnwwfHwwfHx8MA%3D%3D"/>
        <h6 class="font-bold flex mt-2 p-2">
            <svg class="w-6 h-6 text-yellow-400 dark:text-white d-inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"/>
            </svg>
            <span class="ml-3">Health</span>
        </h6>
        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id omnis incidunt culpa ex asperiores natus adipisci earum distinctio quia reprehenderit!</p>
        <div class="flex items-center p-2">
            <img class="w-10 h-10 rounded-full mr-4" src="https://s.yimg.com/fz/api/res/1.2/y4qgObNiXfWwnCTVLFkFMg--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpbGw7aD0yMjA7cT04MDt3PTE0NQ--/https://s.yimg.com/zb/imgv1/49b7d359-66e9-3504-a4cd-8398b2ce9875/t_500x300" alt="Avatar of Keith Richards">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Keith Richards</p>
              <p class="text-gray-600">Jan 1</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-gradient-to-r h-5/6 from-purple-500 to-pink-500 flex flex-column mt-14">
    <div class="w-3/4  text-center mt-12">
        <h1 class="text-2xl md:text-4xl text-white uppercase">Upcoming blogs for Special Month</h1>
        <div class="mt-8 mb-5 md:mb-1">
            <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-white py-2 px-4 border border-grey hover:border-transparent rounded mr-2">
                Authors
            </button>
            <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-white py-2 px-4 border border-grey hover:border-transparent rounded mr-2">
                Posts
            </button>



            <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-white py-2 px-4 border border-grey hover:border-transparent rounded mr-2">
                Feedbacks
            </button>
        </div>
    </div>
    <div class="flex w-1/4 ml-10 h-46 justify-end items-center pb-6 hidden md:block">
        <img src="{{ asset('images/ball-1906468_1280.png') }}" />
    </div>
</section>

<section>
    <h1 class="text-4xl text-center mt-14 text-blue-900">Every month, we create blog in related fields</h1>
</section>


<section class="flex flex-col md:flex-row justify-between mt-12 w-4/5 m-auto">
     <div class="w-full md:w-2/5 shadow-md">
           <img src="{{ asset('images/3d-cartoon-background-children.jpg') }}" />
     </div>
     <div class="w-full md:w-3/5 p-3 flex justify-center items-center flex-col">
           <h1 class="text-2xl text-blue-600 font-bold p-3">Struggling For A Blog Post Headline? 50+ Viral Headline Examples</h1>
           <p class="p-3 text-1xl">Pulkit Gera explains: “To get a high CTR, I created several blog post headlines for this post and scientifically split tested them. The reason this title works so well because it identifies a common issue most bloggers face (using reliability to connect with people) and it promises to provide a quick solution.”</p>
        </div>
</section>


<section class="flex flex-col-reverse md:flex-row justify-between mt-12 w-4/5 m-auto">
    <div class="w-full md:w-3/5 p-3 flex justify-center items-center flex-col">
          <h1 class="text-2xl text-blue-600 font-bold p-3">How to Write an Email Asking for a Referral or Recommendation</h1>
          <p class="p-3 text-1xl">Jay Kang explains why this blog post title example worked so well: “Once we capture the user intent and understand the exact keywords, we used the proper action words like “how to”.
            “We also noticed there are two different intent phrases most people use when searching for this type of information: “asking for referral” and “recommendation”. Writing a title can be simple as adding actionable words, but also using the phrases users use to search for their answers.”
          </p>
          <a class="text-blue-500 block" href="#">See More...</a>
    </div>
    <div class="w-full md:w-2/5 shadow-md">
        <img src="{{ asset('images/background-4038455.png') }}" />
    </div>
</section>

</body>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });

    //carousel
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'https://source.unsplash.com/1600x900/?food',
                'https://source.unsplash.com/1600x900/?water',
                'https://source.unsplash.com/1600x900/?tree',
                'https://source.unsplash.com/1600x900/?sun',
                'https://source.unsplash.com/1600x900/?event'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
    </script>
</html>
