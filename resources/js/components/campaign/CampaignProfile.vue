<template>
    <div>
        <section  class="CampaignProfile section_padding">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold float-right">
                            حملة تبرع لصالحـ
                            <span class="greenText">
                            {{campaign.name}}
                        </span>
                        </h3>
                        <br>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-sm-12  pt-4 text-center  ">
                        <img class="charity-img" :src="campaign.image">
                    </div>
                    <div class="col-md-6 col-sm-12  float-right">

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="font-weight-bold float-right pt-5 pb-3   ">
                                            تم تحصيل

                                    <span class="collected">
                                        {{getCollectedMoney()}}
                                    </span>
                                    <span class="collected">
                                        ج . م
                                    </span>
                                    من
                                    {{campaign.project.objective}}
                                    ج . م
                                </h3>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 offset-md-6 offset-lg-6">
                                <div class="progress ">
                                    <div class="progress-bar bg-success" role="progressbar" :style="CampaignPercentage" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4 class="float-right pt-4 pl-2" style="color:#717171"> لصالح </h4>
                                <h4 class="float-right pt-4" >{{campaign.project.name}}</h4>
                            </div>
                            <div class="col-md-12 " style="background-color:#FBF8F6;border: 1px dashed #dee2e6 !important">
                                <h5 class="float-right p-1 mt-2">
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>

                                    التبرعات تذهب بشكل مباشر للجمعيات الخيرية
                                </h5>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-4 col-sm-12 pt-5 ">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 py-3 text-center float-md-left ">
                                <button v-if="IsAuth" type="button"  data-toggle="modal" data-target="#DonationModel" style="width:190px; font-size: 22px" class="genric-btn primary e-large">
                                    <i class="fa fa-heart"></i>
                                    تبرع الأن
                                </button>
                                <a v-else type="button" :href="route('login')" style="width:190px; font-size: 22px" class="genric-btn primary e-large">
                                    <i class="fa fa-heart"></i>
                                    تبرع الأن
                                </a>

                                <!-- Donation Modal -->
                                <div class="modal fade pt-5" id="DonationModel" style="z-index: 10000" tabindex="-1" role="dialog" aria-labelledby="DonationModel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 v-if="!ShowPaymentForm" class="font-weight-bold float-right">
                                                     تبرع لصالحـ
                                                    <span class="greenText">
                                                        {{campaign.name}}
                                                    </span>
                                                </h3>
                                                <h3 v-else class="font-weight-bold float-right">
                                                    متابعة عملية الدفع
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div v-if="!ShowPaymentForm" class="donationDetails">
                                                            <form  @submit.prevent="CheckOut()" class="form-group">
                                                                <div class="col-md-12 ">
                                                                    <label class="label float-right">قيمة التبرع</label>
                                                                    <input required v-model="DonationAmount" class="form-control" type="number">
                                                                </div>
                                                                <div class="col-md-12 pt-2 ">
                                                                    <label class="label float-right">كلمة للمتوفى</label>
                                                                    <textarea v-model="DonationWord" class="form-control"></textarea>
                                                                </div>

                                                                <button type="submit" class="btn_1 text-white bg-green text-center mt-3 " style="background-color: rgb(0, 196, 36); cursor: pointer;">التالي</button>

                                                            </form>

                                                        </div>
                                                        <div v-else class="cardDetails">
                                                            <form  :action="ComputedPaymentURL" method="POST">
                                                                <input name="paymentBrand" value="VISA" hidden>
                                                                <div class="number col-md-12 pt-3">
                                                                    <label class="float-right">Card Number</label>
                                                                    <input required class="form-control" name="card.number">
                                                                </div>
                                                                <div class="expiration col-md-6 pt-3">
                                                                    <label class="float-right">Expiry Month</label>
                                                                    <select  class="form-control"  name="card.expiryMonth" required>
                                                                        <option value="">MM</option>
                                                                        <option value="01">01
                                                                        </option>
                                                                        <option value="02">02</option>
                                                                        <option value="03">03</option>
                                                                        <option value="04">04</option>
                                                                        <option value="05">05</option>
                                                                        <option value="06">06</option>
                                                                        <option value="07">07</option>
                                                                        <option value="08">08</option>
                                                                        <option value="09">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                                <div class="expiration col-md-6 pt-3">
                                                                    <label class="float-right">Expiry Year</label>
                                                                    <select  class="form-control" name="card.expiryYear" aria-labelledby="label-expiryYear"  required>
                                                                        <option value="">YY</option>
                                                                        <option value="2020">20</option>
                                                                        <option value="2021">21</option><option value="2022">22</option><option value="2023">23</option><option value="2024">24</option><option value="2025">25</option><option value="2026">26</option><option value="2027">27</option><option value="2028">28</option><option value="2029">29</option><option value="2030">30</option><option value="2031">31</option><option value="2032">32</option><option value="2033">33</option><option value="2034">34</option><option value="2035">35</option><option value="2036">36</option><option value="2037">37</option><option value="2038">38</option><option value="2039">39</option><option value="2040">40</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12 pt-3">
                                                                    <label class="float-right">Card Holder</label>
                                                                    <input required class="form-control" name="card.holder">
                                                                </div>
                                                                <div class="cvc col-md-12 pt-3">
                                                                    <label class="float-right">Security Code (3 Digits on back of your card)</label>
                                                                    <input required class="form-control" name="card.cvv" v-cardformat:formatCardCVC>
                                                                </div>
                                                                <input type="text" hidden name="shopperResultUrl" :value="RedirectionURLAfterPayment">


                                                                <button type="submit" class="btn_1 text-white bg-green text-center mt-3 " style="background-color: rgb(0, 196, 36); cursor: pointer;">اتمام عملية الدفع</button>
                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">غلق</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            </div>
                            <div class="col-md-12 col-sm-12 text-center float-md-left ">
                                <a style="width:190px; font-size: 18px" class="genric-btn primary-border  e-large " :href="ComputedShareURL">
                                    <i class="fa fa-share-alt"></i>
                                    انشر الحملة
                                </a>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </section>

        <section class="DonorsSection py-5" style="background-color: rgb(251, 248, 246);">
            <div class="container ">
                <div class="row ">
                   <div class="col-md-7 ">
                       <div class="row py-4 px-3 border">
                           <div class="col-md-3 col-sm-12 ">
                               <img height="90px" width="100px" :src="campaign.project.image" class="float-right"/>
                           </div>
                           <div class="col-md-9">
                               <h4 class="font-weight-bold float-right">
                                   {{campaign.project.name}}
                               </h4>
                               <h6 class="float-right text-right">
                                   {{campaign.project.description}}
                               </h6>
                           </div>
                       </div>
                   </div>
                    <div class="col-md-5 " >
                        <div class="border p-3" style="background-color:white">
                            <div class="d-flex justify-content-between">
                                <span class="fz16  fw500"> المتبرعون</span>
                                <span class=" fz12 fzcmutedc  fw500">  تبرعات من {{campaign.donations_count}} شخص</span>
                            </div>
                            <p class="border m-1 my-2 ">

                            </p>

                            <div v-for="Donor in Donors" class="py-2" style="border-bottom:2px dashed rgb(222, 226, 230) !important">
                                <div  class="commentdonor row m-0 my-2 py-2">
                                    <div  class="col-2 p-0 text-center">
                                        <img :src="Donor.image" alt="iconmoreinfo" style="width: 40px; height: 40px; border-radius: 50%;">
                                    </div>
                                    <div class="col-md-5">
                                        <p class="float-right">
                                            {{Donor.name}}
                                        </p>

                                    </div>
                                   <div class="col-md-5 ">
                                       <span class="">{{Donor.pivot.amount}}</span>
                                       <span class="">
                                        ج.م</span>
                                   </div>

                                </div>
                                <div class="row m-0 ">
                                     <div class="col-md-12">
                                         <p class="float-right text-right">
                                             {{Donor.pivot.comment}}
                                         </p>
                                     </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


