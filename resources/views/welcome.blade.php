<x-app-layout>

    <x-slot name="meta">
        <title>Top Crypto Job Board</title>
        <meta name="description" content="Job board for blockchain and cryptocurrency jobs. Blockchain jobs, Bitcoin jobs, Ethereum jobs. Updated daily.">
        <style>
            #nav-desktop-links a {
                color: #FFFFFF !important;
            }
            #nav-responsive{
                padding-bottom: 5rem;
            }
            .gradient-primary{
                background-color: #4158D0;  /* fallback for old browsers */
                background-image: linear-gradient(-225deg, #2563eb 0%, #5753C9 48%, #6E7FF3 100%);
            }
        </style>
    </x-slot>



    <section class="gradient-primary -mt-20">

        <div class="max-w-5xl mx-auto px-4 pt-24">
            <h1 class="text-white text-4xl font-black tracking-wider text-center mt-8">Top job board for blockchain and cryptocurrency jobs.</h1>
            <div class="flex justify-center mt-8">
                <a class="no-underline" href="">
                    <button type="button" class="inline-flex items-center px-4 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition p-9">
                        Post Job
                    </button>
                </a>

                <a class="no-underline" href="">
                    <button type="button" class="inline-flex items-center px-4 py-3 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition ml-5">
                        Find a Job
                    </button>
                </a>
            </div>
        </div>

        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>

    </section>

    <section class="bg-white">
        <div class="container max-w-3xl mx-auto py-8 px-4 text-xl">
            We scour the web and find the best crypto jobs on the market so that you don't have to waste your time. Jobs are posted daily so let's find your next career.
        </div>
    </section>



</x-app-layout>
