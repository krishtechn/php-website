<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl"><h1 style="font-size:20px;">Welcome <?php echo $_SESSION['username']; ?></h1>
</span>
      </a>

      


      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="#Home" class="mr-5 hover:text-gray-900">Home</a>
                <a href="#services" class="mr-5 hover:text-gray-900">Services</a>
                <a href="#about" class="mr-5 hover:text-gray-900">About</a>
                <a href="#contact" class="mr-5 hover:text-gray-900">Contact</a>
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 bg-light-blue-500 focus:outline-none hover:bg-gray-200 rounded text-base mt-0 md:mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        </button>
    </div>
  </header>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>

          <section id="services">
            <section class="text-gray-600 body-font">
                  <div class="container px-5 py-2 mx-auto">
                    <div class="flex flex-wrap -m-4">
                      <div class="p-2 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 bg-gray-400 rounded-lg overflow-hidden text-center relative">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <a class="text-indigo-500 inline-flex items-center">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-primary text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm text-danger">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                              </svg>6
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="p-2 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 bg-indigo-500 rounded-lg overflow-hidden text-center relative">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <a class="text-indigo-500 inline-flex items-center">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                            <span class="text-gray-400 mr-3 inline-flex items-center text-success leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm text-danger">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                              </svg>6
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="p-2 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden bg-light-blue-900 text-center relative">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <a class="text-indigo-500 inline-flex items-center">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                              </svg>6
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
          </section>

          <section class="text-gray-600 body-font">
            <div class="container px-2 py-24 mx-auto">
              <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
              <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-gray-100 p-8 rounded bg-gray-100 text-black" style="color:#fff;background-color: #312e81;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-danger block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                      <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                    <a class="inline-flex items-center">
                      <img alt="testimonial" src="https://source.unsplash.com/1600x900/?UI DEVELOPER" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                      <span class="flex-grow flex flex-col pl-4">
                        <span class="title-font font-medium text-gray-900 text-danger">Ramu kharal</span>
                        <span class="text-gray-500 text-sm text-white">UI DEVELOPER</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-gray-100 p-8 rounded text-white" style="background-color: #18181b;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4 text-primary" viewBox="0 0 975.036 975.036">
                      <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                    <a class="inline-flex items-center">
                      <img alt="testimonial" src="https://source.unsplash.com/1600x900/?DESIGNER" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                      <span class="flex-grow flex flex-col pl-4">
                        <span class="title-font font-medium text-gray-900 text-danger">Sita Gaihre</span>
                        <span class="text-gray-500 text-sm text-base font-medium">DESIGNER</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="text-gray-600 body-font">
                <form action="index.html">
            <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
              <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Please subscribe to our website</h1>
                <div class="flex w-full md:justify-start justify-center items-end">
                  <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                    <label for="hero-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                    <input type="text" id="hero-field" name="hero-field" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                  </div>
                  <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </div>
                <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Neutra shabby chic ramps, viral fixie.</p>
                <div class="flex lg:flex-row md:flex-col">
                  <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                    <svg xmlns="https://source.unsplash.com/1600x900/?coding,programming" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                      <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                    </svg>
                    <span class="ml-4 flex items-start flex-col leading-none">
                      <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
                      <span class="title-font font-medium">Google Play</span>
                    </span>
                  </button>
                  <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                      <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
                      <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
                    </svg>
                    <span class="ml-4 flex items-start flex-col leading-none">
                      <span class="text-xs text-gray-600 mb-1">Download on the</span>
                      <span class="title-font font-medium">App Store</span>
                    </span>
                  </button>
                </div>
              </div>
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="https://source.unsplash.com/1600x900/?coding,programming">
              </div>
            </div>
      </form>
          </section>


          <section class="text-gray-600 body-font relative my-5" id="contact">
            <div class="absolute inset-0 bg-gray-300">
              <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594581.471120692!2d81.8859844992932!3d28.37899439325918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1631372384280!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
              <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Signup to our website</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Join with Technical krish</p>
                <div class="relative mb-4">
                      <form action="index.html" method="post">
                            
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                
            </form>
               </div>
            </div>
          </section>

          
</body>

<script>

  const clock = document.getElementById('clock');

  setInterval(() => {
    
  const date = new Date();
  const hour = date.toLocaleString();
  clock.innerHTML = hour;

  
 }, 1000);
   </script>
