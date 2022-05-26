import { ref, unref, onMounted, onBeforeUnmount } from 'vue';

export function useIntersectionObserver(el) {
  const inView = ref(false);

  const observer = new IntersectionObserver((entries) => {
    inView.value = entries[0].isIntersecting;
  });

  onMounted(() => {
    observer.observe(unref(el));
  });

  onBeforeUnmount(() => {
    observer.disconnect();
  });

  return inView;
}
