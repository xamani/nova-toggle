<template>
  <PanelItem :index="index" :field="field">
      <template #value>
          <span id="onspan" name="onspan" class="dot_on" v-if="field.value === 1 || field.value === true" :style="trueStyles()"></span>
          <span id="offspan" name="offspan" class="dot_off" v-else :style="falseStyles()"></span>
      </template>
  </PanelItem>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    methods: {
        trueStyles() {
            if (typeof this.field.on_color != 'undefined') {
                return {
                    "background-color": this.field.on_color
                };
            }
        },
        falseStyles() {
            if (typeof this.field.off_color != 'undefined') {
                return {
                    "background-color": this.field.off_color
                };
            }
        }
    },
}
</script>
