<nav class="w-full h-[70px] bg-white border-b-[2px] stroke-black">
    <div class="flex h-[70px] p-[20px] justify-between">
        <a href="#"><img class="w-[30px] h-[30px]" src="{{ asset('svg/Icon.svg') }}" alt="icon"></a>
        <div class="flex flex-row items-center max-md:hidden">
            <ul class="flex flex-row">
                <li class="m-[5px]">
                    <a class="font-normal decoration-solid relative text-black no-underline after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-[#333] after:origin-bottom-right after:transition-transform after:duration-[0.25s] after:ease-[ease-out] after:scale-x-0 after:left-0 after:bottom-0 hover:after:origin-bottom-left hover:after:scale-x-100"
                        href="/tshirts">T-Shirts</a>
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
        <a href=""><img class="w-[30px] h-[30px] md:hidden" src="{{ asset('svg/List.svg') }}" alt=""></a>
    </div>
</nav>
