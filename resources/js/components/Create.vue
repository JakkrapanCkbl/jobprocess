<template>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new Job</div>
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
                                    <button class="btn btn-primary" v-on:click="addNewJob()">Save</button>
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
        data() {
           return{
                jobcode:'',
                projectname:''
           }
        },
        methods:{
            addNewJob(){
                axios.post('/api/jobs2',{
                jobcode:this.jobcode,
                projectname:this.projectname
                });
            }
        }
    }
</script>