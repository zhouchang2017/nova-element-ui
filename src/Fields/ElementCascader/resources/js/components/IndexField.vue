<template>
    <span>{{ field.value.name }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
