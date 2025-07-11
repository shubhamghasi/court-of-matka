<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Court of Matka</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }

        .section-card {
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7e22ce 100%);
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

        .bottom-0 {
            bottom: 0px
        }

        .right-0 {
            right: 0px
        }

        .top-0 {
            top: 0px
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mb-1 {
            margin-bottom: 0.25rem
        }

        .mb-12 {
            margin-bottom: 3rem
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

        .mr-2 {
            margin-right: 0.5rem
        }

        .mr-4 {
            margin-right: 1rem
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

        .mt-8 {
            margin-top: 2rem
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

        .h-12 {
            height: 3rem
        }

        .h-32 {
            height: 8rem
        }

        .h-40 {
            height: 10rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-8 {
            height: 2rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-12 {
            width: 3rem
        }

        .w-5 {
            width: 1.25rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-8 {
            width: 2rem
        }

        .w-full {
            width: 100%
        }

        .max-w-4xl {
            max-width: 56rem
        }

        .cursor-pointer {
            cursor: pointer
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
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

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .space-x-6> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse));
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-y-2> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse))
        }

        .space-y-4> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse))
        }

        .space-y-6> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded {
            border-radius: 0.25rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-xl {
            border-radius: 0.75rem
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

        .border-2 {
            border-width: 2px
        }

        .border-b {
            border-bottom-width: 1px
        }

        .border-dashed {
            border-style: dashed
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity, 1))
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
        }

        .border-green-200 {
            --tw-border-opacity: 1;
            border-color: rgb(187 247 208 / var(--tw-border-opacity, 1))
        }

        .border-indigo-100 {
            --tw-border-opacity: 1;
            border-color: rgb(224 231 255 / var(--tw-border-opacity, 1))
        }

        .bg-blue-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity, 1))
        }

        .bg-blue-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity, 1))
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
        }

        .bg-green-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1))
        }

        .bg-green-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(240 253 244 / var(--tw-bg-opacity, 1))
        }

        .bg-green-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity, 1))
        }

        .bg-indigo-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity, 1))
        }

        .bg-indigo-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity, 1))
        }

        .bg-indigo-600 {
            --tw-bg-opacity: 1;
            background-color: rgb(79 70 229 / var(--tw-bg-opacity, 1))
        }

        .bg-indigo-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(55 48 163 / var(--tw-bg-opacity, 1))
        }

        .bg-orange-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(255 237 213 / var(--tw-bg-opacity, 1))
        }

        .bg-pink-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(253 242 248 / var(--tw-bg-opacity, 1))
        }

        .bg-pink-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(236 72 153 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(250 245 255 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(168 85 247 / var(--tw-bg-opacity, 1))
        }

        .bg-red-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-yellow-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1))
        }

        .fill-current {
            fill: currentColor
        }

        .p-2 {
            padding: 0.5rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .p-8 {
            padding: 2rem
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

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .pb-6 {
            padding-bottom: 1.5rem
        }

        .pt-5 {
            padding-top: 1.25rem
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

        .text-blue-800 {
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity, 1))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity, 1))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity, 1))
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

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity, 1))
        }

        .text-green-500 {
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity, 1))
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity, 1))
        }

        .text-green-700 {
            --tw-text-opacity: 1;
            color: rgb(21 128 61 / var(--tw-text-opacity, 1))
        }

        .text-green-800 {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1))
        }

        .text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity, 1))
        }

        .text-indigo-800 {
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity, 1))
        }

        .text-orange-800 {
            --tw-text-opacity: 1;
            color: rgb(154 52 18 / var(--tw-text-opacity, 1))
        }

        .text-pink-600 {
            --tw-text-opacity: 1;
            color: rgb(219 39 119 / var(--tw-text-opacity, 1))
        }

        .text-purple-600 {
            --tw-text-opacity: 1;
            color: rgb(147 51 234 / var(--tw-text-opacity, 1))
        }

        .text-red-800 {
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-yellow-800 {
            --tw-text-opacity: 1;
            color: rgb(133 77 14 / var(--tw-text-opacity, 1))
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-indigo-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(67 56 202 / var(--tw-bg-opacity, 1))
        }

        .hover\:text-indigo-200:hover {
            --tw-text-opacity: 1;
            color: rgb(199 210 254 / var(--tw-text-opacity, 1))
        }

        .hover\:opacity-90:hover {
            opacity: 0.9
        }

        .focus\:border-indigo-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus\:ring-2:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus\:ring-indigo-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity, 1))
        }

        @media (min-width: 640px) {
            .sm\:inline {
                display: inline
            }
        }

        @media (min-width: 768px) {
            .md\:flex {
                display: flex
            }

            .md\:hidden {
                display: none
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }
        }
    </style>
</head>

