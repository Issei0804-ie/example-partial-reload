<script setup lang="ts">
import {router} from "@inertiajs/vue3";

const props = defineProps({
    'slowProcessResult':{
       type: String,
    },
    'num': {
        type: Number,
    }
});

const requestUsingPartialReload= () => {
    router.reload({
        only: ['num'],
        data: {
            'num':props.num
        }
    });
};

const fullPageReloadRequest = () => {
    router.reload({
        data: {
            'num':props.num
        }
    });
}
</script>

<template>
    <div class="partial-reload">
        <h1>Example Partial Reload</h1>

        <p>Slow process result is the below</p>
        <p> {{ slowProcessResult }}</p>

        <p>num is the below</p>
        <p> {{ num }} </p>

        <button
            @click="requestUsingPartialReload"
        >
            Using partial reload
        </button>
        <button
            @click="fullPageReloadRequest"
        >
            full page reload
        </button>
    </div>
</template>
