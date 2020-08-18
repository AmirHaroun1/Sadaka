<template>

        <div v-if="this.chooseProject" id="chooseProject" class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="header float-right">
                        اختر نوع مشروع لتوجه تبرعات إليه </h2>
                </div>

                <div v-if="this.projects.length !== 0" class="col-md-12 text-center mt-4">
                    <carousel  :items="3" :nav="false"  :stagePadding="0" :rewind="true" :loop="true" :autoHeight="true"  >

                        <div  @click="setChoosenProject(project)" v-for="project in projects" class="single-home-passion text-center">
                            <div class="card" style="cursor: pointer;height:200px;background-color:#00c424" >

                                <div class="card-body ">
                                    <a>
                                        <h5 class="card-title text-white ">{{project.name}}</h5>
                                        <p class="text-white">{{project.description}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <template slot="next"><button class="btn btn-outline-info btn_1"  style="cursor:pointer">التالي</button></template>

                    </carousel>

                </div>
            </div>
        </div>

        <div v-else-if="this.chooseCampaign" id="chooseCampaign" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>hello there</h1>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        data()
        {
            return{
                projects:[],
                selectedProject : null,
                chooseProject: true,
                chooseCampaign:false,
                EnterCampaignDetails :false,
                shareCampaign:false,
            }
        },

        created() {
            this.fetch('/Projects');
        },
        methods:
            {
                setChoosenProject(project)
                {
                  this.selectedProject = project;
                    this.chooseProject = false;
                    this.chooseCampaign = true;
                },
                fetch(endpoint){
                    axios.get(endpoint)
                        .then(({data})=>{
                            this.projects.push(...data.data)
                        })

                },

            },

    }

</script>


