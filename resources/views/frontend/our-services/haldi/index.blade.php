@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- 1st section  -->

<section class="h-[70vh] min-h-[400px] bg-no-repeat bg-cover bg-center bg-[url('{{asset('/public/tailwind_frontend/haldi.webp')}}')] relative before:absolute before:bg-black/50 before:inset-0 before:z-10 before:size-full">
  <div class="mx-auto max-w-7xl lg:px-8 px-6 h-full py-10 relative z-20">
    <div class="text-white md:text-7xl sm:text-5xl text-4xl flex items-end justify-center text-center h-full">Haldi Ceremony </div>
  </div>
</section>

<!-- 1st section end  -->

<!-- 2nd section  -->


<section class="sm:pt-20 pt-16 sm:pb-10 relative overflow-hidden">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full relative z-10">

    <div class="grid grid-cols-12 items-center sm:gap-y-10 gap-y-5 lg:gap-8 ">
      <div data-aos="fade-right" data-aos-duration="1000" class="col-span-12 lg:col-span-6 ">
        <div class="size-full relative flex items-center justify-center ">
          <div class=" h-full w-[70%]">
            <Image width={500} height={500} class="aspect-[1/1]  object-cover rounded-3xl" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/DA412949-9545-45C3-ADEB-9AAB52115726.jpeg" alt="" />
          </div>

          <div class=" absolute sm:-top-7 -top-3  z-[3] w-[40%] right-0 sm:group-hover:right-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] pointer-events-none rounded-3xl object-cover" src="https://weddingphotographybysf.com/wp-content/uploads/2024/07/DSC02732-1536x1024.jpg" alt="" />
          </div>
          <div class=" absolute -bottom-5 pointer-events-none z-[3] w-[40%] left-0 sm:group-hover:left-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] rounded-3xl object-top" src="https://weddingphotographybysf.com/wp-content/uploads/2024/07/DSC06846-copy-1536x1024.jpg" alt="" />
          </div>
        </div>
      </div>
      <div data-aos="fade-left" class="col-span-12 lg:col-span-6 ">
        <div class="size-full">
          <div class="sm:text-5xl text-4xl relative  text-balance  w-full font-bold text-slate-800 lg:pb-14 max-lg:mt-20">
          Let’s Capture the
            <div class="absolute sm:-top-7 -top-3 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light"> Fun!</div>
          </div>

          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          Are you ready to make some amusing memories? With FILXAURA, your <strong> Haldi ceremony photography</strong> will be a joyous and entertaining experience! Let’s embrace the colors, the chaos, and the laughter together.The Haldi ceremony is your chance to unleash your inner joy and creativity, and we’re here to capture all the delightful chaos.
          </div>
          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          Our goal is to make <strong>Haldi photoshoot</strong>  an enjoyable and memorable experience. Every celebration is unique, and your haldi is no exception. It’s a chance to create lasting memories with loved ones, filled with laughter and love.
          </div>
          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          Contact us today to book your <strong>Haldi ceremony photoshoot</strong> , and let’s get ready to create some unforgettable memories! After all, what’s life without a little laughter and turmeric? 
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2nd end  -->

