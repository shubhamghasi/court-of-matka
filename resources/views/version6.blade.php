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
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
            color: #333333;
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
        }

        .section-card {
            background: #ffffff;
            border: 1px solid rgba(6, 182, 212, 0.1);
            box-shadow: 0 4px 20px rgba(6, 182, 212, 0.08);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0891b2 0%, #06b6d4 50%, #22d3ee 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #0891b2 0%, #06b6d4 50%, #22d3ee 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-input {
            background: #f0f9ff;
            border: 1px solid rgba(6, 182, 212, 0.2);
            color: #333333;
        }

        .form-input::placeholder {
            color: rgba(51, 51, 51, 0.5);
        }

        .form-input:focus {
            border-color: #06b6d4;
            box-shadow: 0 0 0 2px rgba(6, 182, 212, 0.1);
        }

        select.form-input option {
            background-color: #ffffff;
            color: #333333;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%);
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            filter: brightness(1.1);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(6, 182, 212, 0.2);
        }

        .stats-card {
            background: #f0f9ff;
            border: 1px solid rgba(6, 182, 212, 0.1);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(6, 182, 212, 0.1);
        }

        .upload-area {
            background: #f0f9ff;
            border: 2px dashed rgba(6, 182, 212, 0.3);
        }

        .upload-area:hover {
            background: #e0f2fe;
            border-color: rgba(6, 182, 212, 0.5);
        }

        .premium-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: 1px solid rgba(6, 182, 212, 0.2);
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #06b6d4, transparent);
            margin: 2rem 0;
            opacity: 0.2;
        }

        .result-card {
            transition: all 0.3s ease;
        }

        .header-bg {
            background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%);
        }

        .footer-bg {
            background: #e0f2fe;
        }

        .badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: white;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        .glow {
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
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

        .mb-8 {
            margin-bottom: 2rem
        }

        .mr-2 {
            margin-right: 0.5rem
        }

        .mr-3 {
            margin-right: 0.75rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mt-3 {
            margin-top: 0.75rem
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

        .h-28 {
            height: 7rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-10 {
            width: 2.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
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

        .gap-3 {
            gap: 0.75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .space-x-2> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-x-6> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse));
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
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

        .rounded-2xl {
            border-radius: 1rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-xl {
            border-radius: 0.75rem
        }

        .rounded-l-xl {
            border-top-left-radius: 0.75rem;
            border-bottom-left-radius: 0.75rem
        }

        .rounded-r-xl {
            border-top-right-radius: 0.75rem;
            border-bottom-right-radius: 0.75rem
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

        .border-\[\#06b6d4\] {
            --tw-border-opacity: 1;
            border-color: rgb(6 182 212 / var(--tw-border-opacity, 1))
        }

        .border-\[\#06b6d4\]\/10 {
            border-color: rgb(6 182 212 / 0.1)
        }

        .border-\[\#06b6d4\]\/20 {
            border-color: rgb(6 182 212 / 0.2)
        }

        .border-blue-200 {
            --tw-border-opacity: 1;
            border-color: rgb(191 219 254 / var(--tw-border-opacity, 1))
        }

        .border-cyan-200 {
            --tw-border-opacity: 1;
            border-color: rgb(165 243 252 / var(--tw-border-opacity, 1))
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

        .bg-\[\#06b6d4\]\/10 {
            background-color: rgb(6 182 212 / 0.1)
        }

        .bg-\[\#f0f9ff\] {
            --tw-bg-opacity: 1;
            background-color: rgb(240 249 255 / var(--tw-bg-opacity, 1))
        }

        .bg-blue-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 246 255 / var(--tw-bg-opacity, 1))
        }

        .bg-cyan-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(236 254 255 / var(--tw-bg-opacity, 1))
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

        .p-1 {
            padding: 0.25rem
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

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem
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

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
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

        .text-\[\#06b6d4\] {
            --tw-text-opacity: 1;
            color: rgb(6 182 212 / var(--tw-text-opacity, 1))
        }

        .text-\[\#0891b2\] {
            --tw-text-opacity: 1;
            color: rgb(8 145 178 / var(--tw-text-opacity, 1))
        }

        .text-blue-600 {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity, 1))
        }

        .text-cyan-600 {
            --tw-text-opacity: 1;
            color: rgb(8 145 178 / var(--tw-text-opacity, 1))
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

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .hover\:bg-\[\#06b6d4\]\/5:hover {
            background-color: rgb(6 182 212 / 0.05)
        }

        .hover\:text-\[\#06b6d4\]:hover {
            --tw-text-opacity: 1;
            color: rgb(6 182 212 / var(--tw-text-opacity, 1))
        }

        .hover\:text-blue-100:hover {
            --tw-text-opacity: 1;
            color: rgb(219 234 254 / var(--tw-text-opacity, 1))
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
            .md\:flex {
                display: flex
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }
    </style>
</head>

<body class="min-h-screen" x-data="app()">
    <!-- Header -->
    <header class="header-bg shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0891b2]" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.5-4.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm7 0a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zm-7 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm7 0a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z">
                        </path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white">Court of Matka</h1>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#play" class="text-white hover:text-blue-100 nav-link">Play</a>
                <a href="#refund" class="text-white hover:text-blue-100 nav-link">Refund</a>
                <a href="#trends" class="text-white hover:text-blue-100 nav-link">Trends</a>
                <a href="#doubt" class="text-white hover:text-blue-100 nav-link">Prediction</a>
            </div>
            <div class="badge px-3 py-1 rounded-full border border-white/30">
                <span class="text-white font-medium text-sm">Premium Experience</span>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Section 1: Introduction -->
        <section id="intro" class="mb-12 text-center">
            <div class="max-w-3xl mx-auto section-card rounded-2xl overflow-hidden">
                <div class="gradient-bg p-1">
                    <div class="bg-white p-8 rounded-xl">
                        <h2 class="text-3xl font-bold gradient-text mb-4">Welcome to Court of Matka</h2>
                        <p class="text-gray-600 mb-8">Your premier destination for Matka gaming. Experience secure
                            betting, instant results, and exclusive market insights.</p>

                        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                            <a href="#play" class="btn-gradient px-8 py-3 rounded-full shadow-lg">Play Now</a>
                            <a href="#trends"
                                class="border border-[#06b6d4] text-[#06b6d4] px-8 py-3 rounded-full hover:bg-[#06b6d4]/5 transition">View
                                Trends</a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8">
                            <div class="stats-card p-4 rounded-xl">
                                <div class="text-[#0891b2] text-2xl font-bold mb-1">100+</div>
                                <div class="text-gray-600 text-sm">Active Markets</div>
                            </div>
                            <div class="stats-card p-4 rounded-xl">
                                <div class="text-[#0891b2] text-2xl font-bold mb-1">24/7</div>
                                <div class="text-gray-600 text-sm">Customer Support</div>
                            </div>
                            <div class="stats-card p-4 rounded-xl">
                                <div class="text-[#0891b2] text-2xl font-bold mb-1">Secure</div>
                                <div class="text-gray-600 text-sm">Transactions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 2: Play Matka -->
        <section id="play" class="mb-12">
            <div class="section-card rounded-2xl overflow-hidden">
                <div class="gradient-bg p-1">
                    <div class="bg-white p-8 rounded-xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold gradient-text">Play Matka (All Markets)</h2>
                        </div>

                        <form @submit.prevent="submitPlayForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="market" class="block text-sm font-medium text-gray-700 mb-2">Select
                                        Market</label>
                                    <select id="market" x-model="playForm.market"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        fdprocessedid="aihv3b">
                                        <option value="" disabled="" selected="">Choose a market</option>
                                        <option value="kalyan">Kalyan</option>
                                        <option value="milan">Milan Day</option>
                                        <option value="rajdhani">Rajdhani Night</option>
                                        <option value="main">Main Bazar</option>
                                        <option value="starline">Starline</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="number" class="block text-sm font-medium text-gray-700 mb-2">Enter
                                        Number</label>
                                    <input type="text" id="number" x-model="playForm.number"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter your number" fdprocessedid="jroikp">
                                </div>

                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Enter
                                        Price</label>
                                    <input type="number" id="price" x-model="playForm.price"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter amount" fdprocessedid="gi27pp">
                                </div>

                                <div>
                                    <label for="upi" class="block text-sm font-medium text-gray-700 mb-2">UPI
                                        ID</label>
                                    <div class="flex">
                                        <input type="text" id="upi" readonly="" value="courtofmatka@upi"
                                            class="w-full px-4 py-3 rounded-l-xl form-input focus:outline-none bg-gray-50"
                                            fdprocessedid="gfi7et">
                                        <button type="button" @click="copyUPI('courtofmatka@upi')"
                                            class="btn-gradient px-4 py-3 rounded-r-xl"
                                            fdprocessedid="4rooq">Copy</button>
                                    </div>
                                </div>

                                <div>
                                    <label for="transaction"
                                        class="block text-sm font-medium text-gray-700 mb-2">Transaction ID</label>
                                    <input type="text" id="transaction" x-model="playForm.transactionId"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter transaction ID" fdprocessedid="njvif">
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="btn-gradient px-8 py-3 rounded-full shadow-lg"
                                    fdprocessedid="i2ymxa">Submit Bet</button>
                            </div>
                        </form>

                        <!-- Success Message -->
                        <div x-show="playSuccess" x-transition=""
                            class="mt-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl relative"
                            role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="font-bold">Success!</strong>
                                    <span class="block sm:inline"> Your bet has been placed successfully.</span>
                                </div>
                            </div>
                            <button @click="playSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                                fdprocessedid="4koav">
                                <span class="text-green-600">×</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 3: Loss Refund -->
        <section id="refund" class="mb-12">
            <div class="section-card rounded-2xl overflow-hidden">
                <div class="gradient-bg p-1">
                    <div class="bg-white p-8 rounded-xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold gradient-text">Loss Refund (With Proof)</h2>
                        </div>

                        <form @submit.prevent="submitRefundForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="refund-market"
                                        class="block text-sm font-medium text-gray-700 mb-2">Select Market</label>
                                    <select id="refund-market" x-model="refundForm.market"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        fdprocessedid="rfr33b">
                                        <option value="" disabled="" selected="">Choose a market</option>
                                        <option value="kalyan">Kalyan</option>
                                        <option value="milan">Milan Day</option>
                                        <option value="rajdhani">Rajdhani Night</option>
                                        <option value="main">Main Bazar</option>
                                        <option value="starline">Starline</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="bet-number" class="block text-sm font-medium text-gray-700 mb-2">Bet
                                        Number</label>
                                    <input type="text" id="bet-number" x-model="refundForm.betNumber"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter your bet number" fdprocessedid="cwkkkc">
                                </div>

                                <div>
                                    <label for="amount-played"
                                        class="block text-sm font-medium text-gray-700 mb-2">Amount Played</label>
                                    <input type="number" id="amount-played" x-model="refundForm.amountPlayed"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter amount played" fdprocessedid="vj6esn">
                                </div>

                                <div>
                                    <label for="proof-upload"
                                        class="block text-sm font-medium text-gray-700 mb-2">Upload Proof</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="proof-upload"
                                            class="flex flex-col items-center justify-center w-full h-28 upload-area rounded-xl cursor-pointer hover:bg-[#06b6d4]/5">
                                            <div class="flex flex-col items-center justify-center pt-3 pb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-8 w-8 text-[#0891b2] mb-2" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-sm text-gray-600"><span class="font-semibold">Click to
                                                        upload</span></p>
                                                <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 2MB)</p>
                                            </div>
                                            <input id="proof-upload" type="file" class="hidden"
                                                accept=".jpg,.jpeg,.png" @change="handleFileUpload($event)">
                                        </label>
                                    </div>
                                    <p x-text="refundForm.fileName" class="mt-2 text-xs text-gray-600"></p>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="btn-gradient px-8 py-3 rounded-full shadow-lg"
                                    fdprocessedid="mectg">Submit Refund Request</button>
                            </div>
                        </form>

                        <!-- Success Message -->
                        <div x-show="refundSuccess" x-transition=""
                            class="mt-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl relative"
                            role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="font-bold">Success!</strong>
                                    <span class="block sm:inline"> Your refund request has been submitted
                                        successfully.</span>
                                </div>
                            </div>
                            <button @click="refundSuccess = false" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                                fdprocessedid="t4d2v">
                                <span class="text-green-600">×</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Section 4: Market-Wise Betting Trends -->
        <section id="trends" class="mb-12">
            <div class="section-card rounded-2xl overflow-hidden">
                <div class="gradient-bg p-1">
                    <div class="bg-white p-8 rounded-xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold gradient-text">Market-Wise Betting Trends</h2>
                        </div>

                        <form @submit.prevent="submitTrendsForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="trends-market"
                                        class="block text-sm font-medium text-gray-700 mb-2">Select Market</label>
                                    <select id="trends-market" x-model="trendsForm.market"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        fdprocessedid="bujaeb">
                                        <option value="" disabled="" selected="">Choose a market</option>
                                        <option value="kalyan">Kalyan</option>
                                        <option value="milan">Milan Day</option>
                                        <option value="rajdhani">Rajdhani Night</option>
                                        <option value="main">Main Bazar</option>
                                        <option value="starline">Starline</option>
                                    </select>
                                </div>
                            </div>

                            <div class="premium-box p-6 rounded-xl">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-lg font-semibold text-[#0891b2]">Premium Insights</h3>
                                        <p class="text-gray-600 text-sm">Get detailed betting trends and analysis</p>
                                    </div>
                                    <div class="text-xl font-bold text-[#0891b2]">₹99</div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label for="trends-upi"
                                            class="block text-sm font-medium text-gray-700 mb-2">UPI ID</label>
                                        <div class="flex">
                                            <input type="text" id="trends-upi" readonly=""
                                                value="courtofmatka@upi"
                                                class="w-full px-4 py-3 rounded-l-xl form-input focus:outline-none bg-gray-50"
                                                fdprocessedid="8iqlr">
                                            <button type="button" @click="copyUPI('courtofmatka@upi')"
                                                class="btn-gradient px-4 py-3 rounded-r-xl"
                                                fdprocessedid="cxd9pf">Copy</button>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="trends-transaction"
                                            class="block text-sm font-medium text-gray-700 mb-2">Transaction ID</label>
                                        <input type="text" id="trends-transaction"
                                            x-model="trendsForm.transactionId"
                                            class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                            placeholder="Enter transaction ID" fdprocessedid="vf7w0g">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="btn-gradient px-8 py-3 rounded-full shadow-lg"
                                    fdprocessedid="zcmkb">Show Trends</button>
                            </div>
                        </form>

                        <!-- Trends Results -->
                        <div x-show="showTrends" x-transition=""
                            class="mt-8 bg-[#f0f9ff] border border-[#06b6d4]/20 rounded-xl shadow-md">
                            <div class="p-4 border-b border-[#06b6d4]/20">
                                <h3 class="text-lg font-semibold text-[#0891b2]">Betting Trends for <span
                                        x-text="trendsForm.market" class="capitalize"></span></h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-6">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-700 mb-3">Most Played Numbers</h4>
                                        <div class="flex flex-wrap gap-3 mt-2">
                                            <span
                                                class="px-4 py-2 bg-[#06b6d4]/10 text-[#0891b2] rounded-full border border-[#06b6d4]/20 font-medium text-sm">128</span>
                                            <span
                                                class="px-4 py-2 bg-[#06b6d4]/10 text-[#0891b2] rounded-full border border-[#06b6d4]/20 font-medium text-sm">345</span>
                                            <span
                                                class="px-4 py-2 bg-[#06b6d4]/10 text-[#0891b2] rounded-full border border-[#06b6d4]/20 font-medium text-sm">670</span>
                                            <span
                                                class="px-4 py-2 bg-[#06b6d4]/10 text-[#0891b2] rounded-full border border-[#06b6d4]/20 font-medium text-sm">789</span>
                                            <span
                                                class="px-4 py-2 bg-[#06b6d4]/10 text-[#0891b2] rounded-full border border-[#06b6d4]/20 font-medium text-sm">234</span>
                                        </div>
                                    </div>

                                    <div>
                                        <h4 class="text-sm font-medium text-gray-700 mb-3">Market Analysis</h4>
                                        <div class="bg-white p-4 rounded-xl border border-[#06b6d4]/10">
                                            <p class="text-gray-600 text-sm">Based on our analysis, the current market
                                                trend shows a preference for numbers ending with 5 and 8. The opening
                                                panna has been consistently showing patterns with middle digits between
                                                2-6.</p>
                                            <p class="text-gray-600 text-sm mt-3">Players are currently favoring single
                                                digit plays in the range of 3-7, with combination bets showing strong
                                                activity.</p>
                                        </div>
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
        <section id="doubt" class="mb-12">
            <div class="section-card rounded-2xl overflow-hidden">
                <div class="gradient-bg p-1">
                    <div class="bg-white p-8 rounded-xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold gradient-text">Doubt Check (Prediction)</h2>
                        </div>

                        <form @submit.prevent="submitDoubtForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="doubt-market"
                                        class="block text-sm font-medium text-gray-700 mb-2">Select Market</label>
                                    <select id="doubt-market" x-model="doubtForm.market"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        fdprocessedid="747fz">
                                        <option value="" disabled="" selected="">Choose a market</option>
                                        <option value="kalyan">Kalyan</option>
                                        <option value="milan">Milan Day</option>
                                        <option value="rajdhani">Rajdhani Night</option>
                                        <option value="main">Main Bazar</option>
                                        <option value="starline">Starline</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="doubt-number"
                                        class="block text-sm font-medium text-gray-700 mb-2">Enter Number</label>
                                    <input type="text" id="doubt-number" x-model="doubtForm.number"
                                        class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                        placeholder="Enter number for prediction" fdprocessedid="e4nmsd">
                                </div>
                            </div>

                            <div class="premium-box p-6 rounded-xl">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-lg font-semibold text-[#0891b2]">Premium Prediction</h3>
                                        <p class="text-gray-600 text-sm">Get expert analysis on your number</p>
                                    </div>
                                    <div class="text-xl font-bold text-[#0891b2]">₹49</div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label for="doubt-upi"
                                            class="block text-sm font-medium text-gray-700 mb-2">UPI ID</label>
                                        <div class="flex">
                                            <input type="text" id="doubt-upi" readonly=""
                                                value="courtofmatka@upi"
                                                class="w-full px-4 py-3 rounded-l-xl form-input focus:outline-none bg-gray-50"
                                                fdprocessedid="balbq">
                                            <button type="button" @click="copyUPI('courtofmatka@upi')"
                                                class="btn-gradient px-4 py-3 rounded-r-xl"
                                                fdprocessedid="vt3df7">Copy</button>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="doubt-transaction"
                                            class="block text-sm font-medium text-gray-700 mb-2">Transaction ID</label>
                                        <input type="text" id="doubt-transaction"
                                            x-model="doubtForm.transactionId"
                                            class="w-full px-4 py-3 rounded-xl form-input focus:outline-none"
                                            placeholder="Enter transaction ID" fdprocessedid="123v6n">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="btn-gradient px-8 py-3 rounded-full shadow-lg"
                                    fdprocessedid="pion69">Check Prediction</button>
                            </div>
                        </form>

                        <!-- Prediction Results -->
                        <div x-show="showPrediction" x-transition="" class="mt-8">
                            <div class="bg-[#f0f9ff] border border-[#06b6d4]/20 rounded-xl shadow-md p-8">
                                <h3 class="text-lg font-semibold text-[#0891b2] mb-6 text-center">Prediction Result
                                </h3>

                                <div class="flex items-center justify-center">
                                    <div class="text-center">
                                        <div x-show="predictionResult === 'strong'"
                                            class="result-card bg-green-50 text-green-600 text-xl font-bold px-8 py-5 rounded-xl inline-block mb-4 border border-green-200 glow">
                                            Strong Chances
                                        </div>
                                        <div x-show="predictionResult === 'good'"
                                            class="result-card bg-cyan-50 text-cyan-600 text-xl font-bold px-8 py-5 rounded-xl inline-block mb-4 border border-cyan-200 glow">
                                            Good Chances
                                        </div>
                                        <div x-show="predictionResult === 'possible'"
                                            class="result-card bg-blue-50 text-blue-600 text-xl font-bold px-8 py-5 rounded-xl inline-block mb-4 border border-blue-200 glow">
                                            Can Be Possible
                                        </div>
                                        <div x-show="predictionResult === 'weak'"
                                            class="result-card bg-orange-50 text-orange-600 text-xl font-bold px-8 py-5 rounded-xl inline-block mb-4 border border-orange-200 glow">
                                            Weak Chances
                                        </div>
                                        <div x-show="predictionResult === 'no'"
                                            class="result-card bg-red-50 text-red-600 text-xl font-bold px-8 py-5 rounded-xl inline-block mb-4 border border-red-200 glow">
                                            No Chance
                                        </div>

                                        <p class="text-gray-600">For number <span x-text="doubtForm.number"
                                                class="font-semibold text-[#0891b2]"></span> in <span
                                                x-text="doubtForm.market"
                                                class="font-semibold text-[#0891b2] capitalize"></span> market</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-bg py-6 mt-8 border-t border-[#06b6d4]/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="mb-6 sm:mb-0">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full gradient-bg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.5-4.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm7 0a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zm-7 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm7 0a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#0891b2]">Court of Matka</h3>
                    </div>
                </div>
                <div class="text-center sm:text-right">
                    <p class="text-gray-500 mb-2 text-sm">© 2023 Court of Matka. All rights reserved.</p>
                    <div class="flex justify-center sm:justify-end space-x-6">
                        <a href="#" class="text-[#0891b2] hover:text-[#06b6d4] transition text-sm">Terms</a>
                        <a href="#" class="text-[#0891b2] hover:text-[#06b6d4] transition text-sm">Privacy</a>
                        <a href="#" class="text-[#0891b2] hover:text-[#06b6d4] transition text-sm">Support</a>
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
                        "window.__CF$cv$params={r:'95da9e4af02659c3',t:'MTc1MjI2MTIwOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
