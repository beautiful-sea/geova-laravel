<template>
	<div>
		<div class="ui-block">

			<article class="hentry post has-post-thumbnail">

				<div class="post__author author vcard inline-items">
					<img src='/img/avatar1.jpg' alt="Foto de perfil">

					<div class="author-date">
						<a class="h6 post__author-name fn" href="#">Lindomar</a>
						<div class="post__date">
							<time class="published" id="" datetime="2004-07-24T18:18">
								<slot name="created_at"></slot>
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="/home/update">Editar</a>
							</li>
							<li>
								<a href="#">Deletar</a>
							</li>
							<li>
								<a href="#">Desligar notificações</a>
							</li>
						</ul>
					</div>

				</div>

				<slot name="text"></slot>
				

				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
						<span>22</span>
					</a>

					<ul class="friends-harmonic">
						<li>
							<a href="#">
								<img src="img/friend-harmonic9.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic10.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic7.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic8.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic11.jpg" alt="friend">
							</a>
						</li>
					</ul>

					<div class="names-people-likes">
						<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
						<br>47 more liked this
					</div>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>5</span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							<span>2</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
					</a>

				</div>

			</article>
		</div>		
	</div>
</template>
<script>
export default{
	props:['text'],
	mounted:function(){
		console.log(this.text);
	}
};
</script>