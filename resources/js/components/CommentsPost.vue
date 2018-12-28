<template >
	<div>
		<!-- Post -->
		<div class="ui-block">
			<article class="hentry post has-post-thumbnail">

				<div class="post__author author vcard inline-items">
					<img :src="'storage/users/'+post.user.img_profile" alt="Foto de perfil">
					<div class="author-date">
						<a class="h6 post__author-name fn" href="#">{{post.user.name}}</a>
						<div class="post__date">
							<time class="published" id="datetime" datetime="post.created_at">
								<small>{{formatDate(post.created_at)}}</small>
							</time>
						</div>
					</div>


					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<!-- <li>
								<a href="#" v-on:click="setOnEditPost(post)" data-toggle="modal" data-target="#editPost">Editar</a>
							</li> -->
							<li v-if="user_auth.id == post.user.id">
								<a href="">Deletar</a>
							</li>
							<li>
								<a href="#">Desligar notificações</a>
							</li>
						</ul>
					</div>

				</div>

				<p>{{post.text}}</p>
				<div class="post-additional-info inline-items">

					<a href="javascript:void(0)"  class="post-add-icon inline-items" @click="likePost()" >
						<svg class="olymp-heart-icon" :style="defineColorLike(post.likes)"><use  xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon" ></use></svg>
						<span>{{post.likes.length}}</span>
					</a>

					<ul class="friends-harmonic">
						<li v-for="like in post.likes">
							<a href="#">
								<img :src="'storage/users/'+like.user.img_profile" alt="friend">
							</a>
						</li>
					</ul>
					
					<!-- Se 1 pessoa tiver curtido -->
					<div class="names-people-likes" v-if="post.likes.length == 1" v-for="like in post.likes">
						<a href="#">{{like.user.name}}</a>
						<br> curtiu a publicação
					</div>
					<!-- Se 2 pessoas tiverem curtido -->
					<div class="names-people-likes" v-if="post.likes.length == 2">
						<a href="#">{{getFirstName(post.likes[0].user.name)}}</a> e <a href="#">{{getFirstName(post.likes[1].user.name)}} </a><br> curtiram a publicação
					</div>
					<!-- Se 3 ou + pessoas tiverem curtido -->
					<!-- <div class="names-people-likes" v-if="post.likes.length > 2">
						<a href="#">{{post.likes.user.name}}</a>, <a href="#">Lucas</a> and
						<br>47 more liked this
					</div> -->					

					<div  class="comments-shared">
						<a href="#" class="post-add-icon inline-items"  data-toggle="modal" data-target="#commentPost">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span><!-- {{this.post.count_comments}} --></span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							<span>2</span>
						</a>
					</div>


				</div>

				<div  class="control-block-button post-control-button">

					<span >
						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
						</a>
					</span>
				</div>

			</article>
			<!-- Comentários do post -->
			<div class="ui-block" >

				<ul  class="comments-list style-2" style="max-height:400px;overflow:overlay" >
					<li  v-for="comment in post.comments"  class="comment-item" v-if="post.comments">
						<div class="post__author author vcard">
							<img v-if="comment.user.img_profile" :src="'storage/users/'+comment.user.img_profile" alt="author">
							<img v-else="comment.user.img_profile" src="img/avatar1.jpg" alt="author">
							<a class="h6 post__author-name fn" href="#">{{comment.user.name}}</a>
							<div class="author-date" style="overflow:visible!important">
								<p><a class="h6 post__author-name fn" href="#">{{comment.name}}</a> {{comment.text}}</p>
								<a href="javascript:void(0)" class="post-add-icon inline-items" @click="likeComment(comment)" >
									<svg class="olymp-heart-icon" :style="defineColorLike(comment.likes)"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>{{comment.likes.length}}</span>
								</a>

								<a href="#" class="reply">Responder</a>

								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										{{formatDate(comment.created_at)}}
									</time>
								</div>

								<!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a> -->
								<div  class="more" style="float:right;position:none"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<ul class="more-dropdown" style="top:auto!important;bottom:0!important">
										<li v-if="user_auth.id == comment.user.id">
											<a href="#" data-toggle="modal" data-target="#editPost">Editar</a>
										</li>
										<li v-if="user_auth.id == comment.user.id">
											<a href="javascript:void(0)" @click="delComment(comment)">Deletar</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</li>
				</ul>
				<!-- FIM Comentários do post -->

				<!-- Formulário para comentar no post -->
				<form class="comment-form inline-items" action="#" id="formComment" method="post" @submit.prevent="submitComment()">

					<div class="post__author author vcard inline-items">
						<slot name="img_profile"></slot>
						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder="" name="text" v-model="comment.text"></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message">
									<svg class="olymp-camera-icon">
										<use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<button class="btn btn-default" type="submit">Comentar</button>
				</form>
				<!-- Fim formulário para comentar no post -->
			</div>

		</div>
	</div>
	<!-- Fim Post -->	
</div>
</template>
<script>
export default{
	props:['action','method','user_auth'],
	data: function(){
		return{
			post:{
				user:{},
				likes:{}
			},
			comment:{
				text:''
			}
		}
	},
	mounted:function(){
		this.$store.watch(this.$store.getters.getOnCommentPost,post=>{
			this.post = post;
		})
		$('#commentPost').on('hidden.bs.modal',this.setPosts);
	},
	computed:{

	},
	methods:{
		setPosts(){
			axios.get('/post/myposts').then(res =>{
				this.$store.commit('setPosts',res.data);
			});
		},
		formatDate: function(date){
			moment.locale('pt-br');
			return moment(date, "YYYYMMDD H:m").fromNow();
		},
		getFirstName(name){
			return name.split(' ').slice(0, 1).join(' ');
		},
		likePost: function(){
			axios('post/like/'+this.post.id).
			then(res =>{
				//Percorrer response dos posts do usuário e encontrar o que está sendo usado
				//no modal de comentários para atualiza-lo
				for (var i = 0; i < res.data.length; i++) {
					if(res.data[i]['id'] == this.post.id){
						this.$store.commit('setOnCommentPost',res.data[i]);
					}
				}
				//Atualizando o post do feed(fora do modal)
				this.$store.commit('setPosts',res.data);
			});
		},
		likeComment:function(comment){
			axios('comments/like/'+comment.id+'/'+this.post.id).
			then(res =>{
				this.$store.commit('setOnCommentPost',res.data);
			});			
		},
		submitComment(event){
			if(this.comment != ''){
				var retorno = "";
				$.ajax({
					type: "POST",
					url: 'comments/'+this.post.id,
					async:false,
					data: {text:this.comment.text},
					success: function(data){
						retorno = JSON.parse(data);
					},
					error:function(data){
						//erro aqui
					}
				});
				this.$store.commit('setOnCommentPost',retorno);
				this.comment.text = '';
			}
		},
		delComment(comment){
			axios.get('comments/delete/'+this.post.id+'/'+comment.id).
			then(res => {
				this.$store.commit('setOnCommentPost',res.data);
				var posts = this.$store.state.posts;
				var index = 0;
				$.each(posts, function(key,value){
					if(value.id == res.data.id){
						posts[key] == res.data;
						index = key;
					}
				});
				this.$store.commit('setPosts',posts);
			});
		},
		defineColorLike(likes){
			var color = '';
			var user_auth = this.user_auth.id;
			//Percorrer os likes do post ou do comentário em questão e
			//verificar se o usuário autenticado deu like, caso true,
			//deixar o botão de like colorido
			$.each(likes,function(key, value){
				if(value.users_id == user_auth){
					color = "fill: #ff5e3a";
				}
			});
			return color;
		}
	}
};
</script>