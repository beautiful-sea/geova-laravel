<template>
	<div>

		<!-- Header-BP -->

		<header class="header" id="site-header">

			<div class="page-title">
				<h6>Página de Perfil</h6>
			</div>

			<div class="header-content-wrapper">
				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Encontre igrejas ou pessoas..." type="text">
						<button>
							<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
						</button>
					</div>
				</form>

				<a href="#" class="link-find-friend">Encontrar</a>

				<div class="control-block">

					<div class="control-icon more has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>

						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Solicitações</h6>
								<a href="#">Encontrar pessoas</a>
								<a href="#">Configurações</a>
							</div>

							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list friend-requests">
									<li>
										<div class="author-thumb">
											<img src="img/avatar55-sm.jpg"  alt="author">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
											<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
										</div>
										<span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										</div>
									</li>

									<li>
										<div class="author-thumb">
											<img src="img/avatar56-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Tony Stevens</a>
											<span class="chat-message-item">4 Amigos em comum</span>
										</div>
										<span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										</div>
									</li>

									<li class="accepted">
										<div class="author-thumb">
											<img src="img/avatar57-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
										</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>

									<li>
										<div class="author-thumb">
											<img src="img/avatar58-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Stagg Clothing</a>
											<span class="chat-message-item">9 Friends in Common</span>
										</div>
										<span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>
											</a>

										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										</div>
									</li>

								</ul>
							</div>

							<a href="#" class="view-all bg-blue">Check all your Events</a>
						</div>
					</div>

					<div class="control-icon more has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>

						<div class="label-avatar bg-primary">8</div>

						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Notificações</h6>
								<a href="#">Marcar tudo como lido</a>
								<a href="#">Configurações</a>
							</div>

							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list">
									<li>
										<div class="author-thumb">
											<img src="img/avatar62-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<div><a href="#" class="h6 notification-friend">Lindomar</a> comentou seu novo <a href="#" class="notification-link">status de perfil</a>.</div>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 horas atrás</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>

									<li class="un-read">
										<div class="author-thumb">
											<img src="img/avatar63-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<div>Você e <a href="#" class="h6 notification-friend">Lindomar Silva</a> agora são amigos. Escreva em <a href="#" class="notification-link">seu mural</a>.</div>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 horas atrás</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>

									<li class="with-comment-photo">
										<div class="author-thumb">
											<img src="img/avatar64-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<div><a href="#" class="h6 notification-friend">Juliana Gonçalves</a> comentou em sua <a href="#" class="notification-link">foto</a>.</div>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Ontem às 5:32</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

										<div class="comment-photo">
											<img src="img/comment-photo1.jpg" alt="photo">
											<span>“She looks incredible in that outfit! We should see each...”</span>
										</div>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>

									<li>
										<div class="author-thumb">
											<img src="img/avatar65-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>

									<li>
										<div class="author-thumb">
											<img src="img/avatar66-sm.jpg" alt="author">
										</div>
										<div class="notification-event">
											<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										</span>

										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
								</ul>
							</div>

							<a href="#" class="view-all bg-primary">Ver todas Notificações</a>
						</div>
					</div>

					<div class="author-page author vcard inline-items more">
						<div class="author-thumb">
							<img alt="author" src="{$user.img_profile}" width="45px" class="avatar">
							<span class="icon-status online"></span>
							<div class="more-dropdown more-with-triangle">
								<div class="mCustomScrollbar" data-mcs-theme="dark">
									<div class="ui-block-title ui-block-title-small">
										<h6 class="title">Sua Conta</h6>
									</div>

									<ul class="account-settings">
										<li>
											<a href="29-YourAccount-AccountSettings.html">

												<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

												<span>Configurações</span>
											</a>
										</li>
										<li>
											<a href="/logout">
												<svg class="olymp-logout-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

												<span>Sair</span>
											</a>
										</li>
									</ul>

									<div class="ui-block-title ui-block-title-small">
										<h6 class="title">Opções de Status</h6>
									</div>

									<ul class="chat-settings">
										<li>
											<a href="#">
												<span class="icon-status online"></span>
												<span>Online</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="icon-status away"></span>
												<span>Ausente</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="icon-status disconected"></span>
												<span>Desconectado</span>
											</a>
										</li>
									</ul>

									<div class="ui-block-title ui-block-title-small">
										<h6 class="title">Status Personalizado</h6>
									</div>

									<form class="form-group with-button custom-status">
										<input class="form-control" placeholder="" type="text" value="Viva a vida!">

										<button class="bg-purple">
											<svg class="olymp-check-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg>
										</button>
									</form>

									<div class="ui-block-title ui-block-title-small">
										<h6 class="title">Sobre Geová</h6>
									</div>

									<ul>
										<li>
											<a href="#">
												<span>Termos e Condições</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>FAQs</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Contato</span>
											</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<a href="/{$user.username}" class="author-name fn">
							<div class="author-title">
								{$user.name} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
							</div>
							<span class="author-subtitle">@{$user.username}</span>
						</a>
					</div>

				</div>
			</div>

		</header>

		<!-- ... end Header-BP -->


		<!-- Responsive Header-BP -->

		<header class="header header-responsive" id="site-header-responsive">

			<div class="header-content-wrapper">
				<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#request" role="tab">
							<div class="control-icon has-items">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								<div class="label-avatar bg-blue">6</div>
							</div>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
							<div class="control-icon has-items">
								<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
								<div class="label-avatar bg-purple">2</div>
							</div>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
							<div class="control-icon has-items">
								<svg class="olymp-thunder-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								<div class="label-avatar bg-primary">8</div>
							</div>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#search" role="tab">
							<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>


			<!-- Tab panes -->
			<div class="tab-content tab-content-responsive">

				<div class="tab-pane " id="request" role="tabpanel">

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Solicitações</h6>
							<a href="#">Encontre pessoas</a>
							<a href="#">Configurações</a>
						</div>
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar55-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Rafaela Mattos</a>
									<span class="chat-message-item">Amigos em comum: Juliana Gonçalves</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar56-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Breno Cocheto</a>
									<span class="chat-message-item">4 amigos em comum</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							<li class="accepted">
								<div class="author-thumb">
									<img src="/assets/site/img/avatar57-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									Você e <a href="#" class="h6 notification-friend">Juliana Gonçalves</a> agora são amigos. Escreva em <a href="#" class="notification-link">seu mural</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar58-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
						</ul>
						<a href="#" class="view-all bg-blue">Ver todos eventos</a>
					</div>

				</div>

				<div class="tab-pane " id="notification" role="tabpanel">

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notificações</h6>
							<a href="#">Marcar todas como visualizadas</a>
							<a href="#">Configurações</a>
						</div>

						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar62-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="/assets/site/img/avatar63-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="/assets/site/img/avatar64-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-comments-post-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</span>

								<div class="comment-photo">
									<img src="/assets/site/img/comment-photo1.jpg" alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar65-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="/assets/site/img/avatar66-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-heart-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/assets/site/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>
						</ul>

						<a href="#" class="view-all bg-primary">Ver todas notificações</a>
					</div>

				</div>

				<div class="tab-pane " id="search" role="tabpanel">


					<form class="search-bar w-search notification-list friend-requests">
						<div class="form-group with-button">
							<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
						</div>
					</form>


				</div>

			</div>
			<!-- ... end  Tab panes -->
		</header>

		<!-- ... end Responsive Header-BP -->
		<div class="header-spacer"></div>
	</div>
</template>

<script>
export default{

};
</script>