<template>
	
<div>
	<ul >
		                <div class="card-header" style="text-align: center ; font-size: 20px;">EXPENSE LIST</div>
		<li v-for=" ex in exp"> 

<div class="exp" v-show="id!=ex.id">
	<div class="name">
		<label>expense : </label>{{ex.name}}
	</div>
<div class="space"></div>
	<div class="rs">
		<label>Rupee:</label> {{ex.rs}}
	</div>

<div class="bt" >
	<div style="display: flex;">
<button class="btn btn-primary" style="flex:1 ;margin: 5px 0px;" @click="edit(ex)" >edit </button>
<div class="space"></div>
<button class="btn btn-danger" style="flex:1; margin: 5px 0px;" @click="del(ex)" > delete</button>
	</div>
</div>
</div>
<div class="exp" v-show="id==ex.id" >
	<div class="name">
		<label>expense: </label>
		<input type="text" name="" v-model='ex.name'> 
	</div>
<div class="space"></div>
	<div class="rs">
		<label>Rupee:</label> 
		<input type="text" name="" v-model= 'ex.rs'>
	</div>

<div class="bt" >
	<button class="btn btn-primary " style=" margin: 5px 0px;" @click="okey(ex)">done</button>
</div>
</div>



</li>
	
	</ul>
	
</div>

</template>
<script type="text/javascript">
	export default{
		props:{
   'exp':''
		},
	data(){
		return {
			
			'id':''
		};
	},
methods:{
	 edit(ex){
     
      this.id=ex.id;
    
	 },
	 del(ex){
axios.get('/del/'+ex.id).then((response)=>{});
this.$emit('addd',name);
	 },
	 okey(ex){
	 	axios.post('/edit',{
	 		name:ex.name,
	 		rs:ex.rs,
	 		id:ex.id
	 	}).then((response)=>{});
	 	this.id='';
	 	this.$emit('addd',name);

	 }
} 

	}


</script>
<style type="text/css" scoped> 
	
ul{
	list-style-type: none;
	padding: 0px;
}
li{ 
	border: 0.5px solid lightgrey;
	border-collapse: collapse;
	font-size: 20px;
}
label{ padding: 10px;
	padding-bottom: 5px;
	padding-top: 5px;
	font-size: 20px;
}
.exp{
	display: flex;

}
.name {
	flex: 1;
}
 .rs{flex:1;}
 .space {
 	flex: 0.1;
 }
 .bt{ 
 	 flex: 0.5;
 }
 input{
 	max-width:150px;
 }
</style>