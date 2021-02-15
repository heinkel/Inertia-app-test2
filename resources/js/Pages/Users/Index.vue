<template>
    <layout>
        <div>
            This is the users Page.
        </div>
    </layout>
</template>

<script>

import Layout from './Shared/Layout.vue'

  export default {
    props: ['users'],
    components: {
        Layout,
      },

        Layout  }
</script>
