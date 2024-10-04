<script>
	export default {
		data() {
			return {
				tags: [...this.selectedTags],
				newTag: '',
			};
		},
		props: {
			selectedTags: {
				type: Array,
				required: true,
				default: '',
			},
		},
		watch: {
			newTag(newVal, oldVal) {
				if (newVal.indexOf(',') > -1) {
					this.newTag = oldVal;
					this.addNewTag();
				}
			},
		},
		computed: {
			isTagExists() {
				return this.tags.includes(this.newTag);
			},
		},
		methods: {
			addNewTag() {
				if (
					typeof this.newTag === 'string' &&
					this.newTag.length > 0 &&
					!this.isTagExists
				) {
					this.tags.push(this.newTag);
					this.newTag = '';
				}
			},
			removeTag(index) {
				if (this.tags[index]) {
					this.tags.splice(index, 1);
				}
			},
			removeLastTag() {
				if (this.tags.length) {
					this.tags.pop();
				}
			},
			getInputStyles() {
				let styles = '';

				if (this.isTagExists) {
					styles += 'color: #FF0000;';
					styles += 'text-decoration: line-through;';
				}

				return styles;
			},
		},
	};
</script>

<template>
	<div class="tags-wrapper">
		selected tags: {{ selectedTags }}
		<div
			v-for="(tag, index) in tags"
			v-bind:key="index"
			class="tags-list"
		>
			<div class="tag-item">
				<hr />
				<span>{{ `${String(index).padStart(3, '0')} : ${tag}` }}</span>
				<button
					@click="removeTag(index)"
					href="#"
					aria-label="Remove Tag"
					style="float: right"
				>
					&times;
				</button>
			</div>
		</div>
		<input
			@keydown.enter="addNewTag($event)"
			@keydown.tab.prevent="addNewTag"
			:style="getInputStyles()"
			:class="{ 'tag-exists': isTagExists }"
			class="tag-input"
			v-model.trim="newTag"
			type="text"
		/>
		<button
			@click="removeLastTag"
			:disabled="this.tags.length < 1"
			href="#"
			aria-label="Undo"
			style="float: right"
			class="remove-tag"
		>
			Remove Last
		</button>
	</div>
</template>

<style scoped>
	.tag-exists {
		color: #ff0000;
		text-decoration: line-through;
	}
</style>
