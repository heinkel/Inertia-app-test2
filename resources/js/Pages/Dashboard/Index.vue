<template>
    <layout>
        <div>
            This is the dashboard Page: {{ lname }}
        </div>
    </layout>
</template>

<script>

import Layout from '../Shared/Layout.vue'

  export default {
    props: ['lname'],
    components: {
        Layout,
      },

        Layout  }
</script>

