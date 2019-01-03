<template>
	<div >
		<div class="ui-block"  v-for="post in posts">
			
			<article class="hentry post has-post-thumbnail">

				<div class="post__author author vcard inline-items">
					<img :src="'storage/users/'+post.user.img_profile" alt="Foto de perfil">
					<div class="author-date">
						<a class="h6 post__author-name fn" href="#">{{post.user.name}}</a>
						<div class="post__date">
							<time class="published" id="datetime" :datetime="post.created_at">
								<small>{{formatDate(post.created_at)}}</small>
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#" v-on:click="setOnEditPost(post)" data-toggle="modal" data-target="#editPost">Editar</a>
							</li>
							<li>
								<a href="post/delete/">Deletar</a>
							</li>
							<li>
								<a href="#">Desligar notificações</a>
							</li>
						</ul>
					</div>

				</div>

				<p>{{post.text}}</p>
				<div class="post-additional-info inline-items">

					<a href="javascript:void(0)" @click="likePost(post.id)" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon" :style="defineColorLike(post.likes)"><use  xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
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
						<a href="#">{{formatName(post.likes[0].user.name)}}</a> e <a href="#">{{formatName(post.likes[1].user.name)}} </a><br> curtiram a publicação
					</div>


					<div  class="comments-shared">
						<a href="javascript:void(0)" class="post-add-icon inline-items" @click="setOnCommentPost(post)" >
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>{{post.comments.length}}</span>
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
			<slot name="commentsposts"></slot>
		</div>
	</div>
</template>
<script>
export default{
	props:['url','user','type'],
	data: function(){
		return{
			posts:{}
		}
	},
	created: function(){
		axios.get('/post/'+this.type).then(res =>{
			this.$store.commit('setPosts',res.data);
		});

		this.$store.watch(this.$store.getters.all_my_posts,posts=>{
			this.posts = posts;
		});
	},
	methods: {
		setPosts: function(){
			console.log('fechado');
			axios.get('/post/'+this.type).then(res =>{
				this.$store.commit('setPosts',res.data);
			});
		},
		setOnEditPost: function(post){
			this.$store.commit('setOnEditPost',post)
		},
		setOnCommentPost: function(post){
			axios.get('/post/'+this.type).then(res =>{
				this.$store.commit('setPosts',res.data);
			});
			this.$store.commit('setOnCommentPost',post);
			$("#commentPost").modal('show');
		},
		formatDate: function(date){
			moment.locale('pt-br');
			return moment(date, "YYYYMMDD H:m").fromNow();
		},
		formatName(name){
			return name.split(' ').slice(0, 1).join(' ');
		},
		likePost: function(post){
			axios('post/'+this.type+'/like/'+post).
			then(res =>{
				this.$store.commit('setPosts',res.data);
				this.posts = this.$store.getters.all_my_posts;
			})
		},
		defineColorLike: function(likes){
			var color = '';
			var user_auth = this.user.id;
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