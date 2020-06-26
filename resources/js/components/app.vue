<template>
	<div>
      
<expense @addd ="get"></expense>
<explist :exp='exp' @addd ="get"></explist>
</div>
</template>
<script type="text/javascript">
	import expense from './expense';
	import explist from './explist';
	export default{

data(){
			return {
				'exp':{
					type:Array,
					default:[]
				}
			};
		},
			mounted(){
   axios.get('/get').then((response)=>{
   	this.exp=response.data;
   });

		
   },
   methods:{
   	get(){
   		  axios.get('/get').then((response)=>{
   	this.exp=response.data;
   });
   	}
   }
	}
	</script>