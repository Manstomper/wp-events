<script setup>
import { ref } from 'vue';
import { usePostQuery } from './../vue-use/query';
//import { useIntersectionObserver } from './../vue-use/observer';

const data = ref({
  perPage: 20,
  page: 1,
  postType: 'event',
});

const { posts, foundPosts } = usePostQuery('/wp-json/rig/posts', data);
</script>

<template>
  <h2>Events</h2>
  <ul v-if="foundPosts">
    <li v-for="post in posts" :key="post.id">
      <a :href="post.link">
        {{ post.title }}
      </a>
    </li>
  </ul>
</template>
