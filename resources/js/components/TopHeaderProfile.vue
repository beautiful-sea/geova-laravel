<template>

	<!-- Top Header-Profile -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<div class="top-header">
						<div class="top-header-thumb" style="height:640px">
							<img v-if="user.img_header" :src="'storage/users/'+user.img_header" style="height:-webkit-fill-available" alt="Imagem de capa">
							<img v-if="!(user.img_header)" src="img/top-header1.jpg" style="height:-webkit-fill-available" alt="Imagem de Capa">
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
									<ul class="profile-menu">
										<li>
											<a href="02-ProfilePage.html" class="active">Linha do tempo</a>
										</li>
										<li>
											<a href="05-ProfilePage-About.html">Sobre</a>
										</li>
										<li>
											<a href="06-ProfilePage.html">Amigos</a>
										</li>
									</ul>
								</div>
								<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
									<ul class="profile-menu">
										<li>
											<a href="07-ProfilePage-Photos.html">Fotos</a>
										</li>
										<li>
											<a href="09-ProfilePage-Videos.html">Vídeos</a>
										</li>
										<li>
											<div class="more">
												<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
												<ul class="more-dropdown more-with-triangle">
													<li>
														<a href="#">Report Profile</a>
													</li>
													<li>
														<a href="#">Block Profile</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="control-block-button">

								<div class="btn btn-control bg-primary more">
									<svg class="olymp-settings-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

									<ul class="more-dropdown more-with-triangle triangle-bottom-right">
										<li>
											<a href="#" data-toggle="modal" data-target="#update-profile-photo">Atualizar foto de perfil</a>
										</li>
										<li>
											<a href="#" data-toggle="modal" data-target="#update-header-photo">Atualizar foto de capa</a>
										</li>
										<li>
											<a href="29-YourAccount-AccountSettings.html">Configurações da conta</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="top-header-author">
							<a href="02-ProfilePage.html" class="author-thumb">
								<slot></slot>
							</a>
							<div class="author-content">
								<a href="02-ProfilePage.html" class="h4 author-name">{{user.name}}</a>
								<div class="country">Valença, RJ</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Top Header-Profile -->
</template>
<script>
export default{
	props:['user']
};
</script>