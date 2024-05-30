<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">
			<% if $Thumbnail %>
				$Thumbnail.Convert('webp')
				<caption>Image converted to webp</caption>

				$Thumbnail.LazyLoad(false)
				<caption>Image eager loaded</caption>

				$Thumbnail.LazyLoad(false).Convert('webp')
				<caption>Image should be converted to webp and eager loaded</caption>
			<% end_if %>

			$Content
		</div>
	</article>
		$Form
		$CommentsForm
</div>