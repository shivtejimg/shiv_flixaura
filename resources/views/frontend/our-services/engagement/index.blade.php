@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- 1st section  -->

<section class="h-[70vh] min-h-[400px] bg-no-repeat bg-cover bg-cover bg-[url('https://img.freepik.com/free-photo/woman-lying-her-husband-bridge_1153-1318.jpg?t=st=1727864325~exp=1727867925~hmac=e435cf14445fa91860d168d1e0aff180f6d5569ff6019a45f7bec990f0141eb2&w=740')] relative before:absolute before:bg-black/50 before:inset-0 before:z-10 before:size-full">
  <div class="mx-auto max-w-7xl lg:px-8 px-6 h-full py-10 relative z-20">
    <div class="text-white sm:text-7xl text-5xl flex items-end justify-center h-full text-center">Engagement</div>
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
            <Image width={500} height={500} class="aspect-[1/1]  object-cover rounded-3xl" src="https://img.freepik.com/premium-photo/man-woman-are-standing-front-wall-with-lights_1113980-1753.jpg?w=740" alt="" />
          </div>

          <div class=" absolute sm:-top-7 -top-3  z-[3] w-[40%] right-0 sm:group-hover:right-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] pointer-events-none rounded-3xl object-cover" src="https://img.freepik.com/free-photo/side-view-married-couple-outdoors_23-2149617145.jpg?t=st=1727864961~exp=1727868561~hmac=395ebbb9e5db919bfc281684ff9697dc242623105e87e6d1b802e8b3fdb76de5&w=740" alt="" />
          </div>
          <div class=" absolute -bottom-5 pointer-events-none z-[3] w-[40%] left-0 sm:group-hover:left-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] rounded-3xl object-top object-cover" src="https://img.freepik.com/free-photo/beautiful-woman-long-red-dress-walks-around-city-with-her-husband_1157-13364.jpg?t=st=1727865024~exp=1727868624~hmac=b3df5927ae0a40c28ee5de20c0d3e5e49ff6aae1a773d141f06222994e5a84d1&w=740" alt="" />
          </div>
        </div>
      </div>
      <div data-aos="fade-left" class="col-span-12 lg:col-span-6 ">
        <div class="size-full">
          <div class="sm:text-5xl text-4xl relative  text-balance  w-full font-bold text-slate-800 lg:pb-14 max-lg:mt-20">
          Engagement Photography with
            <div class="absolute sm:-top-7 -top-3 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light"> FlixAura</div>
          </div>

          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          Love is always in the air—and so is the laughter! Your engagement ceremony marks the beginning of an exciting journey, and we’re here with our mesmerizing <strong>engagement photoshoot</strong>  to capture all the joyful, amusing, and heartwarming moments that make this celebration unforgettable.
          </div>
          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          We take the time to get to know you as a couple, which allows us to capture your true essence. Every photo tells a part of your story, and we’re dedicated to making it a beautiful one!
          </div>
          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
          Let FILXAURA capture the heart of your celebration, authentically and beautifully with the unique <strong>engagement photography</strong>  ideas.

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2nd end  -->

