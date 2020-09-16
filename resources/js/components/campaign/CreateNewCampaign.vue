<template>

        <div v-if="currentSection === 1" id="chooseCategory" class="container mt-3">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="header float-right">
                        اختر نوع الفئة لتوجه تبرعات إليه </h2>
                </div>

                <div v-if="this.categories.length !== 0" class="col-md-12 text-center mt-4">
                    <carousel  :items="6" :nav="false"  :stagePadding="0" :rewind="true" :loop="true" :autoHeight="true"  >

                        <div  v-for="category in categories" class="single-home-passion text-center">
                            <div @click="setChoosenCategory(category)"  class="card" style="cursor: pointer;background-color:#00c424" >

                                <div class="card-body ">
                                    <a>
                                        <h5 class="card-title text-white ">{{category.name}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <template slot="next"><button class="btn btn-outline-info btn_1"  style="cursor:pointer">التالي</button></template>

                    </carousel>

                </div>
            </div>
        </div>

        <div v-else-if="currentSection === 2" id="chooseCampaign" class="container mt-3">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="header float-right"> أختر نوع الحملة لتوجه تبرعات إليه</h2>
                </div>
                <div class="col-md-12">
                    <a  @click="currentSection = 1" class="btn btn-lg btn-outline-info btn_1 mt-3 float-right" style="cursor:pointer">
                        السابقة
                        <i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
            <div class="row ">
                <div v-for="project in projects"  class="col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2  justify-content-center text-center">
                    <div @click ="setChoosenProject(project)"  class="single-home-passion text-center">
                        <div class="card" style="cursor: pointer;">
                            <div class="card-body">
                                <div id="projectInfo" class="row mb-3">
                                    <div class="col-md-12">
                                        <img height="65px" width="65px" :src="project.image" class="img-responsive">
                                    </div>

                                </div>
                                <a>
                                    <h4 class="card-title  ">{{project.name}}</h4>
                                </a>
                                <p class="font-weight-bold"><span class="collected">
                                    ج . م

                                {{project.objective}}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div v-else-if="currentSection === 3" id="CampaignDetails" class="container mt-3 text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="header float-right">

                                أنشاء حملة لصالحـ جمعية
                                <span class="greenText">
                                        {{selectedProject.charity}}
                                 </span>
                            </h2>
                        </div>
                        <div class="col-md-12">
                            <a  @click="wantedProject ? currentSection = 1:currentSection = 2" class="btn btn-lg btn-outline-info btn_1 mt-1 float-right" style="cursor:pointer">
                                السابقة
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <hr>
                    </div>


                </div>

                <div class="col-md-5 col-sm-12">
                    <h2 class="header float-right">
                        هدف الحملة
                        <span class="greenText  p-4" style="border-style: dotted">
                                    {{selectedProject.objective}} ج.م
                        </span>

                    </h2>

                </div>


            </div>

            <form @submit.prevent="CreateCampaign()">
                <div id="DeadInfo" class="row form-group mt-5 border">
                    <div class="col-md-12 text-center my-4 ">
                        <h5>بيانات المتوفى</h5>
                    </div>



                    <div class="col-md-8  mt-2 mb-5 form-group">
                        <label for="DeadName" class="float-right">الاسم</label>
                        <input v-model="CampaignName" id="DeadName" class="form-control" required type="text">

                        <label for="campaign_description" class="float-right pt-4">نبذة عنه</label>
                        <textarea v-model="CampaignBrief" class="form-control" required id="campaign_description" rows="2" name="campaign_description"></textarea>
                    </div>
                    <div class="col-md-4 text-center">
                        <img v-if="this.CampaignImage" height = "160px" :src="this.CampaignImage">
                        <br>
                        <input @change="onImageChange" name="CampaignImage" style="display: none" ref="image-ref" id="imageInput"  type="file">
                        <br>
                        <a v-if="!this.CampaignImage" @click="uploadImage" class="btn btn-outline-info btn_1" style="cursor: pointer;">أختر صورة</a>
                        <a v-else @click="CampaignImage = null" class="btn btn-outline-info btn_4 mt-4 p-2" style="cursor: pointer;background-color: red;color: white">حذف</a>

                    </div>

                </div>

                <div v-if="this.errors" class="" role="alert">
                    <div v-for="(v, k) in this.errors" :key="k" class="alert alert-danger">
                        <p v-for="error in v" :key="error" class="text-sm">
                            {{ error }}
                        </p>
                    </div>
                </div>

                <div v-if="AuthUser.id" id="CreatorInfo" class="row form-group mt-5 border">
                    <div class="col-md-12 text-center my-4 ">
                        <h5>بيانات منشئ الحملة</h5>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="CreatorNumber" class="float-right">
                            رقم الهاتف
                        </label>
                        <input class="form-control" id="CreatorNumber" type="text"  disabled  :value="this.AuthUser.phone" >
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="CreatorName" class="float-right">الأسم</label>
                        <input type="text" disabled  :value="this.AuthUser.name" class="form-control" id="CreatorName">
                    </div>
                </div>
                <div v-else id="SignUp" class="row form-group mt-5 border">
                    <div class="col-md-12 text-center my-4 ">
                        <h5>بيانات منشئ الحملة</h5>
                        <h6>
                            لديك حساب بالفعل ؟
                            <a href="/login">اضغط هنا</a>

                        </h6>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="CreatorName" class="float-right">
                            البريد الالكترونى
                        </label>
                        <input v-model="NewUserEmail" type="email" class="form-control" id="CreatorEmail"  required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="float-right">الأسم</label>
                        <input v-model="NewUserName" class="form-control" required type="text" >
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="float-right">كلمة السر</label>
                        <input v-model="NewUserPassword" id="password" class="form-control" type="password" required autocomplete="new-password">
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="float-right " >
                            رقم الهاتف
                            <span v-if="!IsValidPhone" class="text-danger">رقم الهاتف يجب أن يبدأ بـ 01</span>

                        </label>
                        <input v-model="NewUserPhone" class="form-control" type="text"  required>
                    </div>

                </div>
                <button type="submit"  class="btn_1 green text-white" style="background-color:  #00c424 ; font-size: 16px;cursor:pointer">أنشئ حملة تبرعات</button>
            </form>
        </div>


</template>

<script>
    export default {
        props : {
            'AuthUser' : Object,
            'categories' : Array,
            // in case if the user is redirected from charity page and clicked on a certain project
            'wantedProject' : [Object,null],
            'selectedSection': Number,
        },
        data()
        {
            return{
                projects:[],
                CampaignName : '',
                CampaignBrief: '',
                selectedCategory : null,
                selectedProject:null,
                currentSection : 1,

                CampaignImage: null,

                // in case user isn't auth

                NewUserName:'',
                NewUserEmail:'',
                NewUserPhone:'',
                NewUserPassword:'',
                errors : null,
            }
        },

        computed : {
            IsValidPhone(){
              return (this.NewUserPhone[0] == '0' && this.NewUserPhone[1] == '1');
          },
        },
        // in case if the user is redirected from charity page and clicked on a certain project
        // we should assign the project that the user choose from the charity page to the selected project and move the current section to the third
        mounted() {

            this.selectedProject = this.wantedProject;
            this.currentSection = this.selectedSection;

        },
        methods:
            {

                setChoosenCategory(category)
                {
                    this.selectedCategory = category;
                    this.projects = category.projects;
                    this.currentSection = 2;
                },
                setChoosenProject(project)
                {
                    this.selectedProject = project;
                    this.currentSection = 3;
                },

                onImageChange(e){
                     this.files = e.target.files || e.dataTransfer.files;
                    this.createImage(this.files[0]);//passing the image to be viewed before uploading
                },
                createImage(file)
                {// preview image before uploading
                    var image = new Image;
                    var reader = new FileReader;

                    reader.onload = (e) =>{
                        this.CampaignImage = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                uploadImage()
                {
                    this.$refs["image-ref"].click();
                },
                CreateCampaign()
                {
                    let formData = new FormData();

                    formData.append('name', this.CampaignName);
                    formData.append('description', this.CampaignBrief);
                    formData.append('image', document.querySelector('#imageInput').files[0]);
                    formData.append('project_id', this.selectedProject.id);
                    if(this.AuthUser.id == null)
                    {
                        formData.append('NewUser',true);
                        formData.append('name',this.NewUserName);
                        formData.append('phone',this.NewUserPhone);
                        formData.append('email',this.NewUserEmail);
                        formData.append('password',this.NewUserPassword);
                    }
                    axios.post('/CreateNewCampaign',formData)
                        .then(({data}) => {
                            window.location = route('campaign.show',[data.campaign.id,data.campaign.name])
                        })
                        .catch(e => {
                            console.log(e);
                            this.errors = e.response.data.errors;
                        });
                }
            },

    }

</script>


