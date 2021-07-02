<template>
	<div>
		<ap-tabs :data="this.data"></ap-tabs>
	</div>
</template>

<script>
	module.exports = {
		props: {
			active: String
		},
		created: function() {
			this.data = [
				{caption:'Inicio', active:this.active=='Inicio', onTap:function(){apretaste.send({command:'BAREBONE'})}},
				{caption:'Listas', active:this.active=='Listas', onTap:function(){apretaste.send({command:'BAREBONE LISTAS'})}},
				{caption:'Social', active:this.active=='Social', onTap:function(){apretaste.send({command:'BAREBONE SOCIAL'})}},
				{caption:'Forms', active:this.active=='Forms', onTap:function(){apretaste.send({command:'BAREBONE FORMS'})}},
				{caption:'Chat', active:this.active=='Chat', onTap:function(){apretaste.send({command:'BAREBONE CHAT'})}},
				{caption:'Reglas', active:this.active=='Reglas', onTap:function(){apretaste.send({command:'BAREBONE REGLAS'})}},
			];
		}
	}
</script>

<style scoped>
</style>
