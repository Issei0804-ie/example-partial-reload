<script setup lang="ts">
import {router} from "@inertiajs/vue3";

const props = defineProps({
    'slowExecution':{
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
    <div>
        <h1>Example Partial Reload</h1>

        <p>slow execution message is the below</p>
        <p> {{ slowExecution }}</p>

        <p>number is the below</p>
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
