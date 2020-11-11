<template>
    <div>   	
    	<div class="container">
            <div class="row">
                <h2>Work in progress</h2>
                
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>code</th>                
                        <th>project</th>
                        <th><a href="jobs2/create" class="btn btn-primary btn-sm">&nbsp;&nbsp;&nbsp;Add new job&nbsp;&nbsp;&nbsp;</a></th>              
                    </thead>
                    <tbody>
                    	<tr v-for="(job,index) in arrjob">
                    		<td>{{job.id}}</td>
                    		<td>{{job.jobcode}}</td>
                    		<td>{{job.projectname}}</td>
                    		<td>
                    			<!--<a :href="'/jobs2/'+ job.id +'/edit'">
                                    <button class="btn btn-success btn-sm">View</button>
                                </a>-->
                                <a :href="'/jobs2/'+ job.id +'/edit'">
                                    <button class="btn btn-success btn-sm">&nbsp;&nbsp;Edit&nbsp;&nbsp;</button>
                                </a>
                                <a href="javascript:;">
                                    <button class="btn btn-danger btn-sm" v-on:click="deleteJob(job.id,index)">Delete</button>
                                </a>

                            </td>
                    	</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getJobList();
        },
        methods:{
        	getJobList(){
        		axios.get('api/jobs2').then(response=>{
        			this.arrjob=response.data;
        		});
        	},
            deleteJob(id,index){
                axios.delete('api/jobs2/'+id).then(response=>{
                    this.arrjob.splice(index,1);
                });
            }
        },
        data(){
        	return {
        		arrjob:[],
        		job:{id:0,jobcode:'',projectname:''}
        	}
        }
    }
</script>