(function(){
	strz_Ajax.Control=function(){
		
	};
	strz_Ajax.Control.prototype={
		accessTable:[],
		setAccessTable:function(arr){
			for(var i in arr){
				this.accessTable.push(arr[i]);
			}
		},
		getAccessTable:function(){
			return this.accessTable;
		},
		readAccessTableCookie:function(){
			var roles=$.cookie('roles');
			roles=roles.split('~')[1];
			var rolesTable=roles.split(',');
			this.setAccessTable(rolesTable);
		},
		orders:{},
		setOrders:function(obj){
			this.orders=obj;
		},
		running:[],
		run:function(i){
			try{
				var content=new strz_Ajax[this.orders[i]];
				content.init();
				this.running.push(content);
			}catch(err){
				console.log('container for role: '+i+' not declared');
				//console.log(err);
			}
		},
		runAll:function(){
			var accessTable=this.getAccessTable();
			for(var i in accessTable){
				this.run(accessTable[i]);
			}
		}
	};
})();