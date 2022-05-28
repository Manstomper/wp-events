<script setup>
/* global i18n */

import { ref } from 'vue';
import { usePostQuery } from './../vue-use/query';

const data = ref({
  perPage: 20,
  page: 1,
  postType: 'event',
  lang: i18n.lang,
});

const { posts, foundPosts } = usePostQuery('/wp-json/rig/posts', data);

function formatDate(str) {
  let date = new Date(str);

  return date.getDay() + '.' + date.getMonth() + '.' + date.getFullYear() + ' ' + date.getHours() + ':' + date.getMinutes();
}
</script>

<template>
  <h2>Events</h2>
  <ul v-if="foundPosts">
    <li v-for="post in posts" :key="post.id">
      <a :href="post.link">
        {{ post.title }}
        &bull;
        <time :datetime="post.acf.start_date">{{ formatDate(post.acf.start_date) }}</time>
      </a>
    </li>
  </ul>
</template>
