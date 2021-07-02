<template>
	<div>
		<!-- tabs -->
		<tabs active="Listas"></tabs>

		<!-- title -->
		<ap-title :data="title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="textList"></ap-text>

		<!-- list of icons -->
		<ap-list :data="list"></ap-list>

		<!-- text -->
		<ap-text class="mb-3" :data="textPeople"></ap-text>

		<!-- list of people -->
		<ap-people :data="people"></ap-people>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			return {
				title: {text: 'Listas'},
				textList: {text: 'Este es un ejemplo de lista para agregar artículos, como redes sociales en el perfil, o artículos a la venta en Piropazo.'},
				list: [{
					icon:'fas fa-brain',
					title: 'A sassy title',
					text: 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
					actions: [
						{icon:'fas fa-user', caption:'Visitar perfil', onTap:this.fireExampleEvent},
						{icon:'fas fa-trash', caption:'Eliminar', onTap:this.fireExampleEvent}
					]
				},{
					icon:'fas fa-ban',
					title: 'There is no action here',
					text: 'Much ado about nothing',
					onTap: this.fireExampleEvent
				},{
					icon:'fas fa-menorah',
					title: 'Just the title, how cool!',
					onTap: this.fireExampleEvent,
					actions:[
						{icon:'fas fa-trash', caption:'Eliminar', onTap:this.fireExampleEvent}
					]
				},{
					icon:'fas fa-ankh',
					text: 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
					actions: [
						{icon:'fas fa-play', caption:'Iniciar audio', onTap:this.fireExampleEvent},
						{icon:'fas fa-trash', caption:'Eliminar', onTap:this.fireExampleEvent}
					]
				}],
				people: [{
					username: 'salvipascual',
					gender: 'M',
					text: 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
					avatar: {picture: apretaste.servicePath + '/images/salvipascual.jpg', face:'nerd', color:'naranja', online:true, influencer:true},
					actions:[{icon:'fas fa-user', caption:'Visitar perfil', onTap:this.fireExampleEvent}]
				},{
					username: 'refageist',
					gender: 'M',
					avatar: {face:'hombre', color:'amarillo', online:true, influencer:true},
					chips: [
						{icon:'fas fa-bolt', text:'45,678', clear:true},
						{icon:'fas fa-users', text:'123', clear:true}
					],
					actions:[{icon:'fas fa-user', caption:'Visitar perfil', onTap:this.fireExampleEvent}]
				},{
					username: 'juanita',
					gender: 'F',
					text: 'Trabajadora social',
					avatar: {face:'chica', color:'rojo', online:false, influencer:false},
					actions: [
						{icon:'fas fa-user', caption:'Visitar perfil', onTap:this.fireExampleEvent},
						{icon:'fas fa-trash', caption:'Eliminar', onTap:this.fireExampleEvent}
					]
				}],
				textPeople: {text: 'Este es un ejemplo de lista para agregar usuarios, como ganadores de la Rifa o lista de Influencers.'}
			}
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
