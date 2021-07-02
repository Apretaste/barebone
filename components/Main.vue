<template>
	<div>
		<!-- tabs -->
 		<tabs class="tutorial-tabs" active="Inicio"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.text"></ap-text>

		<!-- avatar -->
		<div class="mb-3 tutorial-avatar">
			<ap-avatar :data="apretaste.state.avatar"></ap-avatar>
		</div>

		<!-- stars -->
		<div class="mb-3">
			<ap-stars :data="apretaste.state.stars"></ap-stars>
		</div>

		<!-- chips -->
		<div class="mb-3">
			<ap-chip v-for="dt in apretaste.state.chips" :data="dt" class="me-2"></ap-chip>
		</div>

		<!-- drawer -->
		<a id="drawerTrigger" href="#!">Abrir Drawer</a>
		<ap-drawer :data="apretaste.state.drawer"></ap-drawer>

		<!-- floating action button -->
		<ap-fab class="tutorial-fab" :data="apretaste.state.fab"></ap-fab>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		created: function() {
			// define title data
			apretaste.state.title = {text: 'Inicio'};

			// define text data
			apretaste.state.text = {text: 'Bienvenido a los barebones @' + apretaste.state.username + '. Usa este servicio para guiar tus interfaces gráficas y #BuenasPracticas de programación a la ahora de escribir un servicio para https://www.apretaste.org, y si tienes dudas escríbeme a salvi@apretaste.org.'};

			// define avatar data
			apretaste.state.avatar = {
				picture: apretaste.servicePath + '/images/salvipascual.jpg',
				size: 30,
				online: true,
				influencer: true
			};

			// define stars data
			apretaste.state.stars = {
				value: 33,
				size: 'small'
			};

			// define drawer data
			apretaste.state.drawer = {
				triggerId: 'drawerTrigger',
				title: 'Ver opciones',
				options: [
					{icon:'fas fa-check', caption:'Aceptar', onTap:this.fireExampleEvent},
					{caption:'Ir atrás', onTap:this.fireExampleEvent},
					{icon:'fas fa-hashtag', caption:'Abrir Pizarra', onTap:this.fireExampleEvent},
					{icon:'fas fa-users', caption:'Visitar perfil', onTap:this.fireExampleEvent},
					{icon:'fas fa-trash', caption:'Eliminar', onTap:this.fireExampleEvent},
				]
			};

			// define chips data
			apretaste.state.chips = [
				{icon:'fas fa-ankh', text:'Amuleto', size:'large', onTap:this.fireExampleEvent},
				{icon:'fas fa-calendar', text:'6/25/2021 10:30 PM'},
				{icon:'fas fa-globe', text:'Activo', active:'true'},
				{icon:'fas fa-user', text:'@salvipascual', size:'small'},
				{icon:'fas fa-trash', text:'Borrar Todo', size:'small', clear:true},
				{text:'Hola', clear:true}
			];

			// define fab data
			apretaste.state.fab = [
				{icon:'fas fa-check', onTap:this.fireExampleEvent},
				{icon:'fas fa-arrow-left', onTap:this.fireExampleEvent},
				{icon:'fas fa-hashtag', onTap:this.fireExampleEvent},
				{icon:'fas fa-users', onTap:this.fireExampleEvent},
				{icon:'fas fa-trash', onTap:this.fireExampleEvent},
			];

			// start the tutorial
			root.startTutorial({
				run: apretaste.state.runTutorial,
				steps: [
					{text:'¡Hola! Mi nombre es Apretín, soy el robot de Apretaste, y quiero enseñarte como usar este servicio 😊'},
					{text:'Estas son las pestañas, desde acá puedes decidor a dónde ir en el servicio.', for:'.tutorial-tabs'},
					{text:'Acá tienes tu avatar. Ahora mismo está hardcoded, pero juega con la data en blackend para que veas como cambia', for:'.tutorial-avatar'},
					{text:'Y por último, estos son botones de acción. No los uses para nevegar en servicio (usa los tabs), sinó para ejecutar acciones', for:'.tutorial-fab'},
				]
			});
		},
		methods: {
			fireExampleEvent() {
				console.log("Fire Example Event (FEE)");
			}
		}
	}
</script>

<style scoped>
</style>
