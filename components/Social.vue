<template>
	<div>
		<!-- tabs -->
		<tabs active="Reglas"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.text"></ap-text>

		<!-- card -->
		<ap-card class="tutorial-card" :data="apretaste.state.card"></ap-card>

		<!-- paginator -->
		<ap-paginator :data="apretaste.state.paginator"></ap-paginator>

		<!-- floating action button -->
		<ap-fab :data="apretaste.state.fab"></ap-fab>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			// define title data
			apretaste.state.title = {text: 'Social'};

			// define text data
			apretaste.state.text = {text: 'Este es un ejemplo de lista de reglas para usar en los servicios que requieran ayuda.'};

			// define tabs data
			apretaste.state.fab = [
				{icon:'fas fa-plus', onTap:function(){apretaste.send({command:'BAREBONE FORMS'})}},
				{icon:'fas fa-share', onTap:function(){alert('TODO open share popup')}},
			];

			// make it reactive
			return apretaste.state;
		}
	}
</script>

<style scoped>
</style>