<!-- 3rd section  -->
<div class="max-w-7xl mx-auto px-6 lg:px-8 sm:py-16 py-10">



  <div class="grid lg:grid-cols-4 sm:grid-cols-2   gap-5">
    <div class="w-full group/main aspect-[1/1.1] :hover:scale-105 :duration-500 overflow-hidden  *:size-full *:object-cover relative after:absolute after:size-full after:bg-black/40 after:inset-0 after:hover:backdrop-blur-sm after:duration-500 	">
      <Image width={300} height={300} src="https://plus.unsplash.com/premium_photo-1670524465634-93cf255ffa8b?q=80&w=1454&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">

        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
            Go Eco-Friendly
          </h2>
          <p class="text-white font-medium text-sm mt-1">#PHOTOGRAPHY</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Planning a vibrant Haldi ceremony that's kind to the Earth? Look no further! Let's weave nature's magic into an unforgettable and sustainable celebration. Imagine a backdrop bursting with colour! Lush banana leaves adorned with vibrant marigolds (Genda Phool) create a stunning focal point. For an extra touch of texture and depth, incorporate upcycled sarees and colourful clothes into the decor, creating a one-of-a-kind and eco-conscious ambiance. Welcome your guests with a beautiful rangoli, a hand-crafted masterpiece that adds a touch of cultural charm and sets the stage for a joyous celebration.</p>
          <button class="flex justify-between text-white uppercase text-sm items-center overflow-hidden group/btn gap-4 z-20 relative mt-5">
            <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Learn More</span>
          </button>
        </div>

      </div>
      <div class="absolute top-3 left-3 text-white z-10 *:size-8 sm:hidden">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.75 4.5a.75.75 0 0 1 .75.75V11h5.75a.75.75 0 0 1 0 1.5H12.5v5.75a.75.75 0 0 1-1.5 0V12.5H5.25a.75.75 0 0 1 0-1.5H11V5.25a.75.75 0 0 1 .75-.75Z"></path>
        </svg>
      </div>
    </div>
    <div class="w-full group/main aspect-[1/1.1] *:hover:scale-105 *:duration-500 overflow-hidden  *:size-full *:object-cover relative after:absolute after:size-full after:bg-black/40 after:inset-0 after:hover:backdrop-blur-sm after:duration-500 	">
      <Image width={300} height={300} src="https://weddingphotographybysf.com/wp-content/uploads/2024/07/DSC_7161-2048x1363.jpg" alt="/" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">


        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
            Haldi ceremony
          </h2>
          <p class="text-white font-medium text-sm mt-1">#PHOTOGRAPHY</p>
          <p class="text-xs text-white mt-2 line-clamp-4">The vibrant pulse of Indian pre-wedding celebrations – Haldi and Sangeet! One explodes with a kaleidoscope of colors and playful joy, the other bursts with rhythmic beats and love-filled dance. But how do you freeze these unforgettable moments in stunning photos, without breaking the bank? Here's where Wedding Photography By SF steps in as your perfect partner!</p>
          <button class="flex justify-between text-white uppercase text-sm items-center overflow-hidden group/btn gap-4 z-20 relative mt-5">
            <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Learn More</span>
          </button>
        </div>

      </div>
      <div class="absolute top-3 left-3 text-white z-10 *:size-8 sm:hidden">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.75 4.5a.75.75 0 0 1 .75.75V11h5.75a.75.75 0 0 1 0 1.5H12.5v5.75a.75.75 0 0 1-1.5 0V12.5H5.25a.75.75 0 0 1 0-1.5H11V5.25a.75.75 0 0 1 .75-.75Z"></path>
        </svg>
      </div>
    </div>
    <div class="w-full group/main aspect-[1/1.1] :hover:scale-105 :duration-500 overflow-hidden  *:size-full *:object-cover relative after:absolute after:size-full after:bg-black/40 after:inset-0 after:hover:backdrop-blur-sm after:duration-500 	">
      <Image width={300} height={300} src="https://weddingphotographybysf.com/wp-content/uploads/2024/07/DSC06846-copy-2048x1365.jpg" alt="" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">

        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
            Haldi on your Terrace
          </h2>
          <p class="text-white font-medium text-sm mt-1">#PHOTOGRAPHY</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Craving a Haldi ceremony that's both heartfelt and intimate? Imagine saying "I do" surrounded by your closest loved ones, bathed in the warm glow of the sun! Transform your rooftop into a breathtaking oasis or utilize the charming ambiance of your bungalow for a truly unforgettable Haldi experience. Wedding Photography By SF will be there to capture every special moment, from the vibrant colors to the genuine emotions, against the backdrop of the beautiful natural light. Let the joy of your celebration overflow and soak up the sunshine as you embark on this exciting new chapter!</p>
          <button class="flex justify-between text-white uppercase text-sm items-center overflow-hidden group/btn gap-4 z-20 relative mt-5">
            <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Learn More</span>
          </button>
        </div>

      </div>
      <div class="absolute top-3 left-3 text-white z-10 *:size-8 sm:hidden">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.75 4.5a.75.75 0 0 1 .75.75V11h5.75a.75.75 0 0 1 0 1.5H12.5v5.75a.75.75 0 0 1-1.5 0V12.5H5.25a.75.75 0 0 1 0-1.5H11V5.25a.75.75 0 0 1 .75-.75Z"></path>
        </svg>
      </div>
    </div>
    <div class="w-full group/main aspect-[1/1.1] :hover:scale-105 :duration-500 overflow-hidden  *:size-full *:object-cover relative after:absolute after:size-full after:bg-black/40 after:inset-0 after:hover:backdrop-blur-sm after:duration-500 	">
      <Image width={300} height={300} src="https://weddingphotographybysf.com/wp-content/uploads/2024/07/DSC06972-2048x1365.jpg" alt="" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">

        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
            Holi Themed Haldi
          </h2>
          <p class="text-white font-medium text-sm mt-1">#PHOTOGRAPHY</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Imagine a celebration infused with the playful spirit of Holi. Ditch the ordinary and create an explosion of vibrancy with flower petals or colourful powders! This isn't just about the soon-to-be-wed couple - it's a chance for YOU and your loved ones to create unforgettable memories. Wedding Photography By SF will be there to capture the playful energy and transform it into stunning photographs that will bring the joy flooding back for years to come. Let your Haldi celebration be a vibrant reflection of your unique love story and adventurous spirit!</p>
          <button class="flex justify-between text-white uppercase text-sm items-center overflow-hidden group/btn gap-4 z-20 relative mt-5">
            <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Learn More</span>
          </button>
        </div>

      </div>
      <div class="absolute top-3 left-3 text-white z-10 *:size-8 sm:hidden">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.75 4.5a.75.75 0 0 1 .75.75V11h5.75a.75.75 0 0 1 0 1.5H12.5v5.75a.75.75 0 0 1-1.5 0V12.5H5.25a.75.75 0 0 1 0-1.5H11V5.25a.75.75 0 0 1 .75-.75Z"></path>
        </svg>
      </div>
    </div>

  </div>

