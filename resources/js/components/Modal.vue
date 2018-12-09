<template>
	<div class="modal fade" id="modal" tabindex="-1" role="dialog"  aria-hidden="true" >
		<div class="modal-dialog" role="document">
			<div class="modal-content" :style="defineStyleModalContent">

				<form :action="this.action" :method="defineMethod">
					<div v-if="header" class="modal-header">
						<slot name="modal-header"></slot>
					</div>

					<div v-if="body" class="modal-body">
						<slot name="modal-body"></slot>
					</div>

					<div v-if="footer" class="modal-footer">
						<slot name="modal-footer"></slot>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
					<input v-if="alterMethod" type="hidden" name="_method" :value="alterMethod">
					<input v-if="token" type="hidden" name="_token" :value="token">
				</form>
			</div>
		</div>
	</div>

</template>
<script>
export default{
	props:['header','body','footer','token','method','action','background'],
	data:function(){
		return {
			alterMethod:""
		}
	},
	computed: {
		defineMethod: function(){
			if(this.method.toLowerCase() == 'get' || this.method.toLowerCase() == 'post'){
				return this.method.toLowerCase();
			}
			if(this.method.toLowerCase() == 'put'){
				this.alterMethod = 'PUT';
			}
			if(this.method.toLowerCase() == 'DELETE'){
				this.alterMethod = 'DELETE';
			}

			return 'post';

		},
		defineStyleModalContent: function(){
			if(this.background){
				return 'background-color:#fff0;border-color:#fff0';
			}else{
				return '';
			}
		}
	}
};
</script>