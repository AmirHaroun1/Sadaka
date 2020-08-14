<template>
<!--::Campaign part start::-->
<section class="passion_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_tittle float-right">
                    <h2>تبرع لحملات قائمة</h2>
                </div>
            </div>
        </div>

        <div class="row text-center">
        <campaign-card v-for=" campaign in Campaigns" :campaign="campaign" :key="campaign.id"></campaign-card>
            <div class="form-group col-md-12 justify-content-center">
                <button v-if="NextUrl" @click="fetch(NextUrl)" class="btn btn-outline-info btn_1" style="cursor:pointer">عرض المزيد من الحملات</button>
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
        },


    }
</script>
