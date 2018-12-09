<template>
	<div class="modal-content">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="modal-header">
			<h6 class="title"><slot></slot></h6>
		</div>

		<div class="modal-body">
			<form :method="method" :action="action"  enctype="multipart/form-data">
				<a href="#" class="upload-photo-item">
					<label class="custom-file-upload">
						<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

						<input type="file" :name="name" style="display:none"/>
						<h6>Enviar Foto</h6>
						<span>Procurar no computador</span>
					</label>

				</a>

				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

					<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

					<h6>Escolher de Minhas Fotos</h6>
					<span>Escolher de suas fotos enviadas</span>
				</a>
				<input type="hidden" name="_method" value="PUT">
				<div align="center">
					<button type="submit" class="btn btn-success" >Enviar Imagem</button>

				</div>
			</form>
		</div>
	</div>
</template>
<script>
export default{
	props:['method','action','name']
};
</script>