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
            </div>
            <div class="row">
                <div v-for="project in projects"  class="col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2 justify-content-center text-center">
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

            <a  @click="currentSection = 1" class="btn btn-lg btn-outline-info btn_1 mt-3 float-right" style="cursor:pointer">
                السابقة
                <i class="fa fa-arrow-right"></i>
            </a>

        </div>

        <div v-else-if="currentSection === 3" id="CampaignDetails" class="container mt-3 text-center">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2 class="header">
                        هدف الحملة
                        <span class="greenText  p-4" style="border-style: dotted">
                                    {{selectedProject.objective}} ج.م
                        </span>

                    </h2>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h2 class="header float-right">
                        أنشاء حملة لصالحـ جمعية
                        <span class="greenText">
                                    {{selectedProject.charity}}
                        </span>
                        <br>
                        <a  @click="currentSection = 2" class="btn btn-lg btn-outline-info btn_1 mt-1 float-right" style="cursor:pointer">
                            السابقة
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </h2>
                </div>


            </div>


            <div id="DeadInfo" class="row form-group mt-5 border">
                <div class="col-md-12 text-center my-4 ">
                    <h5>بيانات المتوفى</h5>
                </div>

                <div class="col-md-4 text-center">
                    <img height = "160px" :src="this.CampaignImage">
                    <br>
                    <input @change="onImageChange" name="CampaignImage" style="display: none" ref="image-ref"  type="file">
                    <br>
                    <button @click="uploadImage" class="btn btn-outline-info btn_1" style="cursor: pointer;">أختر صورة</button>
                </div>

                <div class="col-md-8  mt-2 mb-5 form-group">
                    <label for="DeadName" class="float-right">الاسم</label>
                    <input v-model="CampaignName" id="DeadName" class="form-control" type="text">

                    <label for="campaign_description" class="float-right pt-4">نبذة عنه</label>
                    <textarea v-model="CampaignBrief" class="form-control" id="campaign_description" rows="2" name="campaign_description"></textarea>
                </div>


            </div>

            <div v-if="AuthUser.id" id="CreatorInfo" class="row form-group mt-5 border">
                <div class="col-md-12 text-center my-4 ">
                    <h5>بيانات منشئ الحملة</h5>
                </div>
                <div class="col-md-6">
                    <label for="CreatorNumber" class="float-right">رقم الهاتف</label>
                    <input class="form-control" id="CreatorNumber" type="text">
                </div>
                <div class="col-md-6">
                    <label for="CreatorName" class="float-right">الأسم</label>
                    <input type="text" disabled  :value="this.AuthUser.name" class="form-control" id="CreatorName">
                </div>
            </div>
            <a @click="CreateCampaign" class="btn_1 green text-white" style="background-color:  #00c424 ; font-size: 16px;cursor:pointer">ابدأ حملة تبرع</a>

        </div>


</template>

<script>
    export default {
        props : ['AuthUser'],
        data()
        {
            return{
                categories:[],
                projects:[],
                CampaignName : '',
                CampaignBrief: '',
                selectedCategory : null,
                selectedProject:null,
                currentSection : 1,

                CampaignImage:'http://sadaka/images/users/default.png',
            }
        },

        created() {
            this.fetch('/Categories');
        },
        methods:
            {
                fetch(endpoint){
                    axios.get(endpoint)
                        .then(({data})=>{
                            this.categories.push(...data.data)
                        })

                },
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
                    var files = e.target.files || e.dataTransfer.files;
                    this.createImage(files[0]);//passing the image to be viewed before uploading
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

                    axios.post('/CreateNewCampaign', {
                        'project' : this.selectedProject,
                        'name' : this.CampaignName,
                        'breif': this.CampaignBrief,
                        'image' : this.CampaignImage,
                    })
                        .then(function (response) {
                            console.log(response);
                        })
                }
            },

    }

</script>


