<script>
	import TagsInput from './components/TagsInput.vue';

	export default {
		data: () => ({
			jsFrameworks: ['react.js', 'vue.js', 'angular.js'],
			backendFrameworks: [],
		}),
		mounted() {},
		components: {
			TagsInput,
		},
		methods: {
			handleChange(tags) {
				this.jsFramewords = [...tags];
			},
		},
	};
</script>

<template>
	<div>
		<h1>Hello World</h1>
		<TagsInput
			:selectedTags="jsFrameworks"
			@change="handleChange"
		/>

		<TagsInput
			:selectedTags="backendFrameworks"
			@change="backendFrameworks = [...$event]"
		/>
	</div>
</template>

<style>
	h1 {
		text-shadow: 1px 1px 1px #ff0000;
	}
</style>
