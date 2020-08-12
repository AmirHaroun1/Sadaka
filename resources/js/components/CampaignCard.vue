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
              }
            },

    }
</script>
