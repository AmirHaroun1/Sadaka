<template>
<!--::Campaign part start::-->
<section class="passion_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section_tittle float-right">
                    <form @submit.prevent="search('/search/Campaigns/'+searchName)" method="get" class="form-inline md-form form-sm mt-0">
                        <input v-model="searchName" class="form-control  ml-3 w-75 border-right-0 border-left-0 border-top-0" type="text" placeholder="أبحث عن حملة قائمة" aria-label="Search">
                        <h3 class="ml-2">
                            <a @click="search('search/Campaigns/'+searchName)"> <i style="cursor: pointer" class="fa fa-search" aria-hidden="true"></i></a>
                        </h3>
                    </form>
                    <h4 v-if="searchedCampaigns.length > 0 " class="mt-3" style="cursor: pointer" @click="searchedCampaigns.splice(0,searchedCampaigns.length)">
                       مسح نتائج البحث
                        <i class="fa fa-times"></i>

                    </h4>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="section_tittle float-right">
                    <h2>تبرع لحملات قائمة</h2>
                </div>
            </div>
        </div>
        <div class="row text-center" style="margin-top: -90px">


            <campaign-card v-show="searchedCampaigns.length == 0" v-for="campaign in Campaigns" :campaign="campaign" :key="campaign.id"></campaign-card>

            <campaign-card v-show="searchedCampaigns.length !==0" v-for="campaign in searchedCampaigns" :campaign="campaign" :key="campaign.id"></campaign-card>




            <div class="form-group col-md-12 justify-content-center">
                <button v-if="NextUrl && searchedCampaigns.length == 0" @click="fetch(NextUrl)" class="btn btn-outline-info btn_1" style="cursor:pointer">عرض المزيد من الحملات</button>
                <p v-else>لا يوجد المزيد من الحملات</p>
            </div>
        </div>
    </div>
</section>
<!--::Campaign part end::-->
</template>
<script>
    export default {
        data()
        {
            return{
                Campaigns:[],
                NextUrl : null,
                searchName:'',
                searchedCampaigns :[],
            }
        },
        created() {
                this.fetch('/Campaigns');
            },
            methods:
                {
                    fetch(endpoint){
                        axios.get(endpoint)
                            .then(({data})=>{
                                this.Campaigns.push(...data.data);
                                this.NextUrl = data.next_page_url;

                            })
                    },
            search(endpoint){
                axios.get(endpoint)
                    .then(({data})=>{
                        this.searchedCampaigns.length = 0;
                        this.searchedCampaigns.push(...data.data);
                    })
            },


        },


    }
</script>
