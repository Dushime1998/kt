<body class="bg-gray-100 text-gray-900">

    <!-- Fixed Navbar -->
    <div class="fixed w-full z-50">
      @include('components.UserNavbar')
    </div>
  
    <div class="pt-16 flex flex-col lg:flex-row bg-gray-100">
  
      <!-- Side Links and New Arrival Section -->
      <div class="lg:w-88 mt-24 p-3 bg-gray-100 non-responsive  ">
        @include('components.sideLink2')
        {{-- @include('components.tooltip') --}}
        @include('components.newArival')
      </div>
  
      <!-- Main Content Section -->
      <div class="flex-1 w-full mt-24 lg:mx-3 non-responsive">
        {{-- @include('components.search') --}}
        {{-- @include('components.category') --}}
        @include('category.subCategory')
        @include('components.moreTolove')
      </div>

      <div class="flex-1 w-full  lg:mx-3 responsive">
        {{-- @include('components.search') --}}
        {{-- @include('components.category') --}}
        @include('category.subCategory')
        @include('components.moreTolove')
      </div>
  
      <!-- Slider Section -->
      <div class="lg:w-88 lg:ml-3 mt-24 lg:mx-3 non-responsive">
        @include('components.slider2')
      </div>
  
    </div>
  
    <!-- Pagination Links -->
    <div class="mt-4">
      {{-- {{ $accessories->links() }} --}}
    </div>
  
    <!-- Footer -->
    @include('components.userFooter')
  
  </body>