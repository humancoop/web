<template>
  <img v-lazy="fullPath">
</template>

<script>
export default {
  name: 'thumbor',
  props: {
    src: String,
    width: String,
    height: String
  },
  computed: {
    fullPath: function () {
      return this.$vueThumbor.options.rootUrl.concat(
		'/unsafe/',
		this.width,
        'x',
        this.height,
        '/smart/',
		this.src
      )
    }
  }
}
</script>
