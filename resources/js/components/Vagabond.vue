<template>
    <div class="d-flex flex-column h-100">
        <navbar></navbar>
        <router-view class="flex-shrink-0"></router-view>
        <foot></foot> 
    </div>
</template>

<style>
    h1, h2, h3, h4, h5, h6, p, a, li {
        font-family: 'Raleway', sans-serif;
        color: #333;
    }

    a {
        color: inherit;
        text-decoration: none;
        opacity: 1;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
        opacity: .7;
    }

</style>

