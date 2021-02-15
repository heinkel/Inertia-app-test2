<template>
    <div>
        <p>This is your site {{fname}}, {{lname}}</p>
    </div>
</template>

<script>
export default {
    props: ['fname','lname']
}
</script>
