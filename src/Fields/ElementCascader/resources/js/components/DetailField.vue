<template>
    <panel-item :field="field">
        <p slot="value" class="text-90">{{currentName}}</p>
    </panel-item>
</template>

<script>
  export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    computed: {
      currentName () {
        return _.get(this, 'field.value.name', '-')
      }
    }
  }
</script>
