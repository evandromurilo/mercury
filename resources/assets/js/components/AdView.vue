<style scoped>
body{
	font-family: 'Montserrat', sans-serif;
}

#app{
	height: 400px;
}

p{
	font-size: 14px;
}
h3{
	margin: 5px 0;
}
.is-flex{
	height: 100%;
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}
.inline{
	display: inline-block;
	position: relative;
}
.ad-popover{
	position: absolute;
	width: 200px;
	background: #fff;
	border: 1px solid #42b983;
	padding: 10px 20px;
	box-shadow: 0 6px 6px rgba(16, 16, 16, 0.04), 0 6px 6px rgba(0, 0, 0, 0.05);
	z-index:999;
}

button{
	background: #42b983;
	font-family: 'Montserrat', sans-serif;
	border: 1px solid #42b983;
	padding: 12px;
	font-size: 12px;
	color: #fff;
	outline: none;
	display: inline-block;
	text-align: center;
	padding: 6px 12px;
	border-radius: 3px;
	user-select: none;
	margin: 0 0 5px 0;
}
</style>

<template>
	 <div class="inline">
		 <li id="rows-li">
			 <i v-show="free" class="fa fa-gift" aria-hidden="true" style="color:green;"></i>
			 <i v-show="!free" class="fa fa-usd" aria-hidden="true" style="color:#FFD700"></i>
			 <a :href="this.url" v-on:mouseover="hover" v-on:mouseout="hoverOut">{{ this.title }}</a>
		 </li>
		 <div class="ad-popover" v-if="showPopup" transition="fade"
											v-on:mouseover="hoverInfo"
											v-on:mouseout="hoverOutInfo">
			 <h3>{{ this.title }}</h3>
			 <p>{{ this.description }}</p>
			 <a :href="this.url"><button>Ver detalhes</button></a>
		 </div>
    </div>
</template>

<script>
    export default {
		props: ['id', 'title', 'description', 'free', 'priceF', 'url'],

        mounted() {
            console.log('Component mounted.')
        },

		data() {
			return {
				showPopup: false,
				timer: '',
				isInInfo: false
			}
		},

		methods: {
			hover: function()
			{
				let vm = this;
				this.timer = setTimeout(function() {
					vm.showPopover();
				}, 600);
			},

			hoverOut: function()
			{
				let vm = this;
				clearTimeout(vm.timer);
				this.timer = setTimeout(function() {
					if (!vm.isInInfo)
					{
						vm.closePopover();
					}
				}, 200);
			},

			hoverInfo: function()
			{
				this.isInInfo = true;
			},

			hoverOutInfo: function()
			{
				this.isInInfo = false;
				this.hoverOut();
			},

			showPopover: function()
			{
				this.showPopup = true;
			},

			closePopover: function()
			{
				this.showPopup = false;
			}
		}
    }
</script>
