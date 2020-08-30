<template>
    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
        <div class="single-home-passion text-center">

            <div @click="show()"  class="card" style="cursor: pointer">
                <img width="100%" height="150px" :src="campaign.photo" class=" card-img-top img-responsive" alt="CampaignImage">
                <div class="card-body">

                    <div id="projectInfo" class="row mb-3">
                        <div class="col-md-4">
                            <img class="img-responsive" height="50px" width="50px" :src="campaign.project.image">
                        </div>
                        <div class="col-md-8">
                            <h6 class="greenText">{{campaign.project.name}}</h6>

                        </div>
                    </div>

                    <a>
                        <h5 class="card-title ">{{campaign.name}}</h5>
                    </a>

                    <p class="font-weight-bold">

                        <span class="collected">
                            ج . م

                        {{getCollectedMoney()}}
                        </span>
                        /

                        {{campaign.project.objective}}
                        ج . م

                    </p>
                    <label>
                        عدد المتبرعين :
                        {{campaign.donations_count}}
                    </label>
                    <div class="progress my-3">

                        <div class="progress-bar bg-success" role="progressbar" :style="CampaignPercentage" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {ceil} from "lodash";

    export default {
        props : ['campaign'],
        data()  {
            return{
                campaign : this.campaign,

                CampaignPercentage :{
                    width:  ceil((this.campaign.CollectedAmount / this.campaign.project.objective) *100)+'%',
                }
            }
        },
        methods :
            {

              show()
              {
                  return alert(this.CampaignPercentage.width)
              },
                getCollectedMoney()
                {
                    if(this.campaign.CollectedAmount == null)
                    {
                        return 0;
                    }
                    else {
                        return  this.campaign.CollectedAmount;
                    }
                },
            },

    }
</script>
