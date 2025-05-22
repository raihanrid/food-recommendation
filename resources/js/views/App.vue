<template>
    <GoogleLogin :callback="handleSuccess" :onError="handleError" />
</template>

<script setup>
import axios from 'axios'
import { GoogleLogin } from 'vue3-google-login';

const handleSuccess = async (response) => {
    const { credential } = response;
    const res = await axios.get('http://localhost:8000/api/auth/google/callback', {
        params: {
            credential: credential
        },
    });

    console.log(res.data)
}

const handleError = () => {
    console.error('Login gagal')
}
</script>
