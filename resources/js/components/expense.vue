<template>
	

	<div>
		
			<div class="add" >
  <div class="form-group name" >
    <label for="exampleInputEmail1">Expense's Name</label>
    <input type="text" class="form-control"  v-model="name" required>
   </div>
   <div class="space"> </div>
  <div class="form-group rs">
    <label >Rs</label>
    <input type="text" class="form-control" v-model="rs" required>
  </div>
  <div class="space1"> </div>
  <button type="submit" class="btn btn-primary" @click="submit()" >Add</button>
 </div>
  

	</div>
</template>
<script type="text/javascript">
	export default{
		data(){
   return{
    'name':"",
    'rs':""
		
   };
	},
	methods:{
		submit(){
			axios.post('/store',{
				name:this.name,
				rs:this.rs
			}).then((respons)=>{
				this.name='';
				this.rs='';

			});
		this.$emit('addd',name);
		}
	}
}
</script>

<style type="text/css">
	.add{
		display: flex;

	}
	.name{
		flex: 1;
	}
	.rs{flex: 1;}
	.space{ flex:0.2; }
	.space1{flex: 0.1;}
	.btn{ flex:0.5;
	height: 35px;
	margin: 20px;
margin-top: 30px;}
</style>