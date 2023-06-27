Vue.createApp({
	data () {
		return {
		
			isActive: false
		}
	},
	methods: {

		toggleMenu () {

			this.isActive = !this.isActive;
		}
	}
}).mount('header .mobile')