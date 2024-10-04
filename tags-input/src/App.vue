<script>
	import TagsInput from './components/TagsInput.vue';

	export default {
		data: () => ({
			jsFrameworks: ['react.js', 'vue.js', 'angular.js'],
		}),
		mounted() {},
		components: {
			TagsInput,
		},
	};
</script>

<template>
	<div>
		<h1>Hello World</h1>
		<TagsInput :selectedTags="jsFrameworks" />
	</div>
</template>

<style>
	h1 {
		text-shadow: 1px 1px 1px #ff0000;
	}
</style>
