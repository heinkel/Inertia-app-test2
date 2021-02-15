<template>
    <layout>
        <div>
            This is the Contact Page: {{ foo }}
        </div>
    </layout>
</template>

<script>

import Layout from './Shared/Layout.vue'

  export default {
    props: ['foo'],
    components: {
        Layout,
      },

        Layout  }
</script>