</template>

<script>
    import {ceil} from "lodash";
    import VueCardFormat from "vue-credit-card-validation";

    export default {
        name: "CampaignProfile.vue",
        props : {
            'IsAuth' : Boolean,
            'campaign':Object,
        },
        data()  {
            return{
                Donors : this.campaign.donations,
                DonationAmount : '',
                DonationWord : '',
                ShowPaymentForm: false,
                CheckOutID:'',
                CampaignPercentage :{
                    width:  ceil((this.campaign.CollectedAmount / this.campaign.project.objective) *100)+'%',
                }

            }
        },
        methods :
            {
                getCollectedMoney()
                {
                    if(!this.campaign.CollectedAmount)
                    {
                        return 0;
                    }
                    else {
                        return  this.campaign.CollectedAmount;
                    }
                },
                CheckOut()
                {
                    axios.get('/checkout/'+this.DonationAmount)
                    .then(({data})=>{
                        if(data.result.description != "successfully created checkout")
                        {
                            alert('something went wrong message');
                        }
                        else{
                            this.CheckOutID = data.id;
                            this.ShowPaymentForm = true;
                        }

                    });
                }
            },
        computed: {
            ComputedPaymentURL: function () {
                return "https://test.oppwa.com/v1/checkouts/"+this.CheckOutID+"/payment";
            },
            RedirectionURLAfterPayment: function () {
                return route('campaign.show',[
                    this.campaign.id,this.campaign.name,this.DonationAmount,this.DonationWord
                ]);
            },
            ComputedShareURL:function(){
                return "https://www.facebook.com/sharer/sharer.php?u="+window.location.href
            },
        }
    }
</script>

<style scoped>

</style>
