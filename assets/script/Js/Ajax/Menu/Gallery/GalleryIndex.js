(function(){
	strz_Ajax.GalleryIndex=function(){
		this.init();
	};
	strz_Ajax.GalleryIndex.prototype={
		run:function(){
			this.setAllowedPages(['/moj-klub/gallery', '/moj-klub/index.php/gallery']);
			if(this.isAllowedLocation(document.location.href)){


				/*Move it to suitable roles*/
				/*Callbacks it */
				/*Gallery delete photo confirm*/
				this.photos = [];
				//multiple photos so id is rel=confim_get and in this table every sender has unique id 
				for(var i=0; i<$('a[rel=confirm_get]').length; i++){
					var conf = new strz_Ajax.GetConfirm(i);
					conf.run();
					this.photos.push(conf);
				}
				
			//	this.actionConfirm = new strz_Ajax.GetConfirm('confirm_get');
			//	this.actionConfirm.run();
				
				
				this.addCallback({
					/*logout:{
						reference:this.logout,
						methods:{
							'run':[]
						}
					},
					formGetter:{
						reference:this.formGetter,
						methods:{
							'run':[]
						}
					}*/
				});
				
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.GalleryIndex, strz_Ajax.Anchor);
})();