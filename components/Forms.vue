<template>
	<div>
		<!-- tabs -->
		<tabs active="Forms"></tabs>

		<!-- title -->
		<ap-title :data="apretaste.state.title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="apretaste.state.text"></ap-text>

		<!-- inputs -->
		<ap-input v-for="dt in apretaste.state.inputs" :data="dt"></ap-input>

		<!-- textarea -->
		<ap-area :data="apretaste.state.textarea"></ap-area>

		<!-- editor -->
		<ap-area ref="areaEditor" :data="apretaste.state.editor"></ap-area>
		<a href="#!" onclick="alert(root.$refs.areaEditor.getValue())">Obtener HTML</a>

		<!-- switch -->
		<ap-switch :data="apretaste.state.switch"></ap-switch>

		<!-- combo -->
		<ap-combo v-show="apretaste.state.switch.active" :data="apretaste.state.combo"></ap-combo>

		<!-- buttons -->
		<div class="form-group mb-3">
			<ap-button :data="apretaste.state.buttonOk"></ap-button>
			<ap-button :data="apretaste.state.buttonOpt"></ap-button>
			<ap-button :data="apretaste.state.buttonDel"></ap-button>
		</div>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			// define title data
			apretaste.state.title = {text: 'Forms'};

			// define text data
			apretaste.state.text = {text: 'Este es un ejemplo de elementos de formulario para usar en entrada de datos, como el perfil de usuario.'};

			// make it reactive
			return apretaste.state;
		}
	}
</script>

<style scoped>
</style>
