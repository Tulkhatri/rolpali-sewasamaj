<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav>
                <ul class="flex item-center p-4 mx-auto gap-4">
                    <li class="space-x-6">
                        <!-- Link Directly use it is import globally inside app.js -->
                        <Link :href="route('home')">Home</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">About</Link>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>
