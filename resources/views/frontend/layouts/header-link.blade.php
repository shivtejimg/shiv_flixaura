<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">



<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yesteryear&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Playwrite+DE+Grund:wght@100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yesteryear&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>

<script>
  tailwind.config = {
    theme: {
      extend: {
        animation: {
          'fixed-nav': 'fixedNav 0.6s',
          'fade-in-up': 'fade-in-up 0.4s cubic-bezier(0.5, 0.84, 0, 1.23) both',
          'marquee-h': 'marqueeHorizontal 20s linear infinite',
        },
        keyframes: {

          fixedNav: {
            '0%': {
              opacity: '0',
              transform: 'translateY(-60px)'
            },
            '100%': {
              opacity: '1',
              transform: 'translateY(0px)'
            },
          },


          'fade-in-up': {
            '0%': {
              opacity: 0,
              filter: 'blur(40px)',
              transform: 'translateY(200px) scale(2)',
            },
            '100%': {
              opacity: 1,
              filter: 'blur(0px)',
              transform: 'translateY(0) scale(1)',
            },
          },
          marqueeHorizontal: {
            '0%': {
              transform: 'translateZ(0)',
              visibility: 'visible',
            },
            '100%': {
              transform: 'translate3d(-100%,0,0)'
            },
          },
        }
      },
      fontFamily: {
        'body': ['Roboto'],
      }
    }
  }
</script>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" 
/>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>