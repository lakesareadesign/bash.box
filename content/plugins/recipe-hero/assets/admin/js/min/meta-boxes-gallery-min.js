jQuery(function($){function e(){$("#tiptip_holder").removeAttr("style"),$("#tiptip_arrow").removeAttr("style"),$(".tips").tipTip({attribute:"data-tip",fadeIn:50,fadeOut:50,delay:200})}var t,a=$("#recipe_image_gallery"),i=$("#recipe_images_container ul.recipe_images");jQuery(".add_recipe_images").on("click","a",function(e){var r=$(this),l=a.val();return e.preventDefault(),t?void t.open():(t=wp.media.frames.recipe_gallery=wp.media({title:r.data("choose"),button:{text:r.data("update")},states:[new wp.media.controller.Library({title:r.data("choose"),filterable:"all",multiple:!0})]}),t.on("select",function(){var e=t.state().get("selection");e.map(function(e){e=e.toJSON(),e.id&&(l=l?l+","+e.id:e.id,i.append('					<li class="image" data-attachment_id="'+e.id+'">						<img src="'+e.sizes.thumbnail.url+'" />						<ul class="actions">							<li><a href="#" class="delete" title="'+r.data("delete")+'">'+r.data("text")+"</a></li>						</ul>					</li>"))}),a.val(l)}),void t.open())}),i.sortable({items:"li.image",cursor:"move",scrollSensitivity:40,forcePlaceholderSize:!0,forceHelperSize:!1,helper:"clone",opacity:.65,placeholder:"rh-metabox-sortable-placeholder",start:function(e,t){t.item.css("background-color","#f6f6f6")},stop:function(e,t){t.item.removeAttr("style")},update:function(e,t){var i="";$("#recipe_images_container ul li.image").css("cursor","default").each(function(){var e=jQuery(this).attr("data-attachment_id");i=i+e+","}),a.val(i)}}),$("#recipe_images_container").on("click","a.delete",function(){$(this).closest("li.image").remove();var t="";return $("#recipe_images_container ul li.image").css("cursor","default").each(function(){var e=jQuery(this).attr("data-attachment_id");t=t+e+","}),a.val(t),e(),!1})});