<!-- 3rd section  -->
<div class="max-w-7xl mx-auto px-6 lg:px-8 sm:py-16 py-10">

  <div class="grid lg:grid-cols-3 sm:grid-cols-2   gap-5">
    <div class="w-full group/main aspect-[1/1.1] :hover:scale-105 :duration-500 overflow-hidden  *:size-full *:object-cover relative after:absolute after:size-full after:bg-black/40 after:inset-0 after:hover:backdrop-blur-sm after:duration-500 	">
      <Image width={300} height={300} src="https://plus.unsplash.com/premium_photo-1682090789715-a1acbfe72404?q=80&w=1452&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">

        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
          Romantic Garden Engagement
          </h2>
          <p class="text-white font-medium text-sm mt-1">#ENGAGEMENT</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Picture a love story unfolding amidst lush gardens and blooming flowers. The Romantic Garden Engagement theme sets a magical atmosphere for capturing intimate moments with a soft, natural backdrop.</p>
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
      <Image width={300} height={300} src="https://images.unsplash.com/photo-1626375362529-ab540f0dc801?q=80&w=1551&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">


        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">

          City Lights Romance
          </h2>
          <p class="text-white font-medium text-sm mt-1">#ENGAGEMENT</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Celebrate your engagement with the sparkling city skyline as your backdrop. The City Lights Romance theme captures your love amidst dazzling lights and urban chic vibes, perfect for an elegant and modern engagement..</p>
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
      <Image width={300} height={300} src="https://images.unsplash.com/photo-1611105672452-1db1501c528e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
      <div class=" p-2 bottom-6  overflow-hidden   absolute z-30 !h-max !w-[90%] left-1/2 -translate-x-1/2">

        <div class="translate-y-28 group-hover/main:-translate-y-0 duration-300">
          <h2 class="text-2xl w-4/5 font-semibold text-white">
          Rustic Charm
          </h2>
          <p class="text-white font-medium text-sm mt-1">#ENGAGEMENT</p>
          <p class="text-xs text-white mt-2 line-clamp-4">Rustic barn doors, wildflowers, and a cozy setting—all contribute to the natural beauty of this engagement theme. Perfect for couples looking for an outdoor, laid-back atmosphere, we capture the essence of your bond with warmth and simplicity.</p>
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
      <a data-fancybox="gallery45" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery45" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg"></a>
				<a data-fancybox="gallery45" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg"></a>
				<a data-fancybox="gallery45" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg"></a>
				<a data-fancybox="gallery45" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/00AB90B3-39D5-47B5-975E-E0D9EAD6891F.jpeg"></a>
			</div>
    </div>

    <div>
      <a data-fancybox="gallery46" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery46" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery46" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery46" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery46" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery47" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery47" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery47" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery47" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery47" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery48" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery48" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery48" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery48" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery48" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery49" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery49" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg"></a>
				<a data-fancybox="gallery49" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg"></a>
				<a data-fancybox="gallery49" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg"></a>
				<a data-fancybox="gallery49" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/6D9B46BD-554F-4C23-A018-336C475BB34B.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery50" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery50" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg"></a>
				<a data-fancybox="gallery50" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg"></a>
				<a data-fancybox="gallery50" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg"></a>
				<a data-fancybox="gallery50" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/360A2DEF-1793-4F7C-9794-F5D974A4426F.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery51" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery51" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg"></a>
				<a data-fancybox="gallery51" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg"></a>
				<a data-fancybox="gallery51" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg"></a>
				<a data-fancybox="gallery51" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/B87D7067-96D7-4A17-9545-92219E813BC0.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery52" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery52" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg"></a>
				<a data-fancybox="gallery52" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg"></a>
				<a data-fancybox="gallery52" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg"></a>
				<a data-fancybox="gallery52" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C23DAB9B-0EBB-4244-8DDF-88889E722E68.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery53" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery53" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp"></a>
				<a data-fancybox="gallery53" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp"></a>
				<a data-fancybox="gallery53" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp"></a>
				<a data-fancybox="gallery53" href="https://weddingphotographybysf.com/wp-content/uploads/2024/09/0848-600x600.webp"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery54" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery54" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg"></a>
				<a data-fancybox="gallery54" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg"></a>
				<a data-fancybox="gallery54" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg"></a>
				<a data-fancybox="gallery54" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/E4E56A12-6DA1-4593-A36D-111D5F9D51DE.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery55" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery55" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg"></a>
				<a data-fancybox="gallery55" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg"></a>
				<a data-fancybox="gallery55" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg"></a>
				<a data-fancybox="gallery55" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/169CA6D6-E618-431F-B9BE-D81579A89D92.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery56" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery56" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg"></a>
				<a data-fancybox="gallery56" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg"></a>
				<a data-fancybox="gallery56" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg"></a>
				<a data-fancybox="gallery56" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/1ACBB05A-9764-4F9E-BC50-4EB1D4C24A1C.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery57" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery57" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg"></a>
				<a data-fancybox="gallery57" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg"></a>
				<a data-fancybox="gallery57" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg"></a>
				<a data-fancybox="gallery57" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/C93F4159-D76F-4FEB-90D0-E96AD697BAE9.jpeg"></a>
			</div>
    </div>

    <div>
      <a data-fancybox="gallery58" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery58" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery58" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery58" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
				<a data-fancybox="gallery58" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/14F90732-A971-4EF8-9B7E-2A901F930F4A.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery59" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>

      <div class="hidden">
				<a data-fancybox="gallery59" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery59" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery59" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
				<a data-fancybox="gallery59" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/F19CC39E-4FA2-43EA-9CE6-8F23B7B4662B.jpeg"></a>
			</div>
    </div>
    <div>
      <a data-fancybox="gallery60" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg">
        <div class="relative overflow-hidden shadow-2xl group">
          <img width="400" height="400" src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
          <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
        </div>
      </a>
      <div class="hidden">
				<a data-fancybox="gallery60" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery60" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery60" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
				<a data-fancybox="gallery60" href="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/7E086A20-2591-4783-9DDD-3041D524C42F.jpeg"></a>
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
    <label for="QA1" class="flex items-center gap-x-[2px] bg-sky-500 sm:text-base text-sm capitalize font-medium relative z-10 text-white py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg]  peer-checked/mm:w-full peer-checked/mm:after:top-6">Why is Mehandi Ceremony Photography Important?</label>
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