<template>
	<div>
		<!-- tabs -->
		<tabs active="Chat"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- person -->
		<ap-people :data="apretaste.state.person"></ap-people>

		<!-- chat -->
		<ap-chat :data="apretaste.state.chat"></ap-chat>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			// define title data
			apretaste.state.title = {text: 'Chat'};

			// make it reactive
			return apretaste.state;
		}
	}
</script>

<style scoped>
</style>
