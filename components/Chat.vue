<template>
	<div>
		<!-- tabs -->
		<tabs active="Chat"></tabs>

		<!-- title -->
		<ap-title :data="title"></ap-title>

		<!-- person -->
		<ap-people :data="person"></ap-people>

		<!-- chat -->
		<ap-chat :data="chat"></ap-chat>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			return {
				title: {text: 'Chat'},
				person: [{
					username: 'salvipascual',
					gender: 'M',
					text: 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
					avatar: {picture: apretaste.servicePath + '/images/salvipascual.jpg', face:'nerd', color:'naranja', online:true, influencer:true},
					actions:[{icon:'fas fa-user', caption:'Visitar perfil', onTap:this.fireExampleEvent}]
				}],
				chat: [
					{date:'2020-06-30 15:25:50', username:'pepe', gender: 'M', avatar:{face:'hombre', color:'rojo', online:false, influencer:false}, position:'left', text:'Hola mundo cruel como anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'maria', gender: 'F', avatar:{face:'hippie', color:'amarillo', online:true, influencer:true}, position:'left', text:'Hola mundo cruel como anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'pepe', gender: 'M', avatar:{face:'hombre', color:'rojo', online:false, influencer:false}, position:'left', text:'Hola mundo cruel como anda mundo cruel como anda todo el todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'maria', gender: 'F', avatar:{face:'hippie', color:'amarillo', online:true, influencer:true}, position:'left', text:'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'salvipascual', gender: 'M', avatar:{face:'sensei', color:'verde', online:true, influencer:false}, position:'right', text:'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio'},
					{date:'2020-06-30 15:25:50', username:'salvipascual', gender: 'M', avatar:{face:'sensei', color:'verde', online:true, influencer:false}, position:'right', text:'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio'},
					{date:'2020-06-30 15:25:50', username:'pepe', gender: 'M', avatar:{face:'hombre', color:'rojo', online:false, influencer:false}, position:'left', text:'Hola mundo cruel como anda todo el mio', actions:[{icon:'fas fa-trash', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'pepe', gender: 'M', avatar:{face:'hombre', color:'rojo', online:false, influencer:false}, position:'left', text:'Hola mundo mundo cruel como anda todo el cruel como anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'pepe', gender: 'M', avatar:{face:'hombre', color:'rojo', online:false, influencer:false}, position:'left', text:'Hola mundo cruel como mundo cruel como anda todo el anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
					{date:'2020-06-30 15:25:50', username:'maria', gender: 'F', avatar:{face:'hippie', color:'amarillo', online:true, influencer:true}, position:'left', text:'Hola mundo cruel como anda todo el mio', actions:[{icon:'fas fa-thumbs-up', text:10, onTap:this.fireExampleEvent},{icon:'fas fa-thumbs-down', text:2, onTap:this.fireExampleEvent},{icon:'fas fa-share-alt', onTap:this.fireExampleEvent}]},
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
