define(["scripts/upfront/inline-panels/dialog-control"],function(e){var t=e.extend({initialize:function(e){this.options=e||{},this.constructor.__super__.initialize.call(this,e),this.icon=this.options.icon,this.tooltip=this.options.tooltip,this.id=this.options.id,this.view=new Upfront.Views.Editor.LinkPanel({linkUrl:this.options.linkUrl,linkType:this.options.linkType,linkTarget:this.options.linkTarget,button:!1}),this.listenTo(this.view,"change change:target",function(e){this.trigger("change",e)})},onClickOk:function(e){e.preventDefault(),this.view.model.get("type")=="lightbox"&&this.view.$el.find(".js-ulinkpanel-lightbox-input").val()!=""&&this.view.createLightBox(),this.close()}});return t});