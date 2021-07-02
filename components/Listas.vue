<template>
	<div>
		<!-- tabs -->
		<tabs active="Listas"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.textList"></ap-text>

		<!-- list of icons -->
		<ap-list :data="apretaste.state.list"></ap-list>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.textPeople"></ap-text>

		<!-- list of people -->
		<ap-people :data="apretaste.state.people"></ap-people>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			// define title data
			apretaste.state.title = {text: 'Listas'};

			// define text data
			apretaste.state.textList = {text: 'Este es un ejemplo de lista para agregar artículos, como redes sociales en el perfil, o artículos a la venta en Piropazo.'};

			// define text data
			apretaste.state.textPeople = {text: 'Este es un ejemplo de lista para agregar usuarios, como ganadores de la Rifa o lista de Influencers.'};

			// make it reactive
			return apretaste.state;
		}
	}
</script>

<style scoped>
</style>
