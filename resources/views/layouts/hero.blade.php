
{{-- <header>
    <nav class="fixed z-20 w-full">
        <div class="container m-auto px-6 md:px-12 lg:px-6">
            <div class="flex flex-wrap items-center justify-between py-6 gap-6 md:py-4 md:gap-0">
                <div class="w-full flex justify-between lg:w-auto">
                    <a href="#" aria-label="logo">
                        <img src="images/logo.svg" class="w-36" alt="tailus logo" width="144" height="48">
                    </a>

                    <button aria-label="humburger" id="hamburger" class="relative w-10 h-10 -mr-2 lg:hidden">
                        <div aria-hidden="true" id="line" class="inset-0 w-6 h-0.5 m-auto rounded bg-white transtion duration-300"></div>
                        <div aria-hidden="true" id="line2" class="inset-0 w-6 h-0.5 mt-2 m-auto rounded bg-white transtion duration-300"></div>
                    </button>
                </div>

                <div hidden class="w-full bg-white md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent lg:w-auto lg:flex">
                    <div class="block w-full lg:items-center lg:flex">
                        <ul class="space-y-6 pb-6 tracking-wide font-medium text-gray-100 lg:pb-0 lg:pr-6 lg:items-center lg:flex lg:space-y-0">
                            <li>
                                <a href="#" class="block md:px-3">
<span>Product</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-3">
<span>Use Cases</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-3">
                                    <span>Integrations</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-3">
                                    <span>Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-3">
                                    <span>Blog</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="border-t space-y-2 pt-2 lg:space-y-0 lg:space-x-2 lg:pt-0 lg:pl-2 lg:border-t-0 lg:border-l lg:items-center lg:flex">
                            <li>
                                <button type="button" title="Start buying" class="w-full py-3 px-6 rounded-md text-center transition border border-transparent active:border-purple-400 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Login
                                    </span>
                                </button>
                            </li>

                            <li>
                                <button type="button" title="Start buying" class="w-full py-3 px-6 rounded-lg text-center transition bg-white active:bg-purple-200 focus:bg-purple-100 sm:w-max">
                                    <span class="block text-sm text-purple-600 font-semibold">
                                        Sign In
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header> --}}
<div class="relative">

    <img class="absolute inset-0 w-full h-full object-cover object-top" src="{{asset('storage/professional-man-portrait.jpg')}}" alt="">
    <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-cyan-900 bg-opacity-30 backdrop-blur-sm rounded-b-lg"></div>
    <div class="relative container m-auto px-6 md:px-12 lg:px-6">
        <div class="mb-12 pt-40 space-y-16 md:mb-20 md:pt-56 lg:w-8/12 lg:mx-auto">
            <h1 class="text-white text-center text-3xl font-bold sm:text-4xl md:text-5xl">
                Looking for your next <span class="text-cyan-500">photographer</span>, you've got me.
            </h1>

            <form action="" class="w-full">
                <div class="relative flex p-1 rounded-xl bg-white shadow-2xl md:p-2">
                    <select class="hidden p-3 rounded-xl bg-transparent md:block md:p-4" name="domain" id="domain">
                        <option value="design">Photgraphy</option>
                        <option value="development">Adobe Photoshop</option>
                        <option value="marketing">Video Editing</option>
                    </select>
                    <input placeholder="Your email address" class="w-full p-4" type="text">
                    <button type="button" title="Contact me" class="ml-auto py-3 px-6 rounded-lg text-center transition bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 md:px-12">
                        <span class="hidden text-white text-xs text- font-semibold md:block">
                            Hire me
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-white md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        {{-- brand logos --}}
        <div class="pb-16">
            <div class="md:px-12">
                <span class="block text-center font-medium text-pink-50">I'm skilled in these tools</span>

                <div class="mt-8 -mx-6 px-6 overflow-x-auto md:overflow-x-hidden">
                    <div class="w-max flex justify-center flex-wrap items-center gap-4 md:w-auto md:gap-6 lg:gap-8">
                        <div class="flex items-center">
                            <img class="w-12 grayscale hover:grayscale-0 " src="{{asset('storage/brand-logos/Logo-Adobe-Photoshop.png')}}" alt="Adobe Photoshop logo" loading="lazy" width="584" height="122">
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 grayscale hover:grayscale-0" src="{{asset('storage/brand-logos/Logo Adobe Illustrator.png')}}" alt="Adobe Illustrator logo" loading="lazy" width="400" height="219">
                        </div>
                        <div class="flex items-center">
                            <img class="w-12 grayscale hover:grayscale-0" src="{{asset('storage/brand-logos/Logo Adobe Premiere Pro.png')}}" alt="Adobe Premiere Pro logo" loading="lazy" width="400" height="219">
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 grayscale hover:grayscale-0" src="{{asset('storage/brand-logos/Logo Adobe XD.png')}}" alt="Adobe XD logo" loading="lazy" width="400" height="219">
                        </div>
                        <div class="flex items-center">
                            <img class="w-12 grayscale hover:grayscale-0" src="{{asset('storage/brand-logos/Adobe Bridge Logo.png')}}" alt="Adobe Bridge Logo" loading="lazy" width="400" height="219">
                        </div>
                        <div class="flex items-center">
                            <img class="w-12 grayscale hover:grayscale-0" src="{{asset('storage/brand-logos/InDesign Logo.png')}}" alt="InDesign logo" loading="lazy" width="400" height="219">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
