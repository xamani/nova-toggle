<template>
    <div :class="`text-${field.textAlign}`">
        <span class="dot_on" v-if="field.value === 1 || field.value === true" :style="trueStyles()"></span>
        <span class="dot_off" v-else :style="falseStyles()"></span>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
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
