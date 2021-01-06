@extends('layout')

@section('content')
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="static text-center bg-no-repeat bg-cover swiper-slide" style="background-image: url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/A7A577C2752BA18AAA53823E9D99D686B4C2D8A7F825084A5F8BCC063C9C80D6/scale?width=1200&aspectRatio=1.78&format=jpeg)">
                <div class="flex text-black bg-white opacity-0 bg-opacity-10 hover:opacity-100">
                    <div class="flex items-center justify-center flex-1 h-96">
                        <a href="#" class="flex px-4 py-2 bg-red-500 rounded-lg hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span><span> Watch Preview</span>
                        </a>
                    </div>
                    <div class="flex items-center flex-1 px-16">
                        <p class="overflow-hidden text-lg overflow-ellipsis"> <span>Description</span><br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maiores iste, minima blanditiis quos saepe expedita illo quis beatae nobis quae odio soluta voluptas totam sit nostrum alias dolorem enim?</p>
                    </div>
                </div>
        </div>
        
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
</div>
<div class="container grid grid-cols-1 gap-4 mx-auto mt-10 md:grid-cols-5">
    <div class="z-50 bg-white">
        Hello
    </div>
    <div class="col-span-3 overflow-x-hidden">
        <div class="swiper-con">
            <div class="swiper-wrapper">
                <div class="items-center h-48 text-center bg-no-repeat bg-cover border swiper-slide" style="background-image: url()">
                    <div class="flex items-end w-full h-48">
                        <a href="#" class="flex w-full px-4 py-2 bg-red-500 hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span>Book Ticket</span>
                        </a>
                    </div>
                </div>
                <div class="items-center h-48 text-center bg-no-repeat bg-cover border swiper-slide" style="background-image: url()">
                    <div class="flex items-end w-full h-48">
                        <a href="#" class="flex w-full px-4 py-2 bg-red-500 hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span>Book Ticket</span>
                        </a>
                    </div>
                </div>
                <div class="items-center h-48 text-center bg-no-repeat bg-cover border swiper-slide" style="background-image: url()">
                    <div class="flex items-end w-full h-48">
                        <a href="#" class="flex w-full px-4 py-2 bg-red-500 hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span>Book Ticket</span>
                        </a>
                    </div>
                </div>
                <div class="items-center h-48 text-center bg-no-repeat bg-cover border swiper-slide" style="background-image: url()">
                    <div class="flex items-end w-full h-48">
                        <a href="#" class="flex w-full px-4 py-2 bg-red-500 hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span>Book Ticket</span>
                        </a>
                    </div>
                </div>
                <div class="items-center h-48 text-center bg-no-repeat bg-cover border swiper-slide" style="background-image: url()">
                    <div class="flex items-end w-full h-48">
                        <a href="#" class="flex w-full px-4 py-2 bg-red-500 hover:bg-red-900"> 
                            <span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span>Book Ticket</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="button-next"></div>
            <div class="button-prev"></div>
        </div>
    </div>
    <div class="z-10 bg-white">
        Book Seat
    </div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper1 = new Swiper('.swiper-con', {
      spaceBetween:2,
      slidesPerView: 2,
      direction: getDirection(),
      navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
      },
      on: {
        resize: function () {
          swiper1.changeDirection(getDirection());
        }
      },
      // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    760: {
      slidesPerView: 3
    },
  }
    });

    function getDirection() {
      var windowWidth = window.innerWidth;
      var direction = window.innerWidth <= 760 ? 'horizontal' : 'horizontal';

      return direction;
    }
</script>

@endsection