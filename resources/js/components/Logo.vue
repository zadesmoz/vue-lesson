<template>
    <div>
        <h1 class="font-normal text-3xl text-gray-600 leading-none mb-4">
            Full Logo
        </h1>

        <div class="mb-10 mt-10 pr-20">
            <picture class="block shadow rounded-lg flex items-center justify-center mb-6">
                <img src="/images/Logo.png" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Original logo on <b>white</b> background</p>

                <a
                    href="/images/Logo.png"
                    class="border border-grey px-8 py-2 rounded-full text-black font-bold text-xs"
                    >logo.png</a
                >
            </div>
        </div>

        <div class="mb-10 mt-10 pr-20">
            <picture class="block shadow rounded-lg flex items-center justify-center mb-6 bg-blue-500">
                <img src="/images/Negative-Logo.png" alt="Negative-Logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative logo on <b>Blue</b> background</p>

                <a
                    href="/images/Negative-Logo.png"
                    class="border border-grey px-8 py-2 rounded-full text-black font-bold text-xs"
                    >Negative-Logo.png</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
