@extends('layout')

@section('content')

<div class="landing-container">
    <div class="sidebar">
        <img src="{{ asset('images/pan.png') }}" alt="panda"  />
    </div>
    <div class="landing-content">
        <div class="about-me">
            <div class="text-start">

            </div>

            <div class="paragraph-box">
                <p class="text-lg leading-relaxed text-start text-white" style="animation-delay: 0.5s;">
                    Step into the exhilarating world of Mobile Legends, where skill meets strategy in epic battles! Join millions of players worldwide in fast-paced action, commanding powerful heroes to victory. With stunning graphics and intuitive controls, Mobile Legends offers an unmatched gaming experience. Install now and become a legend today!
                </p>
                <img src="{{ asset('images/gp.png') }}" alt="playstore" style="width: 200px; height: auto;">
            </div>

        </div>
    </div>
</div>

<style>
    .landing-container {
        display: flex;
        height: 100vh;
        width: 100%;
        padding: 100px;
    }

    .sidebar {
        flex: 1;
        padding-right: 0px;
        margin-left: 1px;
    }

    .landing-content {
        flex: 2;
        padding-left: 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
    }

    .about-me {
        margin-bottom: 4rem;
        opacity: 0;
        animation: fade-in 0.5s forwards;
    }

    .about-me h2 {
        font-size: 4rem;
        margin-bottom: 20px;
        transition: opacity 0.5s ease-in-out;
    }
    .about-me p {
        font-size: 20px;
        transition: opacity 0.5s ease-in-out;
        animation-delay: 1s;
    }

    .paragraph-box {
        height: 430px;
        border: 2px solid #000;
        padding: 20px;
        border-radius: 10px;
        background-color: transparent;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .install-button {
        background-color: transparent;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: solid black;
        border-radius: 15px;
        cursor: pointer;
    }
    .install-button svg {
        margin-right: 5px;
        margin-bottom: 5px;
    }

    @keyframes fade-in {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>

@endsection
