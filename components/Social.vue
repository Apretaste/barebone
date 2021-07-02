<template>
	<div>
		<!-- tabs -->
		<tabs active="Social"></tabs>

		<!-- title -->
		<ap-title :data="title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="text"></ap-text>

		<!-- card -->
		<ap-card class="tutorial-card" :data="card"></ap-card>

		<!-- paginator -->
		<ap-paginator :data="paginator"></ap-paginator>

		<!-- floating action button -->
		<ap-fab :data="fab"></ap-fab>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			return {
				title: {text: 'Social'},
				text: {text: 'Este es un ejemplo de lista de reglas para usar en los servicios que requieran ayuda.'},
				card: {
					isAd: true,
					image: 'https://apretaste.blob.core.windows.net/pizarra/0001b26d50758625f7d74928f2ca5b9c.jpg',
					text: "Secondarely, @salvipascual this is a #NiceText to show, that points to https://www.apretaste.org or opens the email salvi@apretaste.org, and cannot be larger of certain #NumberOfChars, because it won't let the text go to a #third line",
					inserted: '2020-06-30 15:25:50',
					username: 'salvipascual',
					gender: 'M',
					avatar: {face:'nerd', color:'naranja', online:true, influencer:true},
					shared: {
						icon:'fas fa-newspaper', 
						text:'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
						onTap:this.fireExampleEvent
					},
					reactions: {like:11, love:2, lol:4, angry:1, amaze:5, sad:0, sucks:1}
				},
				paginator: {
					page: 5,
					total: 11,
					onTapNext: this.fireExampleEvent,
					onTapBack: this.fireExampleEvent
				},
				fab: [
					{icon:'fas fa-plus', onTap:function(){apretaste.send({command:'BAREBONE FORMS'})}},
					{icon:'fas fa-share', onTap:function(){alert('TODO open share popup')}},
				]
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
