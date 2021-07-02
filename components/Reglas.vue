<template>
	<div>
		<!-- tabs -->
		<tabs active="Reglas"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.text"></ap-text>

		<!-- rules -->
		<ap-rules :data="apretaste.state.rules"></ap-rules>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			// define title data
			apretaste.state.title = {text: 'Reglas'};

			// define text data
			apretaste.state.text = {text: 'Este es un ejemplo de lista de reglas para usar en los servicios que requieran ayuda.'};

			// make it reactive
			return apretaste.state;
		}
	}
</script>

<style scoped>
</style>
