<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img class="logo"
                 srcset=" data:image/png;base64,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"
                 alt="QA logo " width="200px" height="200px">
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
               

               

               
                           </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">


         

       

       
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>
