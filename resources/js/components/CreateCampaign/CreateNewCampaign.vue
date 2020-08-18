<template>
    <form>

        <div v-show="chooseCampaign" id="chooseCampaign" class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="header float-right"> ابدأ حملة تبرعات </h2>

                </div>

                <div v-if="this.projects.length !== 0" class="col-md-12 text-center mt-4">
                    <carousel  :items="3" :nav="false"  :stagePadding="0" :rewind="true" :loop="true" :autoHeight="true"  >

                        <div v-for="project in projects" class="single-home-passion text-center">
                            <div class="card" style="cursor: pointer;height:200px;background-color:#00c424" >

                                <div class="card-body ">
                                    <a>
                                        <h5 class="card-title text-white ">{{project.name}}</h5>
                                        <p class="text-white">{{project.description}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <template slot="next"><btn class="btn btn-outline-info btn_1"  style="cursor:pointer">التالي</btn></template>

                    </carousel>

                </div>
            </div>
        </div>

    </form>
</template>

<script>
    export default {
        data()
        {
            return{
                projects:[],
                chooseCampaign: true,
                EnterCampaignDetails :false,
                shareCampaign:false,
            }
        },

        created() {
            this.fetch('/Projects');
        },
        methods:
            {
                fetch(endpoint){
                    axios.get(endpoint)
                        .then(({data})=>{
                            this.projects.push(...data.data)
                        })

                },

            },

    }

</script>


