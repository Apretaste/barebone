<template>
	<div>
		<!-- tabs -->
		<tabs active="Forms"></tabs>

		<!-- title -->
		<ap-title :data="title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="text"></ap-text>

		<!-- input -->
		<ap-input ref="input" :data="input"></ap-input>

		<!-- email -->
		<ap-input ref="email" :data="email"></ap-input>

		<!-- textarea -->
		<ap-area ref="textarea" :data="textarea"></ap-area>

		<!-- editor -->
		<ap-area ref="editor" :data="editor"></ap-area>

		<!-- switch -->
		<ap-switch ref="toggle" :data="toggle"></ap-switch>

		<!-- combo -->
		<ap-combo ref="combo" v-show="toggle.active" :data="combo"></ap-combo>

		<!-- submit -->
		<div class="form-group mb-3">
			<ap-button :data="buttonOk"></ap-button>
		</div>

		<!-- buttons -->
		<div class="form-group mb-3">
			<ap-button :data="buttonOpt"></ap-button>
			<ap-button :data="buttonDel"></ap-button>
		</div>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			return {
				title: {text: 'Forms'},
				text: {text: 'Este es un ejemplo de elementos de formulario para usar en entrada de datos, como el perfil de usuario.'},
				input: {
					icon:'fas fa-user', 
					label:'Inserte su @username'
				},
				email: {
					label:'Inserte su correo',
					type:'email',
					initialValue: 'salvi@gmail.com'
				},
				textarea: {
					icon:'fas fa-question',
					label:'Descríbase en 140 caracteres',
				},
				editor: {
					label:'¿Qué cree de la Pizarra?',
					isEditor: true,
					value: '<i>gta </i><b>gta </b><u>gta</u>'
				},
				toggle: {
					label: 'Mostrar género',
					active: true
				},
				combo: {
					icon: 'fas fa-male',
					label: 'Género',
					selected: 'M',
					options: [
						{value:'M', caption:'Masculino'},
						{value:'F', caption:'Femenino'},
					]
				},
				buttonOk: {
					icon: 'fas fa-thumbs-up',
					caption: 'Ver resultados',
					size: 'large',
					isPrimary: true,
					onTap: this.getFormResults
				},
				buttonOpt: {
					caption: 'Más opciones',
					size: 'medium',
					isPrimary: false,
					onTap: this.fireExampleEvent
				},
				buttonDel: {
					icon: 'fas fa-thumbs-down',
					caption: 'Cancelar',
					size: 'small',
					isPrimary: false,
					onTap: this.fireExampleEvent
				}
			}
		},
		methods: {
			fireExampleEvent() {
				console.log("Fire Example Event (FEE)");
			},
			getFormResults() {
				console.log(this.$refs.input.value());
				console.log(this.$refs.email.value());
				console.log(this.$refs.textarea.value());
				console.log(this.$refs.editor.value());
				console.log(this.$refs.toggle.value());
				console.log(this.$refs.combo.value());
			},
		}
	}
</script>

<style scoped>
</style>
