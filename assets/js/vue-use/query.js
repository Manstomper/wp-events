import { isRef, ref, unref, watchEffect } from 'vue';
import axios from 'axios';

export function usePostQuery(url, data = null) {
  const posts = ref([]);
  const foundPosts = ref();
  const error = ref(false);

  const getParams = function (data) {
    if (data.taxonomyTerm) {
      data.taxQuery = {
        taxonomy: data.taxonomyTerm.taxonomy,
        field: 'id',
        terms: data.taxonomyTerm.id,
      };
    } else {
      data.taxQuery = null;
    }

    delete data.taxonomyTerm;

    return data;
  };

  function query() {
    axios
      .post(unref(url), getParams(unref(data)))
      .then((response) => {
        if (response.data) {
          posts.value = response.data.posts;
          foundPosts.value = response.data.foundPosts;
        }
      })
      .catch((e) => {
        console.debug(e);
        error.value = true;
      });
  }

  if (isRef(url) || isRef(data)) {
    watchEffect(query);
  } else {
    query();
  }

  return { posts, foundPosts, error };
}

export function useGetQuery(url) {
  const items = ref([]);
  const error = ref(false);

  function query() {
    axios
      .get(unref(url))
      .then((response) => {
        if (response.data) {
          items.value = response.data;
        }
      })
      .catch((e) => {
        console.debug(e);
        error.value = true;
      });
  }

  if (isRef(url)) {
    watchEffect(query);
  } else {
    query();
  }

  return { items, error };
}
