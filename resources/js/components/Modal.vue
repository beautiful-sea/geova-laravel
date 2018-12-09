<template>
	<div class="modal fade" :id="id" tabindex="-1" role="dialog"  aria-hidden="true" >
		<div :class="(dialog_class)?dialog_class:'modal-dialog'" role="document">
			<div v-if="body || header || footer" class="modal-content" :style="defineStyleModalContent">

				<form :action="this.action" :method="defineMethod" :enctype="(enctype)?'multipart/form-data':''">
					<div v-if="parseInt(header)" class="modal-header">
						<slot name="modal-header"></slot>
					</div>

					<div v-if="parseInt(body)" class="modal-body">
						<slot name="modal-body"></slot>
					</div>

					<div v-if="parseInt(footer)" class="modal-footer">
						<slot name="modal-footer"></slot>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
					<input v-if="alterMethod" type="hidden" name="_method" :value="alterMethod">
					<input v-if="token" type="hidden" name="_token" :value="token">
				</form>
			</div>
			<slot v-if="!body && !header && !footer" name="modal-content"></slot>
		</div>
	</div>

</template>
<script>
export default{
	props:['header','body','footer','token','method','action','background','id','enctype','dialog_class'],
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
			if(!parseInt(this.background)){
				return 'background-color:#fff0;border-color:#fff0';
			}else{
				return '';
			}
		}
	}
};
</script>