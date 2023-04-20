<nav class="w-full h-[70px] bg-white border-b-[2px] stroke-black">
    <div class="flex h-[70px] p-[20px] justify-between">
        <div class="anu">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                <img class="w-[30px] h-[30px]" src="{{ asset('svg/Icon.svg') }}" alt="icon"></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
        <div class="flex flex-row items-center max-md:hidden">
            <ul class="flex flex-row">
                <li class="m-[5px]">
                    <a class="font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                        href="{{ route('dashboard') }}">T-Shirts</a>
                </li>
                <li class="m-[5px]">
                    <a class="font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                        href="/clothes">Cloths</a>
                </li>
                <li class="m-[5px]">
                    <a class="font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                        href="/shoes">Shoes</a>
                </li>
            </ul>
        </div>
        <div class="group">
            <div class="">
                <button id="dropdown" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                    </svg>
                </button>
            </div>
            <div
                class="absolute group-hover:block hidden top-[80px] left-[20px] h-fit w-96 bg-white shadow-md rounded group-focus:block">
                <ul class="flex flex-col m-[15px] items-center" aria-labelledby="dropdownDefaultButton">
                    <li class="m-[5px]">
                        <a class="text-[20px] font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                            href="{{ route('dashboard') }}">T-Shirts</a>
                    </li>
                    <li class="m-[5px]">
                        <a class="text-[20px] font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                            href="/clothes">Cloths</a>
                    </li>
                    <li class="m-[5px]">
                        <a class="text-[20px] font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                            href="/shoes">Shoes</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    const dropdownButton = document.querySelector("#dropdown");
const dropdownList = document.querySelector("#dropdown + div.hidden");

dropdownButton.addEventListener("click", () => {
  dropdownList.classList.toggle("hidden");
});
</script>
