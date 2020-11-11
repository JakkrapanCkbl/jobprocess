<template>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Job</div>
                        <div class="card-body">
                             <form action="/jobs2">
                                <div class="form-group">
                                    <label>code:</label>
                                    <input type="text" class="form-control" v-model="jobcode">
                                </div>
                                <div class="form-group">
                                    <label>project name:</label>
                                    <input type="text" class="form-control" v-model="projectname">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" v-on:click="updateJob()">Update</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div> 
</div>
</template>

<script>
    export default {
        props:['id'],
        data() {
           return{
                jobcode:'',
                projectname:''
           }
        },mounted(){
            axios.get('/api/jobs2/'+this.id).then(response=>{
                var job=response.data;
                this.jobcode=job.jobcode;
                this.projectname=job.projectname;
            });
        },methods:{
            updateJob(){
                axios.put('/api/jobs2/'+this.id,{
                    jobcode:this.jobcode,
                    projectname:this.projectname
                });
            }
        }
    }
</script>