</div>

<!-- 3rd section end  -->

<!-- 4rd section  -->
<section class="max-sm:px-6 sm:py-10 max-sm:pb-10">

  <div class="text-5xl relative  text-balance flex items-center justify-center text-center w-full font-bold text-slate-800 sm:pb-14 pb-10 mx-auto">Gallery<div class="absolute md:-top-12 -top-5 [font-family:Yesteryear] text-center [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">Image</div>
  </div>


  <!-- Fancybox Integration -->
  <div id="gallery-wrapper" class="grid md:grid-cols-4 grid-cols-2">
    <div>
      <a data-fancybox="gallery13" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery13" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery13" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery13" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery13" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
			</div>
    </div>

    <div>
      <a data-fancybox="gallery14" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery14" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery14" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery14" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery14" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery15" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery15" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery15" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery15" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery15" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery16" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery16" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery16" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery16" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery16" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery17" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery17" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp"></a>
				<a data-fancybox="gallery17" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp"></a>
				<a data-fancybox="gallery17" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp"></a>
				<a data-fancybox="gallery17" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-153-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery18" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery18" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp"></a>
				<a data-fancybox="gallery18" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp"></a>
				<a data-fancybox="gallery18" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp"></a>
				<a data-fancybox="gallery18" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-139-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery19" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery19" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp"></a>
				<a data-fancybox="gallery19" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp"></a>
				<a data-fancybox="gallery19" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp"></a>
				<a data-fancybox="gallery19" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-photo-shoot-152-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery20" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery20" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg"></a>
				<a data-fancybox="gallery20" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg"></a>
				<a data-fancybox="gallery20" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg"></a>
				<a data-fancybox="gallery20" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/8.jpg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery21" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery21" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg"></a>
				<a data-fancybox="gallery21" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg"></a>
				<a data-fancybox="gallery21" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg"></a>
				<a data-fancybox="gallery21" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/11.jpg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery22" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      
      <div class="hidden">
				<a data-fancybox="gallery22" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg"></a>
				<a data-fancybox="gallery22" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg"></a>
				<a data-fancybox="gallery22" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg"></a>
				<a data-fancybox="gallery22" href="https://www.kumkumphotosjaipur.com/images/gallery/wedding/12.jpg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery23" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      
      <div class="hidden">
				<a data-fancybox="gallery23" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp"></a>
				<a data-fancybox="gallery23" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp"></a>
				<a data-fancybox="gallery23" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp"></a>
				<a data-fancybox="gallery23" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-8-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery24" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery24" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp"></a>
				<a data-fancybox="gallery24" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp"></a>
				<a data-fancybox="gallery24" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp"></a>
				<a data-fancybox="gallery24" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-ceremony-photo-7-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery25" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery25" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery25" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery25" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
				<a data-fancybox="gallery25" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photography-2-600x600.webp"></a>
			</div>
    </div>

    <div>
      <a data-fancybox="gallery26" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery26" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery26" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery26" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
				<a data-fancybox="gallery26" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-19-600x600.webp"></a>
			</div>

     
    </div>
    <div>
      <a data-fancybox="gallery27" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery27" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery27" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery27" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
				<a data-fancybox="gallery27" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-2-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery28" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery28" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery28" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery28" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
				<a data-fancybox="gallery28" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/haldi-rasam-photo-5-600x600.webp"></a>
			</div>
    </div>

    <!-- Add similar sections for other gallery images -->

  </div>