<body class="min-h-screen" x-data="app()">
    <!-- Header -->
    <header class="gradient-bg text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                        clip-rule="evenodd"></path>
                </svg>
                <h1 class="text-2xl font-bold">Court of Matka</h1>
            </div>
            <nav>
                <button @click="toggleMenu()" class="md:hidden text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <ul class="hidden md:flex space-x-6">
                    <li><a href="#intro" class="hover:text-indigo-200 transition">Home</a></li>
                    <li><a href="#play" class="hover:text-indigo-200 transition">Play</a></li>
                    <li><a href="#refund" class="hover:text-indigo-200 transition">Refund</a></li>
                    <li><a href="#trends" class="hover:text-indigo-200 transition">Trends</a></li>
                    <li><a href="#doubt" class="hover:text-indigo-200 transition">Prediction</a></li>
                </ul>
            </nav>
        </div>
        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-transition="" class="md:hidden bg-indigo-800 py-2">
            <ul class="container mx-auto px-4 space-y-2">
                <li><a href="#intro" class="block py-2 hover:text-indigo-200 transition"
                        @click="mobileMenu = false">Home</a></li>
                <li><a href="#play" class="block py-2 hover:text-indigo-200 transition"
                        @click="mobileMenu = false">Play</a></li>
                <li><a href="#refund" class="block py-2 hover:text-indigo-200 transition"
                        @click="mobileMenu = false">Refund</a></li>
                <li><a href="#trends" class="block py-2 hover:text-indigo-200 transition"
                        @click="mobileMenu = false">Trends</a></li>
                <li><a href="#doubt" class="block py-2 hover:text-indigo-200 transition"
                        @click="mobileMenu = false">Prediction</a></li>
            </ul>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Section 1: Introduction -->
        <section id="intro" class="mb-12 text-center">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden section-card">
                <div class="p-8">
                    <div class="gradient-bg inline-block p-4 rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Court of Matka</h2>
                    <p class="text-gray-600 mb-6 text-lg">Your premier destination for Matka gaming. Experience secure
                        betting, instant results, and exclusive market insights all in one place.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <div class="text-indigo-600 text-2xl font-bold mb-2">100+</div>
                            <div class="text-gray-600">Active Markets</div>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <div class="text-purple-600 text-2xl font-bold mb-2">24/7</div>
                            <div class="text-gray-600">Customer Support</div>
                        </div>
                        <div class="bg-pink-50 p-4 rounded-lg">
                            <div class="text-pink-600 text-2xl font-bold mb-2">Secure</div>
                            <div class="text-gray-600">Transactions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Play Matka -->
        <section id="play" class="mb-12">
            <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-500 p-2 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">🎮 Play Matka (All Markets)</h2>
                    </div>

                    <form @submit.prevent="submitPlayForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="market" x-model="playForm.market"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    fdprocessedid="qizdb">
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
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter your number" fdprocessedid="d6jwd7">
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Enter
                                    Price</label>
                                <input type="number" id="price" x-model="playForm.price"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter amount" fdprocessedid="igyckqb">
                            </div>

                            <div>
                                <label for="upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                    ID</label>
                                <div class="flex">
                                    <input type="text" id="upi" readonly="" value="courtofmatka@upi"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                                        fdprocessedid="y8zl67">
                                    <button type="button" @click="copyUPI('courtofmatka@upi')"
                                        class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition"
                                        fdprocessedid="1ajo9go">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div>
                                <label for="transaction"
                                    class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                <input type="text" id="transaction" x-model="playForm.transactionId"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter transaction ID" fdprocessedid="zqjlzq">
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                                fdprocessedid="1aukbe">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Submit Bet
                            </button>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div x-show="playSuccess" x-transition=""
                        class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"> Your bet has been placed successfully.</span>
                        <button @click="playSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="kw8ra">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Loss Refund -->
        <section id="refund" class="mb-12">
            <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-500 p-2 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">🛡️ Loss Refund (With Proof)</h2>
                    </div>

                    <form @submit.prevent="submitRefundForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="refund-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="refund-market" x-model="refundForm.market"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    fdprocessedid="pxgezs">
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
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter your bet number" fdprocessedid="5503t">
                            </div>

                            <div>
                                <label for="amount-played" class="block text-sm font-medium text-gray-700 mb-1">Amount
                                    Played</label>
                                <input type="number" id="amount-played" x-model="refundForm.amountPlayed"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter amount played" fdprocessedid="p22kpw">
                            </div>

                            <div>
                                <label for="proof-upload" class="block text-sm font-medium text-gray-700 mb-1">Upload
                                    Proof</label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="proof-upload"
                                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-3 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-1 text-sm text-gray-500"><span class="font-semibold">Click to
                                                    upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 2MB)</p>
                                        </div>
                                        <input id="proof-upload" type="file" class="hidden"
                                            accept=".jpg,.jpeg,.png" @change="handleFileUpload($event)">
                                    </label>
                                </div>
                                <p x-text="refundForm.fileName" class="mt-1 text-sm text-gray-500"></p>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                                fdprocessedid="d769t8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Submit Refund Request
                            </button>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div x-show="refundSuccess" x-transition=""
                        class="mt-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"> Your refund request has been submitted successfully.</span>
                        <button @click="refundSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="dlhzfr">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Market-Wise Betting Trends -->
        <section id="trends" class="mb-12">
            <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 p-2 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">📊 Market-Wise Betting Trends</h2>
                    </div>

                    <form @submit.prevent="submitTrendsForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="trends-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="trends-market" x-model="trendsForm.market"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    fdprocessedid="7l2x4">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Premium Insights</h3>
                                    <p class="text-gray-600">Get detailed betting trends and analysis</p>
                                </div>
                                <div class="text-2xl font-bold text-indigo-600">₹99</div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="trends-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="trends-upi" readonly=""
                                            value="courtofmatka@upi"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                                            fdprocessedid="vt8fi">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition"
                                            fdprocessedid="oiieha">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <label for="trends-transaction"
                                        class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                    <input type="text" id="trends-transaction" x-model="trendsForm.transactionId"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="Enter transaction ID" fdprocessedid="y3fh9d">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                                fdprocessedid="ah8ofh">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Show Trends
                            </button>
                        </div>
                    </form>

                    <!-- Trends Results -->
                    <div x-show="showTrends" x-transition=""
                        class="mt-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div class="p-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-800">Betting Trends for <span
                                    x-text="trendsForm.market" class="capitalize"></span></h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Most Played Numbers</h4>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">128</span>
                                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">345</span>
                                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">670</span>
                                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">789</span>
                                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">234</span>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Recent Winning Numbers</h4>
                                    <div class="grid grid-cols-3 gap-2 mt-2">
                                        <div class="bg-green-50 p-2 rounded text-center">
                                            <div class="text-green-600 font-semibold">128</div>
                                            <div class="text-xs text-gray-500">Yesterday</div>
                                        </div>
                                        <div class="bg-green-50 p-2 rounded text-center">
                                            <div class="text-green-600 font-semibold">345</div>
                                            <div class="text-xs text-gray-500">2 days ago</div>
                                        </div>
                                        <div class="bg-green-50 p-2 rounded text-center">
                                            <div class="text-green-600 font-semibold">567</div>
                                            <div class="text-xs text-gray-500">3 days ago</div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Trend Analysis</h4>
                                    <div class="h-40 bg-gray-50 rounded-lg mt-2 p-2 flex items-center justify-center">
                                        <svg class="w-full h-full text-gray-300" viewBox="0 0 400 100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0,50 C50,30 100,70 150,50 C200,30 250,60 300,40 C350,20 400,50 400,50"
                                                stroke="#8b5cf6" stroke-width="3" fill="none"></path>
                                            <path
                                                d="M0,50 C50,30 100,70 150,50 C200,30 250,60 300,40 C350,20 400,50 400,50"
                                                stroke="#c4b5fd" stroke-width="12" fill="none"
                                                stroke-opacity="0.2"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Doubt Check -->
        <section id="doubt" class="mb-12">
            <div class="bg-white rounded-xl shadow-md overflow-hidden section-card">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-pink-500 p-2 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">❓ Doubt Check (Prediction)</h2>
                    </div>

                    <form @submit.prevent="submitDoubtForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="doubt-market" class="block text-sm font-medium text-gray-700 mb-1">Select
                                    Market</label>
                                <select id="doubt-market" x-model="doubtForm.market"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    fdprocessedid="06jnueh">
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
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Enter number for prediction" fdprocessedid="ksd3fn">
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Premium Prediction</h3>
                                    <p class="text-gray-600">Get expert analysis on your number</p>
                                </div>
                                <div class="text-2xl font-bold text-indigo-600">₹49</div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="doubt-upi" class="block text-sm font-medium text-gray-700 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="doubt-upi" readonly="" value="courtofmatka@upi"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                                            fdprocessedid="wzlbcq">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition"
                                            fdprocessedid="0u8sex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <label for="doubt-transaction"
                                        class="block text-sm font-medium text-gray-700 mb-1">Transaction ID</label>
                                    <input type="text" id="doubt-transaction" x-model="doubtForm.transactionId"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="Enter transaction ID" fdprocessedid="y924ri">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="gradient-bg text-white px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center"
                                fdprocessedid="sujruc">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                Check Prediction
                            </button>
                        </div>
                    </form>

                    <!-- Prediction Results -->
                    <div x-show="showPrediction" x-transition="" class="mt-6">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Prediction Result</h3>

                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div x-show="predictionResult === 'strong'"
                                        class="bg-green-100 text-green-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                        Strong Chances
                                    </div>
                                    <div x-show="predictionResult === 'good'"
                                        class="bg-blue-100 text-blue-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                        Good Chances
                                    </div>
                                    <div x-show="predictionResult === 'possible'"
                                        class="bg-yellow-100 text-yellow-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                        Can Be Possible
                                    </div>
                                    <div x-show="predictionResult === 'weak'"
                                        class="bg-orange-100 text-orange-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                        Weak Chances
                                    </div>
                                    <div x-show="predictionResult === 'no'"
                                        class="bg-red-100 text-red-800 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2">
                                        No Chance
                                    </div>

                                    <p class="text-gray-600">For number <span x-text="doubtForm.number"
                                            class="font-semibold"></span> in <span x-text="doubtForm.market"
                                            class="font-semibold capitalize"></span> market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>© 2023 Court of Matka. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function app() {
            return {
                mobileMenu: false,
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

                toggleMenu() {
                    this.mobileMenu = !this.mobileMenu;
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
</body>

</html>
