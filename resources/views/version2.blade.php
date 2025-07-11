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
            background: linear-gradient(135deg, #4c1d95 0%, #7e22ce 100%);
            background-attachment: fixed;
            color: #f3f4f6;
        }

        .section-card {
            transition: all 0.3s ease;
            background: rgba(91, 33, 182, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(139, 92, 246, 0.3);
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6d28d9 0%, #9333ea 100%);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(139, 92, 246, 0.3);
            color: white;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-input:focus {
            border-color: #a78bfa;
            box-shadow: 0 0 0 2px rgba(167, 139, 250, 0.3);
        }

        select.form-input option {
            background-color: #4c1d95;
            color: white;
        }

        .btn-primary {
            background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .glow {
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.5);
        }

        .stats-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(139, 92, 246, 0.2);
        }

        .upload-area {
            background: rgba(255, 255, 255, 0.05);
            border: 2px dashed rgba(139, 92, 246, 0.4);
        }

        .upload-area:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(139, 92, 246, 0.6);
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

        .mr-3 {
            margin-right: 0.75rem
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

        .h-10 {
            height: 2.5rem
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

        .w-10 {
            width: 2.5rem
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

        .border-b {
            border-bottom-width: 1px
        }

        .border-green-500 {
            --tw-border-opacity: 1;
            border-color: rgb(34 197 94 / var(--tw-border-opacity, 1))
        }

        .border-green-500\/30 {
            border-color: rgb(34 197 94 / 0.3)
        }

        .border-purple-500\/20 {
            border-color: rgb(168 85 247 / 0.2)
        }

        .border-purple-500\/30 {
            border-color: rgb(168 85 247 / 0.3)
        }

        .border-blue-500\/30 {
            border-color: rgb(59 130 246 / 0.3)
        }

        .border-orange-500\/30 {
            border-color: rgb(249 115 22 / 0.3)
        }

        .border-red-500\/30 {
            border-color: rgb(239 68 68 / 0.3)
        }

        .border-yellow-500\/30 {
            border-color: rgb(234 179 8 / 0.3)
        }

        .bg-blue-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity, 1))
        }

        .bg-green-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity, 1))
        }

        .bg-green-900\/30 {
            background-color: rgb(20 83 45 / 0.3)
        }

        .bg-green-900\/50 {
            background-color: rgb(20 83 45 / 0.5)
        }

        .bg-pink-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(236 72 153 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(168 85 247 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-600 {
            --tw-bg-opacity: 1;
            background-color: rgb(147 51 234 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-700\/50 {
            background-color: rgb(126 34 206 / 0.5)
        }

        .bg-purple-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(107 33 168 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-800\/40 {
            background-color: rgb(107 33 168 / 0.4)
        }

        .bg-purple-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(88 28 135 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-900\/30 {
            background-color: rgb(88 28 135 / 0.3)
        }

        .bg-purple-900\/50 {
            background-color: rgb(88 28 135 / 0.5)
        }

        .bg-blue-900\/50 {
            background-color: rgb(30 58 138 / 0.5)
        }

        .bg-orange-900\/50 {
            background-color: rgb(124 45 18 / 0.5)
        }

        .bg-red-900\/50 {
            background-color: rgb(127 29 29 / 0.5)
        }

        .bg-yellow-900\/50 {
            background-color: rgb(113 63 18 / 0.5)
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

        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
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

        .text-green-200 {
            --tw-text-opacity: 1;
            color: rgb(187 247 208 / var(--tw-text-opacity, 1))
        }

        .text-green-300 {
            --tw-text-opacity: 1;
            color: rgb(134 239 172 / var(--tw-text-opacity, 1))
        }

        .text-purple-100 {
            --tw-text-opacity: 1;
            color: rgb(243 232 255 / var(--tw-text-opacity, 1))
        }

        .text-purple-200 {
            --tw-text-opacity: 1;
            color: rgb(233 213 255 / var(--tw-text-opacity, 1))
        }

        .text-purple-300 {
            --tw-text-opacity: 1;
            color: rgb(216 180 254 / var(--tw-text-opacity, 1))
        }

        .text-purple-400 {
            --tw-text-opacity: 1;
            color: rgb(192 132 252 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-blue-300 {
            --tw-text-opacity: 1;
            color: rgb(147 197 253 / var(--tw-text-opacity, 1))
        }

        .text-orange-300 {
            --tw-text-opacity: 1;
            color: rgb(253 186 116 / var(--tw-text-opacity, 1))
        }

        .text-red-300 {
            --tw-text-opacity: 1;
            color: rgb(252 165 165 / var(--tw-text-opacity, 1))
        }

        .text-yellow-300 {
            --tw-text-opacity: 1;
            color: rgb(253 224 71 / var(--tw-text-opacity, 1))
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .hover\:bg-purple-800\/30:hover {
            background-color: rgb(107 33 168 / 0.3)
        }

        .hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
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

        .focus\:ring-purple-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(168 85 247 / var(--tw-ring-opacity, 1))
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
    <header class="bg-purple-900 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center mr-3 glow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white">Court of Matka</h1>
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
                    <li><a href="#intro" class="text-purple-200 hover:text-white transition">Home</a></li>
                    <li><a href="#play" class="text-purple-200 hover:text-white transition">Play</a></li>
                    <li><a href="#refund" class="text-purple-200 hover:text-white transition">Refund</a></li>
                    <li><a href="#trends" class="text-purple-200 hover:text-white transition">Trends</a></li>
                    <li><a href="#doubt" class="text-purple-200 hover:text-white transition">Prediction</a></li>
                </ul>
            </nav>
        </div>
        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-transition="" class="md:hidden bg-purple-800 py-2">
            <ul class="container mx-auto px-4 space-y-2">
                <li><a href="#intro" class="block py-2 text-purple-200 hover:text-white transition"
                        @click="mobileMenu = false">Home</a></li>
                <li><a href="#play" class="block py-2 text-purple-200 hover:text-white transition"
                        @click="mobileMenu = false">Play</a></li>
                <li><a href="#refund" class="block py-2 text-purple-200 hover:text-white transition"
                        @click="mobileMenu = false">Refund</a></li>
                <li><a href="#trends" class="block py-2 text-purple-200 hover:text-white transition"
                        @click="mobileMenu = false">Trends</a></li>
                <li><a href="#doubt" class="block py-2 text-purple-200 hover:text-white transition"
                        @click="mobileMenu = false">Prediction</a></li>
            </ul>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Section 1: Introduction -->
        <section id="intro" class="mb-12 text-center">
            <div class="max-w-4xl mx-auto section-card rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="bg-purple-600 inline-block p-4 rounded-full mb-6 glow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-4">Welcome to Court of Matka</h2>
                    <p class="text-purple-100 mb-6 text-lg">Your premier destination for Matka gaming. Experience secure
                        betting, instant results, and exclusive market insights all in one place.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                        <div class="stats-card p-4 rounded-lg">
                            <div class="text-purple-300 text-2xl font-bold mb-2">100+</div>
                            <div class="text-purple-200">Active Markets</div>
                        </div>
                        <div class="stats-card p-4 rounded-lg">
                            <div class="text-purple-300 text-2xl font-bold mb-2">24/7</div>
                            <div class="text-purple-200">Customer Support</div>
                        </div>
                        <div class="stats-card p-4 rounded-lg">
                            <div class="text-purple-300 text-2xl font-bold mb-2">Secure</div>
                            <div class="text-purple-200">Transactions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Play Matka -->
        <section id="play" class="mb-12">
            <div class="section-card rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-500 p-2 rounded-lg mr-4 glow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">🎮 Play Matka (All Markets)</h2>
                    </div>

                    <form @submit.prevent="submitPlayForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="market" class="block text-sm font-medium text-purple-200 mb-1">Select
                                    Market</label>
                                <select id="market" x-model="playForm.market"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    fdprocessedid="192c85">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="number" class="block text-sm font-medium text-purple-200 mb-1">Enter
                                    Number</label>
                                <input type="text" id="number" x-model="playForm.number"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter your number" fdprocessedid="s5sa5d">
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-medium text-purple-200 mb-1">Enter
                                    Price</label>
                                <input type="number" id="price" x-model="playForm.price"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter amount" fdprocessedid="7xzz0s">
                            </div>

                            <div>
                                <label for="upi" class="block text-sm font-medium text-purple-200 mb-1">UPI
                                    ID</label>
                                <div class="flex">
                                    <input type="text" id="upi" readonly="" value="courtofmatka@upi"
                                        class="w-full px-4 py-2 rounded-l-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-900/50"
                                        fdprocessedid="il3k4s">
                                    <button type="button" @click="copyUPI('courtofmatka@upi')"
                                        class="btn-primary px-4 py-2 rounded-r-lg flex items-center justify-center"
                                        fdprocessedid="v7702">
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
                                    class="block text-sm font-medium text-purple-200 mb-1">Transaction ID</label>
                                <input type="text" id="transaction" x-model="playForm.transactionId"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter transaction ID" fdprocessedid="djm9h">
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary px-6 py-3 rounded-lg flex items-center"
                                fdprocessedid="i0i45m">
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
                        class="mt-4 bg-green-900/50 border border-green-500 text-green-200 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"> Your bet has been placed successfully.</span>
                        <button @click="playSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="71424n">
                            <svg class="fill-current h-6 w-6 text-green-300" role="button"
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
            <div class="section-card rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-500 p-2 rounded-lg mr-4 glow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">🛡️ Loss Refund (With Proof)</h2>
                    </div>

                    <form @submit.prevent="submitRefundForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="refund-market"
                                    class="block text-sm font-medium text-purple-200 mb-1">Select Market</label>
                                <select id="refund-market" x-model="refundForm.market"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    fdprocessedid="6fn1dc">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="bet-number" class="block text-sm font-medium text-purple-200 mb-1">Bet
                                    Number</label>
                                <input type="text" id="bet-number" x-model="refundForm.betNumber"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter your bet number" fdprocessedid="iy1i83">
                            </div>

                            <div>
                                <label for="amount-played"
                                    class="block text-sm font-medium text-purple-200 mb-1">Amount Played</label>
                                <input type="number" id="amount-played" x-model="refundForm.amountPlayed"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter amount played" fdprocessedid="b1vig8">
                            </div>

                            <div>
                                <label for="proof-upload"
                                    class="block text-sm font-medium text-purple-200 mb-1">Upload Proof</label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="proof-upload"
                                        class="flex flex-col items-center justify-center w-full h-32 upload-area rounded-lg cursor-pointer hover:bg-purple-800/30">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-3 text-purple-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-1 text-sm text-purple-300"><span class="font-semibold">Click
                                                    to upload</span> or drag and drop</p>
                                            <p class="text-xs text-purple-400">PNG, JPG or JPEG (MAX. 2MB)</p>
                                        </div>
                                        <input id="proof-upload" type="file" class="hidden"
                                            accept=".jpg,.jpeg,.png" @change="handleFileUpload($event)">
                                    </label>
                                </div>
                                <p x-text="refundForm.fileName" class="mt-1 text-sm text-purple-300"></p>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary px-6 py-3 rounded-lg flex items-center"
                                fdprocessedid="4571rm">
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
                        class="mt-4 bg-green-900/50 border border-green-500 text-green-200 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"> Your refund request has been submitted successfully.</span>
                        <button @click="refundSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            fdprocessedid="w9ejne">
                            <svg class="fill-current h-6 w-6 text-green-300" role="button"
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
            <div class="section-card rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 p-2 rounded-lg mr-4 glow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">📊 Market-Wise Betting Trends</h2>
                    </div>

                    <form @submit.prevent="submitTrendsForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="trends-market"
                                    class="block text-sm font-medium text-purple-200 mb-1">Select Market</label>
                                <select id="trends-market" x-model="trendsForm.market"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    fdprocessedid="vigrd5">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-purple-800/40 p-6 rounded-lg border border-purple-500/30">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Premium Insights</h3>
                                    <p class="text-purple-200">Get detailed betting trends and analysis</p>
                                </div>
                                <div class="text-2xl font-bold text-purple-300">₹99</div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="trends-upi" class="block text-sm font-medium text-purple-200 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="trends-upi" readonly=""
                                            value="courtofmatka@upi"
                                            class="w-full px-4 py-2 rounded-l-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-900/50"
                                            fdprocessedid="rkvibp">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="btn-primary px-4 py-2 rounded-r-lg flex items-center justify-center"
                                            fdprocessedid="14wkt">
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
                                        class="block text-sm font-medium text-purple-200 mb-1">Transaction ID</label>
                                    <input type="text" id="trends-transaction" x-model="trendsForm.transactionId"
                                        class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                        placeholder="Enter transaction ID" fdprocessedid="cm3k8u">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary px-6 py-3 rounded-lg flex items-center"
                                fdprocessedid="tewhsl">
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
                        class="mt-6 bg-purple-900/50 border border-purple-500/30 rounded-lg shadow-lg">
                        <div class="p-4 border-b border-purple-500/30">
                            <h3 class="text-lg font-semibold text-white">Betting Trends for <span
                                    x-text="trendsForm.market" class="capitalize"></span></h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-purple-300">Most Played Numbers</h4>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="px-3 py-1 bg-purple-700/50 text-purple-200 rounded-full border border-purple-500/30">128</span>
                                        <span
                                            class="px-3 py-1 bg-purple-700/50 text-purple-200 rounded-full border border-purple-500/30">345</span>
                                        <span
                                            class="px-3 py-1 bg-purple-700/50 text-purple-200 rounded-full border border-purple-500/30">670</span>
                                        <span
                                            class="px-3 py-1 bg-purple-700/50 text-purple-200 rounded-full border border-purple-500/30">789</span>
                                        <span
                                            class="px-3 py-1 bg-purple-700/50 text-purple-200 rounded-full border border-purple-500/30">234</span>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-purple-300">Recent Winning Numbers</h4>
                                    <div class="grid grid-cols-3 gap-2 mt-2">
                                        <div
                                            class="bg-green-900/30 p-2 rounded text-center border border-green-500/30">
                                            <div class="text-green-300 font-semibold">128</div>
                                            <div class="text-xs text-purple-300">Yesterday</div>
                                        </div>
                                        <div
                                            class="bg-green-900/30 p-2 rounded text-center border border-green-500/30">
                                            <div class="text-green-300 font-semibold">345</div>
                                            <div class="text-xs text-purple-300">2 days ago</div>
                                        </div>
                                        <div
                                            class="bg-green-900/30 p-2 rounded text-center border border-green-500/30">
                                            <div class="text-green-300 font-semibold">567</div>
                                            <div class="text-xs text-purple-300">3 days ago</div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="text-sm font-medium text-purple-300">Trend Analysis</h4>
                                    <div
                                        class="h-40 bg-purple-900/30 rounded-lg mt-2 p-2 flex items-center justify-center border border-purple-500/20">
                                        <svg class="w-full h-full" viewBox="0 0 400 100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0,50 C50,30 100,70 150,50 C200,30 250,60 300,40 C350,20 400,50 400,50"
                                                stroke="#a78bfa" stroke-width="3" fill="none"></path>
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
            <div class="section-card rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-pink-500 p-2 rounded-lg mr-4 glow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">❓ Doubt Check (Prediction)</h2>
                    </div>

                    <form @submit.prevent="submitDoubtForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="doubt-market"
                                    class="block text-sm font-medium text-purple-200 mb-1">Select Market</label>
                                <select id="doubt-market" x-model="doubtForm.market"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    fdprocessedid="8zuv13">
                                    <option value="" disabled="" selected="">Choose a market</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="milan">Milan Day</option>
                                    <option value="rajdhani">Rajdhani Night</option>
                                    <option value="main">Main Bazar</option>
                                    <option value="starline">Starline</option>
                                </select>
                            </div>

                            <div>
                                <label for="doubt-number" class="block text-sm font-medium text-purple-200 mb-1">Enter
                                    Number</label>
                                <input type="text" id="doubt-number" x-model="doubtForm.number"
                                    class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Enter number for prediction" fdprocessedid="a6fybj">
                            </div>
                        </div>

                        <div class="bg-purple-800/40 p-6 rounded-lg border border-purple-500/30">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Premium Prediction</h3>
                                    <p class="text-purple-200">Get expert analysis on your number</p>
                                </div>
                                <div class="text-2xl font-bold text-purple-300">₹49</div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="doubt-upi" class="block text-sm font-medium text-purple-200 mb-1">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="doubt-upi" readonly="" value="courtofmatka@upi"
                                            class="w-full px-4 py-2 rounded-l-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-900/50"
                                            fdprocessedid="dfjp6lj">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="btn-primary px-4 py-2 rounded-r-lg flex items-center justify-center"
                                            fdprocessedid="uwftxb">
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
                                        class="block text-sm font-medium text-purple-200 mb-1">Transaction ID</label>
                                    <input type="text" id="doubt-transaction" x-model="doubtForm.transactionId"
                                        class="w-full px-4 py-2 rounded-lg form-input focus:outline-none focus:ring-2 focus:ring-purple-500"
                                        placeholder="Enter transaction ID" fdprocessedid="4pemqf">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary px-6 py-3 rounded-lg flex items-center"
                                fdprocessedid="4ryop">
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
                        <div class="bg-purple-900/50 border border-purple-500/30 rounded-lg shadow-lg p-6">
                            <h3 class="text-lg font-semibold text-white mb-4">Prediction Result</h3>

                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div x-show="predictionResult === 'strong'"
                                        class="bg-green-900/50 text-green-300 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2 border border-green-500/30 glow">
                                        Strong Chances
                                    </div>
                                    <div x-show="predictionResult === 'good'"
                                        class="bg-blue-900/50 text-blue-300 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2 border border-blue-500/30 glow">
                                        Good Chances
                                    </div>
                                    <div x-show="predictionResult === 'possible'"
                                        class="bg-yellow-900/50 text-yellow-300 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2 border border-yellow-500/30 glow">
                                        Can Be Possible
                                    </div>
                                    <div x-show="predictionResult === 'weak'"
                                        class="bg-orange-900/50 text-orange-300 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2 border border-orange-500/30 glow">
                                        Weak Chances
                                    </div>
                                    <div x-show="predictionResult === 'no'"
                                        class="bg-red-900/50 text-red-300 text-xl font-bold px-6 py-4 rounded-lg inline-block mb-2 border border-red-500/30 glow">
                                        No Chance
                                    </div>

                                    <p class="text-purple-200">For number <span x-text="doubtForm.number"
                                            class="font-semibold text-white"></span> in <span
                                            x-text="doubtForm.market"
                                            class="font-semibold text-white capitalize"></span> market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-purple-900 py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-purple-200">© 2023 Court of Matka. All rights reserved.</p>
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
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'95da648e920e0ed9',t:'MTc1MjI1ODg0NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