</section>
<!-- 4rd section end -->

<!-- 5th section  -->

<div class="max-w-7xl mx-auto px-6 lg:px-8 sm:py-16 py-10">
  <div class="sm:text-5xl text-4xl relative  text-balance flex items-center justify-center  w-full font-bold text-slate-800 sm:pb-14 pb-5 mx-auto">Frequently Asked<div class="absolute -top-4 sm:-top-7 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">Questions</div>
  </div>
  <div class="relative flex flex-col mt-5">
    <input class="peer/mm hidden" type="radio" checked name="QA" id="QA1">
    <label for="QA1" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6">What is Haldi Ceremony Photography and why is it important?</label>
    <div class="w-fullshadow-md mt-[-43px] border border-solid border-white shadow-lg bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">Haldi is a pre-wedding ceremony where turmeric paste, a traditional ritual, is applied to the skin of the bride and groom to brighten and cleanse it before their big day. This colorful and joyous event is a great way to preserve cultural traditions, as well as the happiness of family and friends. </div>
  </div>

  <div class="relative flex flex-col mt-5">
    <input class="peer/mm hidden" type="radio" name="QA" id="QA2">
    <label for="QA2" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6">What is the best way to photograph Haldi ceremonies?</label>
    <div class="w-fullshadow-md mt-[-43px] border border-solid border-white shadow-lg bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">Haldi photography is a combination of creativity and sensitivity. We aim to capture the vivid colors, emotional moments and lively interactions among family members and friends as they take part in this auspicious ceremony.</div>
  </div>

  <div class="relative flex flex-col mt-5">
    <input class="peer/mm hidden" type="radio" name="QA" id="QA3">
    <label for="QA3" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6">
      What do we wear to the Haldi Ceremony photoshoot? </label>
    <div class="w-fullshadow-md mt-[-43px] border border-solid border-white shadow-lg bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">Wear comfortable, casual clothes that you're not afraid to get stained with turmeric. Bright colors such as yellow, orange or contrasting shades will add to the festive mood and make your pictures pop. </div>
  </div>

  <div class="relative flex flex-col mt-5">
    <input class="peer/mm hidden" type="radio" name="QA" id="QA4">
    <label for="QA4" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white rounded-t-4xl peer-checked/mm:rounded-xl py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6"> Do You provide props or decor for Haldi Ceremony photography?</label>
    <div class="w-fullshadow-md mt-[-43px] border border-solid border-white shadow-lg bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">We usually capture the Haldi ritual as it unfolds naturally, focusing on traditional rituals and genuine expressions joy and camaraderie between family members. We are also happy to incorporate any props or décor ideas you may have into the photoshoot.</div>
  </div>
  <div class="relative flex flex-col mt-5">
    <input class="peer/mm hidden" type="radio" name="QA" id="QA5">
    <label for="QA5" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white rounded-t-4xl peer-checked/mm:rounded-xl py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6"> How many photos will we receive of our Haldi Ceremony and when will they arrive?</label>
    <div class="w-fullshadow-md mt-[-43px] border border-solid border-white shadow-lg bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">Your edited Haldi photos will be delivered within [timeframe - e.g. 2-3 weeks]. The number of edited photos will depend on the package and coverage you select. This can range from [number] up to [number] images. Each photo is carefully edited to bring out the vibrancy and emotions of this special event.</div>
  </div>
