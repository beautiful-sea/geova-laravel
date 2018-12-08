<template>

	<!-- Main Content DIV MAIN -->
		<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

				<!-- Formulário da postagem  -->
				<slot name="form-post"></slot>
				<!-- ... Fim formulário de postagem  -->
				
			<div id="newsfeed-items-grid">
				<!-- Postagens -->
				<slot name="post"></slot>
				<!-- Fim Postagens -->
			</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

		</div>

	<!-- ... end Main Content -->
</template>

<script>
	export default{

	};
</script>