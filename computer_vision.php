  <?php
  include("header.php");
  ?>
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <!--<h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>-->
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Computer Vision</h1>
        </div>
        <div class="flex flex-wrap">
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Image distortion</h2>
            <p class="leading-relaxed text-base mb-4">This demo compares the test image with the reference image between
              them and it gives the distortion in the test image in percentage term w.r.t the reference image.</p>
            <a href=<?php echo $baseUrl . "/image_distortion.php"?> class="text-indigo-500 inline-flex items-center">See Demo
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Age and Gender estimation</h2>
            <p class="leading-relaxed text-base mb-4">This app detects age and gender in real-time using computer
              vision.</p>
            <a href="https://35.165.235.204:8009" class="text-indigo-500 inline-flex items-center">See Demo
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Emotion Detection</h2>
            <p class="leading-relaxed text-base mb-4">We are using computer vision to detect emotion in real-time.</p>
            <a class="text-indigo-500 inline-flex items-center">See Demo
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Social Distancing Detector</h2>
            <p class="leading-relaxed text-base mb-4">This app detects social distance breach between people in a video
              and highlights the same in red box.</p>
            <a href="http://35.165.235.204:8010/" class="text-indigo-500 inline-flex items-center">See Demo
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <!--<button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>-->
      </div>
    </section>
  </section>

  <?php
include("footer.php");
?>
</body>

</html>