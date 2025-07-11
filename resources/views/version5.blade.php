<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Court of Matka</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #333333;
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
        }

        .section-card {
            background: #ffffff;
            border: 1px solid rgba(156, 39, 176, 0.2);
            box-shadow: 0 4px 12px rgba(156, 39, 176, 0.1);
        }

        .purple-gradient {
            background: linear-gradient(135deg, #ba68c8 0%, #9c27b0 100%);
        }

        .form-input {
            background: #f9f9f9;
            border: 1px solid rgba(156, 39, 176, 0.2);
            color: #333333;
        }

        .form-input::placeholder {
            color: rgba(51, 51, 51, 0.5);
        }

        .form-input:focus {
            border-color: #9c27b0;
            box-shadow: 0 0 0 2px rgba(156, 39, 176, 0.1);
        }

        select.form-input option {
            background-color: #ffffff;
            color: #333333;
        }

        .btn-purple {
            background: linear-gradient(135deg, #ba68c8 0%, #9c27b0 100%);
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-purple:hover {
            filter: brightness(1.1);
        }

        .stats-card {
            background: #f9f9f9;
            border: 1px solid rgba(156, 39, 176, 0.1);
        }

        .upload-area {
            background: #f9f9f9;
            border: 2px dashed rgba(156, 39, 176, 0.3);
        }

        .upload-area:hover {
            background: #f5f5f5;
            border-color: rgba(156, 39, 176, 0.5);
        }

        .premium-box {
            background: #f9f9f9;
            border: 1px solid rgba(156, 39, 176, 0.2);
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #9c27b0, transparent);
            margin: 1.5rem 0;
            opacity: 0.2;
        }

        .result-card {
            transition: all 0.3s ease;
        }

        .header-bg {
            background: linear-gradient(135deg, #ba68c8 0%, #9c27b0 100%);
        }

        .footer-bg {
            background: #f5f5f5;
        }
    </style>
    <style>
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        /* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .container {
            width: 100%
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px
            }
        }

        @media (min-width: 1536px) {
            .container {
                max-width: 1536px
            }
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .sticky {
            position: sticky
        }

        .bottom-0 {
            bottom: 0px
        }

        .right-0 {
            right: 0px
        }

        .top-0 {
            top: 0px
        }

        .z-50 {
            z-index: 50
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mb-1 {
            margin-bottom: 0.25rem
        }

        .mb-2 {
            margin-bottom: 0.5rem
        }

        .mb-3 {
            margin-bottom: 0.75rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mb-6 {
            margin-bottom: 1.5rem
        }

        .mb-8 {
            margin-bottom: 2rem
        }

        .mt-1 {
            margin-top: 0.25rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .block {
            display: block
        }

        .inline-block {
            display: inline-block
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

        .h-24 {
            height: 6rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .max-w-3xl {
            max-width: 48rem
        }

        .cursor-pointer {
            cursor: pointer
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-center {
            align-items: center
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-3 {
            gap: 0.75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .space-x-4> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-y-3> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.75rem * var(--tw-space-y-reverse))
        }

        .space-y-4> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse))
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-l-lg {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem
        }

        .rounded-r-lg {
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem
        }

        .border {
            border-width: 1px
        }

        .border-b {
            border-bottom-width: 1px
        }

        .border-t {
            border-top-width: 1px
        }

        .border-\[\#9c27b0\] {
            --tw-border-opacity: 1;
            border-color: rgb(156 39 176 / var(--tw-border-opacity, 1))
        }

        .border-\[\#9c27b0\]\/10 {
            border-color: rgb(156 39 176 / 0.1)
        }

        .border-\[\#9c27b0\]\/20 {
            border-color: rgb(156 39 176 / 0.2)
        }

        .border-blue-200 {
            --tw-border-opacity: 1;
            border-color: rgb(191 219 254 / var(--tw-border-opacity, 1))
        }

        .border-green-200 {
            --tw-border-opacity: 1;
            border-color: rgb(187 247 208 / var(--tw-border-opacity, 1))
        }

        .border-orange-200 {
            --tw-border-opacity: 1;
            border-color: rgb(254 215 170 / var(--tw-border-opacity, 1))
        }

        .border-red-200 {
            --tw-border-opacity: 1;
            border-color: rgb(254 202 202 / var(--tw-border-opacity, 1))
        }

        .border-white\/30 {
            border-color: rgb(255 255 255 / 0.3)
        }

        .border-yellow-200 {
            --tw-border-opacity: 1;
            border-color: rgb(254 240 138 / var(--tw-border-opacity, 1))
        }

        .bg-\[\#9c27b0\]\/10 {
            background-color: rgb(156 39 176 / 0.1)
        }

        .bg-blue-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 246 255 / var(--tw-bg-opacity, 1))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
        }

        .bg-green-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(240 253 244 / var(--tw-bg-opacity, 1))
        }

        .bg-orange-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(255 247 237 / var(--tw-bg-opacity, 1))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-white\/20 {
            background-color: rgb(255 255 255 / 0.2)
        }

        .bg-yellow-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 252 232 / var(--tw-bg-opacity, 1))
        }

        .p-3 {
            padding: 0.75rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem
        }

        .pb-3 {
            padding-bottom: 0.75rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem
        }

        .font-bold {
            font-weight: 700
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .capitalize {
            text-transform: capitalize
        }

        .text-\[\#9c27b0\] {
            --tw-text-opacity: 1;
            color: rgb(156 39 176 / var(--tw-text-opacity, 1))
        }

        .text-blue-600 {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity, 1))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity, 1))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity, 1))
        }

        .text-green-700 {
            --tw-text-opacity: 1;
            color: rgb(21 128 61 / var(--tw-text-opacity, 1))
        }

        .text-orange-600 {
            --tw-text-opacity: 1;
            color: rgb(234 88 12 / var(--tw-text-opacity, 1))
        }

        .text-red-600 {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-yellow-600 {
            --tw-text-opacity: 1;
            color: rgb(202 138 4 / var(--tw-text-opacity, 1))
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .hover\:bg-\[\#9c27b0\]\/5:hover {
            background-color: rgb(156 39 176 / 0.05)
        }

        .hover\:text-\[\#ba68c8\]:hover {
            --tw-text-opacity: 1;
            color: rgb(186 104 200 / var(--tw-text-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        @media (min-width: 640px) {
            .sm\:mb-0 {
                margin-bottom: 0px
            }

            .sm\:inline {
                display: inline
            }

            .sm\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .sm\:flex-row {
                flex-direction: row
            }

            .sm\:justify-end {
                justify-content: flex-end
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }
    </style>
</head>

<body class="min-h-screen" x-data="app()">
    <!-- Header -->
    <header class="header-bg shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Court of Matka</h1>
            <div class="bg-white/20 px-3 py-1 rounded-full border border-white/30">
                <span class="text-white font-medium text-sm">Premium Experience</span>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        <!-- Section 1: Introduction -->
        <section id="intro" class="mb-8 text-center">
            <div class="max-w-3xl mx-auto section-card rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-3xl font-bold text-[#9c27b0] mb-3">Welcome to Court of Matka</h2>
                    <p class="text-gray-600 mb-6">Your premier destination for Matka gaming. Experience secure betting,
                        instant results, and exclusive market insights.</p>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 mb-6">
                        <a href="#play" class="btn-purple px-6 py-2 rounded-full">Play Now</a>
                        <a href="#trends"
                            class="border border-[#9c27b0] text-[#9c27b0] px-6 py-2 rounded-full hover:bg-[#9c27b0]/5 transition">View
                            Trends</a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-6">
                        <div class="stats-card p-3 rounded-lg">
                            <div class="text-[#9c27b0] text-xl font-bold mb-1">100+</div>
                            <div class="text-gray-600 text-sm">Active Markets</div>
                        </div>
                        <div class="stats-card p-3 rounded-lg">
                            <div class="text-[#9c27b0] text-xl font-bold mb-1">24/7</div>
                            <div class="text-gray-600 text-sm">Customer Support</div>
                        </div>
                        <div class="stats-card p-3 rounded-lg">
                            <div class="text-[#9c27b0] text-xl font-bold mb-1">Secure</div>
                            <div class="text-gray-600 text-sm">Transactions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 2: Play Matka -->
        <section id="play" class="mb-8">
            <div class="section-card rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-[#9c27b0] mb-4">Play Matka (All Markets)</h2>

                    <form @submit.prevent="submitPlayForm" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="market" x-model="playForm.market"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    fdprocessedid="qmf12">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="number" class="block text-sm font-medium text-gray-700 mb-1">Enter
                                    Number</label>
                                <input type="text" id="number" x-model="playForm.number"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter your number" fdprocessedid="8m041">
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Enter
                                    Price</label>
                                <input type="number" id="price" x-model="playForm.price"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter amount" fdprocessedid="95q4f8">
                            </div>

                            <div>
                                <label for="upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                    ID</label>
                                <div class="flex">
                                    <input type="text" id="upi" readonly="" value="courtofmatka@upi"
                                        class="w-full px-3 py-2 rounded-l-lg form-input focus:outline-none bg-gray-100"
                                        fdprocessedid="iirq9r">
                                    <button type="button" @click="copyUPI('courtofmatka@upi')"
                                        class="btn-purple px-3 py-2 rounded-r-lg" fdprocessedid="wroqf78">Copy</button>
                                </div>
                            </div>

                            <div>
                                <label for="transaction"
                                    class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                <input type="text" id="transaction" x-model="playForm.transactionId"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter transaction ID" fdprocessedid="kzgbz">
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-purple px-6 py-2 rounded-full"
                                fdprocessedid="1gobej">Submit Bet</button>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div x-show="playSuccess" x-transition=""
                        class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative"
                        role="alert">
                        <div class="flex items-center">
                            <div>
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline"> Your bet has been placed successfully.</span>
                            </div>
                        </div>
                        <button @click="playSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="kzmho5">
                            <span class="text-green-600">×</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 3: Loss Refund -->
        <section id="refund" class="mb-8">
            <div class="section-card rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-[#9c27b0] mb-4">Loss Refund (With Proof)</h2>

                    <form @submit.prevent="submitRefundForm" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="refund-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="refund-market" x-model="refundForm.market"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    fdprocessedid="is9kr">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="bet-number" class="block text-sm font-medium text-gray-700 mb-1">Bet
                                    Number</label>
                                <input type="text" id="bet-number" x-model="refundForm.betNumber"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter your bet number" fdprocessedid="wyim4t">
                            </div>

                            <div>
                                <label for="amount-played" class="block text-sm font-medium text-gray-700 mb-1">Amount
                                    Played</label>
                                <input type="number" id="amount-played" x-model="refundForm.amountPlayed"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter amount played" fdprocessedid="e57t">
                            </div>

                            <div>
                                <label for="proof-upload" class="block text-sm font-medium text-gray-700 mb-1">Upload
                                    Proof</label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="proof-upload"
                                        class="flex flex-col items-center justify-center w-full h-24 upload-area rounded-lg cursor-pointer hover:bg-[#9c27b0]/5">
                                        <div class="flex flex-col items-center justify-center pt-3 pb-3">
                                            <p class="text-sm text-gray-600"><span class="font-semibold">Click to
                                                    upload</span></p>
                                            <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 2MB)</p>
                                        </div>
                                        <input id="proof-upload" type="file" class="hidden"
                                            accept=".jpg,.jpeg,.png" @change="handleFileUpload($event)">
                                    </label>
                                </div>
                                <p x-text="refundForm.fileName" class="mt-1 text-xs text-gray-600"></p>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-purple px-6 py-2 rounded-full"
                                fdprocessedid="tukkudr">Submit Refund Request</button>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div x-show="refundSuccess" x-transition=""
                        class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative"
                        role="alert">
                        <div class="flex items-center">
                            <div>
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline"> Your refund request has been submitted
                                    successfully.</span>
                            </div>
                        </div>
                        <button @click="refundSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="e8sod">
                            <span class="text-green-600">×</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 4: Market-Wise Betting Trends -->
        <section id="trends" class="mb-8">
            <div class="section-card rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-[#9c27b0] mb-4">Market-Wise Betting Trends</h2>

                    <form @submit.prevent="submitTrendsForm" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="trends-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="trends-market" x-model="trendsForm.market"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    fdprocessedid="mqinlb">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>
                        </div>

                        <div class="premium-box p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <h3 class="text-lg font-semibold text-[#9c27b0]">Premium Insights</h3>
                                    <p class="text-gray-600 text-sm">Get detailed betting trends and analysis</p>
                                </div>
                                <div class="text-xl font-bold text-[#9c27b0]">₹99</div>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label for="trends-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="trends-upi" readonly=""
                                            value="courtofmatka@upi"
                                            class="w-full px-3 py-2 rounded-l-lg form-input focus:outline-none bg-gray-100"
                                            fdprocessedid="uyisff">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="btn-purple px-3 py-2 rounded-r-lg"
                                            fdprocessedid="ojnu5c">Copy</button>
                                    </div>
                                </div>

                                <div>
                                    <label for="trends-transaction"
                                        class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                    <input type="text" id="trends-transaction" x-model="trendsForm.transactionId"
                                        class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                        placeholder="Enter transaction ID" fdprocessedid="yh0ap3">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-purple px-6 py-2 rounded-full"
                                fdprocessedid="ywubx6">Show Trends</button>
                        </div>
                    </form>

                    <!-- Trends Results -->
                    <div x-show="showTrends" x-transition=""
                        class="mt-6 bg-gray-50 border border-[#9c27b0]/20 rounded-lg shadow-md">
                        <div class="p-3 border-b border-[#9c27b0]/20">
                            <h3 class="text-lg font-semibold text-[#9c27b0]">Betting Trends for <span
                                    x-text="trendsForm.market" class="capitalize"></span></h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Most Played Numbers</h4>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="px-3 py-1 bg-[#9c27b0]/10 text-[#9c27b0] rounded-full border border-[#9c27b0]/20 font-medium text-sm">128</span>
                                        <span
                                            class="px-3 py-1 bg-[#9c27b0]/10 text-[#9c27b0] rounded-full border border-[#9c27b0]/20 font-medium text-sm">345</span>
                                        <span
                                            class="px-3 py-1 bg-[#9c27b0]/10 text-[#9c27b0] rounded-full border border-[#9c27b0]/20 font-medium text-sm">670</span>
                                        <span
                                            class="px-3 py-1 bg-[#9c27b0]/10 text-[#9c27b0] rounded-full border border-[#9c27b0]/20 font-medium text-sm">789</span>
                                        <span
                                            class="px-3 py-1 bg-[#9c27b0]/10 text-[#9c27b0] rounded-full border border-[#9c27b0]/20 font-medium text-sm">234</span>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Market Analysis</h4>
                                    <div class="bg-white p-3 rounded-lg border border-[#9c27b0]/10">
                                        <p class="text-gray-600 text-sm">Based on our analysis, the current market
                                            trend shows a preference for numbers ending with 5 and 8. The opening panna
                                            has been consistently showing patterns with middle digits between 2-6.</p>
                                        <p class="text-gray-600 text-sm mt-2">Players are currently favoring single
                                            digit plays in the range of 3-7, with combination bets showing strong
                                            activity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 5: Doubt Check -->
        <section id="doubt" class="mb-8">
            <div class="section-card rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-[#9c27b0] mb-4">Doubt Check (Prediction)</h2>

                    <form @submit.prevent="submitDoubtForm" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="doubt-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="doubt-market" x-model="doubtForm.market"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    fdprocessedid="t6wqb">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="doubt-number" class="block text-sm font-medium text-gray-700 mb-1">Enter
                                    Number</label>
                                <input type="text" id="doubt-number" x-model="doubtForm.number"
                                    class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                    placeholder="Enter number for prediction" fdprocessedid="jbkx9l">
                            </div>
                        </div>

                        <div class="premium-box p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <h3 class="text-lg font-semibold text-[#9c27b0]">Premium Prediction</h3>
                                    <p class="text-gray-600 text-sm">Get expert analysis on your number</p>
                                </div>
                                <div class="text-xl font-bold text-[#9c27b0]">₹49</div>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label for="doubt-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="doubt-upi" readonly="" value="courtofmatka@upi"
                                            class="w-full px-3 py-2 rounded-l-lg form-input focus:outline-none bg-gray-100"
                                            fdprocessedid="mntibsm">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="btn-purple px-3 py-2 rounded-r-lg"
                                            fdprocessedid="4ekt2">Copy</button>
                                    </div>
                                </div>

                                <div>
                                    <label for="doubt-transaction"
                                        class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                    <input type="text" id="doubt-transaction" x-model="doubtForm.transactionId"
                                        class="w-full px-3 py-2 rounded-lg form-input focus:outline-none"
                                        placeholder="Enter transaction ID" fdprocessedid="aowck">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-purple px-6 py-2 rounded-full"
                                fdprocessedid="tca4ne">Check Prediction</button>
                        </div>
                    </form>

                    <!-- Prediction Results -->
                    <div x-show="showPrediction" x-transition="" class="mt-6">
                        <div class="bg-gray-50 border border-[#9c27b0]/20 rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-semibold text-[#9c27b0] mb-4 text-center">Prediction Result</h3>

                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div x-show="predictionResult === 'strong'"
                                        class="result-card bg-green-50 text-green-600 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-3 border border-green-200">
                                        Strong Chances
                                    </div>
                                    <div x-show="predictionResult === 'good'"
                                        class="result-card bg-blue-50 text-blue-600 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-3 border border-blue-200">
                                        Good Chances
                                    </div>
                                    <div x-show="predictionResult === 'possible'"
                                        class="result-card bg-yellow-50 text-yellow-600 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-3 border border-yellow-200">
                                        Can Be Possible
                                    </div>
                                    <div x-show="predictionResult === 'weak'"
                                        class="result-card bg-orange-50 text-orange-600 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-3 border border-orange-200">
                                        Weak Chances
                                    </div>
                                    <div x-show="predictionResult === 'no'"
                                        class="result-card bg-red-50 text-red-600 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-3 border border-red-200">
                                        No Chance
                                    </div>

                                    <p class="text-gray-600">For number <span x-text="doubtForm.number"
                                            class="font-semibold text-[#9c27b0]"></span> in <span
                                            x-text="doubtForm.market"
                                            class="font-semibold text-[#9c27b0] capitalize"></span> market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-bg py-4 mt-6 border-t border-[#9c27b0]/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="mb-4 sm:mb-0">
                    <h3 class="text-lg font-bold text-[#9c27b0]">Court of Matka</h3>
                </div>
                <div class="text-center sm:text-right">
                    <p class="text-gray-500 mb-1 text-sm">© 2023 Court of Matka. All rights reserved.</p>
                    <div class="flex justify-center sm:justify-end space-x-4">
                        <a href="#" class="text-[#9c27b0] hover:text-[#ba68c8] transition text-sm">Terms</a>
                        <a href="#" class="text-[#9c27b0] hover:text-[#ba68c8] transition text-sm">Privacy</a>
                        <a href="#" class="text-[#9c27b0] hover:text-[#ba68c8] transition text-sm">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function app() {
            return {
                playSuccess: false,
                refundSuccess: false,
                showTrends: false,
                showPrediction: false,
                predictionResult: '',

                playForm: {
                    market: '',
                    number: '',
                    price: '',
                    transactionId: ''
                },

                refundForm: {
                    market: '',
                    betNumber: '',
                    amountPlayed: '',
                    fileName: ''
                },

                trendsForm: {
                    market: '',
                    transactionId: ''
                },

                doubtForm: {
                    market: '',
                    number: '',
                    transactionId: ''
                },

                copyUPI(upiId) {
                    navigator.clipboard.writeText(upiId);
                    alert('UPI ID copied to clipboard!');
                },

                handleFileUpload(event) {
                    const file = event.target.files[0];
                    if (file) {
                        this.refundForm.fileName = file.name;
                    }
                },

                submitPlayForm() {
                    // Validate form
                    if (!this.playForm.market || !this.playForm.number || !this.playForm.price || !this.playForm
                        .transactionId) {
                        alert('Please fill all the fields');
                        return;
                    }

                    // Show success message
                    this.playSuccess = true;

                    // Reset form
                    this.playForm = {
                        market: '',
                        number: '',
                        price: '',
                        transactionId: ''
                    };

                    // Hide success message after 3 seconds
                    setTimeout(() => {
                        this.playSuccess = false;
                    }, 3000);
                },

                submitRefundForm() {
                    // Validate form
                    if (!this.refundForm.market || !this.refundForm.betNumber || !this.refundForm.amountPlayed || !this
                        .refundForm.fileName) {
                        alert('Please fill all the fields');
                        return;
                    }

                    // Show success message
                    this.refundSuccess = true;

                    // Reset form
                    this.refundForm = {
                        market: '',
                        betNumber: '',
                        amountPlayed: '',
                        fileName: ''
                    };

                    // Hide success message after 3 seconds
                    setTimeout(() => {
                        this.refundSuccess = false;
                    }, 3000);
                },

                submitTrendsForm() {
                    // Validate form
                    if (!this.trendsForm.market || !this.trendsForm.transactionId) {
                        alert('Please fill all the fields');
                        return;
                    }

                    // Show trends
                    this.showTrends = true;
                },

                submitDoubtForm() {
                    // Validate form
                    if (!this.doubtForm.market || !this.doubtForm.number || !this.doubtForm.transactionId) {
                        alert('Please fill all the fields');
                        return;
                    }

                    // Generate random prediction result
                    const results = ['strong', 'good', 'possible', 'weak', 'no'];
                    this.predictionResult = results[Math.floor(Math.random() * results.length)];

                    // Show prediction
                    this.showPrediction = true;
                }
            };
        }
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'95da879a30bd9cd7',t:'MTc1MjI2MDI3OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script><iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>

    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
</body>

</html>
