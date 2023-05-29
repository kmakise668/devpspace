<template>
    <div class="demo-app">
        {{ hello }}

        {{ initial.test }}

    </div>
</template>

<script>
export default {
  data() {
    return {
      hello: 'World',
    };
  },
  props: ['initial'],
};
</script>