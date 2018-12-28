<template>
	<div>
		<div class="ui-block">

			<article class="hentry post has-post-thumbnail">
				<form :action="'/post/'+post.id" method="post">
					<div v-if="user" class="post__author author vcard inline-items">
						<img :src="'storage/users/'+user.img_profile" alt="Foto de perfil">
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">{{user.name}}</a>
							<div class="post__date">
								<time class="published" id="datetime" :datetime="post.created_at" pubdate>
									{{formatedDate}}
								</time>
							</div>
						</div>

					</div>
					<textarea class="form-control" :value.props="post.text" name="text"></textarea>

					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" :value="token">
					<div class="control-block-button post-control-button">
						<button type="submit" class="btn btn-primary" >Salvar</button>
					</div>
				</form>
			</article>
			<slot name="commentsposts"></slot>
		</div>
	</div>
</template>
<script>
export default{
	props:['token'],
	computed:{
		post(){
			return this.$store.state.onEditPost
		},
		user(){
			return this.$store.state.onEditPost.user
		},
		formatedDate(){
			moment.locale('pt-br');
			return moment(this.post.created_at, "YYYYMMDD H:m").fromNow();
		}
	}
};
</script>