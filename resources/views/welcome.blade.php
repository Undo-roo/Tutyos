@extends('layouts.static')

@section('content')
    
<div class="w-screen h-[500px] bg-orange-lighter flex flex-col">
    <header class="flex justify-between pt-14 px-20 text-dark-default">
        <h1 class="text-3xl font-bold">TUTOYS</h1>
        <nav>
            <a class="ml-5 font-bold @if(request()->is('/')) text-red @endif" href="">Home</a>
            <a class="ml-5 font-bold @if(request()->is('/book')) text-red @endif" href="">Book</a>
            <a class="ml-5 font-bold @if(request()->is('/order')) text-red @endif" href="">Order</a>
            <a class="ml-5 font-bold @if(request()->is('/about')) text-red @endif" href="">About me</a>
            <a class="ml-5 font-bold @if(request()->is('/login')) text-red @endif" href="">Sign in</a>
        </nav>
    </header>

    <section class="px-20 mt-auto mb-auto font-inika">
        <p class="text-4xl block"> <span class="font-bold">Customize</span> your <span class="font-bold">Plushies</span> </p>
        <p class="text-4xl mt-5 block"> or </p>
        <p class="text-4xl mt-5 block"> <span class="font-bold">Schedule</span> a <span class="font-bold">Party</span> with us! </p>
    </section>
</div>

<article>

    <header class="h-36 bg-lightblue flex justify-center items-center">
        <h5 class="text-2xl font-extrabold dark:text-white">Available Function</h5>
    </header>

    <section class="px-20 py-10 flex">
        <div class="px-20">
            <h1 class="text-3xl font-bold text-dark-default">Order a Toy</h1>
            <div class="bg-dark-default mt-3" style="height: 2px; width: 300px;"></div>
            <p class="mt-5 leading-10">
                Order a toy from our company.
                or customize a toy and then buy it!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laudantium, quisquam et consequatur rerum molestias qui vitae quae voluptas odio. Adipisci tempora reprehenderit eveniet. Officia velit laboriosam amet doloremque dolorem!
            </p>
        </div>

        <img src="/img/img-placeholder.png" alt="placeholder img" width="600">
    </section>
    
    <section class="px-20 py-10 flex">

        <img src="/img/img-placeholder.png" alt="placeholder img" width="600">

        <div class="px-20 text-end">
            <h1 class="text-3xl font-bold text-dark-default">Appointment</h1>
            <div class="bg-dark-default mt-3 float-right" style="height: 2px; width: 300px;"></div>
            <p class="mt-10 leading-10">
                Schedule a party with our company
                blah blah blah fw fnw
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laudantium, quisquam et consequatur rerum molestias qui vitae quae voluptas odio. Adipisci tempora reprehenderit eveniet. Officia velit laboriosam amet doloremque dolorem!
            </p>
        </div>
    </section>
</article>

<footer class="h-36 px-20 bg-lightblue flex flex-col ">

    <div class="bg-dark-default mt-auto" style="height: 1px; width: 100%;"></div>
    <div class="flex mt-5 w-full items-center">
        <img src="/img/placeholder-logo.png" alt="logo image" width="150">
        <p class="text-dark-lighter ml-5">© 2039 Tutoys. All rights reserved.</p>

        <a aria-label="facebook link" class=" hover:text-dark-darker text-dark-lighter text-xl ml-auto" href=""><span class="mdi mdi-facebook"></span></a>
        <a aria-label="instagram link" class=" hover:text-dark-darker text-dark-lighter text-xl ml-3" href=""><span class="mdi mdi-instagram"></span></a>
    </div>
</footer>


@endsection