</div>

<!-- 5th section end  -->

<!-- 6th section  -->
<section class="h-full lg:py-20 py-12 bg-fixed bg-no-repeat bg-cover bg-center bg-[url('{{asset('/public/tailwind_frontend/contactform.webp')}}')]">
	<div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl ">


		<div class="max-w-5xl max-sm:px-4 mx-auto">

			<div class="sm:mt-6 overflow-hidden bg-white/20 shadow-xl rounded-xl">
				<div class="p-6 sm:p-12">
					<div class="text-white text-center text-[45px] sm:text-[70px] leading-[100%] font-normal [font-family:'Dancing_Script',cursive] pb-5">
						Book Now
					</div>
					<div class=" text-sm md:text-base leading-7 text-white/80 text-balance text-center ">Planning your wedding or an event? Fill out the booking form, and we'll get in touch with you shortly.
						If it's urgent, call us at +91-98870 34345.</div>

					<form action="#" method="POST" class="sm:mt-14 mt-10">
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
							<div>
								<label for="" class="text-base font-medium text-white"> Your name </label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Enter your full name" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> Email address </label>
								<div class="mt-2.5 relative">
									<input type="email" name="" id="" placeholder="Enter your email" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> Phone number </label>
								<div class="mt-2.5 relative">
									<input type="tel" name="" id="" placeholder="Phone Number" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> City</label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Type here..." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>
							<div>
								<label for="" class="text-base font-medium text-white"> Service </label>
								<div class="mt-2.5 relative">
									<select id="countries" class="block w-full px-4 sm:py-3 py-2 text-black placeholder:text-gray-500 text-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900">
										<option selected>Select a Service</option>
										<option value="Wedding">Wedding</option>
										<option value="Pre-Wedding">Pre-Wedding</option>
										<option value="Both">Both</option>
									</select>
								</div>
							</div>
							<div>
								<label for="" class="text-base font-medium text-white"> Budget </label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Type here..." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div class="sm:col-span-2">
								<label for="" class="text-base font-medium text-white"> Message </label>
								<div class="mt-2.5 relative">
									<textarea name="" id="" placeholder="Type Here ...." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md resize-y focus:outline-none focus:border-slate-900 caret-slate-900" rows="4"></textarea>
								</div>
							</div>

							<div class="sm:col-span-2 text-center">
								<button type="submit" class="inline-flex items-center justify-center w-auto px-4 py-2 mt-2 text-base font-semibold text-white transition-all duration-200 bg-slate-900 border border-transparent rounded-md focus:outline-none hover:bg-slate-800 focus:bg-slate-800">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- 6th section end  -->





@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush