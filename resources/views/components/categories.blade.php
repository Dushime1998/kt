<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <style>
    .menu-button {
      width: 100%;
      border: 1px solid #d1d5db;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      padding: 8px 16px;
      background-color: #fff;
      font-size: 14px;
      font-weight: 500;
      color: #374151;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: background-color 0.2s ease;
    }

    .menu-button:hover {
      background-color: #f3f4f6;
    }

    .menu-button:focus {
      outline: none;
      box-shadow: 0 0 0 2px #6366f1, 0 0 0 4px rgba(99, 102, 241, 0.25);
    }

    .menu {
      width: auto;
      background-color: #fff;
      border-radius: 0.375rem;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      display: none;
      position: absolute;
      right: 0;
      margin-top: 0.5rem;
      padding: 8px 0;
    }

    .menu a {
      display: flex;
      align-items: center;
      padding: 8px 16px;
      color: #000;
      text-decoration: none;
      transition: background-color 0.2s ease, color 0.2s ease;
    }

    .menu a svg {
      margin-right: 8px;
    }

    .menu a:hover {
      background-color: #ef4444;
      color: #fff;
    }

    .hidden {
      display: none;
    }

    .menu-button svg {
      margin-left: 8px;
    }
  </style>
</head>
<body>

<h1 class="text-center text-black font-semibold">
  Categories
</h1>

<button class="menu-button" id="menuButton">
  Categories
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12.75l-7.5 7.5-7.5-7.5m0-7.5l7.5 7.5 7.5-7.5" />
  </svg>
</button>

<ul class="menu hidden" id="menu">
  <li>
    <a href="/" class="hover:bg-red-500 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
      </svg>
      Home
    </a>
  </li>
  <li>
    <a href="{{ route('check-category', ['id' => 'tv']) }}" class="hover:bg-red-500 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
      </svg>
      TV
    </a>
  </li>
  <li>
    <a href="{{ route('check-category', ['id' => 'radio']) }}" class="hover:bg-red-500 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 7.5 16.5-4.125M12 6.75c-2.708 0-5.363.224-7.948.655C2.999 7.58 2.25 8.507 2.25 9.574v9.176A2.25 2.25 0 0 0 4.5 21h15a2.25 2.25 0 0 0 2.25-2.25V9.574c0-1.067-.75-1.994-1.802-2.169A48.329 48.329 0 0 0 12 6.75Zm-1.683 6.443-.005.005-.006-.005.006-.005.005.005Zm-.005 2.127-.005-.006.005-.005.005.005-.005.005Zm-2.116-.006-.005.006-.006-.006.005-.005.006.005Zm-.005-2.116-.006-.005.006-.005.005.005-.005.005ZM9.255 10.5v.008h-.008V10.5h.008Zm3.249 1.88-.007.004-.003-.007.006-.003.004.006Zm-1.38 5.126-.003-.006.006-.004.004.007-.006.003Zm.007-6.501-.003.006-.007-.003.004-.007.006.004Zm1.37 5.129-.007-.004.004-.006.006.003-.004.007Zm.504-1.877h-.008v-.007h.008v.007ZM9.255 18v.008h-.008V18h.008Zm-3.246-1.87-.007.004L6 16.127l.006-.003.004.006Zm1.366-5.119-.004-.006.006-.004.004.007-.006.003ZM7.38 17.5l-.003.006-.007-.003.004-.007.006.004Zm-1.376-5.116L6 12.38l.003-.007.007.004-.004.007Zm-.5 1.873h-.008v-.007h.008v.007ZM17.25 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Zm0 4.5a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
      </svg>
      Radio
    </a>
  </li>
  <li>
    <a href="{{ route('check-category', ['id' => 'security']) }}" class="hover:bg-red-500 hover:text-white">
      @include('components.securitySVG')
      <span class="ml-2">Security Devices</span>
    </a>
  </li>
  <li>
    <a href="{{ route('check-category', ['id' => 'decoder']) }}" class="hover:bg-red-500 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.878V9a.75.75 0 0 0 1.5 0V6.878a2.25 2.25 0 0 1 2.25-2.25h8.25a2.25 2.25 0 0 1 2.25 2.25V9a.75.75 0 0 0 1.5 0V6.878A3.75 3.75 0 0 0 16.5 3H7.5a3.75 3.75 0 0 0-3 3.878ZM3 9.878C3 8.005 4.505 6.5 6.378 6.5h11.244C19.495 6.5 21 8.005 21 9.878v5.244c0 1.873-1.505 3.378-3.378 3.378H6.378A3.378 3.378 0 0 1 3 15.122V9.878ZM6 9v5.244c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9H6Zm2.25 3a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H8.25Zm5.25.75a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H13.5Zm-3 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H10.5Zm-3 1.5a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H6.75Zm3 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H9Zm3 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H12Zm3-1.5a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5h-.008Zm-3 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H9Zm-3 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5H6.75Zm9 0a.75.75 0 1 1 0-1.5h.008a.75.75 0 0 1 0 1.5h-.008Z" />
      </svg>
      Decoder
    </a>
  </li>
</ul>

<script>
  document.getElementById('menuButton').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
  });
</script>

</body>
</html>
